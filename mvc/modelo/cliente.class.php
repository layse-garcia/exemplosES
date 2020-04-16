<?php
require('../controle/dao.class.php');

class Cliente
	{
		private $nome;
		private $email;
		
		public function setNome($valor)
		{
			$this->nome = $valor;
		}
		
		public function getNome()
		{
			return $this->nome;
		}
		
		public function setEmail($valor)
		{
			$this->email = $valor;
		}
		
		public function getEmail()
		{
			return $this->email;
		}
		
		public function salvar()
		{
			$sql = 'INSERT INTO tb_cliente(nome_cliente, email_cliente) 
	        VALUES ("' . $this->nome . '","' . $this->email . '")';
			
			$acessobanco = new DAO();
			$sucesso = $acessobanco->executaSQL($sql);
			return $sucesso;
		}
	}
?>





