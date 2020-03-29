<?php

namespace Controllers;

use \Core\Controller;
use \Models\Usuarios;
use \Models\Paginas;
use \Models\Menu;

class PainelController extends Controller{
    
    public function index(){
        $dados = array();
        
        $usuarios = new Usuarios();
        $usuarios->verificarLogin();

        $p = new Paginas();

        $dados['paginas'] = $p->getPaginas();

        $this->loadTemplateInPainel('painel/home',$dados);
    }

    public function menus(){
        $dados = array();
        
        $usuarios = new Usuarios();
        $usuarios->verificarLogin();

        $m = new Menu();

        $dados['menus'] = $m->getMenu();

        $this->loadTemplateInPainel('painel/menus',$dados);
    }

    public function login(){
        $dados = array(
            'erro' => ''
        );

        if(isset($_POST['email']) && !empty($_POST['email'])) {
            $email = addslashes($_POST['email']);
            $senha = md5($_POST['senha']);

            $usuarios = new Usuarios();
            $dados['erro'] = $usuarios->logar($email, $senha);
        }
        $this->loadView('painel/login');
    }

    public function logout(){
        $usuarios = new Usuarios();
        $usuarios->logout();
    }

    public function menus_add(){
        
        $usuarios = new Usuarios();
        $m = new Menu();
        $usuarios->verificarLogin();
        

        if(isset($_POST['nome']) && !empty($_POST['nome'])) {
            $nome = $_POST['nome'];
            $url = $_POST['url'];

            $m->add($nome, $url);

            header("Location:".BASE_URL.'painel/menus');
        }

        $this->loadTemplateInPainel('painel/add_menu');
    }

    public function menus_del($id){

        $usuarios = new Usuarios();
        $usuarios->verificarLogin();

        $m = new Menu();

        $m->delete($id);

        header("Location:".BASE_URL.'painel/menus');

        
    } 


    public function menus_edit($id){
        $usuarios = new Usuarios();
        $m = new Menu();

        $dados = array(
            'menu' => array()
        );
        
        $usuarios->verificarLogin();

        if(isset($_POST['nome']) && !empty($_POST['nome'])) {
            $nome = $_POST['nome'];
            $url = $_POST['url'];

            $m->update($nome, $url, $id);

            header("Location:".BASE_URL.'painel/menus');
        }

        
        $dados['menu'] = $m->getMenu($id);

        $this->loadTemplateInPainel('painel/edit_menu',$dados);


        

        
    } 
}