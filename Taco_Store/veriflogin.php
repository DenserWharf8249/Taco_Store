<?php

    //Realizamos la conexion a la BD: "cursos"

    $connection = mysqli_connect('localhost', 'root', '', 'taco_store');

    // for testing connection
    if(!$connection) {
        echo 'Error de conexion a la BD...'. mysqli_connect_error();
        exit();
    }
    else{
        
        //Tomamos las variables que viene del POST del formulario "loginvista.html".
        $cCorreo = $_POST['correo'];
        $cPassw = MD5($_POST['contra']); //Se aplica la función MD5 a la contraseña.

        //La función: "mysqli_query" ejecuta cualquier instrucción SQL en la BD correspondiente que se encuentre en la conexión especificada.
        //En este caso, la Consulta fue un SELECT-FROM-WHERE
        $resultado =mysqli_query($connection, "SELECT * FROM user WHERE correo='$cCorreo' AND contra='$cPassw'");
        
        if (!$resultado)
        {
            echo "<script>alert('Hay un error en los datos ingresados.')</script>";
            //Podemos tambien redireccionarlo de nueva cuenta a la pagina de Formulario de "loginvista.html".
            //header('Location: index.php');
        }
        else
        {
            $row = $resultado->fetch_assoc();
            session_start();
            $_SESSION['nombre'] = $row['nombre']; 
            echo 'Se realizó correctamente la consulta.';
            //Una vez que fue correcta la consulta y que existe el usuario en la tabla "login", cargamos la pagina: "menuresponsivo.html"
            header('Location: index.php');
        }
        
    }

?>