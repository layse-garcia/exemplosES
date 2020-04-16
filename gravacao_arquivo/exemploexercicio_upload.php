<?php
    $uploaddir='imagens\\';
    
    if(isset($_POST['chk1']))
    {
        $tmp_name=$_FILES['txtArquivos']['tmp_name'][0];
            
        $name=$_FILES['txtArquivos']['name'][0];
            
        move_uploaded_file($tmp_name, $uploaddir.$name);
        
        echo '<img src="'.$uploaddir.$name.'" height="350" width="350"/>';
    }
    if(isset($_POST['chk2']))
    {
        $tmp_name=$_FILES['txtArquivos']['tmp_name'][1];
            
        $name=$_FILES['txtArquivos']['name'][1];
            
        move_uploaded_file($tmp_name, $uploaddir.$name);
        
        echo '<img src="'.$uploaddir.$name.'" height="350" width="350"/>';
    }
    if(isset($_POST['chk3']))
    {
        $tmp_name=$_FILES['txtArquivos']['tmp_name'][2];
            
        $name=$_FILES['txtArquivos']['name'][2];
            
        move_uploaded_file($tmp_name, $uploaddir.$name);
        
        echo '<img src="'.$uploaddir.$name.'" height="350" width="350"/>';
    }
?>