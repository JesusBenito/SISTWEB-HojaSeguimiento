<?php
include("../head.php")
?>

<div class="container-fluid">
    <!-- .row -->
    <div class="row bg-title"
        style="background:url(../plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
        <div class="col-lg-12">
            <h4 class="page-title">Clientes</h4>
        </div>
        <div class="col-sm-6 col-md-6 col-xs-12">
            <ol class="breadcrumb pull-left">
                <li><a href="../index.php">Dashboard</a></li>
                <li class="active">Clientes</li>
            </ol>
        </div>

        <!-- /.col-lg-12 -->
    </div>
    <!--row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <div class="d-flex justify-content-between">
                <h3 class="box-title m-b-0">Clientes</h3>
                <a href="../agregarCliente"><button class="fcbtn btn btn-success btn-outline btn-1b">Agregar</button></a>
                </div>
                <br>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-nowrap">Opciones</th>
                                <th>Id_cliente</th>
                                <th>Nombre Cliente</th>
                                <th>Id_proyecto</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        include ("../conn.php");
                        $queryUsuarios = "SELECT * FROM `cat_clientes`;";
                                            $resultUsuarios = mysqli_query($conn, $queryUsuarios);
                                            if($resultUsuarios){  // returned TRUE, e.g. in case of a DELETE sql
                                              $num_rows = mysqli_num_rows($resultUsuarios);
                                              if($num_rows > 0){
                                                while($row = mysqli_fetch_array($resultUsuarios)){
                                                  echo '
                                                  <tr>
                                                  <td style="text-align: center;">'.'
                                                  <a href="peticiones/baja-libro.php/?id='.$row['Id_cliente'].'" class="btn btn-danger btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="Eliminar cliente">
                                                      <i class="fa fa-remove"></i>
                                                  </a>'.'
                                                  <a href="modificar-libro.php?id='.$row['Id_cliente'].'" class="btn btn-primary btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="Modificar cliente">
                                                      <i class="fa fa-edit"></i>
                                                  </a>'.'
                                              </td>
                                                    <td>'.$row['Id_cliente'].'</td>
                                                    <td>'.$row['nombre_cliente'].'</td>
                                                    <td>'.$row['id_proyecto'].'</td>
                                                  </tr>
                                                  ';
                                                }
                                              }
                                              else{
                                                echo "No hay registros";
                                              }
                                            } else { // returned FALSE
                                              echo "Error: " . mysqli_error($conn);
                                            }
                                            mysqli_free_result($resultUsuarios);
                                            mysqli_close($conn);
                                          ?>
        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

</div><!-- /.container-fluid -->

<?php
include("../footer.php")
?>