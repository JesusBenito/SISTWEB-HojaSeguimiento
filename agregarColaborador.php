<?php
include("head.php")
?>


<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <img src="VLIM_ti.png" width= "600px" />
              </div>
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Nuevo Colaborador</h1>
              </div>
              <form class="user">

                <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="usuario_nombres" placeholder="Nombre ( s )" required="">
                  </div>
                </div>

                <div class="form-group row">  
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="usuario_ap_1" placeholder="Apellido Paterno">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="usuario_ap_2" placeholder="Apellido Materno">
                  </div>
                </div>

                <div class="form-group row">  
                <div class="col-sm-6">
                  <input type="number" class="form-control form-control-user" id="usuario_telefono" placeholder="Teléfono" required="">
                </div>
                <div class="col-sm-6">
                    <input type="number" class="form-control form-control-user" id="numero_usuario" placeholder="Numero de Usuario" required="">
                  </div>
                  </div>


                <div class="form-group">
                  <input type="email" class="form-control form-control-user" id="usuario_email" placeholder="Correo Electronico" required="">
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="date" class="form-control form-control-user" id="nacimiento" placeholder="Fecha de Nacimiento" required="">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="area" placeholder="Area" required="">
                  </div>
                  </div>

                  <div class="form-group">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="direccion" placeholder="Direccion" required="">
                  </div>
                  </div>

                  <a href="colaboradores.php"><button class="fcbtn btn btn-success btn-outline btn-1b">GUARDAR</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<?php
include("footer.php")
?>