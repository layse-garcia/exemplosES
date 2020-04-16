<?php
    require('../controle/dao_cliente.class.php');
    class Cliente
    {
        private $nome;
        private $email;
        
        public function setNome($valor)
        {
            $this->nome=$valor;
        }
        public function setEmail($valor)
        {
            $this->email=$valor;
        }
        
        public function getNome()
        {
            return $this->nome;
        }
        public function getEmail()
        {
            return $this->email;
        }
        
        public function salvar()
        {
            $sql="INSERT INTO tb_cliente(nome_cliente,email_cliente)
                  VALUES ('".$this->nome."','".$this->email."')";
            $acessobd= new DAO();
            $resposta=$acessobd->executaSQL($sql);
            echo '<a href="lista_cliente.frm.php">Lista de Clientes</a><br><br>';
            return $resposta;
        }
        
        public function buscaClientes()
        {
            $sql="SELECT * FROM tb_cliente";
            $acessobd= new DAO();
            $resposta=$acessobd->executaSQL($sql);
            
            $tabe= '<table border="1px">
                    <tr>
			<th>C&oacute;digo</th>
			<th>Nome:</th>
			<th>E-mail:</th>
			<th>Excluir &#10006;</th>
                    </tr>';
            while ($linha=mysqli_fetch_row($resposta))
            {
                $tabe.= '<tr>
			<td>'.htmlentities($linha[0]).'</td>
			<td>'.htmlentities($linha[1]).'</td>
			<td>'.htmlentities($linha[2]).'</td>
			<td><center><a href="excluir_cliente.post.php?codigo='.$linha[0].'">&#10006;</a></td>
                    </tr>';
            }
            $tabe.= '</table>';
            return $tabe;
        }
        
        public function excluir($codigo)
        {
            $sql = "DELETE FROM tb_cliente WHERE id_cliente ='".$codigo."';";
            $acessobd= new DAO();
            $resposta=$acessobd->executaSQL($sql);
            echo 'Deletou.<br><a href="lista_cliente.frm.php">Voltar</a>';
            return $resposta;
        }
        
        
    }
?>
