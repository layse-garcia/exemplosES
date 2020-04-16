<html>
	<head>
            <title>Copia imagem</title>
	</head>
	<body>
            <fieldset>
                <legend>CADASTRO DE CIDADES</legend>
		<form enctype="multipart/form-data" action="salva_cidade.php" method="POST">
                        Nome:<br>
                        <input type="text" name="txtCidade"/><br>
                        Ponto Tur&iacute;stico:<br>
                        <textarea cols="25" rows="8" placeholder="Descreva" name="txaPontoTuristico"></textarea><br>
			UPLOAD DE ARQUIVO
			<br><br>
			<!-- MAX_FILE_SIZE deve preceder o campo input -->
			<input name="hddMaximo" type="hidden" name="MAX_FILE_SIZE" value="30000" />
			
			<!-- O Nome do elemento input determina o nome da array $_FILES -->
			Enviar esse arquivo: <br>
			<input name="txtArquivo" type="file" /> <br><br>
			<input name="btnEnviar" type="submit" value="Enviar" />
		</form>
            </fieldset>
            <fieldset>
                <legend>RELAT&Oacute;rios</legend>
                <a href="lista_cidade.php">Emitir relat&oacute;rio</a>
            </fieldset>
	</body>
</html>