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

    <form action="{{route('update_post_fun',$post->id)}}" method="POST" enctype="multipart/form-data">
       @csrf
       
        <div class="form-group">
            <label for="title"> Title :</label>
            <input type="text" name="title" id="title" placeholder="Enter the post title" value="{{$post->title}}">
        </div>
        <div class="form-group">
            <label for="sulg"> slug :</label>
            <input type="text" name="sulg" id="slug" placeholder="Enter the post slug" value="{{$post->sulg}}">
        </div>
        <div class="form-group">
            <label for="description"> Description :</label>
            <textarea name="description" id="post-description"  >
                {{$post->description}}
            </textarea>
        </div>
        <div class="form-group">
            <label for="facade">Facade:</label>
            <input type="checkbox" name="facade" >
        </div>
        <div class="form-group">
            <label for="postImge"> old  imge :</label>
            <img src="/postimage/{{$post->image}}" alt="">
        </div>
        <div class="form-group">
            <label for="image"> Update  imge :</label>
            <input type="file" name="image">
        </div>
        <div class="form-group">
            <input type="submit" value="sumbint" class="post-btn">
        </div>

    </form>

</div> 

</main>

@endsection