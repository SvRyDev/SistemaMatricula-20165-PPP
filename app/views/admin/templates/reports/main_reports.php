<h2 data-aos="fade-right"><?= $data['title'] ?></h2>
<p data-aos="fade-right"> <?= $data['sub_title'] ?></p>




<div class="card mb-4">
    <div class="card-header bg-primary text-white">
        <i class="bi bi-file-earmark-break-fill"></i> <b>Consulta</b> - Matriculados por Año
    </div>
    <div class="card-body">

        <div class="input-group pb-3">
            <label class="input-group-text" for="inputGroupSelect01">
                <i class="bi bi-calendar-check"></i> Año Escolar
            </label>
            <select class="form-select" id="inputGroupSelect01">
                <option selected value="1">2024</option>
                <option value="2">2023</option>
                <option value="3">2022</option>
            </select>

        </div>


        <button type="button" class="btn--action btn btn-warning" href="#reports/matriculas">Buscar Grupo</button>
        <button type="button" class="btn btn-warning" href="#reports/matriculado">Buscar Estudiante</button>


    </div>
</div>


<div class="card mb-4">
    <div class="card-header bg-primary text-white">
        <i class="bi bi-file-earmark-break-fill"></i> <b>Consulta</b> - Contacto de Apoderados
    </div>
    <div class="card-body">


        <button type="button" class="btn btn-warning" href="#reports/matriculado">Buscar Estudiante</button>

    </div>
</div>