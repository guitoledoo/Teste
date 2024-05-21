<?php
include("config.php");


$conexao = mysqli_connect(SERVIDOR, USUARIO, SENHA, BANCO) or die("ERRO NA CONEXÃO COM O SERVIDOR" . mysqli_connect_error());