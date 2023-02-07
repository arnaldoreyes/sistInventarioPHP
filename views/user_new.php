<div class="container-fluid form-header py-4">
    <h3 class="titulo">Usuario</h3>
</div>
<div class="form-rest"></div>
<div class="container d-flex justify-content-center">
    <div class="card bg-light"  style="max-width: 80%;">
        <div class="card-header">
            <h5 class="subtitle">Nuevo Usuario</h5>
        </div>
        <div class="card-body">
            <form action="./php/user_save.php" method="POST" autocomplete="off" class="row g-3 FormularioAjax">
                <div class="input-group col-md-6 mb-4">
                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                    <input type="text" name="user_name" class="form-control" id="user_name" placeholder="Nombres" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ]{3,40}" maxlength="40" required>
                </div>
                <div class="input-group col-md-6 mb-4">
                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                    <input type="text" name="user_last_name" class="form-control" id="user_last_name" placeholder="Apellidos" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ]{3,40}" maxlength="40" required>
                </div>
                <div class="input-group col-md-6 mb-4">
                    <span class="input-group-text"><i class="fa-solid fa-at"></i></i></span>
                    <input type="text" name="user_login" class="form-control" id="user_login" placeholder="Usuario" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" required>
                </div>
                <div class="input-group col-md-6 mb-4">
                    <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                    <input type="text" name="user_email" class="form-control" id="user_email" placeholder="Correo electrónico" maxlength="70">
                </div>
                <div class="input-group col-md-6 mb-4">
                    <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                    <input type="password" name="user_password1" class="form-control" id="user_password1" placeholder="Contraseña" pattern="[a-zA-Z0-9$@.-]{6,100}" maxlength="70" required>
                </div>
                <div class="input-group col-md-6 mb-4">
                    <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                    <input type="password" name="user_password2" class="form-control" id="user_password2" placeholder="Repetir Contraseña" pattern="[a-zA-Z0-9$@.-]{6,100}" maxlength="70" required>
                </div>

                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-warning">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>







<!-- <div class="container py-5">
    <div class="card">
        <div class="card-body bg-body-tertiary">
            <form class="row g-3">
                <div class="col-md-6">
                    <label for="user_name" class="form-label">Nombres</label>
                    <input type="text" name="user_name" class="form-control" id="user_name" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" required>
                </div>
                <div class="col-md-6">
                    <label for="user_last_name" class="form-label">Apellidos</label>
                    <input type="text" name="user_last_name" class="form-control" id="user_last_name" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" required>
                </div>
                <div class="col-md-6">
                    <label for="user_user" class="form-label">Usuario</label>
                    <input type="text" name="user_user" class="form-control" id="user_user" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,20}" maxlength="20" required>
                </div>
                <div class="col-md-6">
                    <label for="user_email" class="form-label">Correo electrónico</label>
                    <input type="email" name="user_email" class="form-control" id="user_email" maxlength="70" required>
                </div>
                <div class="col-md-6">
                    <label for="user_password1" class="form-label">Contraseña</label>
                    <input type="password" name="user_password1" class="form-control" id="user_password1">
                </div>
                <div class="col-md-6">
                    <label for="user_password2" class="form-label">Repetir Contraseña</label>
                    <input type="password" name="user_password2" class="form-control" id="user_password2">
                </div>

                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-warning">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div> -->