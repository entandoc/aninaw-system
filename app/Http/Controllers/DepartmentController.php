<?php

namespace App\Http\Controllers;

use App\Models\Appeal;
use App\Models\Complaint;
use App\Models\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $appeals = DB::table('appeals')
                ->join('complaints', 'appeals.id', 'complaints.appeal_id')
                ->join('complainants', 'appeals.id', 'complainants.appeal_id')
                ->join('addresses', 'appeals.id', 'addresses.appeal_id')
                ->select('*')
                ->where('complaints.department_id', session('department_id'))
                ->where('appeals.status', '=', 'On Going')
                ->orderBy('appeals.updated_at', 'desc')
                ->get();
        // dd($appeals);

        // $appeals = Appeal::where([['status', '!=', 'Pending'],['status','!=', 'Cancelled']])->orderBy('updated_at', 'desc')->get();

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
        $status = request('status');
        $message = request('message');

        if($message != '' && $status == '') {
            $log = Log::create([
                'appeal_id' => $id,
                'message' => $message,
                'logged_by' => request('logged_by')
            ]);
        }

        if($status == 'Completed' && $message == '') {
            $appeal = Appeal::find($id);
            $appeal->status = $status;
            $appeal->save();

            $log = Log::create([
                'appeal_id' => $id,
                'message' => 'The complaint you have submitted has been resolved',
                'logged_by' => request('logged_by')
            ]);

        } elseif($status == '' && $message == '') {
            return redirect()->action(
                [DepartmentController::class, 'complaintView'], ['id' => $id]
            );
        }
         
        //  return redirect('/department/view/{{ $id }}');

        return redirect()->action(
            [DepartmentController::class, 'complaintView'], ['id' => $id]
        );
     }
}
