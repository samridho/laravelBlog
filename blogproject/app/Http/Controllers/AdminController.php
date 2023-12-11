<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index() {
        $catagory=Category::get();
        return view('admin.add-post',compact('catagory'));
    }
    public function add_post_fun(Request $request){
        $user=Auth()->user();
        $user_id=$user->id;
        $user_name=$user->name;
        $user_type=$user->usertype;

        // catagory_id
    
        $post=new Post;
        $post->title=$request->title;
        $post->sulg=$request->sulg;
        $post->description=$request->description;
        $post->facade=$request->facade == true ? '1':'0';
        $post->name=$user_name;
        $post->user_id=$user_id;
        $post->usertype=$user_type;
        $post->catagory_id=$request->catagory_id;
        $post->catagory_name=$post->catagory->title;

        $post->post_status='active';




        $image=$request->postImge;
        if($image){
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->postImge->move('postImage', $imagename);
            $post->image=$imagename;

        }
    
        $post->save();
        return redirect()->back()->with('message',"post add successfull");

    }
}
