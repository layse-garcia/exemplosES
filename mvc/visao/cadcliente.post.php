<?php
require('../modelo/cliente.class.php');

$nome = $_POST['txtNome'];
$email = $_POST['txtEmail'];

$cliente = new Cliente();
$cliente->setNome($nome);
$cliente->setEmail($email);

if ($cliente->salvar() == true)
	echo 'salvo com sucesso';

?>