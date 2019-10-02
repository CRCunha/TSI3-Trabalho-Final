<!DOCTYPE html>
<html>

<head>
    <title>POSTBOOK</title>
    <!--METAS-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="web, developer, design, layout, UI, UX">
    <meta name="language" content="PT-BR">
    <meta name="author" content="Nome">
    <meta name="robots" ontent="noindex">
    <meta name="googlebot" content="noindex">
    <!--LINKS-->
    <link rel="stylesheet" href="CSS/GERAL/GERAL.css" />
    <link rel="stylesheet" href="CSS/NORMALIZE/NORMALIZE.css" />
    <link rel="stylesheet" href="CSS/INDEX/index.css" />
    <script type="text/JavaScript" src="JS/loginRegister.js"></script>
    <!--FONTES-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <!--FAV ICON-->
    <link rel="shortcut icon" href=" " />
</head>

<?php 
    include("PHP/connect.php")
?>

<body id="index">
    <div class="formularios">
        <div class="containerLogin">
            <div class="title">LOGIN</div>
            <form action="PHP/INDEX/login.php" method="post">
                <input type="email" name="email" id="email" placeholder="Email" autocomplete="off" />
                <input type="password" name="password" id="password" placeholder="Senha" autocomplete="off" />
                <input type="submit" name="login" value="Login" />
            </form>
        </div>
        <div class="containerRegister">
            <div class="title">Register</div>
            <form action="PHP/INDEX/register.php" method="post">
                <input type="email" name="email" id="email" placeholder="Email" autocomplete="off" />
                <input type="password" name="password" id="password" placeholder="Senha"  autocomplete="off" />
                <input type="text" name="nome" id="nome" placeholder="Nome" autocomplete="off" />
                <input type="submit" name="register" value="Register" />
            </form>
        </div>
        <div class="btnRegister">
            <div class="container">
                <div onclick="register()" class="register">Register</div>
            </div>
        </div>
    </div>
</body>

</html>