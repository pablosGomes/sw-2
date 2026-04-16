<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo</title>

    <style>
        table, tr, th, td{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>exeplo 2 tabelas</h1>
    <table>
        <tr>
            <th>RM</th>
            <th>NOME</th>
            <th>EMAIL</th>
        </tr>
       
         <?php 
        for ($i = 1; $i <= 2; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 3; $j++) {
                echo "<td>Linha $i coluna $j";
            }
            echo "</tr>";
        }
    ?>
    
    </table>
</body>
</html>