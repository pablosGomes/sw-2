<?php
    for ($linha = 1; $linha <= 4; $linha++) {
        for ($coluna = 1; $coluna <= 4; $coluna++) {
            echo"*";
        }
        echo"<br>";
    }

    for ($linha = 1; $linha <= 4; $linha++) {
        for ($coluna = 1; $coluna <= $linha; $coluna++) {
            echo"*";
        }
        echo"<br>";
    }
?>