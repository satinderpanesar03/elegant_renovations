<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Traits\ImageUploadTrait;
use Illuminate\Support\Facades\Validator;

class GalleryController extends Controller
{
    public function index(){
        $galleries = Gallery::groupBy('type')->get();
        $Sr = 1;
        return view('admin.gallery.index', compact('galleries', 'Sr'));
    }

    public function create(){
        return view('admin.gallery.create');
    }

    public function store(Request $request){
        // dd($request->file('images'));    
        $validator = Validator::make($request->all(), [
            'type' => 'required',
            'image' => 'required',
        ]);
        foreach($request->file('images') as $image){
            $record= new Gallery();
            // dd($image);
            $md5Name = md5_file($image->getRealPath());
            $guessExtension = $image->guessExtension();
            $img=$md5Name.round(microtime(true) * 1000).".".$guessExtension;

            $image_path = $image->store('image', 'public');

            $record->type=$request->type;
            $record->image=$image_path;
            $record->save();
        }
        return redirect()->route('admin.gallery.index');
    }

    public function show($id){
        $data = Gallery::find($id);
        return view('admin.gallery.edit', compact('data'));
    }

    public function update(Request $request){
        $testimonial = Gallery::find($request->id);
        $testimonial->update([
            'name' => $request->name,
            'text' => $request->text,
        ]);
        return redirect()->back();
    }

    public function delete($id){
        $testimonial = Gallery::find($id);
        $testimonial->delete();

        return redirect()->route('admin.gallery.index');
    }



}
