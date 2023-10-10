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
        // Build the URL with the query parameter and fragment
        $url = url()->previous() . '?#inquiry-form';

        return redirect($url)->with('success', 'Message submitted successfully , we will contact you soon.');
    }
}
