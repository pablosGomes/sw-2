<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento de dados</title>
</head>
<body>

    <?php 
        $nome = $_GET['name'];
        $email = $_GET['email'];
        $idade = $_GET['age'];

        $ano_atual = date('Y');
        //echo $ano_atual;



        $cal = $ano_atual - $idade;
        //echo "o nome é: $nome";
    ?>

    <p>O nome digitado é <?php echo $nome; ?></p>
    <p>A idade digitada é <?php echo $idade; ?></p>
    <p>O email digitado é <?php echo $email; ?></p>
    <p>seu ano de nascimento é <?php echo $cal?></p>
</body>
</html>