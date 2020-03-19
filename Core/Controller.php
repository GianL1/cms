<?php

namespace Core;

use \Models\Config;
use \Models\Menu;

class Controller {

    private $config;

    public function __construct(){
        $cfg = new Config();
        $this->config = $cfg->getConfig();
    }

    public function loadTemplate($view, $dados = array()){
        require "Views/templates/".$this->config['site_template'].".php";
    }
    public function loadViewInTemplate($view, $dados = array()){
        extract($dados);
        require "Views/".$view.".php";
    }

    public function loadView($view, $dados){
        extract($dados);
        include "Views/templates/".$view.".php";
    }

    public function loadMenu(){
        $m = array();
        $menu = new Menu();

        $m['menu'] = $menu->getMenu();

        $this->loadView("menu", $m);
    }
}