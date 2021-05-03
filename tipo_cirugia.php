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


  	<h2>TABLA DE TIPOS DE CIRUGIA</h2>
  </div>

				<form action="tipo_cirugia_pro.php"  method="POST">
					<center>
						<div class="input-group">
			   			<p>Id del tipo de cirugía: </p>
			   			<input type="text" name="id_tipociru" placeholder="                                800-860">
			   			</div>
			   			<div class="input-group">
			   			<p>Tipo de exámen: </p>
			   			<input type="text" name="tipo_cirugia">
			   			</div>
			   			<div class="input-group">
			   			<p>Descripción de la cirugía: </p>
			   			<textarea type="text" name="descripcion_ciru"  cols="50" rows="10"></textarea>
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