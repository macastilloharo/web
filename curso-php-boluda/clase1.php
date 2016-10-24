
<html>

<h1>pruebas </h1>

<?php

// Variables
echo("<hr>");
$texto= "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
echo($texto);

echo("<br>");
echo("<br>");


$numero = 0;
echo("Ejemplo bucle for:");
echo("<br>");echo("<br>");
for($numero==0; $numero <=10; $numero++){
	echo($numero);
	echo("<br>");
}


echo("<br>");
$nombre = 'joan';
$apellidos = 'boluda';
echo($nombre.' '.$apellidos);
echo("<hr>");

mensaje("este es un texto de un mensaje");
echo buenos_dias();
echo("<br>");
echo buenos_dias_nombre("Pepe",34);
echo("<br>");
echo saludo();

// Bucles
echo("<hr>");
for($i=1;$i<=10;$i++){
	echo ($i."\n");
}

echo("<br>");
$x=1;
while($x<=10){
	echo ($x."\n");
	$x++;
}

// Arrays
echo("<br>");
$nombrecompleto = array("Joan", "Boluda");

var_dump( $nombrecompleto);

echo $nombrecompleto[0]."\n";
echo $nombrecompleto[1];

$datosPersonales = array(
	"Nombre"    => "Joan",
	"Apellidos" => "Boluda",
	"Hijos"     =>  2
	);

var_dump( $datosPersonales);
echo $datosPersonales["Nombre"]."\n";
echo $datosPersonales["Apellidos"]."\n";
echo $datosPersonales["Hijos"]."\n";

// Strings
echo("<h1>Strings</h1>");
$saludo = "Hola, muy buenos días";
echo $saludo;
lineas(1);

$mensaje =substr($saludo,0,4); 
echo ($mensaje);
lineas(1);

$mensaje =substr($saludo,5); 
echo ($mensaje);
lineas(1);


$mensaje =strlen($saludo); 
echo ($mensaje);
lineas(1);

$mensaje =trim($saludo); 
echo ($mensaje);
lineas(1);

$mensaje =ltrim($saludo); 
echo ($mensaje);
lineas(1);

$mensaje =rtrim($saludo); 
echo ($mensaje);
lineas(1);

$mensaje =strtoupper($saludo); 
echo ($mensaje);
lineas(1);

$mensaje =strtolower($saludo); 
echo ($mensaje);
lineas(1);

$mensaje = $saludo;
$mensaje =str_replace("buenos","buenas",$mensaje);
$mensaje =str_replace("días","noches",$mensaje); 


echo ($mensaje);
lineas(1);

echo("<hr>");

// String y Arrays
$letras = "abcdefghijklmnñoprstuvwxyz";
$letras_vector = str_split($letras);

echo("01:");echo $letras_vector[0];
lineas(1);
echo("02:");print_r($letras_vector);
lineas(1);

$nombre = "Joan Boluda";
$nombre = explode(" ",$nombre);
echo("03:");print_r($nombre);
lineas(1);

$nombre_completo = array(
	"nombre1" => "Joan",
	"apellido1" => "Boluda"
);
$nombre_completo = extract($nombre_completo);
echo("04:");echo $nombre1; lineas(1);echo $apellido1;
lineas(1);
echo("05:");print_r($nombre_completo);
lineas(1);

$nombre_completo2 = array(
	"nombre1" => "Joan",
	"apellido1" => "Boluda"
);
$nombre_completo2 = implode(" ",$nombre_completo2);
echo("06:");echo $nombre_completo2;
lineas(1);
echo("07:");print_r($nombre_completo2);
lineas(1);

echo("<hr>");
// REPASO
function frase(){
	$minombre = "Joan";
	$amigo1 = "Pepe";
	$amigo2 = "Luís";
	$amigo3 = "María";

	echo(
	"Me llamo ".$minombre.
	" y mis amigos se llaman ".$amigo1.", ".$amigo2." y ".$amigo3."."				

	);
	
	echo("<br>");
	$amigos = $amigo1.",".$amigo2.",".$amigo3;
	echo $amigos;
	
	$amigos_vector = explode(",",$amigos);
	lineas(1);

	if (in_array("María",$amigos_vector)) {
		echo "Sí, está María";
	}
	else {echo "No, no existe María";}
	lineas(1);
	
	print_r($amigos_vector);
	lineas(1);
	
	$elementos = count($amigos_vector);
	echo $elementos; 
	lineas(1);
	
	for($i=0;$i<$elementos;$i++){

		lineas(1);
		echo $amigos_vector[$i];
	}




}
frase();
lineas(1);





echo("<hr>");







// Funciones
function saludo(){
	$hora = 22;
	
	// Condicionales
	if($hora < 13){
		$mensaje="Buenos Días";
		}
		else if($hora >=13 && $hora <=19){
			$mensaje="Buenas Tardes";
		}
		else if($hora ==10 ||  $hora ==22){
			$mensaje="Son las 10";
		}
		else {
			$mensaje="Buenas Noches";
		}
	return $mensaje;
	}



function mensaje($textomensaje){

	echo($textomensaje);
	}


function buenos_dias(){
	return "Buenos Días"; 
	}

function buenos_dias_nombre($nombre, $edad){
	$texto = "Buenos Días". " ".$nombre.": con ".$edad." años de edad.";
	return $texto;
	}



function lineas($NumeroLineas){
	if ($NumeroLineas == 0) {$NumeroLineas = 1;}
	$i=0;
	for($i=1;$i<=$NumeroLineas;$i++){
		echo("<br>");
		}
	
	}

?>
</html>