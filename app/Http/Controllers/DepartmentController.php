<?php

namespace App\Http\Controllers;

use App\Models\Appeal;
use App\Models\Log;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function login() {
        if(session()->has('user_id')) {
            return redirect('/department/dashboard');
        }

        return view('department.login');
    }
    
    public function dashboard() {
        if(!session()->has('user_id')) {
            return redirect('/department/login');
        }

        $appeals = Appeal::where([['status', '!=', 'Pending'],['status','!=', 'Cancelled']])->orderBy('updated_at', 'desc')->get();

        return view('department.dashboard', ['appeals' => $appeals]);
    }
    
    public function complaintView($id) {
        if(!session()->has('user_id')) {
            return redirect('/department/login');
        }

        $appeal = Appeal::find($id);

        return view('department.complaint-view')->with('appeal', $appeal);
     }

     public function logMessage(Request $request) {
        $id = request('appeal_id');

         $log = Log::create([
                'appeal_id' => $id,
                'message' => request('message'),
                'logged_by' => request('logged_by')
         ]);

        //  return redirect('/department/view/{{ $id }}');

         return redirect()->action(
            [DepartmentController::class, 'complaintView'], ['id' => $id]
        );
     }
}
