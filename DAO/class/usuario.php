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

    public static function getList(){
        $sql = new Sql();

        return $sql->select("SELECT * FROM tb_usuarios ORDER BY desc_login"); 
    }

    public function search($login){
        $sql = new Sql();

        return $sql->select("SELECET * FROM tb_usuarios WHERE desc_login LIKE :SEARCH ORDER BY DESC_LOGIN", array(
            ':SEARCH'=>"%".$login."%"
        ));
    }

    public function login($login, $password){
        $sql = new Sql(); 
        $results = $sql->select("SELECT * FROM tb_usuarios where desc_login = :LOGIN AND desc_senha = :PASSWORD " , array(
            ":LOGIN"=> $login, 
            ":PASSWORD"=>$password
        )); 

        if(isset($results[0])){
            $row = $results[0];

            $this->setIdUsuario($row['id_usuario']);
            $this->setDescLogin($row['desc_login']);
            $this->setDescSenha($row['desc_senha']);
            $this->setDtCadastro(new DateTime($row['dt_cadastro']));
        }else{
            throw new Exception("Login e/ou senha inválidos"); 
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