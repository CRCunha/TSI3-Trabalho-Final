<?php
date_default_timezone_set('America/Sao_Paulo');
include("connect.php");
session_start();
if(isset($_POST['enviar'])){
	$titulo = $_POST['titulo'];
	$nome = $_SESSION['nome']; 
	
	$sql = "INSERT INTO post (titulo, nome_user) VALUES ('$titulo', '$nome')";
	try {
		$consulta = $link->prepare($sql);
	
		$consulta->execute();
		header("Location:../../dashboard.php");
	}
	catch(PDOException $ex){
		echo($ex->getMessage());
		echo("\nerro!");
	}
}
?>