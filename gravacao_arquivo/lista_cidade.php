<html>
    <head>
        <title>Lista Cidades</title>
        <style>
            img{
                width:20%;
                height:30%;
            }
            table{
                height:50%;
            }
        </style>
    </head>
    <body>
        <table border="1px">
            <tr>
                <th>Nome:</th>
                <th>Ponto Tur&iacute;stico:</th>
                <th>Foto:</th>
            </tr>
            <?php
                require('conexao.php');
                
                $sql='SELECT * FROM tb_cidade';
                $tabela= mysqli_query($conexao,$sql) or die(myseli_error($conexao));
                while($linha=mysqli_fetch_row($tabela))
                {
                    echo '<tr>';
                    echo '<td>'.$linha[1].'</td>';
                    echo '<td>'.$linha[2].'</td>';
                    echo '<td><img src="'.$linha[3].'"></img></td>';
                    echo '</tr>';
                }
            ?>
        </table>
        <a href="index.php">VOLTAR</a>
    </body>
</html>