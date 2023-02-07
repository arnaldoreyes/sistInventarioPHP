<?php

    require_once "main.php";
    
    #Almancenar datos#

    $nombre=limpiar_cadenas($_POST['user_name']);
    $apellido=limpiar_cadenas($_POST['user_last_name']);
    
    $usuario=limpiar_cadenas($_POST['user_login']);
    $email=limpiar_cadenas($_POST['user_email']);

    $clave_1=limpiar_cadenas(($_POST['user_password1']));
    $clave_2=limpiar_cadenas(($_POST['user_password2']));

    #Verificar campos obligatorios#

    if($nombre=="" || $apellido=="" || $usuario==""|| $email==""|| $clave_1==""|| $clave_2==""){
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

    if (verificar_datos("[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}", $nombre)) {
        echo '
        <div class="alert alert-danger mx-5" role="alert">
            <span><i class="fa-solid fa-triangle-exclamation"></i></span>
            <strong>¡Ocurrió un error inesperado!</strong><br> 
           El NOMBRE no coincide con el formato solicitado.
        </div>
        ';
    exit();
    }

    if (verificar_datos("[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}", $apellido)) {
        echo '
        <div class="alert alert-danger mx-5" role="alert">
            <span><i class="fa-solid fa-triangle-exclamation"></i></span>
            <strong>¡Ocurrió un error inesperado!</strong><br> 
           El APELLIDO no coincide con el formato solicitado.
        </div>
        ';
    exit();
    }

    if (verificar_datos("[a-zA-Z0-9]{4,20}", $usuario)) {
        echo '
        <div class="alert alert-danger mx-5" role="alert">
            <span><i class="fa-solid fa-triangle-exclamation"></i></span>
            <strong>¡Ocurrió un error inesperado!</strong><br> 
           El nombre de USUARIO no coincide con el formato solicitado.
        </div>
        ';
    exit();
    }

    if (verificar_datos("[a-zA-Z0-9$@.-]{6,100}", $clave_1) || verificar_datos("[a-zA-Z0-9$@.-]{6,100}", $clave_2)){
        echo '
        <div class="alert alert-danger mx-5" role="alert">
            <span><i class="fa-solid fa-triangle-exclamation"></i></span>
            <strong>¡Ocurrió un error inesperado!</strong><br> 
            Las CLAVES no coinciden con el formato solicitado.
        </div>
        ';
    exit();
    }

    #Verificar email#
    if ($email!="") {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $check_email=conexion();
            $check_email=$check_email->query("SELECT user_email FROM user WHERE user_email='$email'");
            if ($check_email->rowCount()>0) {
                echo '
                    <div class="alert alert-danger mx-5" role="alert">
                        <span><i class="fa-solid fa-triangle-exclamation"></i></span>
                        <strong>¡Ocurrió un error inesperado!</strong><br> 
                        El CORREO ELECTRÓNICO INGRESADO ya se encuentra registrado.
                    </div>
                ';
                exit();
            }
            $check_email=null;
        } else {
            echo '
                <div class="alert alert-danger mx-5" role="alert">
                    <span><i class="fa-solid fa-triangle-exclamation"></i></span>
                    <strong>¡Ocurrió un error inesperado!</strong><br> 
                    El CORREO ELECTRÓNICO INGRESADO NO ES VALIDO.
                </div>
            ';
            exit();
        }
        
    }

    #Verificar Usuario#
   
    $check_user=conexion();
    $check_user=$check_user->query("SELECT user_login FROM user WHERE user_login='$usuario'");
    if ($check_user->rowCount()>0) {
        echo '
            <div class="alert alert-danger mx-5" role="alert">
                <span><i class="fa-solid fa-triangle-exclamation"></i></span>
                <strong>¡Ocurrió un error inesperado!</strong><br> 
                El USUARIO INGRESADO ya se encuentra registrado, por favor elija otro.
            </div>
        ';
        exit();
    }
    $check_user=null;

    # Verificar claves #
    if($clave_1!=$clave_2){
        echo '
            <div class="alert alert-danger mx-5" role="alert">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                Las CLAVES que ha ingresado no coinciden
            </div>
        ';
        exit();
    }else{
        $clave=password_hash($clave_1,PASSWORD_BCRYPT,["cost"=>10]);
    }

     # Guardar datos Directamente (Inseguro) #
    //  $guardar_usuario=conexion();
    //  $guardar_usuario=$guardar_usuario->query("INSERT INTO user(user_name,user_last_name,user_login,user_password,user_email) VALUES('$nombre','$apellido','$usuario','$clave','$email')");

    # Guardar Datos Evitando Inyeccion de SQL #
    $guardar_usuario=conexion();
    $guardar_usuario=$guardar_usuario->prepare("INSERT INTO user(user_name,user_last_name,user_login,user_password,user_email) VALUES(:nombre,:apellido,:usuario,:clave,:email)");
 
    $marcadores=[
        ":nombre"=>$nombre,
        ":apellido"=>$apellido,
        ":usuario"=>$usuario,
        ":clave"=>$clave,
        ":email"=>$email
    ];
 
    $guardar_usuario->execute($marcadores);
 
    if($guardar_usuario->rowCount()==1){
        echo '
            <div class="alert alert-info mx-5" role="alert">
                <strong>¡USUARIO REGISTRADO!</strong><br>
                El usuario se registro con éxito!
            </div>
        ';
    }else{
        echo '
            <div class="alert alert-danger mx-5" role="alert">
                <strong>¡Ocurrió un error inesperado!</strong><br>
                No se pudo registrar el usuario, por favor intente nuevamente.
            </div>
        ';
    }
    $guardar_usuario=null;
?>
