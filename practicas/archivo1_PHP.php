<html>
<head>
<title>Problema</title>
</head>
<body>

<?php
	$ar=fopen("datos.txt","at") or
	die("Problemas en la creacion"); // Declaramos una variable que contendra la instruccion de crear el archivo/abrilo.
	
	fputs($ar,"Nombre: ".$_REQUEST['nombre']);
	fputs($ar,"\n");								// Metemos en el archivo (lo indicamos con la varible declarada anteriormente) lo que el usuario haya puesto de Nombre y Direcci�n
	fputs($ar,"Direcci�n: ".$_REQUEST['direccion']);
	fputs($ar,"\n");

	if (isset($_REQUEST['jamonQueso'])) // Si est� seleccionada esta opcion...
	{
		fputs($ar,$_REQUEST['cant_jyq']." -> Pizza Jam�n y Queso"); // Escribe en el archivo la cantidad y el producto correspondiente
		fputs($ar,"\n"); //Salto de linea
	}

	if (isset($_REQUEST['napolitana'])) // Si est� seleccionada esta opcion...
	{
		fputs($ar,$_REQUEST['cant_nap']." -> Pizza Napolitana"); // Escribe en el archivo la cantidad y el producto correspondiente
		fputs($ar,"\n"); //Salto de linea
	}

	if (isset($_REQUEST['mozzarela'])) // Si est� seleccionada esta opcion...
	{
		fputs($ar,$_REQUEST['cant_moz']." -> Pizza Mozzarela"); // Escribe en el archivo la cantidad y el producto correspondiente
		fputs($ar,"\n"); //Salto de linea
	}

	fputs($ar,"--------------------------------------------------------");
	fputs($ar,"\n");
	fclose($ar); // Importante cerrar el archivo.
	echo "Pedido cargado correctamente.";
?>

</body>
</html>