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


  	<h2>TABLA DE ODONTOLOGIA</h2>
  </div>
				<form action="odontologia_pro.php"  method="POST">
					<center>
						<div class="input-group">
			   			<p>Id odontología: </p>
			   			<input type="text" name="id_odon"placeholder="                                 800-700">
			   			</div>
			   			<div class="input-group">
			   			<p>Odontograma: </p>
			   			<textarea type="text" name="odontograma"  cols="50" rows="10"></textarea>
			   			</div>
			   			<div class="input-group">
			   			<p>Diagnóstico: </p>
			   			<textarea type="text" name="diagnostico"  cols="50" rows="10"></textarea>
			   			</div>
			   			<div class="input-group">
			   			<p>Tratamiento: </p>
			   			<input type="text" name="tratamiento">
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