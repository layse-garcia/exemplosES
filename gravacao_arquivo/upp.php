<?php
    $uploaddir='img/';
    foreach($_FILES['txtArquivos']['error'] as $key => $error)
    {
        if($error == UPLOAD_ERR_OK)
        {
            echo '<br>';
            echo 'Uploaddir[pasta que vai as imagens]: '.$uploaddir.'<br>';
            echo 'error: '.$error.'<br>';
            echo 'chave: '.$key.'<br>';

            $tmp_name=$_FILES['txtArquivos']['tmp_name'][$key];
            echo 'tmp_name> '.$tmp_name.'<br>';

            $name=$_FILES['txtArquivos']['name'][$key];
            echo 'nome> '.$name.'<br>';

            echo '<br>-----------------<br>';

            move_uploaded_file($tmp_name,$uploaddir.$name);
        }
    }
    echo 'txtArquivos? <br>';
    echo '<pre>';
    print_r($_FILES);
    echo '</pre>';
    echo 'Salvo com sucesso';
?>