<?php 
    echo("<div class='card'>");
        echo("<div class='cardContent'>$titulo</div>");
        echo("<div class='etiqueta'>");
            echo("<div class='etiquetaContent'>
                <form action='PHP/DASHBOARD/excluirCard.php' method='POST'>
                    <input type='hidden' id='custId' name='id' value='$id'>
                    <input type='submit' value='' name='deletar' id='deletar' />
                </form>
            </div> ");
        echo("</div>");    
    echo("</div>");    
?>