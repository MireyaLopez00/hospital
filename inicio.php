
    
    
  <! DOCTYPE html>
<html>
<head>   
<title>HOSPITAL</title>
 <center>

<link rel="stylesheet" type="text/css" href="style.css">
<link rel="icon" type="image/png" href="hospital.png" sizes="5x5">
</head>
  <body background= "uno.png" background-size=cover  text= "#000080" >
   <h2>Bienvenido a nuestra base de datos "Hospital"</h2>
   <br>
   <br>
   	<h2> INICIAR SESION </h2>
   	<form action="login.php" method="POST">
   	<input type="text" name="usuario" placeholder="USUARIO" required>
   	<br>
   	<br>
   	<input type="password" name="contra" placeholder="CONTRASEÑA" >
   	<br>
   	<br>
   	<br>
   	<input type="submit" value="Ingresar" name="Ingresar">
<br>
   	<br>
   	<h5>Si no tiene cuenta puede registrarse</h5>
   	<br>
   	<input type="submit" name="registrarse" value="Registrarse" onclick="location.href='registro.html'">
   </form>

   </center>
</body>
</html>