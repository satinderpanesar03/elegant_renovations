<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Contactus;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function contactUs(){
        return view('user.contactus');
    }

    public function store(Request $request){
        $validator = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Contactus::create($request->except('_token'));

        return redirect()->back()->with('success', 'Successfully submitted');
    }
}
