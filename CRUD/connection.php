<?php

//Os dados abaixo se encontram na aba MySql details no Infintyfree, logo abaixo do Control Panel :)
$hostname = 'sqlXXX.epizy.com'; 
$user = 'epiz_31689065';
$password = 'XXXXX'; 
$database = 'epiz_31689065_XXXX';

//Aqui é realizada a conexão com o banco de dados, o "or die" serve para se caso a conexão não seja realizada ele exiba algo, no caso aqui ele exibirá o erro
$con = mysqli_connect($hostname, $user, $password ,$database) or die ($con -> connect_errno);




?>