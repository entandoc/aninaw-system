<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;
use App\Models\Complaint;
use App\Models\Complainant;
use App\Models\Appeal;
use App\Models\News;
use Illuminate\Support\Str;

class ComplaintController extends Controller
{
    public function home() {
        return view('user.home');
    }

    public function showApproved() {
        $appeals = Appeal::where([['status', '!=', 'Pending'],['status','!=', 'Cancelled']])->orderBy('created_at', 'desc')->get();
        
        return view('user.approved', ['appeals' => $appeals]);
    }

    public function index() {
        $news = News::all();

        return view('user.index', ['news' => $news]);
    }

    public function show($id) {

        //Pull data from the Database
        $news = News::find($id);

        return view('user.show')->with('news', $news);
    }

    public function create() {

        $flag = Str::random(10).time();
        return view('user.create', ['flag' => $flag]);
    }

    public function showAbout() {
        return view('user.about');
    }

    public function store(Request $request) {

        $request->validate([
            'image' => 'required|mimes:jpg,jpeg,png|max:5048'
        ]);

        $newImageName = time() . '-' . $request->image->getClientOriginalName();

        $request->image->move(public_path('uploads'), $newImageName);

        $tempFlag = request('flag');

        $appeal = Appeal::create([
            'flag' => $tempFlag
        ]);

        $tempId = Appeal::where('flag', $tempFlag)->first()->id;

        $complainant = Complainant::create([
            'appeal_id' => $tempId,
            'name' => request('name'),
            'email' => request('email'),
            'phone_number' => request('phone_number'),
            'is_anonymous' => request('is_anonymous')
        ]);

        $address = Address::create([
            'appeal_id' => $tempId,
            'home_address' => request('home_address'),
            'barangay' => request('barangay'),
            'landmark' => request('landmark')
        ]);
        
        $complaint = Complaint::create([
            'appeal_id' => $tempId,
            'department_id' => request('department_id'),
            'subject' => request('subject'),
            'description' => request('description'),
            'image' => $newImageName
        ]);

        //dd($complaint);

        //$complaint->save();

        return view('user.success-message')->with('referenceId', $tempFlag);
    }

    public function telephoneDirectory() {
        return view('user.telephone-directory');
    }

    public function successMessage() {
        return view('user.success-message');
    }

    public function faqs() {
        return view('user.faqs');
    }

    public function operationalHours() {
        return view('user.operational-hours');
     }

     public function terms() {
        return view('user.terms');
    }

    public function aboutAninaw() {
        return view('user.about-aninaw');
    }

    public function aboutLpc() {
        return view('user.about-lpc');
    }

    // public function track() {
       
    
    // }

    public function search() {
        $appeal = Appeal::where('flag', request('search'))->first();

        //return redirect('/complaint/track')->with('appeal', $appeal);
        return view('user.track')->with('appeal', $appeal);
    }
}
