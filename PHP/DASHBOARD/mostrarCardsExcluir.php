<?php
date_default_timezone_set('America/Sao_Paulo');
include("connect.php");
$nome = $_SESSION['nome'];
$sql = "SELECT * FROM post where nome_user = '$nome'";
	try {
		$consulta = $link->prepare($sql);
		$consulta->execute();
		while ($registro = $consulta->fetch(PDO::FETCH_ASSOC)) {
			$titulo = $registro['titulo'];
			$id = $registro['id'];
			include("cardEstructExcluir.php");
		}
	}
	catch(PDOException $ex){
		echo($ex->getMessage());
	}
?>