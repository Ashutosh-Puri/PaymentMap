<?php

namespace App\Http\Controllers;
use App\Models\Country;
use App\Models\Store;
use App\Models\Contact;
use App\Models\Subscribe;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

    public function view(Store $store)
    {   
        $country = Country::where('id',$store->country_id)->get();
        return view('view',compact('store','country'));
    }

    public function services()
    {
        return view('services');
    }
    public function aboutus()
    {
        return view('aboutus');
    }
    public function contactus()
    {
        return view('contactus');
    }
    public function contact(Request $request,Contact $contact)
    {
        $Data= $request->validate([
            'email'=>['required','email'],
            'name'=>['required','string'],
            'phone'=>['required','numeric'],
            'subject'=>['required','string'],
            'message'=>['required','string'],
        ]);
        $contact->email =$Data['email'];
        $contact->name =$Data['name'];
        $contact->phone =$Data['phone'];
        $contact->subject =$Data['subject'];
        $contact->message =$Data['message'];
        $contact->save();
        return redirect()->back()->with('s-status','We Will Contact You Very Soon.');
    }
    public function features()
    {
        return view('features');
    }
    public function projects()
    {
        return view(' projects');
    }
    public function team()
    {
        return view('team');
    }
    public function subscribe(Request $request,Subscribe $subscribe)
    {
        $Data= $request->validate([
            'email'=>['required','email'],
        ]);
        $subscribe->email =$Data['email'];
        $subscribe->save();
        return redirect()->back()->with('s-status','Welcome To Our Newsletter');
    }
    public function unsub()
    {

        return view('unsubscribe');
    }
    public function unsubscribe(Request $request,Subscribe $subscribe)
    {
        $Data= $request->validate([
            'email'=>['required','email'],
        ]);
        $subscribe->where('email',$Data['email'])->delete();
        return redirect()->back()->with('s-status','Unsubscribed Successfully.');
    }

}
