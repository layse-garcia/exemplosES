<?php
    require('../modelo/aluno.class.php');

    $nome = $_POST['txtNome'];
    $idade = $_POST['txtIdade'];
    $nota = $_POST['txtNota'];

    $aluno = new Aluno();
    $aluno->setNome($nome);
    $aluno->setNota($nota);
    $aluno->setIdade($idade);

    if ($cliente->salvarAluno() == true)
            echo 'Aluno salvo com sucesso.';

?>

