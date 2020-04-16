<?php
    require('../modelo/mcliente.class.php');
    $codigo=$_GET['codigo'];
    
    $cliente= new Cliente;
    $cliente->excluir($codigo);
?>
