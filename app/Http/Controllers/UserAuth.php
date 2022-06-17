<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\User;
use Illuminate\Http\Request;

class UserAuth extends Controller
{

    // admin auth
    public function adminLogin(Request $request) {

        $user = User::where('user_id', request('user_id'))->where('passkey', request('passkey'))->get();
        $tempId = implode(data_get($user, '*.user_id'));
        $tempType = implode(data_get($user, '*.user_type'));
        
        if($user) {
            if($tempType == 'Administrator') {
                $request->session()->put('user_id', $tempId);
                return redirect('/admin/dashboard');
            } else {
                // add error message later
                return redirect('/admin/login');
            }
        }
        return redirect('/admin/login'); // add error message later
    }

    public function adminLogout() {
        if(session()->has('user_id')) {
            session()->pull('user_id');
        }

        return redirect('/admin/login');
    }

    public function changePassword(Request $request) {
        $newPasskey = request('newPasskey');
        if($newPasskey == request('confirmPasskey')) {
            $verify = User::where('user_id', request('user_id'))->where('passkey', $newPasskey)->get();

            if($verify) {
                User::where('user_id', request('user_id'))->update(['passkey' => $newPasskey]);

                return redirect('/admin/users');
            } else {
                return redirect('/admin/users/edit'); // add error message later (incorrect password)
            }
        } else {
            return redirect('/admin/users/edit'); // add error message later (passwords do not match)
        }
    }

    // mod auth
    public function modLogin(Request $request) {

        $user = User::where('user_id', request('user_id'))->where('passkey', request('passkey'))->get();
        $tempDeptId = implode(data_get($user, '*.department_id'));
        $tempDeptHandler = Department::find($tempDeptId);

        $tempDept = data_get($tempDeptHandler, 'name');
        $tempId = implode(data_get($user, '*.user_id'));
        $tempType = implode(data_get($user, '*.user_type'));
        
        if($user) {
            if($tempType == 'Moderator') {
                $request->session()->put('user_id', $tempId);
                $request->session()->put('department', $tempDept);
                return redirect('/department/dashboard');
            } else {
                // add error message later (Moderators login only)
                return redirect('/department/login');
            }
        }
        return redirect('/department/login'); // add error message later (incorrect password)
    }

    public function modLogout() {
        if(session()->has('user_id') && session()->has('department')) {
            session()->pull('user_id');
            session()->pull('department');
        }

        return redirect('/department/login');
    }
}
