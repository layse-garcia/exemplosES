<?php
    $pasta='imagens/';
     $arquivo=$pasta.$foto['name'];
     echo $arquivo;
     $envio=move_uploaded_file($foto['tmp_name'], $pasta);
     if($envio == false){
         echo 'Imagem deu errado.</br>';
         echo 'O ERRO ENCONTRA-SE AQUI:'.print_r($arquivo);
    
    
    echo '</br>';
     }else{
         echo 'Imagem deu errado.</br>';
     }