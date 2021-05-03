<! DOCTYPE html>
<html>
<head>   
<title>HOSPITAL</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="icon" type="image/png" href="hospital.png" sizes="5x5">
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


  	<h2>TABLA DE ANTECEDENTES</h2>
  </div>
				<form action="antecedentes_pro.php"  method="POST">
					<center>
						<div class="input-group">
			   			<p>Id del antecedente:</p>
			   			<input type="text" name="id_antecedente" placeholder="                                    1-100">
			   			</div>
			   			<div class="input-group">
			   			<p>Antecedentes Quirúrgicos:</p>
			   			<textarea  name="antecedentes_quirur"  cols="50" rows="10"></textarea>
			   		</div>
			   			<div class="input-group">
			   			<p>Fecha de antecedentes quirúrgicos:</p>
			   			<input type="date" name="fecha_ante_quirur">
			   			</div>
			   			<div class="input-group">
			   			<p>Antecedentes Personales:</p>
			   			<textarea type="text" name="antecedentes_personales"  cols="50" rows="10"></textarea>
			   			</div>
			   			<div class="input-group">
			   			<p>Fecha de antecedentes personales:</p>
			   			<input type="date" name="fecha_ante_personales">
			   			</div>
			   			<br>
			   			<center>
			   				<input type="submit" value=" Guardar "  name="guardar" class="btn"> 
			   				<input type="button" value=" Cancelar " name="cancelar" onclick="location.href='index.html'" class="btn">
			   			</center>
		   			</center>
		   		</form>
		   	
		</body>
	</html>
