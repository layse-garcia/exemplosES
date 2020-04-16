<?php
    class Aluno{
        private $nome;
        private $idade;
        private $nota;
        
        public function setNome($valor){
            $this->nome = $valor;
        }
        public function setNota($valor){
            $this->nome = $valor;
        }
        public function setIdade($valor){
            $this->nome = $valor;
        }
        public function getNome(){
            return $this->nome;
        }
        public function getNota(){
            return $this->nota;
        }
        public function getIdade(){
            return $this->idade;
        }
	public function salvarAluno()
	{
            $sql = 'INSERT INTO tb_aluno(nome_aluno, idade_aluno, nota_aluno) 
            VALUES ("' . $this->nome . '","' . $this->email . '","'.$this->nota.'")';
		
            $acessobanco = new DAO();
            $sucesso = $acessobanco->executaSQL($sql);
            return $sucesso;
	}
    }
?>