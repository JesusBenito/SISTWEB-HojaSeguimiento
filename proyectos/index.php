<?php
include("../head.php")
?>

<div class="container-fluid">
    <!-- .row -->
    <div class="row bg-title"
        style="background:url(../plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
        <div class="col-lg-12">
            <h4 class="page-title">Proyectos</h4>
        </div>
        <div class="col-sm-6 col-md-6 col-xs-12">
            <ol class="breadcrumb pull-left">
                <li><a href="../index.php">Dashboard</a></li>
                <li class="active">Proyectos</li>
            </ol>
        </div>

        <!-- /.col-lg-12 -->
    </div>
    <!--row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <div class="d-flex justify-content-between">
                <h3 class="box-title m-b-0">Proyectos</h3>
                <a href="../agregarProyecto"><button class="fcbtn btn btn-success btn-outline btn-1b">Agregar</button></a>
                </div>
                <br>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Tipo de Proyecto</th>
                                <th>Nombre Proyecto</th>
                                <th>Fecha Entrega</th>
                                <th>Estatus</th>
                                <th>Colaborador</th>                         
                                <th class="text-nowrap">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            include ("../conn.php");
                            $queryEstatus = "SELECT
                                            `cat_proyectos`.*,
                                            `cat_estatus`.*,
                                            `colaboradores`.* 
                                             FROM
                                            `cat_proyectos`,
                                            `cat_estatus`,
                                            `colaboradores`
                                            WHERE
                                            `cat_proyectos`.id_colaborador=`colaboradores`.id_colaborador
                                            AND
                                            `cat_estatus`.id_estatus=`cat_proyectos`.id_estatus";
                            $resultEstatus = mysqli_query($conn, $queryEstatus);
                            if ($resultEstatus) {
                                $num_rows = mysqli_num_rows($resultEstatus);
                                if ($num_rows > 0){
                                    while($row = mysqli_fetch_array($resultEstatus)) {
                                        echo '
                                        <tr>
                                            <td>'.$row['tipo_proyecto'].'</td>
                                            <td>'.$row['nombre_proyecto'].'</td>
                                            <td>'.$row['fecha_entrega'].'</td>
                                            <td>'.$row['estatus'].'</td>
                                            <td>'.$row['nombre'].'</td>
                                            <td>
                                                <button class="btn btn-danger btn-circle btn-sm bajaMarca" data-idproyecto="'.$row['id_proyecto'].'" data-tipoproyecto="'.$row['tipo_proyecto'].'" data-nombreproyecto="'.$row['nombre_proyecto'].'" data-fechaentrega="'.$row['fecha_entrega'].'" data-idestatus="'.$row['id_estatus'].'" data-idcolaborador="'.$row['id_colaborador'].'" data-toggle="tooltip"
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