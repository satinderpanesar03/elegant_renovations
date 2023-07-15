<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RenovationController extends Controller
{
    public function KrCalgary(){
        $heading = '<h2 class="fs-70 fw-700"> <span class="text-white">Kitchen Renovation </span><br><span class="text-orange">
        Experts in Calgary</span></h2>';
        return view('user.renovation', compact('heading'));
    }

    public function KrEdmonton(){
        $heading = '<h2 class="fs-70 fw-700"> <span class="text-white">Kitchen Renovation </span><br><span class="text-orange">
        Experts in Edmonton</span></h2>';
       return view('user.renovation', compact('heading'));
    }

    public function KrVancouver(){
        $heading = '<h2 class="fs-70 fw-700"> <span class="text-white">Kitchen Renovation </span><br><span class="text-orange">
        Experts in Vancouver</span></h2>';
       return view('user.renovation', compact('heading'));
    }

    public function kitchenDesign(){
       return view('user.kitchen-desginer');
    }
}
