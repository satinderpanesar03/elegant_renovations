<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index(){
        $country_codes = Country::select('phonecode')->get();
        $setting = Setting::first();
        return view('admin.setting', compact('country_codes', 'setting'));
    }

    public function store(Request $request){
        $validator = $request->validate([
            'email' => 'nullable|email',
            'address' => 'nullable',
            'phone_number' => 'nullable',
            'country_code' => 'nullable',
            'support_email' => 'nullable'
        ]);

        $setting = Setting::find($request->id);

        $setting->update([
            'address' => $request->address,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'country_code' => $request->country_code,
            'support_email' => $request->support_email,
            'instagram' => $request->instagram,
            'facebook' => $request->facebook,
            'linkedin' => $request->linkedin,
            'twitter' => $request->twitter,
            'youtube' => $request->youtube,
            'pinterest' => $request->pinterest,
        ]);

        return redirect()->back()->with('success', 'Settings successfully updated');
    }
}
