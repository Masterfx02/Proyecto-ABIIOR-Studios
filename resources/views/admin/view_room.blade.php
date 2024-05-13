<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style type="text/css">
        .table_deg
        {
            border: 2px solid white;
            margin: auto;
            width: 100%;
            text-align: center;
            margin-top: 40px;
        }

        .th_deg
        {
            background-color: black;
            padding: 15px;
        }

        .tr
        {
            border: 3px solid white;
        }

    </style>
  </head>
  <body>
    @include('admin.header')
    @include('admin.sidebar')
    <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <table class="table_deg">
                <tr>
                    <th class="th_deg">Nombre de Sala</th>
                    <th class="th_deg">Descripción</th>
                    <th class="th_deg">Precio</th>
                    <th class="th_deg">Tipo de Sala</th>
                    <th class="th_deg">Imagen</th>
                    <th class="th_deg">   </th>
                    <th class="th_deg">   </th>
                    
                    @foreach($data as $data)
                    <tr>
                        <td>{{$data->room_title}}</td>
                        <td>{!! Str::limit($data->description,80) !!}</td>
                        <td>${{$data->price}}</td>
                        <td>{{$data->room_type}}</td>
                        <td>
                            <img width="60" src="room/{{$data->room_title}}">
                        </td>
                        <td>
                            <a onclick="return confirm('¿Deseas eliminar la sala?');" class="btn btn-danger"href="{{url('room_delete', $data->id)}}">Eliminar</a>
                        </td>
                        <td>
                            <a class="btn btn-warning" href="{{url('room_update', $data->id)}}">Modificar</a>
                        </td>
                    </tr>
                    @endforeach
                </tr>
            </table>
</div>
</div>
</div>
    @include('admin.footer')
  </body>
</html>