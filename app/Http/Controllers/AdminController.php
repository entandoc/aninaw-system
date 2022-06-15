<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login() {
        return view('admin.login');
    }

    public function dashboard() {
        return view('admin.dashboard');
    }

    public function complaintReqs() {
        return view('admin.complaint-reqs');
    }

    public function viewRequests() {
        return view('admin.view-requests');
    }

    public function approvedComplaints() {
        return view('admin.approved-complaints');
    }

    public function viewApproved() {
        return view('admin.view-approved');
    }

    public function newsAccess() {
        return view('admin.news-access');
    }

    public function viewArticle() {
        return view('admin.view-article');
    }

    public function postNews() {
        return view('admin.post-news');
    }

    public function adminUsers() {
        return view('admin.admin-users');
    }

    public function editUser() {
        return view('admin.edit-user');
    }

    public function addUser() {
        return view('admin.add-user');
    }

}
