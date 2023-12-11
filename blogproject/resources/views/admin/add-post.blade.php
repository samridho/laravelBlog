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

    <h3>add post </h3>

</div>   
<div class="add-psot-form">

    <form action="{{route('add_post_fun')}}" method="POST" enctype="multipart/form-data">
       @csrf
       {{-- $catagory --}}
       <div class="form-group">
        <label for="title"> category :</label>
        <select name="catagory_id" >
            @foreach ($catagory as $catagory)
            <option value=" {{$catagory->id}} "> {{$catagory->title}} </option>
                
            @endforeach
        </select>
    </div>
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
            <label for="facade">Facade:</label>
            <input type="checkbox" name="facade" >
        </div>
        <div class="form-group">
            <label for="postImge"> Add imge :</label>
            <input type="file" name="postImge">
        </div>
        <div class="form-group">
            <input type="submit" value="sumbint" class="post-btn">
        </div>

    </form>

</div> 

</main>

@endsection