<?php

//Os dados abaixo se encontram na aba MySql details no Infintyfree, logo abaixo do Control Panel :)
$hostname = 'localhost:3312';
$user = 'root';
$password = '';
$database = 'adopet';

$con = mysqli_connect($hostname, $user, $password ,$database) or die ("Não foi possível realizar a conexão");




?>