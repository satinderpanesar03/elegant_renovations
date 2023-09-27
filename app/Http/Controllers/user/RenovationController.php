<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Design;
use Illuminate\Http\Request;

class RenovationController extends Controller
{
    public function KrCalgary(){
        $heading = '<h2 class="fs-70 fw-700"> <span class="text-white">Reimagine Your Kitchen Space </span><br><span class="text-orange">
       Calgarys Premier  </span></h2>';
        return view('user.renovation', compact('heading'));
    }

    public function KrEdmonton(){
        $heading = '<h2 class="fs-70 fw-700"> <span class="text-white">Kitchen Renovation </span><br><span class="text-orange">
        Experts in Edmonton</span></h2>';
       return view('user.renovation', compact('heading'));
    }

    public function KrVancouver(){
        $heading = '<h2 class="fs-70 fw-700"> <span class="text-white">Vancouver</span><br><span class="text-orange">
         Dream Builder</span></h2>';
       return view('user.renovation', compact('heading'));
    }

    public function kitchenDesign(){
       return view('user.kitchen-desginer');
    }

    public function recentDesignListing($id){
        $designData = Design::with('gallery')->where('id', $id)->first();
        // dd($designData);
        return view('components.user.recent-design-gallery', compact('designData'));
    }
}
