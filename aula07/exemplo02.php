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
    <?php 
        for ($i = 1; $i < 2; $i++) {
            echo "<tr>";
            echo"<td>Linha $i coluna 1</td>";
            echo"<td>Linha $i coluna 2</td>";
            echo"<td>Linha $i coluna 3</td>";
            echo "</tr>";
        }
    ?>
    
    <table>
        <tr>
            <th>RM</th>
            <th>NOME</th>
            <th>EMAIL</th>
        </tr>
        
        <tr>
            <td>Linha 1 coluna 1</td>
            <td>Linha 1 coluna 2</td>
            <td>linha 1 coluna 3</td>
        </tr>

        <tr>
           <td>Linha 2 coluna 1</td>
            <td>Linha 2 coluna 2</td>
            <td>linha 2 coluna 3</td>
        </tr>
    </table>
</body>
</html>