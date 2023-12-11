<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog admin pnel </title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />


  
  <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
   <div class="container">
      <aside>
           
         <div class="top">
           <div class="logo">
             <h2>Blog <span class="danger">ADMIN</span> </h2>
           </div>
           <div class="close" id="close_btn">
            <span class="material-symbols-sharp">
              close
              </span>
           </div>
         </div>
         <!-- end top -->
          <div class="sidebar">

            <a href="#" class=" nav-link ">
              <span class="material-symbols-sharp">grid_view </span>
              <h3>Dashbord</h3>
           </a>
           <a href="{{route('all-post')}}" class=" nav-link">
            <span class="material-symbols-outlined">post</span>
              <h3>all post</h3>
           </a>
           <a href="{{route('add-post')}}" class=" nav-link">
            <span class="material-symbols-outlined">
              post_add
              </span>
              <h3>add post </h3>
           </a>
           <a href="#" class=" nav-link">
              <span class="material-symbols-sharp">mail_outline </span>
              <h3>Messages</h3>
              <span class="msg_count">14</span>
           </a>
           <a href="{{route('all_catagory')}}" class=" nav-link">
            <span class="material-symbols-outlined">
              format_list_numbered_rtl
              </span>
              <h3>all category</h3>
           </a>
           <a href="{{route('add_catagory')}}" class=" nav-link">
            <span class="material-symbols-outlined">
              playlist_add
              </span>
              <h3>add category</h3>
           </a>
           <a href="#" class=" nav-link">
            <span class="material-symbols-outlined">
              group
              </span>
              <h3>all team members</h3>
           </a>
           <a href="#" class=" nav-link">
            <span class="material-symbols-outlined">
              group_add
              </span>
              <h3>add team members</h3>
           </a>
           <a href="#">
              <form method="POST" action="{{ route('logout') }}" >
                @csrf
      
                <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-responsive-nav-link>
              </form>
              
           </a>
             


          </div>

      </aside>