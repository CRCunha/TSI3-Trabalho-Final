<?php
    require "fucntion.php";
    require "connect.php"; 
    
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $senha = isset($_POST['password']) ? $_POST['password'] : '';

    $senhaHash = make_hash($senha);
    $query = "SELECT email FROM User WHERE email = :email AND senha = :senha";
    $stmt = $link->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senhaHash);
    $stmt->execute();
    $usuario = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if (count($usuario) <= 0){	
        echo("erro");
        exit;
    }

    $sql = "SELECT * FROM User WHERE email = $email";
    
	try {
		$consulta = $link->prepare($sql);
		$consulta->execute();
		while ($registro = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $nome = ($registro['nome_user']);
            $avatar = ($registro['avatar']);
            $id = $registro['id'];
		}
	}
	catch(PDOException $ex){
		echo($ex->getMessage());
	}

    $usuario = $usuario[0];
    session_start();
    $_SESSION['logged_in'] = true;
    $_SESSION['nome'] = $email;

    header('Location: ../../dashboard.php');
?>