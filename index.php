<!DOCTYPE html>
<html>
<head>
	<title>HTML</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Calculadora php</h1>
                    <p>Estilos realizados en Bootstrap 3</p> 
                </div>
            </div>
        </div>
    </div>
  	<div class="container">
    	<div class="row">
    		<div class="col-lg-6">
    			<h2>Escribe el numero del cual deseas conocer sus tablas</h2>
                <form method="POST" action="index.php">
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1">Ingresa el numero 1</span>
                      <input type="text" class="form-control" placeholder="Ejemplo: 10" name="num1">
                    </div>
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1">Ingresa el numero 2</span>
                      <input type="text" class="form-control" placeholder="Ejemplo: 5" name="num2">
                    </div>
                    <div class="input-group">
                        <select class="form-control" name="operador">
                            <option>Suma</option>
                            <option>Resta</option>
                            <option>Multiplicacion</option>
                            <option>Division</option>
                            <option>Potencia</option>
                        </select>
                    </div>
                    <input type="submit" name="enviar" class="btn btn-primary btn-lg" name="enviar">
                </form>
    		</div>

    		<div class="col-lg-6">
    			<?php
                   @include 'functions.php';
                   calcula();
                ?>
    		</div>
    		
    	</div>
	</div>

	<script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>