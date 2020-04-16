<?php
    require('../modelo/modelo_aluno.class.php');
    
    $a1=new Aluno();
    echo $a1->buscaAlunos();
    echo '<a href="cad_escolar.frm.php">Cadastrar Alunos</a>';
?>