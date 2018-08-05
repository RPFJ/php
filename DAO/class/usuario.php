<?php

class Usuario{
    private $idUsuario;
    private $descLogin;
    private $descSenha;
    private $dtCadastro;

    
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    public function getDescLogin()
    {
        return $this->descLogin;
    }

    public function setDescLogin($descLogin)
    {
        $this->descLogin = $descLogin;

        return $this;
    }

    public function getDescSenha()
    {
        return $this->descSenha;
    }

    public function setDescSenha($descSenha)
    {
        $this->descSenha = $descSenha;

        return $this;
    }

    public function getDtCadastro()
    {
        return $this->dtCadastro;
    }

    public function setDtCadastro($dtCadastro)
    {
        $this->dtCadastro = $dtCadastro;

        return $this;
    }

    public function loadById($id){
        $sql = new Sql();

       $results = $sql->select("SELECT * FROM tb_usuarios where id_usuario = :ID", array(
            ":ID"=> $id
        )); 

        if(isset($results[0])){
            $row = $results[0];

            $this->setIdUsuario($row['id_usuario']);
            $this->setDescLogin($row['desc_login']);
            $this->setDescSenha($row['desc_senha']);
            $this->setDtCadastro(new DateTime($row['dt_cadastro']));
        }
    }

    public function __toString(){
        return json_encode(array(
            "idUsuario"=>$this->getIdUsuario(),
            "descLogin"=>$this->getDescLogin(),
            "descSenha"=>$this->getDescSenha(),
            "dtCadastro"=>$this->getDtCadastro()->format("d/m/Y H:i:s")
        ));
    }



}




?>