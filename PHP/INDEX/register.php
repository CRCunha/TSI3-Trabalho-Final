<?php
date_default_timezone_set('America/Sao_Paulo');
include("connect.php");
require 'fucntion.php';

if(isset($_POST['register'])){
	$email =$_POST['email'];
	$senha = $_POST['password'];
	$senhaHash = make_hash($senha);
	$nome = $_POST['nome'];
	$sql = "INSERT INTO User (email, senha, nome) VALUES ('$email','$senhaHash', '$nome')";
	try {
		$consulta = $link->prepare($sql);
	
		$consulta->execute();
		echo ("Incluido com sucesso!");
		header("Location:../../index.php");
	}
	catch(PDOException $ex){
		echo($ex->getMessage());
	}
}
?>