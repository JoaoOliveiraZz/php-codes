<?php

if(!empty($_GET['id'])){
    
    include_once('connection.php');

    $id = $_GET['id'];

    $Select = 'SELECT * FROM usuarios WHERE id = '.$id;

    $result = $con -> query($Select);

    if($result -> num_rows > 0){
        while($DataUser = mysqli_fetch_assoc($result)){
            $Nome = $DataUser['nome'];
            $Email = $DataUser['email'];
            $Senha = $DataUser['senha'];

        }
    }else{
       echo 'Errado';
    }



    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <form action="SaveEdit.php" method="POST">
        <input value="<?php echo $Nome?>" name='nome'type="text">
        <input type="email" value="<?php echo $Email?>" name="email">
        <input type="password" value="<?php echo $Senha?>" name="senha">
        <input type="submit" name="Update">
    </form>
</body>
</html>