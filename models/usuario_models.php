<?php
class usuario{
    private $usuario;
    private $password;
    public function __construct($usuario,$password,$salt){

        $this->usuario = $usuario;
        $this->password = $password;
        $this->salt = $salt;

    }

    public function validar_usuario(){
        
        $tabla[]=["usuario"=>"Antony","password"=>"5fac7b5761a187a55fbc39f4756cdbee96e9fc55","salt"=>"982781867"];
        $tabla[]=["usuario"=>"Ismael","password"=>"d50a2fb54c7c48f89605515076c98ba3b69fd9b2","salt"=>"573853105"];
        foreach($tabla as $t){
            $pass = sha1($this->password.$t["salt"]);
            if($this->usuario == $t["usuario"] && $pass == $t["password"])
                return $t;
        }
        return [];
        
    }
}

?>