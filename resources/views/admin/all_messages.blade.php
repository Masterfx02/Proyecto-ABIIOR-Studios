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
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
          <table class="table_deg">
                <tr>
                    <th class="th_deg">Nombre</th>
                    <th class="th_deg">Email</th>
                    <th class="th_deg">Teléfono</th>
                    <th class="th_deg">Mensaje</th>
                
                @foreach($data as $data)
                    <tr>
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->phone}}</td>
                        <td>{{$data->message}}</td>
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