<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function dashboard() {
        return view('department.dashboard');
    }

    public function complaintView() {
        return view('department.complaint-view');
    }
}
