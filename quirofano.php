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


  	<h2>TABLA DE QUIROFANO</h2>
  </div>
				<form action="quirofano_pro.php"  method="POST">
					<center>
						<div class="input-group">
			   			<p>Id del quirófano: </p>
			   			<input type="text" name="id_quirofano"placeholder="                                  100-200">
			   			</div>
			   			<div class="input-group">
			   			<p>Descripción del equipo: </p>
			   			<textarea type="text" name="descrip_equipo"  cols="50" rows="10"></textarea>
			   		
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