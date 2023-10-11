<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contactus;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(Request $request){

        $users = User::Search($request)->orderBy('created_at','DESC')->paginate(4);
        $users_count=User::count();
        $products_count=Product::count();
        $records=Contactus::select('id','name','email','phone','message','status','updated_at','created_at')->orderBy('id','desc')->take(3)->get();
        $Sr=1;
        $contactUsCount = Contactus::count();
        return view('admin.dashboard',compact('users','users_count','products_count','records','Sr','contactUsCount'));
    }
}
