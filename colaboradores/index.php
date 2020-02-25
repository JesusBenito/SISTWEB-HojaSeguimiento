<?php
include("../head.php")
?>
<div class="container-fluid">
    <!-- .row -->
    <div class="row bg-title"
        style="background:url(../plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
        <div class="col-lg-12">
            <h4 class="page-title">Colaboradores</h4>
        </div>
        <div class="col-sm-6 col-md-6 col-xs-12">
            <ol class="breadcrumb pull-left">
                <li><a href="../index.php">Dashboard</a></li>
                <li class="active">Colaboradores</li>
            </ol>
        </div>

        <!-- /.col-lg-12 -->
    </div>
    <!--row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <div class="d-flex justify-content-between">
                <h3 class="box-title m-b-0">Colaboradores</h3>
                <a href="../agregarColaborador"><button class="fcbtn btn btn-success btn-outline btn-1b">Agregar</button></a>
                </div>
                <br>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Numero de Colaborador</th>
                                <th>Nombre</th>
                                <th>Telefono</th>
                                <th>Correo</th>
                                <th>Fecha de Nacimiento</th>
                                <th>Dirección</th> 
                                <th>Área</th>
                                <th class="text-nowrap">Action</th>
                            </tr>
                        </thead>
                        <tbody> 
                            <?php
                            include ("../conn.php");
                            $queryEstatus = "SELECT * FROM `colaboradores`;";
                            $resultEstatus = mysqli_query($conn, $queryEstatus);
                            if ($resultEstatus) {
                                $num_rows = mysqli_num_rows($resultEstatus);
                                if ($num_rows > 0){
                                    while($row = mysqli_fetch_array($resultEstatus)) {
                                        echo '
                                        <tr>
                                            <td>'.$row['id_colaborador'].'</td>
                                            <td>'.$row['numero_colaborador'].'</td>
                                            <td>'.$row['nombre'].'</td>
                                            <td>'.$row['telefono'].'</td>
                                            <td>'.$row['correo'].'</td>
                                            <td>'.$row['fecha_nacimineto'].'</td>
                                            <td>'.$row['direccion'].'</td>
                                            <td>'.$row['area'].'</td>
                                            <td>
                                                <button class="btn btn-danger btn-circle btn-sm bajaMarca" data-id_colaborador="'.$row['id_colaborador'].'" data-n_colaborador="'.$row['numero_colaborador'].'" data-toggle="tooltip"
                                                data-placement="left" title="Eliminar Estatus">
                                                    <i class="fa fa-trash-o"></i>
                                                </button>
                                                
                                                <a href="../modificar-estatus" class="btn btn-primary btn-circle btn-sm" data-toggle="tooltip"
                                                data-placement="right" title="Modificar Estatus">
                                                    <i class="fa fa-pencil"></i>
                                                </a>'.'
                                            </td>
                                        </tr>
                                        ';
                                    }
                                } else {
                                    echo "No hay registros";
                                }
                            } else {
                                echo "Error: " . mysqli_error($conn);
                            }
                            mysqli_free_result($resultEstatus);
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