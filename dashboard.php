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
    <link rel="stylesheet" href="CSS/DASHBOARD/ASIDE/aside.css" />
    <link rel="stylesheet" href="CSS/DASHBOARD/MAIN/main.css" />
    <link rel="stylesheet" href="CSS/DASHBOARD/ATIVIDADE/atividade.css" />
    <link rel="stylesheet" href="CSS/DASHBOARD/CARD/card.css" />
    <link rel="stylesheet" href="CSS/DASHBOARD/MODAL CARDS/modalCards.css" />
    <link rel="stylesheet" href="CSS/DASHBOARD/ATIVIDADE CARD/atividadeCard.css" />
    <script type="text/JavaScript" src="JS/modalCards.js"></script>
    <!--FONTES-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <!--FAV ICON-->
    <link rel="shortcut icon" href=" " />
</head>

<?php 
    include("PHP/connect.php");
    session_start();
?>

<body>
    <!-- MENU LATERAL -->
    <aside>
        <div class="container">
            <div class="containerAvatar">
                <div class="avatar"><!-- Trazer avatar do banco --></div>
            </div> 
            <div class="containerMenu">
                <div class="btnMenu">
                    <img src="CSS/DASHBOARD/ASIDE/IMG/home.png" alt="home" />
                </div> 
                <div class="btnMenu">
                    <img src="CSS/DASHBOARD/ASIDE/IMG/feed.png" alt="feed" />
                </div> 
                <div class="btnMenu">
                    <img src="CSS/DASHBOARD/ASIDE/IMG/user.png" alt="user" />
                </div> 
                <div class="btnMenu">
                    <img src="CSS/DASHBOARD/ASIDE/IMG/delete.png" alt="delete" />
                </div> 
            </div>
            <div class="btnLogout">
                <a href="PHP/DASHBOARD/logout.php">
                    <img src="CSS/DASHBOARD/ASIDE/IMG/logout.png" alt="logout" />
                </a>
            </div>   
        </div>
    </aside>
    <!-- CONTEÚDO PRICIPAL -->
    <main>
        <div class="container">
            <div class="mainHeader">
                <div class="title">PostBook</div>
                <div class="search">
                    <div class="container">
                        <form>
                            <input type="text" name="search" id="search" />
                        </form>   
                        <div class="icon">
                            <img src="CSS/DASHBOARD/MAIN/IMG/search.png" alt="search" />
                        </div>
                    </div>
                </div>  
            </div>
            <!-- PRINTAR CARDS COM  BUSCA NO BANCO -->
            <div class="content" id="#style-3">
                <?php include("PHP/DASHBOARD/mostrarCards.php"); ?>
                <!-- CARD ADD -->
                <div class="cardAdd" onclick="abrirModalCard()">
                    <img src="CSS/DASHBOARD/CARD/IMG/add.png">
                </div>    
            </div>
        </div>
    </main>    
    <!-- FEED DE ATIVIDADE-->
    <div class="atividade">
        <div class="container">
            <div class="title">Atividades Recentes</div>
            <?php include("PHP/DASHBOARD/mostrarAtividadeCards.php"); ?>
        </div>
    </div>   

    <div class="modalCards">
        <form action="PHP/DASHBOARD/card.php" method="POST">
            <input type="text" placeholder="Titulo" name="titulo" id="titulo">
            <input type="submit" name="enviar" value="enviar">
        </form>
    </div>
</body>

</html>