<div class="h-100 w-100 d-flex justify-content-center align-items-center text-center bg-body-tertiary">
    
      <form class="w-25 m-auto" action="" method="POST" autocomplete="off">
        <img class="mb-4" src="./img/logo.png" alt="" width="80" height="">
        <div class="form-floating mb-2">
          <input type="text" class="form-control" name="login_user" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" placeholder="Usuario required">
          <label for="login_user">Usuario</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" name="login_password" pattern="[a-zA-Z0-9$@.-]{6,100}" maxlength="100" placeholder="Contraseña required">
          <label for="password_user">Contraseña</label>
        </div>
    
        <!-- <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Recuérdame
          </label>
        </div> -->
        
        <button class="w-100 btn btn-lg btn-warning  text-white" type="submit">Iniciar Sesión</button>
        
        <div class="text-center pt-3">
            <p>¿No tiene una cuenta? <a href="index.php?view=user_new">Regístrese</a></p>
        </div>
        <p class="mt-5 mb-3 text-muted">&copy; 2023</p>

        <?php

          if(isset($_POST['login_user']) && isset($_POST['login_password']))
          {
            require_once "./php/main.php";
            require_once "./php/iniciar_sesion.php";

          };
        
        ?>
      </form>

    
</div>