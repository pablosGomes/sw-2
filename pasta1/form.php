<?php
    $email = $_POST["email"];
    $password = $_POST["password"];

    // email: adm@gmail.com
    // password: 123456

    if ($email === "adm@gmail.com" && $password === "123456") {
        echo "Logado com sucesso!";
        $nome = "Administrador";

        header("Location: restrito.php?nome=".$nome);
    } else {
        echo "<script>alert('Email ou senha incorretos!'); window.location='index.php';</script>";
    }
?>