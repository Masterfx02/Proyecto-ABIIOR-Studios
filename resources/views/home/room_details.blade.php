<!DOCTYPE html>
<html lang="en">
   <head>
         <base href="/public">

@include('home.css')
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         @include('home.header')
      </header>

      <div  class="our_room">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Conoce los estudios</h2>
                     <p>Detrás del arte de hacer un álbum</p>
                  </div>
               </div>
            </div>
            <div style="display: flex; justify-content: center;" class="row">
               <div class="col-md-8">
                  <div id="serv_hover"  class="room">
                     <div style="padding:20px" class="room_img">
                        <img style="height:450px; width:710px" src="/room/{{$room->image}}" alt=""/>
                     </div> 
                     <div class="bed_room">
                        <h1>{{$room->room_title}}</h1>
                        <p style="padding:12px">{{$room->description}}</p>
                        <h4>Tipo de sala: {{$room->room_type}}</h4>
                        <h3>Precio: ${{$room->price}}</h3>

                     </div>
                  </div>
               </div>

            </div>
         </div>
      </div>

      @include('home.footer')
   </body>
</html>