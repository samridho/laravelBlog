<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- custom extranal css -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>


        <!-- navbar starte  -->


    <nav>
      <div class="nav_contenr row">
        <div class="logo_contenr col-md-2">
          <img class="logo" src="./img/Logo.png" alt="logo" srcset="">
        </div>
        <div class="nav_item col-md-5">
          <ul> 
            <li><a href="{{url('/')}}">home</a></li>
            <li class="nas_nav"><a href="{{route('blogpage')}}">blog</a>
              <div class="nas_nav_hover">
                <ul>
                  <li><a href="{{route('blogpage')}}">all post</a></li>
                  @php
                  $catagory=App\Models\Category::where('navbar_status','1')->get();
                      
                  @endphp
                  @foreach ($catagory as $item)
                  <li><a href="{{$item->sulg}}"> {{$item->title}} </a></li>

                      
                  @endforeach
                  {{-- <li><a href="{{route('blogpage')}}">facbook marktting tips</a></li>
                  <li><a href="{{route('blogpage')}}">product research tips</a></li>
                  <li><a href="{{route('blogpage')}}">online success tips</a></li>
                  <li><a href="{{route('blogpage')}}">success story</a></li> --}}
                </ul>
              </div>
            </li>
            @if (Route::has('login'))
            @auth
            {{-- <x-app-layout>
            </x-app-layout> --}}
            <li>
              <form method="POST" action="{{ route('logout') }}"style="width=0">
                @csrf
      
                <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-responsive-nav-link>
              </form>
            </li>
            @if (Route::has('admin'))
            <li><a href="{{route('contact')}}">desbord</a></li>
                
            @endif
            <li><a href="{{route('contact')}}">contact us</a></li>




              @else
               <li><a href="{{route('login')}}">login</a></li>
               <li><a href="{{ route('register') }}">register</a></li>
            @endauth
            @endif

          </ul>
        </div>
        <div class="search_item col-md-4">
          <input type="text" class="search_box" placeholder="search what you want">
          <input type="submit" class="btn_custom" value="search">
        </div>
      </div>
    </nav> 

    <div class="m_top"></div>


        <!-- navbar end  -->