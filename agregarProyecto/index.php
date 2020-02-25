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
                    <div class="form-group">
                        <label class="control-label">Colaborador</label>
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