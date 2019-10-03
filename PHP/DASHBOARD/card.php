<?php
date_default_timezone_set('America/Sao_Paulo');
include("connect.php");
session_start();
if(isset($_POST['enviar'])){
	$titulo = $_POST['titulo'];
	$nome = $_SESSION['nome']; 
	$avatar = $_SESSION['avatar'];

	echo($avatar);
	
	$sql = "INSERT INTO post (titulo, nome_user, avatar) VALUES ('$titulo', '$nome', '$avatar')";
	try {
		$consulta = $link->prepare($sql);
	
		$consulta->execute();
		header("Location:../../feed.php");
	}
	catch(PDOException $ex){
		echo($ex->getMessage());
		echo("\nerro!");
	}
}
?>