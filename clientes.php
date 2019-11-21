<?php
include("head.php")
?>

<div class="container-fluid">
    <!-- .row -->
    <div class="row bg-title"
        style="background:url(plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
        <div class="col-lg-12">
            <h4 class="page-title">Clientes</h4>
        </div>
        <div class="col-sm-6 col-md-6 col-xs-12">
            <ol class="breadcrumb pull-left">
                <li><a href="index.php">Dashboard</a></li>
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
                <a href="agregarCliente.php"><button class="fcbtn btn btn-success btn-outline btn-1b">Agregar</button></a>
                </div>
                <br>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Id_cliente</th>
                                <th>Nombre Cliente</th>
                                <th>Id_proyecto</th>                       
                                <th class="text-nowrap">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Rosalia Avila</td>
                                <td>1</td>
                                <td class="text-nowrap">
                                    <a href="#" data-toggle="tooltip" data-original-title="Editar"> <i
                                            class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                    <a href="#" data-toggle="tooltip" data-original-title="Eliminar"> <i
                                            class="fa fa-close text-danger"></i> </a>
                                </td>
                            </tr>
        
                        </tbody>
                        <tbody>
                            <tr>
                                <td>2</td>
                                <td>Julian</td>
                                <td>2</td>
                                <td class="text-nowrap">
                                    <a href="#" data-toggle="tooltip" data-original-title="Editar"> <i
                                            class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                    <a href="#" data-toggle="tooltip" data-original-title="Eliminar"> <i
                                            class="fa fa-close text-danger"></i> </a>
                                </td>
                            </tr>
        
                        </tbody>
                        <tbody>
                            <tr>
                                <td>3</td>
                                <td>Joel Galindo</td>
                                <td>3</td>
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
include("footer.php")
?>