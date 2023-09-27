<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TestimonialController extends Controller
{
    public function index(){
        $testimonials = Testimonial::get();
        $Sr = 1;
        return view('admin.testimonial.testimonial', compact('testimonials', 'Sr'));
    }

    public function create(){
        return view('admin.testimonial.create');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'text' => 'required'
        ]);
        $testimonial = Testimonial::create($request->except('_token'));
        return redirect()->route('admin.testimonial.index');
    }

    public function show($id){
        $data = Testimonial::find($id);
        return view('admin.testimonial.edit', compact('data'));
    }

    public function update(Request $request){
        $testimonial = Testimonial::find($request->id);
        $testimonial->update([
            'name' => $request->name,
            'text' => $request->text,
        ]);
        return redirect()->back();
    }

    public function delete($id){
        $testimonial = Testimonial::find($id);
        $testimonial->delete();

        return redirect()->route('admin.testimonial.index');
    }

}
