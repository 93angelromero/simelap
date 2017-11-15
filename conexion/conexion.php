<?php
	$link = mysql_connect('localhost', 'root', 'vlta9516')
    	or die('No se pudo conectar: ' . mysql_error());
	echo 'Connected successfully';
	mysql_select_db('simelap') or die('No se pudo seleccionar la base de datos');

?>