
<! DOCTYPE html>

<html>
<head>   
<title>HOSPITAL</title>
<link rel="icon" type="image/png" href="hospital.png" sizes="5x5">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
		<body  background= "uno.png" background-size=cover  text= "black" >
			
			<center>
	  	<a href ="ingresar.html">
<img src="imagenes/ingresar.png" hspace="100" vspace="5"> </a>
&nbsp;
&nbsp;
&nbsp;
&nbsp;
<a href ="consultar.html">
<img src="imagenes/consultar.png" hspace="100" vspace="5"> </a>
</center>
	  <div class="header">


  	<h2>TABLA DE PACIENTE</h2>
  </div>
				<form action="paciente_pro.php"  method="POST">
					<center>
						<div class="input-group">
			   			<p>Id del paciente: </p>
			   			<input type="text" name="id_paciente" placeholder="                                   1-100">
			   			</div>
			   			<div class="input-group">
			   			<p>Nombre: </p>
			   			<input type="text" name="nombre">
			   			</div>
			   			<div class="input-group">
			   			<p>Sexo: </p>
			   			<input type="text" name="sexo">
			   			</div>
			   			<div class="input-group">
			   			<p>Edad: </p>
			   			<input type="text" name="edad">
			   			</div>
			   			<div class="input-group">
			   			<p>Tipo de sangre: </p>
			   			<input type="text" name="tipo_sangre">
			   			</div>
			   			<div class="input-group">
			   			<p>Motivo de ingreso: </p>
			   			<input type="text" name="motivo_ingre">
			   			</div>
			   			<div class="input-group">
			   			<p>Sintomas: </p>
			   			<input type="text" name="sintomas">
			   			</div>
			   			<br>
			   			<center>
			   				<input type="submit" value=" Guardar "  name="guardar" class="btn"> 
			   				<input type="button" value=" Cancelar " name="cancelar" class="btn" onclick="location.href='index.html'">
			   			</center>
		   			</center>
		   		
		   		</form>
		</body>
	</html>

