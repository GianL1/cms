<?php

namespace Controllers;

use \Core\Controller;
use \Models\Usuarios;
use \Models\Paginas;
use \Models\Menu;
USE \Models\Config;

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

    public function pagina_add(){
        $dados = array();
        $paginas = new Paginas();
        

        if(isset($_POST['titulo']) && !empty($_POST['titulo'])) {
            $titulo = addslashes($_POST['titulo']);
            $corpo = addslashes($_POST['corpo']);
            $url = addslashes($_POST['url']);

            $paginas->insert($titulo, $corpo, $url);

            if(isset($_POST['add_menu']) && !empty($_POST['add_menu'])) {
                $menu = new Menu();
                $menu->insert($titulo, $url);
            }
            

            header("Location:".BASE_URL.'painel/');
        }
        $this->loadTemplateInPainel("painel/add_pagina", $dados);
    }

    public function pagina_del($id){

        $usuarios = new Usuarios();
        $usuarios->verificarLogin();

        $paginas = new Menu();
        $paginas->delete($id);

        header("Location:".BASE_URL.'painel/menus');

        
    } 

    public function pagina_edit($id){
        $usuarios = new Usuarios();
        $pagina = new Paginas();
        $usuarios->verificarLogin();

        $dados = array(
            'pagina' => array()
        );
        
        

        if(isset($_POST['titulo']) && !empty($_POST['titulo'])) {

            $titulo = addslashes($_POST['titulo']);
            $url = addslashes($_POST['url']);
            $corpo = addslashes($_POST['corpo']);

            $pagina->update($titulo, $corpo, $url, $id);

            header("Location:".BASE_URL.'painel/');
        }

        
        $dados['pagina'] = $pagina->getPaginaById($id);

        $this->loadTemplateInPainel('painel/edit_pagina',$dados);
        
    } 

    public function config(){
        $usuarios = new Usuarios();
        $usuarios->verificarLogin();
        $dados = array();

        if(isset($_POST['site_title']) && !empty($_POST['site_title'])) {

            $site_title = addslashes($_POST['site_title']);
            $home_welcome = addslashes($_POST['home_welcome']);
            $site_template = addslashes($_POST['site_template']);

            $c = new Config();
            $c->setPropriedade('site_title',$site_title);
            $c->setPropriedade('home_welcome',$home_welcome);
            $c->setPropriedade('site_template',$site_template);

            header("Location:".BASE_URL."painel/config");
        }

        $this->loadTemplateInPainel('painel/config',$dados);
    }
}