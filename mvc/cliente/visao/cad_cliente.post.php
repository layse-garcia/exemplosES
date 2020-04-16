<?php
require('../modelo/mcliente.class.php');

$nome = $_POST['txtNome'];
$email = $_POST['txtEmail'];

$cliente = new Cliente();
$cliente->setNome($nome);
$cliente->setEmail($email);


if ($cliente->salvar() == true)
	echo 'Cliente Salvo com SUCESSO!!';


?>