<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
  </head>
  <body>
    @include('admin.header')
    @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <center>

            <h1 style="font-size: 40px; font-weight: bolder; color:white">Galería</h1>

            <div class="row">
            @foreach($gallery as $gallery)
            <div class="col-md-4">
            <img style="height: 200px!important; width:300px!important" src="/gallery/{{$gallery->image}}">
            <a class="btn btn-danger" href="{{url('delete_gallery', $gallery->id)}}">Eliminar Imagen</a>
            </div>
            @endforeach
            </div>


            <form action="{{url('upload_gallery')}}" method="Post" enctype="multipart/form-data">
                @csrf
                <div style="padding: 30px"> 
                    <label style="color:white; font-weight:bold;">Subir imagen</label>
                    <input type="file" name="image">

                    <input class="btn btn-primary" type="submit" value="Add Image">

                </div>
        
            </form>
            </center>

          </div>
        </div>
    </div>
    @include('admin.footer')
  </body>
</html>