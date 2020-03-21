<?php

namespace Controllers;

use \Core\Controller;
use \Models\Depoimentos;

class HomeController extends Controller {

    public function index(){
        $dados = array(
            'tpl' => 'default',
            'depoimentos' => array()
        );

        //Codigo para pegar os depoimentos
        $depo = new Depoimentos();
        $dados['depoimentos'] = $depo->getDepoimentos(2);

        $this->loadTemplate('home', $dados);
    }
}