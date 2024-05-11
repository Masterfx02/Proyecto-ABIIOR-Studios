<!DOCTYPE html>
<html>
  <head> 
  <base href="/public">

    @include('admin.css')

    <style type="text/css">
        label
        {
            display: inline-block;
            width: 200px;
        }

        .div_deg
        {
            padding-top: 30px;
        }

        .div_center
        {
            text-align: center;
            padding-top: 40px;
        }

    </style>
  </head>
  <body>
    @include('admin.header')
    @include('admin.sidebar')
      <!-- Sidebar Navigation end-->

    <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
          </div>

          <div class="div_center">
            <h1 style="font-size: 30px; font-weight: bold">Modificar Sala</h1>
            <form action="{{url('edit_room', $data->id)}}" method="Post" enctype="multipart/form-data">
                @csrf 
                <div class="div_deg">
                    <label>Nombre del estudio</label>
                    <input type="text" name="title" value="{{$data->room_title}}">
                </div>
                
                <div class="div_deg">
                    <label>Descripción</label>
                    <textarea name="description">{{$data->description}}"</textarea>
                    
                </div>
                
                <div class="div_deg">
                    <label>Precio</label>
                    <input type="number" name="price" value="{{$data->price}}">
                </div>
                
                <div class="div_deg">
                    <label>Tipo de sala</label>
                    <select name="type">
                        <option selected value="{{$data->room_type}}">{{$data->room_type}}</option>
                        <option value="recording">Grabación</option>
                        <option value="mix">Mezcla</option>
                        <option value="mastering">Mastering</option>
                    </select>
                </div>

                <div class="div_deg">
                    <label>Imagen Actual</label>
                    <img style="margin: auto" width="100" src="/room/{{$data->image}}">
                </div>
                
                <div class="div_deg">
                    <label>Subir Imagen</label>
                    <input type="file" name="image">
                </div>
                
                <div class="div_deg">
                    <input class="btn btn-primary" type="submit" value="Actualizar">
                </div>
            </form>

          </div>
        </div>
        </div>
        </div>
   
@include('admin.footer')
  </body>
</html>