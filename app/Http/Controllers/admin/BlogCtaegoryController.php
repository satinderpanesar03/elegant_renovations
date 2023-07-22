<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCtegory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogCtaegoryController extends Controller
{
    public function index(){
        $blog_category= BlogCtegory::orderBy('id','DESC')->get();
        $Sr = 1;
        return view('admin.blog_category.index', compact('blog_category', 'Sr'));
    }

    public function create(Request $request)
    {
        return view("admin.blog_category.add" );
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|max:255',
        ]);
        $post= new BlogCtegory();
        $post->category  = $request->category;
        $post->slug = Str::slug($request->category);
        $post->save();
        return redirect()->route('admin.blog.category.index')->with('success', 'Category Successfully added');
    }

    public function edit($id)
    {
        $item=BlogCtegory::find($id);
        if($item){
            return view('admin.blog_category.edit',compact('item'));
        }
    }

    public function update(Request $request)
    {
        $item=BlogCtegory::find($request->id);

        if(!$item){
            return response()->json([
                'success'=>false,
                'error'=>'invalid'
            ],404);
        }
        $input =array();
        if($request->category){
            $input["category"]=$request->category;
        }
        $status=BlogCtegory::find($request->id)->update($input);
        if($status){
            return redirect()->route('admin.blog.category.index')->with('success', 'Category Successfully added');
        }

        return view('admin.blog_category.edit',compact('item'));
    }


    public function destroy($id)
    {
        $item=BlogCtegory::find($id);
        if($item){
            $is_delete=$item->delete();
            return response()->json([
                'success'=>true,
                'message'=>'Blog category Deleted Successfully',
                'data'=>$item
            ],200);
        }else {
            return response()->json([
                'success'=>false,
                'message'=>'Unable to delete !',
            ],404);
        }
    }

    public function delete($id){
        $category = BlogCtegory::find($id);

        $category->delete();
        return redirect()->route('admin.blog.category.index')->with('success', 'Category Successfully deleted');

    }

}
