<?php
	class Impressoes {
		
		public static function getImpressoes($idUsuario) {
			
			require_once "private/php/conexao/conexao.php";
			
			$sql = "CALL jaImprimiu(?)";
				
			$resultImpressoes = array();	

			if ($stmt = $mysqli->prepare($sql)) {
				
				$stmt->bind_param("i",$idUsuario);
				$stmt->execute();
				$stmt->store_result();
				
				$stmt->bind_result($partitura);
				
				while ($stmt->fetch()) {
					array_push($resultImpressoes, $partitura);
				}
				
				$stmt->close();
				
			}
			
			return $resultImpressoes;			
		}
	}
?>
