<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class contactController extends Controller
{
    public function index() {

        return view('contact');

    }
    public function store_info(Request $request)
    {
        $request->validate([
            'name'=>'required|min:4|max:240',
            'phone'=>'required|regex:/^\+?\d{10,11}$/',
            'email'=>'required|email',
            'message' => 'required'
        ]);

        $data = new Contact;

        $data->Customer_id = $request->Customer_id;  
        $data->name = $request->name;  
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->message = $request->message;  
    
        $data->save();

        return redirect()->back()->with('message', 'Your message has been successfully sent...');

    }
}
