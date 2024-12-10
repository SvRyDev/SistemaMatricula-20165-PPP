<div class="card rounded-0 sticky-top shadow-lg"  data-aos="fade-right">
    <ul class="list-group list-group-flush">
        <li class="list-group-item">
            <h2><?= $data['title'] ?></h2>
        </li>
        <li class="list-group-item">
            <h6> <?= $data['sub_title'] ?></h6>
        </li>

    </ul>
</div>






<div class="contanier p-3" data-aos="fade-right" data-aos-delay="50">
    <div class="row">
        <div class="pb-3 col-12 col-md-12 col-lg-12 col-xl-12">
            <div class="card">
                <div class="card-body">
                    <button type="button" href="#students/new" class="btn--action btn btn-success">
                        Nuevo Estudiante
                    </button>

        

                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="pb-3 col-12 col-md-12 col-lg-12 col-xl-12">
            <div class="card">
                <div class="card-body">

                    <h5>Lista de Estudiantes</h5>
                    <table id="tabla_estudiantes" class="display table table-sm"></table>

                </div>
            </div>
        </div>
    </div>

</div>