<?php

class acesso{
    var $servidor= "localhost";
    var $utilizador ="root";
    var $password="12345678";
    var $basedados="bdlivros";
    var $ligacao;

    function ligar(){
        $this->ligacao=mysqli_connect($this->servidor, $this->utilizador, $this->password, $this->basedados);
    }


}

?>