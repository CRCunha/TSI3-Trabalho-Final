<?php
date_default_timezone_set('America/Sao_Paulo');
include("connect.php");
$sql = "SELECT * FROM post";
	try {
		$consulta = $link->prepare($sql);
		$consulta->execute();
		while ($registro = $consulta->fetch(PDO::FETCH_ASSOC)) {
			$titulo = $registro['titulo'];
			$nome = $registro['nome_user'];
			$avatar =  $registro['avatar'];
			include("cardAtividadeEstruct.php");
		}
	}
	catch(PDOException $ex){
		echo($ex->getMessage());
	}
?>