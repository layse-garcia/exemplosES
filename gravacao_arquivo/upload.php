<?php
    $uploaddir='images/';
    $uploadfile=$uploaddir.basename($FILES['txtArquivo']['name']);
    
    echo $uploadfile;
    echo '</br>';
    echo $_FILES['txtArquivo']['tmp_name'];
    echo '</br>';
    if(move_uploaded_file($_FILES['txtArquivo']['tmp_name'],$uploadfile))
    {
        echo 'Arquivo enviado com sucesso.\n';
    }else{
        echo 'Possivel ataque de arquivo';
    }
 ?>