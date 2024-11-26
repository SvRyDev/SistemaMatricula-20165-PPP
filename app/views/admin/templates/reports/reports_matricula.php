<h2 data-aos="fade-right"><?= $data['title'] ?></h2>
<p data-aos="fade-right"> <?= $data['sub_title'] ?></p>








<div class="contanier" data-aos="fade-right" data-aos-delay="50">


    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                    <h5 class="card-title">
                        <i class="bi bi-house-door-fill"></i> Lista Matriculados
                    </h5>

                    <button type="button" class="btn btn-success"> <i class="bi bi-file-earmark-excel-fill"></i> Excel</button>
                    <button type="button" class="btn btn-primary"> <i class="bi bi-file-earmark-word-fill"></i> Word</button>
                    <button type="button" class="btn btn-danger"> <i class="bi bi-file-earmark-pdf-fill"></i> Pdf</button>

                    <div>
                        1.- reporte matriculas por nivel

                        2.- reporte matriculas por grados
                        nivel -> grados (uno o todos)


                        3.- reporte matriculas por seccion
                        nivel -> grados -> seccion (uno o todos)
                        consulta por grados
                        selecciona nivel
                        selecciona grado
                        marca seccion



                        <p>Grado</p>
                        <p>Seccion</p>
                        <p>nivel</p>

                        <button type="button" class="btn btn-success disabled" id="btn--export-excel"> <i class="bi bi-file-earmark-excel-fill"></i> Excel</button>
                        <input type="checkbox" name="sh_primaria" id="sh_primaria" checked>
                        <label for="sh_primaria">Primaria</label>
                        <input type="checkbox" name="sh_secundaria" id="sh_secundaria" checked>
                        <label for="sh_primaria">Secundaria</label>
                        <p>Responsable </p>

                        <p>Apoderado </p>
                        <p>Padre </p>
                        <p>Madre </p>
                        <p></p>
                        <label class="label-form" for="srch_nombre">Nombre</label>
                        <input name="srch_nombre" id="srch_nombre" type="text" class="form-control" placeholder="Filtro Búsqueda">

                        <button type="button" class="btn btn-success">Realizar Búsqueda</button>

                        <div class="card bg-secondary-subtle">
                            <div class="card-body">
                                <div class="bg-white p-2">
                                    <table id="tabla_estudiantes" class="display "></table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


</div>