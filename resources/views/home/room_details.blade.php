<!DOCTYPE html>
<html lang="en">
   <head>
         <base href="/public">

@include('home.css')
<style type="text/css">
    label
    {
        display: inline-block;
        width: 200px;
    }
    
    input
    {
        width: 100%;
    }
</style>
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

                <div class="col-md-4">
                    <h1 style="font-size: 40px;">¡Agenda tu estudio!</h1>
                    <div>
                        <label>Nombre</label>
                        <input type="text" name="name">
                    </div>
                    
                    <div>
                        <label>Email</label>
                        <input type="email" name="email">
                    </div>
                    
                    <div>
                        <label>Fecha de inicio:</label>
                        <input type="date" name="startDate" id="startDate">
                    </div>
                    
                    <div>
                        <label>Fecha de finalización:</label>
                        <input type="date" name="endDate" id="endDate">
                    </div>
                    
                    <div style="padding-top: 20px">
                        <input type="submit" class="btn btn-primary" value="Agendar estudio"name="name">
                    </div>

                </div>

            </div>
         </div>
      </div>

      @include('home.footer')
      
      <script type="text/javascript">
        $(function(){
            var dtToday = new Date();
        
            var month = dtToday.getMonth() + 1;

            var day = dtToday.getDate();

            var year = dtToday.getFullYear();

            if(month < 10)
                month = '0' + month.toString();

            if(day < 10)
            day = '0' + day.toString();

            var maxDate = year + '-' + month + '-' + day;
            $('#startDate').attr('min', maxDate);
            $('#endDate').attr('min', maxDate);

        });
      </script>
   </body>
</html>