<html>
    <head>
        <title>Cadastro de Cliente</title>
    </head>
    <body>
        <form method="post" action="cad_cliente.post.php" name="frmCad" enctype="multipart/form-data">
            <b>Nome:</b><br>
            <input type="text" name="txtNome"/><br>
            <b>E-mail:</b><br>
            <input type="text" name="txtEmail"/><br>
            <input type="submit" name="btnEnviar" value="Cadastrar"/><br>
        </form>
        <a href="lista_cliente.frm.php">LISTAR CLIENTES</a>
    </body>
</html>