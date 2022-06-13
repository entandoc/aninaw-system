<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;

class ComplaintController extends Controller
{
    public function home() {
        return view('user.home');
    }

    public function showApproved() {
        return view('user.approved');
    }

    public function index() {
        return view('user.index');
    }

    public function show() {
        return view('user.show');
    }

    public function create() {
        return view('user.create');
    }

    public function showAbout() {
        return view('user.about');
    }

    public function store() {
        
        $complaint = new Complaint();

        $complaint->email = request('email');
        $complaint->name = request('name');
        $complaint->barangay = request('barangay');
        $complaint->address = request('address');
        $complaint->landmark = request('landmark');
        $complaint->phone_number = request('phone_number');
        $complaint->department = request('department');
        $complaint->subject = request('subject');
        $complaint->description = request('description');
        $complaint->image = request('image');
        $complaint->is_anonymous = request('is_anonymous');

        $complaint->save();

        return redirect('/');
    }

    public function telephoneDirectory() {
        return view('user.telephone-directory');
    }

    public function successMessage() {
        return view('user.success-message');
    }
}
