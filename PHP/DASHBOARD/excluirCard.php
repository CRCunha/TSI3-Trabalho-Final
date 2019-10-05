<?php
include("connect.php");
	
if(isset($_POST['deletar'])){
	$id = $_POST['id'];
	
    $sql = "DELETE FROM post WHERE id = $id";
    
	try {
		$consulta = $link->prepare($sql);
	
		$consulta->execute();
		header("Location:../../excluir.php");
	}
	catch(PDOException $ex){
		echo($ex->getMessage());
	}
}
?>