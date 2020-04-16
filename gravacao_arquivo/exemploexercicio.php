<html>
    <head>
        <title>ATIVIDADE - Upload de Arquivos</title>
    </head>
    <body>
        <fieldset>
            <legend>UPLOAD DE DIVERSOS ARQUIVOS NO MESMO FORM</legend>
            <br>
            <form enctype="multipart/form-data" method="post" action="exemploexercicio_upload.php" name="frmUpload">
                <input type="checkbox" name="chk1" value="1"/><input type="file" name="txtArquivos[]"/><br>
                <input type="checkbox" name="chk2" value="2"/><input type="file" name="txtArquivos[]"/><br>
                <input type="checkbox" name="chk3" value="3"/><input type="file" name="txtArquivos[]"/><br><br>
                <input type="submit" name="btnEnviar"/>
            </form>
        </fieldset>
    </body>
</html>
