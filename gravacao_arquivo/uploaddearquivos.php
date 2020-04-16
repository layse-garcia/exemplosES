<html>
    <head>
        <title>Upload de Arquivos</title>
    </head>
    <body>
        <fieldset>
            <legend>UPLOAD DE DIVERSOS ARQUIVOS NO MESMO FORM</legend>
            <br>
            <form enctype="multipart/form-data" method="post" action="upp.php" name="frmUpload">
                <input type="file" name="txtArquivos[]"/><br>
                <input type="file" name="txtArquivos[]"/><br>
                <input type="file" name="txtArquivos[]"/><br><br>
                <input type="submit" name="btnEnviar"/>
            </form>
        </fieldset>
    </body>
</html>