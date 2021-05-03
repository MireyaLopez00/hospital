<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Editar perfil</title>

    <!-- Bootstrap CSS -->
     <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  
  <body>      
    <?php
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
    {  
    } else {
        header('location: error1.html');
        exit;
    }
        // checking the time now when home page starts
        $now = time();            
        if ($now > $_SESSION['expire'] )
        {
            session_destroy();
            header('location: error2.html');
            exit;
        }
    ?>

    <div class="container">
        <p>Bienvenido: <?php echo $_SESSION['name']; ?></p>
        <h3>Edita tu perfil</h3>
        <ul>
            <li>Cambiar foto</li>
            <li>Cambiar biografía</li>
            <li>Cambiar contraseña</li>
            <li>etc;</li>
        </ul>
        <p><a href="logout.php">Salir</a></p>
    </div>

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

	</body>
</html>