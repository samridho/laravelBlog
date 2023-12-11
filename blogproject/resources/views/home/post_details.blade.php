@extends('home.layout.userlayout')
@section('main')
    <div class="post-title">
        <h1> {{$post->title}} </h1>
    </div>
    <div class="post-info">
        <p>Post by- {{$post->name}} </p>
        <p>catagory- {{$post->name}} </p>
    </div>
    <div class="post-imag">
        <img src="/postimage/{{$post->image}}" alt="">
    </div>
    <div class="post-description">

            {!!$post->description!!}
    </div>
@endsection

