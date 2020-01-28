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
                <li><a href="../clientes">Clientes</a></li>
                <li class="active">Agregar Nuevo Cliente</li>
            </ol>
        </div>

        <!-- /.col-lg-12 -->
    </div>
     <!--row -->
     <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">Agregar Cliente</h3>
                <p class="text-muted m-b-30"> Ej. Juan Carlos Hernandez Hernandez </p>
                <form data-toggle="validator" novalidate="true">
                    <div class="form-group">
                        <label for="inputName" class="control-label">Clientes</label>
                        <input type="text" class="form-control" id="inputName" placeholder="Ingresar Nombre Completo" required=""
                            data-error="Por favor, ingresa tu nombre completo.">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success disabled">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.row -->

</div><!-- /.container-fluid -->

<?php
include("../footer.php")
?>