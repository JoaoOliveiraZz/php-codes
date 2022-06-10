<?php

    include_once('connection.php');

    if(isset($_POST['Update'])){
        $id = $_POST['id'];
        $Nome = $_POST['nome'];
        $Email = $_POST['email'];
        $Senha = md5( $_POST['senha']);

        echo $id;

        $sql = "UPDATE usuarios SET nome='$Nome', email='$Email', senha='$Senha' WHERE id = '$id'";

        $result = $con -> query($sql);
    
    }

        //header('location: Read.php');
?>