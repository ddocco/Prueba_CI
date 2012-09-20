<?php
	class Prueba extends Controller {
		function prueba2($numero) {
			$data ['numero'] = $numero;
			$this->load->view ('prueba/pruebaView', $data);
		}
	}
?>