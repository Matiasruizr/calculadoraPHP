<?php

function calcula(){
	if (isset($_POST['enviar'])) {
	    $num1 = $_POST['num1'];
	    $num2 = $_POST['num2'];
	    $operador = $_POST['operador'];

	    switch ($operador) {
	        case 'Suma':
	           echo "<h2>La suma de $num1 + $num2 es igual a <br>".($num1+$num2).'</h2>';
	            break;
	        case 'Resta':
	           echo "<h2>La resta de $num1 - $num2 es igual a <br>".($num1-$num2).'</h2>';
	            break;
	        case 'Multiplicacion':
	           echo "<h2>La multiplicacion de $num1 * $num2 es igual a <br>".($num1*$num2).'</h2>';
	            break;
	        case 'Division':
	            if ($num2 == 0) {
	                echo "<h2>No se puede dividir por 0</h2>";
	            }else{
	                echo "<h2>La division de $num1 / $num2 es igual a <br>".number_format(($num1/$num2),2,',',".").'</h2>';
	            }
	            break;    
	        case 'Potencia':
	           echo "<h2> $num1 elevado a $num2 es igual a <br>".($num1**$num2).'</h2>';
	            break;
	        default:
	            echo "Elige un operador";
	            break;
	    }
	}
}//fin function

?>