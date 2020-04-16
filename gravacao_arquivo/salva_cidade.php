<?php
    $nome=$_POST['txtCidade'];
    $pontoturistico=$_POST['txaPontoTuristico'];
    
    $uploaddir = 'imagens/';
    $uploadfile = $uploaddir . basename($_FILES['txtArquivo']['name']);
    if (move_uploaded_file($_FILES['txtArquivo']['tmp_name'], $uploadfile)) 
    {
        echo "Arquivo válido e enviado com sucesso.\n";
    } else 
    {
        echo "Possível ataque de upload de arquivo!\n";
        echo 'Aqui está mais informações de debug:';
        print_r($_FILES);
    }

    require('conexao.php');   
    
    $sql='INSERT INTO tb_cidade (nome_cidade,ponto_turistico_cidade,foto_cidade)
          VALUES("'.$nome.'","'.$pontoturistico.'","'.$uploadfile.'")';
    $resultado=mysqli_query($conexao,$sql);
	
    if ($resultado == true)
    {
	echo 'Cidade inserida com sucesso!</br><a href="index.php">Voltar</a>';
       # header('location:index.php');
    }else
    {
	echo 'Problema ao inserir o registro no banco de dados</br>';
	echo 'O erro que aconteceu foi este: '. mysqli_error($conexao);
	echo '<a href="index.php">VOLTAR A INDEX</a>';
		
    }
?>