<?php
    require('../modelo/mcliente.class.php');
    
    $cliente=new Cliente();
    echo $cliente->buscaClientes();
    echo '<a href="cadcliente.frm.php">Cadastrar Cliente</a>';
?>

