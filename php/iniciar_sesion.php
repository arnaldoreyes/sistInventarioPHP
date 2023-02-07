<?php

    #Almancenar datos#

    $usuario=limpiar_cadenas($_POST['login_user']);
    $clave=limpiar_cadenas($_POST['login_password']);

     #Verificar campos obligatorios#

     if($usuario==""||$clave==""){
        echo '
            <div class="alert alert-danger mx-5" role="alert">
                <span><i class="fa-solid fa-triangle-exclamation"></i></span>
                <strong>¡Ocurrió un error inesperado!</strong><br> 
                Por favor llene todos los campos del formulario.
            </div>
        ';
        exit();
    }

     #Verificar integridad de los datos#

    if (verificar_datos("[a-zA-Z0-9]{4,20}", $usuario)) {
        echo '
        <div class="alert alert-danger" role="alert">
            <span><i class="fa-solid fa-triangle-exclamation"></i></span>
            <strong>¡Ocurrió un error inesperado!</strong><br> 
           El USUARIO no coincide con el formato solicitado.
        </div>
        ';
    exit();
    }

    if (verificar_datos("[a-zA-Z0-9$@.-]{6,100}", $clave)) {
        echo '
        <div class="alert alert-danger" role="alert">
            <span><i class="fa-solid fa-triangle-exclamation"></i></span>
            <strong>¡Ocurrió un error inesperado!</strong><br> 
           La CONTRASEÑA no coincide con el formato solicitado.
        </div>
        ';
    exit();
    }

    $check_user=conexion();
    $check_user=$check_user->query("SELECT * FROM user WHERE user_login='$usuario'");

    if ($check_user->rowCount()==1) {
        $check_user=$check_user->fetch();

        if ($check_user['user_login']==$usuario && password_verify($clave,$check_user['user_password'])) {
            $_SESSION['id']=$check_user['user_id'];
            $_SESSION['nombre']=$check_user['user_name'];
            $_SESSION['apellido']=$check_user['user_last_name'];
            $_SESSION['usuario']=$check_user['user_login'];

            if(headers_sent()){
                echo "<script> window.location.href='index.php?view=home'; </script>";
            }else{
                header("Location: index.php?view=home");
            }

        } else {
            echo '
                <div class="alert alert-danger" role="alert">
                    <span><i class="fa-solid fa-triangle-exclamation"></i></span>
                    <strong>¡Ocurrió un error inesperado!</strong><br> 
                    USUARIO o CONTRASEÑA incorrectos.
                </div>
            ';
        }
        
    } else {
        echo '
            <div class="alert alert-danger" role="alert">
                <span><i class="fa-solid fa-triangle-exclamation"></i></span>
                <strong>¡Ocurrió un error inesperado!</strong><br> 
                USUARIO o CONTRASEÑA incorrectos.
            </div>
        ';
    }
    $check_user=null;

?>