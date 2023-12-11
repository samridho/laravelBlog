<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Post;

class AllpostController extends Controller
{
    public function index() {
        $post=Post::all();

        return view('admin.all-post', compact('post'));
    }
    public function delete_post_fun($id){
        $post=Post::find($id);
        $destination='postimage/'.$post->image;
        if (File::exists($destination)) {
           File::delete($destination);
        }

        $post->delete();
        
        return redirect()->back()->with('message',"post delete successfull");


    }
    public function edit_post_fun($id){

        $post=Post::find($id);

        
       return view('admin.updatePost', compact('post'));


    }
    public function update_post_fun(request $request, $id){
        $post=Post::find($id);

        $post->title=$request->title;
        $post->sulg=$request->sulg;

        $post->description=$request->description;
        $post->facade=$request->facade == true ? '1':'0';


        $image=$request->image;

        $destination='postimage/'.$post->image;
       
        if($image){
            if (File::exists($destination)) {
                File::delete($destination);
             }
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('postImage', $imagename);
            $post->image=$imagename;

        }


        $post->save();

        return redirect()->back()->with('message',"post update successfull");;


    }

}
