<?php
    require('../modelo/modelo_aluno.class.php');

    $nome=$_POST['txtNome'];
    $email=$_POST['txtEmail'];
    $nasc=$_POST['txtNasc'];
    $sexo=$_POST['slcSexo'];
    
    $a1=new Aluno();
    $a1->setNome($nome);
    $a1->setEmail($email);
    $a1->setNasc($nasc);
    $a1->setSexo($sexo);
    
    if ($a1->salvar() == true)
	echo 'Aluno Cadastrado com SUCESSO!!<br><a href="cad_escolar.frm.php">Voltar</a>';
?>
