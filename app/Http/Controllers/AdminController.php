<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appeal;
use App\Models\Complaint;
use App\Models\Department;
use App\Models\News;
use App\Models\User;

class AdminController extends Controller
{
    public function login() {
        if(session()->has('user_id')) {
            return redirect('/admin/dashboard');
        }

        return view('admin.login');
    }

    public function dashboard() {
        if(!session()->has('user_id')) {
            return redirect('/admin/login');
        }

        $total = Appeal::where('status', 'Pending')->get();
        $totalApproved = Appeal::where([['status', '!=', 'Pending'],['status','!=', 'Cancelled']])->get();
        $totalOnGoing = Appeal::where('status', 'On Going')->get();
        $totalCompleted = Appeal::where('status', 'Completed')->get();

        $previews = Appeal::where('status', 'Pending')->orderBy('created_at', 'desc')->take(6)->get();

        $bplo = Complaint::where('department_id', 1)->count();
        $cho = Complaint::where('department_id', 2)->count();
        $cpdo = Complaint::where('department_id', 3)->count();
        $cswdo = Complaint::where('department_id', 4)->count();
        $hrmd = Complaint::where('department_id', 5)->count();
        $occr = Complaint::where('department_id', 6)->count();
        $oce = Complaint::where('department_id', 7)->count();
        $ocm = Complaint::where('department_id', 8)->count();
        $pd = Complaint::where('department_id', 9)->count();
        $upao = Complaint::where('department_id', 10)->count();

        $mostNumComp = [$bplo, $cho, $cpdo, $cswdo, $hrmd, $occr, $oce, $ocm, $pd, $upao];

        return view('admin.dashboard')->with('total', $total)->with('totalApproved', $totalApproved)
            ->with('totalOnGoing', $totalOnGoing)->with('totalCompleted', $totalCompleted)
            ->with('previews', $previews)->with('mostNumComp', $mostNumComp);
    }

    public function complaintReqs() {
        if(!session()->has('user_id')) {
            return redirect('/admin/login');
        }

        $appeals = Appeal::where('status', 'Pending')->orderBy('created_at', 'desc')->get();

        return view('admin.complaint-reqs', ['appeals' => $appeals]);
    }

    public function viewRequests($id) {
        if(!session()->has('user_id')) {
            return redirect('/admin/login');
        }

        $appeal = Appeal::find($id);

        return view('admin.view-requests')->with('appeal', $appeal);
    }

    public function approvedComplaints() {
        if(!session()->has('user_id')) {
            return redirect('/admin/login');
        }
        
        $appeals = Appeal::where([['status', '!=', 'Pending'],['status','!=', 'Cancelled']])->orderBy('updated_at', 'desc')->get();
        
        return view('admin.approved-complaints', ['appeals' => $appeals]);
    }

    public function viewApproved($id) {
        if(!session()->has('user_id')) {
            return redirect('/admin/login');
        }

        $appeal = Appeal::find($id);

        return view('admin.view-approved')->with('appeal', $appeal);
    }

    public function newsAccess() {
        if(!session()->has('user_id')) {
            return redirect('/admin/login');
        }

        $news = News::all();

        return view('admin.news-access', ['news' => $news]);
    }

    public function viewArticle($id) {
        if(!session()->has('user_id')) {
            return redirect('/admin/login');
        }

        $news = News::find($id);

        return view('admin.view-article')->with('news', $news);
    }

    public function postNews() {
        if(!session()->has('user_id')) {
            return redirect('/admin/login');
        }

        return view('admin.post-news');
    }

    public function adminUsers() {
        if(!session()->has('user_id')) {
            return redirect('/admin/login');
        }

        $users = User::all();

        return view('admin.admin-users', ['users' => $users]);
    }

    public function editUser($id) {
        if(!session()->has('user_id')) {
            return redirect('/admin/login');
        }
        $user = User::find($id);

        return view('admin.edit-user')->with('user', $user);
    }

    public function addUser() {
        if(!session()->has('user_id')) {
            return redirect('/admin/login');
        }
        
        return view('admin.add-user');
    }

    //Complaint Request Page
    public function approve($id) {
        $appeal = Appeal::where('id', $id)
            ->update([
                'status' => 'On Going'
            ]);

        return redirect('/admin/approved');
    }

    public function reject($id) {
        $appeal = Appeal::where('id', $id)
            ->update([
                'status' => 'Cancelled'
            ]);

        return redirect('/admin/requests');
    }

    //News Article
    public function postArticle(Request $request) {
        $request->validate([
            'image' => 'required|mimes:jpg,jpeg,png|max:5048'
        ]);

        $newImageName = time() . '-' . $request->image->getClientOriginalName();

        $request->image->move(public_path('uploads'), $newImageName);

        $news = News::create([
            'title' => request('title'),
            'content' => request('content'),
            'image' => $newImageName
        ]);

        return redirect('/admin/news');
    }

    public function deleteArticle($id) {
        $news = News::find($id);
        $news->delete();

        return redirect('/admin/news');
    }

    // Admin User
    public function saveUser(Request $request) {
        $user = User::create([
            'user_id' => request('user_id'),
            'passkey' => request('passkey'),
            'user_type' => request('user_type'),
            'department_id' => request('department_id')
        ]);

        return redirect('/admin/users');
    }
}

