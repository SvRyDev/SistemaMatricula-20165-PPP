<div class="card rounded-0 sticky-top shadow " data-aos="fade-right">
    <ul class="list-group list-group-flush">
        <li class="list-group-item bg-secondary-subtle d-flex justify-content-between">
            <h2 class="mb-1 mt-1"><?= $data['title'] ?></h2>


            <div class="dropdown">

                <button class="btn btn-light rounded-circle shadow d-flex justify-content-center align-items-center dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="width: 50px; height: 50px;">
                    <i class="bi bi-person-fill" style="transform: scale(2);"></i>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" id="btn--logout" href="<?= base_url()?>/home/logout"><i class="bi bi-box-arrow-left"></i> Cerrar Sesión</a></li>
  
                </ul>

            </div>

        </li>
        <li class="list-group-item ">
            <span class="mb-0"> <?= $data['sub_title'] ?></span>
        </li>

    </ul>
</div>