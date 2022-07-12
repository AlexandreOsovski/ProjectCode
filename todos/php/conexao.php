<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '979899');
define('DB', 'ProjectCode');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die('não foi possivel conectar na plataforma ProjectCode!');

?>