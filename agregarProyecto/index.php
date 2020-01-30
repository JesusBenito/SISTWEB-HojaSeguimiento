<?php
include("../head.php")
?>

<div class="container-fluid">
    <!-- .row -->
    <div class="row bg-title" style="background:url(../plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
        <div class="col-lg-12">
            <h4 class="page-title">Proyectos</h4>
        </div>
        <div class="col-sm-6 col-md-6 col-xs-12">
            <ol class="breadcrumb pull-left">
                <li><a href="../index.php">Dashboard</a></li>
                <li><a href="../proyectos">Proyectos</a></li>
                <li class="active">Agregar Proyecto</li>
            </ol>
        </div>

        <!-- /.col-lg-12 -->
    </div>
    <!--row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">Agregar Proyecto</h3>
                <p class="text-muted m-b-30"></p>
                <form data-toggle="validator" novalidate="true" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                        <label for="inputName" class="control-label">Tipo Proyecto</label>
                        <input type="text" class="form-control" id="estatus_name" placeholder="Ingresa el tipo de Proyeycto ..." required="" data-error="Por favor, ingresa el tipo de Proyecto.">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label for="inputName" class="control-label">Nombre del Proyecto</label>
                        <input type="text" class="form-control" id="estatus_name" placeholder="Ingresa el Nombre del Proyeycto ..." required="" data-error="Por favor, ingresa el Nombre del Proyecto.">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label for="inputName" class="control-label">Fecha de entrega</label>
                        <input type="date" class="form-control" id="estatus_name" placeholder="" required="" data-error="Por favor, ingresa la fecha de entrega.">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Estatus</label>
                        <select class="form-control" data-placeholder="Choose a Category" tabindex="1">
                            <option value="Category 1">Category 1</option>
                            <option value="Category 2">Category 2</option>
                            <option value="Category 3">Category 5</option>
                            <option value="Category 4">Category 4</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Colaborador</label>
                        <select class="form-control" data-placeholder="Choose a Category" tabindex="1">
                            <option value="Category 1">Category 1</option>
                            <option value="Category 2">Category 2</option>
                            <option value="Category 3">Category 5</option>
                            <option value="Category 4">Category 4</option>
                        </select>
                    </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success disabled" id="agregar_estatus">Guardar</button>
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