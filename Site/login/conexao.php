<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', 'senhanowbaska')
define('DB', 'login');

$conexao = mysql_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');


