<?php

namespace Controllers;

use \Core\Controller;

class HomeController extends Controller {

    public function index(){
        $dados = array(
            'tpl' => 'default'
        );

        $this->loadTemplate('home', $dados);
    }
}