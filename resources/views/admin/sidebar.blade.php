<div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="admin/img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">Yeshua Espinoza</h1>
            <p>Administrador</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
                <li class="active"><a href="index.html"> <i class="icon-home"></i>Home </a></li>
                
                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Salas de Estudio</a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="{{url('create_room')}}">Agregar salas</a></li>
                    <li><a href="{{url('view_room')}}">Ver salas</a></li>
                  </ul>
                </li>
                
                <li>
                  <a href="{{url('bookings')}}"> <i class="icon-home"></i>Reservaciones</a>
                </li>
               
                <li>
                  <a href="{{url('view_gallery')}}"> <i class="icon-home"></i>Galería</a>
                </li>
                
                <li>
                  <a href="{{url('all_messages')}}"> <i class="icon-home"></i>Mensajes</a>
                </li>

                
        </ul>
      </nav>