<?php
	$consulta = $this->prueba_class->consultaPrueba($numero);
	foreach ($consulta as $res) {
		echo $res['telefonoID']."\n";
	}
?>