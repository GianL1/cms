<?php 

namespace Controllers;

use \Core\Controller;
use \Models\Paginas;


class PaginasController extends Controller {
    public function index($url){
        $dados = array();

        $p = new Paginas();

        $dados = $p->getPagina($url);

        $this->loadTemplate('pagina', $dados);
    }
}