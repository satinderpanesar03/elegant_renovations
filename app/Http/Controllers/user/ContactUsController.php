<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function contactUs(){
        return view('user.contactus');
    }
}
