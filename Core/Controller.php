<?php

namespace Core;

class Controller {

    public function loadTemplate($view, $dados = array()){
        require "Views/template.php";
    }
    public function loadViewInTemplate($view, $dados = array()){
        extract($dados);
        require "Views/".$view.".php";
    }
}