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
    <div class="all-post-table all-catagory-table">
        <table>
            <tr>
                <th>Id</th>
                <th>title</th>
                <th>navbar status</th>
                <th>description</th>
                <th class="last-2">edit</th>
                <th class="last-2">delete</th>
            </tr>
            @foreach ( $catagory as  $catagory)
                

            <tr>
                <td> {{ $catagory->id}} </td>
                <td>{{ $catagory->title}}</td>
                <td>
                    @if (($catagory->navbar_status)==1)
                     {{'show'}}
                        
                    @else
                    {{'hide'}}
                        
                    @endif
                </td>
                <td>{{ $catagory->description}}</td>
                <td><a href="{{route('edit-catagory-fun', $catagory->id)}}"class="btn btn-pri">edit</a></td>
                <td><a href="{{route('delete-catagory-fun', $catagory->id)}}"class="btn btn-den" > delate</a></td>
            </tr>
            @endforeach
        </table>
    </div>
</main>
    
@endsection