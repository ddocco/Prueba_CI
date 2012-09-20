<?php
	class Prueba_class extends Model {
		function Prueba_class() {
			parent::Model();
		}

		function consultaPrueba($numero) {
			$sql = "SELECT telefonoID
					FROM datoTelefono
					LIMIT ".$numero;
			$sql.= ";";
			$query = $this->db->query($sql);
			$row = $query->result_array();
			return $row;
		}
	}
?>