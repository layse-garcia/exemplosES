<html>
    <head>
        <title>Cadastro Escolar</title>
    </head>
    <body>
        <form action="cad_escolar.post.php" method="post" name="frmCad" enctype="multipart/form-data">
            <table>
                <tr>
                    <th>Nome:</th>
                    <td><input type="text" name="txtNome"/></td>
                </tr>
                <tr>
                    <th>E-mail:</th>
                    <td><input type="type" name="txtEmail"/></td>
                </tr>
                <tr>
                    <th>Data de Nascimento</th>
                    <td><input type="date" name="txtNasc"/></td>
                </tr>
                <tr>
                    <th>Sexo:</th>
                            <td><select name="slcSexo">
                                    <option value="feminino">Feminino</option>
                                    <option value="masculino">Masculino</option>
                                </select></td>
                </tr>
                 <tr>
                     <th><input type="reset" name="Limpa" value="Limpar"/></th>
                    <td><input type="submit" name="Enviar" value="Cadastrar"/></td>
                </tr>
            </table>
        </form>
    </body>
</html>