<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function flooring(){
        return view('user.flooring-installtion');
    }

    public function buildingServices(){
        return view('user.building_services');
    }

    public function basementRenovation(){
        return view('user.basement_renovation');
    }
}
