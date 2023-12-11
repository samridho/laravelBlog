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
    <div class="all-post-table">
        <table>
            <tr>
                <th>Id</th>
                <th>title</th>
                <th>facade</th>
                <th>category name</th>
                <th>image</th>

                <th class="last-2">edit</th>
                <th class="last-2">delete</th>
            </tr>
            @foreach ($post as $post)
                

            <tr>
                <td> {{$post->id}} </td>
                <td>{{$post->title}}</td>
                <td>
                    @if (($post->facade)==1)
                    {{'show'}}
                        
                    @else
                    {{'hide'}}
                        
                    @endif
                </td>
                <td> {{$post->catagory_name}} </td>
                <td><img src="postimage/{{$post->image}}" alt="image"></td>
                <td><a href="{{route('edit-post-fun',$post->id)}}"class="btn btn-pri">edit</a></td>
                <td><a href="{{route('delete-post-fun',$post->id)}}"class="btn btn-den" > delate</a></td>
            </tr>
            @endforeach
        </table>
    </div>
</main>
    
@endsection