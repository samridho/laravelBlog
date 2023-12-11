@extends('admin.layout.adminlayout')
@section('main')

<main> 


    <div class="hading">
        @if (session()->has('message'))
            <div class="alert masg">
                {{session()->get('message')}}
                <button onClick="window.location.reload();" class="btn-close">close</button>
            </div>
            
        @endif
    
        <h3>add category </h3>
    
    </div>   
    <div class="add-psot-form">
    
        <form action="{{route('add_catagory_fun')}}" method="POST" enctype="multipart/form-data">
           @csrf
           
            <div class="form-group">
                <label for="title"> Title :</label>
                <input type="text" name="title" id="title" placeholder="Enter the post title">
            </div>
            <div class="form-group">
                <label for="sulg"> slug :</label>
                <input type="text" name="sulg" id="slug" placeholder="Enter the post slug">
            </div>
            <div class="form-group">
                <label for="description"> Description :</label>
                <textarea name="description" id="post-description" ></textarea>
            </div>
            <div class="form-group">
                <label for="navbar_status"> Navbar Status :</label>
                <input type="checkbox" name="navbar_status" >
            </div>
        
            <div class="form-group">
                <input type="submit" value="sumbint" class="post-btn">
            </div>
    
        
    
    </div> 
    
</main>
    
@endsection