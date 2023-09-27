<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Design;
use App\Models\PageType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DesignController extends Controller
{

    public function index(){
        $Sr = 1;
        $designs = Design::get();
        return view('admin.designs.index', compact('Sr','designs'));
    }

    public function create(){
        $pageTypes = PageType::get();
        return view('admin.designs.create', compact('pageTypes'));
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'url' => 'nullable',
            'meta_title' => 'nullable',
            'meta_description' => 'nullable',
            'mata_keyword' => 'nullable',
            'meta_schema' => 'nullable',
            'image' => 'nullable',
        ]);

            $md5Name = md5_file($request->file('image')->getRealPath());
            $guessExtension = $request->file('image')->guessExtension();
            $img=$md5Name.round(microtime(true) * 1000).".".$guessExtension;

            $image_path = $request->file('image')->store('image', 'public');

            $data = $request->except('_token');
            $data['image'] = $image_path;

            Design::create($data);

            return redirect()->route('admin.design.index');
    }

    public function show($id){
        $design = Design::find($id);
        return view('admin.designs.edit', compact('design'));
    }

    public function update(Request $request){
        $design = Design::find($request->id);

        if(($request->file('image'))){
            $md5Name = md5_file($request->file('image')->getRealPath());
            $guessExtension = $request->file('image')->guessExtension();
            $img=$md5Name.round(microtime(true) * 1000).".".$guessExtension;

            $image_path = $request->file('image')->store('image', 'public');
            $image = $image_path;
        }else{
            $image = $request->selected_image;
        }


        $design->update([
            'title' => $request->title,
            'url' => $request->url,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'mata_keyword' => $request->mata_keyword,
            'meta_schema' => $request->meta_schema,
            'image' => $image,
        ]);

        return redirect()->route('admin.design.index');
    }

    public function delete($id){
        $design = Design::find($id);
        $design->delete();

        return redirect()->route('admin.design.index');
    }


}
