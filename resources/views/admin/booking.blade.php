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
            padding: 10px;
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
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

          <table class="table_deg">
                <tr>
                    <th class="th_deg">ID Estudio</th>
                    <th class="th_deg">Nombre del cliente</th>
                    <th class="th_deg">Email</th>
                    <th class="th_deg">Fecha Inicio</th>
                    <th class="th_deg">Fecha Final</th>
                    <th class="th_deg">Sala</th>
                    <th class="th_deg">Precio</th>
                    <th class="th_deg">Status</th>
                    <th class="th_deg"></th>
                    <th class="th_deg">Actualizar Status</th>
                
                @foreach($data as $data)
                    <tr>
                        <td>{{$data->room_id}}</td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->start_date}}</td>
                        <td>{{$data->end_date}}</td>
                        <td>{{$data->room->room_title}}</td>
                        <td>{{$data->room->price}}</td>
                        <td>
                            @if($data->status == 'Aprobado')
                            <span style="color: skyblue";>Aprobado</span>
                            @endif
                            
                            @if($data->status == 'Rechazado')
                            <span style="color: red";>Rechazado</span>
                            @endif
                            
                            @if($data->status == 'waiting')
                            <span style="color: yellow";>En espera</span>
                            @endif
                        </td>
                        <td>
                            <a onclick="return confirm('¿Deseas eliminar la cita?')"; class="btn btn-danger" href="{{url('delete_booking', $data->id)}}">Eliminar</a>
                        </td>
                        <td>
                            <span style="padding-bottom:10px">
                                <a class="btn btn-success" href="{{url('approve_book', $data->id)}}">Aprobar</a>
                            </span>
                            <a class="btn btn-warning" href="{{url('reject_book', $data->id)}}">Rechazar</a>
                        </td>
                    </tr>
                    
                </tr>
                @endforeach
            </table>
          </div>
        </div>
      </div>
    @include('admin.footer')
  </body>
</html>