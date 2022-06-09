<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php

            include_once('connection.php');

            //Criando uma query de Select ordenando os usuários por ID
            $sql = "SELECT * FROM usuarios ORDER BY id DESC";

            $result = $con -> query($sql);

        ?>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    while($DataUsers = mysqli_fetch_assoc($result)){ //O mysqli_fetch_assoc cria uma matriz associativa com o resultado retornado do banco de dados
                        echo "<tr>";
                        echo "<td>". $DataUsers['nome']."</td>"; //Aqui você deve colocar no lugar de $DataUsers['nome'] as colunas referentes as tabelas do seu bando de dados :)        
                        echo "<td>". $DataUsers['email']."</td>"; 
                        //Caso aja outras colunas além de nome e email, apenas repita os comandos acima :)
                        echo "<td><a>Excluir</a></td>";
                        echo "<td><a href='Update.php?id=$DataUsers[id]'>Atualizar</a></td>";
                        echo '</tr>';
                    }

                ?>
            </tbody>
        </table>
    
</body>
</html>