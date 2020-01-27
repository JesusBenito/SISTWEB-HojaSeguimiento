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
                                <th>Área</th>
                                <th>Fecha de Nacimiento</th>
                                <th>Dirección</th>                            
                                <th class="text-nowrap">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    20190190
                                </td>
                                <td>Edgar Enrique De la Cruz Osorio</td>
                                <td>55 1234 5678</td>
                                <td>edgar.delacruz@vlim.com.mx</td>
                                <td>Diseño Web</td>
                                <td>31/05/1995</td>
                                <td>Cerro 1 #9 Naucalpan de Juarez, Estado de Mexico</td>
                                <td class="text-nowrap">
                                    <a href="#" data-toggle="tooltip" data-original-title="Editar"> <i
                                            class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                    <a href="#" data-toggle="tooltip" data-original-title="Eliminar"> <i
                                            class="fa fa-close text-danger"></i> </a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    20190180
                                </td>
                                <td>Alberto Noriega Estudillo</td>
                                <td>55 1234 5678</td>
                                <td>alberto.noriega@vlim.com.mx</td>
                                <td>Diseño Web</td>
                                <td>08/12/1997</td>
                                <td>Cerro 1 #9 Naucalpan de Juarez, Estado de Mexico</td>
                                <td class="text-nowrap">
                                    <a href="#" data-toggle="tooltip" data-original-title="Editar"> <i
                                            class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                    <a href="#" data-toggle="tooltip" data-original-title="Eliminar"> <i
                                            class="fa fa-close text-danger"></i> </a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>
                                    20190200
                                </td>
                                <td>Sergio Soto Pantaleon</td>
                                <td>55 1234 5678</td>
                                <td>sergio.soto@vlim.com.mx</td>
                                <td>Diseño Web</td>
                                <td>01/01/1999</td>
                                <td>Cerro 1 #9 Naucalpan de Juarez, Estado de Mexico</td>
                                <td class="text-nowrap">
                                    <a href="#" data-toggle="tooltip" data-original-title="Editar"> <i
                                            class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                    <a href="#" data-toggle="tooltip" data-original-title="Eliminar"> <i
                                            class="fa fa-close text-danger"></i> </a>
                                </td>
                            </tr>
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