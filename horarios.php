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


  	<h2>TABLA DE HORARIOS</h2>
  </div>
				<form action="horarios_pro.php"  method="POST">
					<center>
						<div class="input-group">
			   			<p>Id horario: </p>
			   			<input type="text" name="id_horario" placeholder="                                  1-100">
			   			</div>
			   			<div class="input-group">
			   			<p>Tipo de horario: </p>
			   			<input type="text" name="tipo_horario">
			   			</div>
			   			<div class="input-group">
			   			<p>Hora de entrada: </p>
			   			<input type="time" name="tiempo_entrada">
						</div>
						<div class="input-group">
			   			<p>Hora de salida: </p>
			   			<input type="time" name="tiempo_salida">
			   			
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