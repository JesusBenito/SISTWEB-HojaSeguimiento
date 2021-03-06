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
                <button class="fcbtn btn btn-success btn-outline btn-1b" data-toggle="modal" data-target="#myModal">Agregar</button>
                </div>

                                    <!-- Modal -->
                                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header" style="padding:35px 50px;">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <font4>Nuevo Proyecto</font4>
                                </div>
                                <div class="modal-body" style="padding:40px 50px;">
                                    <form class="user" id="form">

                                        <div class="form-group row">
                                            <div class="col-sm-12 mb-3 mb-sm-0">
                                                Tipo de Proyecto
                                                <input type="text" class="form-control" id="estatus_name" placeholder="Ingresa el tipo de Proyeycto ..." required="" data-error="Por favor, ingresa el tipo de Proyecto.">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-12 mb-3 mb-sm-0">
                                                Nombre del Proyecto
                                                <input type="text" class="form-control" id="estatus_name" placeholder="Ingresa el Nombre del Proyeycto ..." required="" data-error="Por favor, ingresa el Nombre del Proyecto.">
                                            </div>
                                            <div class="col-sm-12 mb-3 mb-sm-0">
                                                Fecha de Entrega
                                                <input type="date" class="form-control" id="estatus_name" placeholder="" required="" data-error="Por favor, ingresa la fecha de entrega.">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                Estatus
                                                <select class="form-control" data-placeholder="Choose a Category" tabindex="1">
                            <?php
								include "../conn.php";
								$queryBuscaPerfil = "SELECT * FROM `cat_estatus` ORDER BY estatus ASC";
								$resultPerfil = mysqli_query($conn, $queryBuscaPerfil);
								if ($resultPerfil) {
									$num_rows = mysqli_num_rows($resultPerfil);
									if ($num_rows > 0) {
										while ($row = mysqli_fetch_array($resultPerfil)) {
											echo '<option value="' . $row['id_estatus'] . '"> ' . $row['estatus'] . ' </option>';
										}
									} else {
										echo "No hay registros";
									}
								} else {
									echo "Error: " . mysqli_error($conn);
								}
								mysqli_free_result($resultPerfil);
								mysqli_close($conn);
								?>
                        </select>
                                            </div>
                                            <div class="col-sm-6">
                                                Colaborador
                                                <select class="form-control" data-placeholder="Choose a Category" tabindex="1">
                        <?php
								include "../conn.php";
								$queryBuscaPerfil = "SELECT * FROM `colaboradores`";
								$resultPerfil = mysqli_query($conn, $queryBuscaPerfil);
								if ($resultPerfil) {
									$num_rows = mysqli_num_rows($resultPerfil);
									if ($num_rows > 0) {
										while ($row = mysqli_fetch_array($resultPerfil)) {
											echo '<option value="' . $row['id_colaborador'] . '"> ' . $row['nombre'] . ' </option>';
										}
									} else {
										echo "No hay registros";
									}
								} else {
									echo "Error: " . mysqli_error($conn);
								}
								mysqli_free_result($resultPerfil);
								mysqli_close($conn);
								?>
                        </select>
                                            </div>
                                        </div>
                                        <div align="center">
                                            <button class="fcbtn btn btn-success btn-outline btn-1b" id="guardar">
                                                GUARDAR
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
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