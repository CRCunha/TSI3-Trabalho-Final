<?php
date_default_timezone_set('America/Sao_Paulo');
session_start();
include("connect.php");
$nome = $_SESSION['nome'];

echo($_SESSION['nome']);

if(isset($_POST['enviarAvatar'])){
	$avatar = $_POST['avatar'];
	$sql = "UPDATE User SET avatar = '$avatar' WHERE (email LIKE '$nome')";
	try {
		$consulta = $link->prepare($sql);
	
		$consulta->execute();   
		header("Location:../../perfil.php");
	}
	catch(PDOException $ex){
		echo($ex->getMessage());
	}
	
}
?>
