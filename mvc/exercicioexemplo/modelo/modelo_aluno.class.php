<?php
    require('../controle/dao_escola.class.php');
    class Aluno
    {
        private $nome;
        private $email;
        private $nasc;
        private $sexo;
        //SET
        public function setNome($valor)
        {
            $this->nome=$valor;
        }
        public function setEmail($valor)
        {
            $this->email=$valor;
        }
        public function setNasc($valor)
        {
            $this->nasc=$valor;
        }
        public function setSexo($valor)
        {
            $this->sexo=$valor;
        }
        //GET
        public function getNome()
        {
            return $this->nome;
        }
         public function getEmail()
        {
            return $this->email;
        }
         public function getNasc()
        {
            return $this->nasc;
        }
         public function getSexo()
        {
            return $this->sexo;
        }
        //OUTRAS FUNCTIONS
        public function salvar()
        {
            $sql="INSERT INTO tb_aluno(nome_aluno,email_aluno,nasc_aluno,sexo_aluno)
                   VALUES('".$this->nome."','".$this->email."','".$this->nasc."','".$this->sexo."')";
            $acessabanco= new DAO();
            $resultado=$acessabanco->executaSQL($sql);
            echo '<a href="lista_alunos.frm.php">Lista de Clientes</a><br><br>';
            return $resultado;
        }
        
        public function buscaAlunos()
        {
            $sql="SELECT * FROM tb_aluno";
            $acessobd= new DAO();
            $resposta=$acessobd->executaSQL($sql);
            
            $tabe= '<table border="1px">
                    <tr>
			<th>C&oacute;digo</th>
			<th>Nome:</th>
			<th>E-mail:</th>
                        <th>Data de Nascimento:</th>
                        <th>Sexo:</th>
			<th>Excluir &#10006;</th>
                    </tr>';
            while ($linha=mysqli_fetch_row($resposta))
            {
                $tabe.= '<tr>
			<td>'.htmlentities($linha[0]).'</td>
			<td>'.htmlentities($linha[1]).'</td>
			<td>'.htmlentities($linha[2]).'</td>
                        <td>'.htmlentities($linha[3]).'</td>
                        <td>'.htmlentities($linha[4]).'</td>
			<td><center><a href="excluir_aluno.post.php?codigo='.$linha[0].'">&#10006;</a></td>

                    </tr>';
            }
            $tabe.= '</table>';
            return $tabe;
        }
        
        public function excluir($codigo)
        {
            $sql = "DELETE FROM tb_aluno WHERE id_aluno ='".$codigo."';";
            $acessobd= new DAO();
            $resposta=$acessobd->executaSQL($sql);
            echo 'Deletou.<br><a href="lista_alunos.frm.php">Voltar</a>';
            return $resposta;
        }
        
    }
?>

