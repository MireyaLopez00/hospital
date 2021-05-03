<?php


$conexion =new mysqli("localhost","root","","hospital");

	$usuario= $_POST['usuario'];
	$contra= $_POST['contra'];



if (isset($_SESSION['usuario'])) {
    header('Location: ../inicio.php');
  }	

  
  if (!empty($_POST['usuario']) && !empty($_POST['contra'])) {
    $records = $conexion->prepare('SELECT usuario, contra FROM registro WHERE usuario = :usuario');
    $records->bindParam(':usuario', $_POST['usuario']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    if (count($results) > 0 && password_verify($_POST['contra'], $results['contra'])) {
      $_SESSION['usuario'] = $results['usuario'];
		header("Location: ../index.php");
    } else {
			header("Location: ../inicio.php");
    }
  }
	
