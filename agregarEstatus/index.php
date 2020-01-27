<?php
include("../head.php")
?>

<div class="container-fluid">
    <!-- .row -->
    <div class="row bg-title"
        style="background:url(../plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
        <div class="col-lg-12">
            <h4 class="page-title">Areas</h4>
        </div>
        <div class="col-sm-6 col-md-6 col-xs-12">
            <ol class="breadcrumb pull-left">
                <li><a href="../index.php">Dashboard</a></li>
                <li><a href="../estatus">Estatus</a></li>
                <li class="active">Agregar Estatus</li>
            </ol>
        </div>

        <!-- /.col-lg-12 -->
    </div>
    <!--row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">Agregar Estatus</h3>
                <p class="text-muted m-b-30"> Ej. En Progreso</p>
                <form data-toggle="validator" novalidate="true">
                    <div class="form-group">
                        <label for="inputName" class="control-label">Estatus</label>
                        <input type="text" class="form-control" id="inputName" placeholder="Ingresar tipo de estatus ..." required=""
                            data-error="Por favor, ingresa el tipo de estatus.">
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