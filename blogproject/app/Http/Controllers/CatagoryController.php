<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CatagoryController extends Controller
{
    public function add_catagory(){
        return view('admin.add_catagory');
    }

    

    public function add_catagory_fun( Request $request){
        $user=Auth()->user();
        $user_name=$user->name;

        $catagory=new Category;
        $catagory->title=$request->title;
        $catagory->sulg=$request->sulg;
        $catagory->description=$request->description;
        $catagory->navbar_status=$request->navbar_status == true ? '1':'0';

        $catagory->created_by=$user_name;



        $catagory->save();
        return redirect()->back()->with('message',"post add successfull");
    }


    public function all_catagory(){
        $catagory=Category::all();

        return view('admin.all_catagory',compact('catagory'));
    }

    // edit_catagory_fun

    public function edit_catagory_fun($id){

        $catagory=Category::find($id);

        
       return view('admin.updateCatagory', compact('catagory'));


    }



    // update_catagory_fun


    public function update_catagory_fun(request $request, $id){
        $catagory=Category::find($id);

        $catagory->title=$request->title;
        $catagory->sulg=$request->sulg;
        $catagory->description=$request->description;
        $catagory->navbar_status=$request->navbar_status == true ? '1':'0';


       
       
      

        $catagory->save();

        return redirect()->back()->with('message',"post update successfull");;


    }

    

    public function delete_catagory_fun($id){
        $catagory=Category::find($id);
        $catagory->delete();
        
        return redirect()->back()->with('message',"post delete successfull");


    }

}
