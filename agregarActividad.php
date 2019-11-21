<?php
include("head.php")
?>


    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <img src="VLIM_ti.png" width= "600px" />
                            </div>
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Nueva Actividad</h1>
                            </div>
                            <form class="user">

                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                         Nombre del colaborador
                                        <select type="text" class="form-control form-control-user" required="">
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        Fecha de ejecucion de la actividad
                                        <input type="date" class="form-control form-control-user"  required="">
                                    </div>
                                    <div class="col-sm-6">
                                        Fecha de entrega del proyecto
                                        <input type="date" class="form-control form-control-user"  required="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        Horas de trabajo
                                        <input type="number" step="0.5" class="form-control form-control-user" required="">
                                    </div>
                                    <div class="col-sm-6">
                                        Estatus del proyecto
                                        <select type="number" class="form-control form-control-user"  required="">
                                            <option value="value1"> En proceso</option>
                                            <option value="value2"> Terminado y aprovado</option>
                                            <option value="value3"> Terminado en revisión</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="date" class="form-control form-control-user"  required="">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user"  required="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-12 mb-3 mb-sm-0" align="center">
                                        Actividad
                                        <textarea type="text" class="form-control form-control-user"  required="" rows="10" cols="40">
                                        </textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-12 mb-3 mb-sm-0" align="center">
                                        <a href="colaboradores.php"><button class="fcbtn btn btn-success btn-outline btn-1b">GUARDAR</button></a>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
<?php
include("footer.php")
?>