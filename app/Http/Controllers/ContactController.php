<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        $title = "Contact - Tarek's Blog";
        return view('contact',compact('title'));
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        Mail::to($data['email'])->send(new Contact($data));
        
        return redirect(route('contact.index'))->with('status', "Thank you, we'll be in touch soon");
    }
}
