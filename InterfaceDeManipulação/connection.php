<?php

//Os dados abaixo se encontram na aba MySql details no Infintyfree, logo abaixo do Control Panel :)
$hostname = 'localhost';
$user = 'root';
$password = 'IFcursobancodedados';
$database = 'adopet';

$con = mysqli_connect($hostname, $user, $password ,$database) or die ("Não foi possível realizar a conexão");




?>