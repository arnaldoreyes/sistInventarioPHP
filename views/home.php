<div class="container my-4">
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
        <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
            <h2 class="display-4 fw-bold lh-1">Bienvenido <?php echo $_SESSION['nombre']." ". $_SESSION['apellido'];?></h2>
            <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error dicta iste doloribus. Eaque illum beatae illo debitis quisquam ipsa assumenda consectetur provident officia in libero ad est pariatur nobis aspernatur, quidem explicabo autem voluptatem dicta corrupti!</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                <button type="button" class="btn btn-warning btn-lg px-4 me-md-2 fw-bold">Primary</button>
                <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
            </div>
        </div>
        <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden">
            <img src="./img/home.png" alt="" width="350">
        </div>
    </div>
</div>