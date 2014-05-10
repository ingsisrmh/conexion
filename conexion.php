<?php
	function consultar($query)
	{
		$host = 'null'; //Escribir el host
		$user = 'null'; //Escribir el usuario
		$password = 'null'; //Escribir el password
		$database = 'null'; //Escribir el nombre de la base de datos
		$result = null; //No tocar, es el valor devuelto en caso de no encontrar datos

		$link = mysql_connect($host, $user, $password) or die('No se pudo conectar: ' . mysql_error());
		mysql_select_db($database) or die('No se pudo seleccionar la base de datos');

		$response = mysql_query($query, $link);
		$c = 0;

		while( $row = mysql_fetch_assoc($response))
		{
			$result[$c] = $row;
			$c++;
		}

		return($result);

		mysql_close($link);
	}
?>
