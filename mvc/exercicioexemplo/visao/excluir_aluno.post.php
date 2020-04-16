<?php
    require('../modelo/modelo_aluno.class.php');
    $codigo=$_GET['codigo'];
    
    $a1= new Aluno;
    $a1->excluir($codigo);
?>
