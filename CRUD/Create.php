<?php
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    //Incluindo a conexão com o banco de dados
    include_once('conect.php');

    //Aqui está sendo trazido os valores digitados nos inputs
    $Nome  = isset($_POST['Nome']) ? $_POST['Nome'] : '';
    $Email = isset($_POST['Email']) ? $_POST['Email'] : '';
    $Senha = isset($_POST['Senha']) ? $_POST['Senha'] : '';

    //Aqui estou criando uma query de inserção no banco de dados, sem criptografar a senha
    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$Nome','$Email','$Senha')";


    //echo $sql; Caso queira ver se o sql não está co erro, tire o comentário dessa linha

    if(mysqli_query($con, $sql)){ //Aqui o mysqli_query está fazendo uma inserção no banco de dados
        header("location: /index.html"); //Caso a inserção seja feita com sucesso, a página será redirecionada ao index.html
        mysqli_close($con); //Fechando a conexão, é muito importante que ela seja fechada!!!!
    }
    else{
        header("location: sign.php");
        mysqli_close($con);
    }

?>