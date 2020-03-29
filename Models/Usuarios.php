<?php
namespace Models;

use \Core\Model;

class Usuarios extends Model {

    public function index(){
        
    }

    public function verificarLogin(){
        if(!isset($_SESSION['lgpainel']) || isset($_SESSION['lgpainel']) && empty($_SESSION['lgpainel'])) {
            header('Location:'.BASE_URL.'painel/login');
            exit;
        }
    }

    public function logar($email, $senha){
        $retorno = '';

        $sql = $this->db->prepare("SELECT id FROM usuarios WHERE email = :email AND senha = :senha");
        $sql->bindValue(":email", $email);
        $sql->bindValue(":senha", $senha);
        $sql->execute();

        if($sql->rowCount() > 0){
            $f = $sql->fetch();

            $_SESSION['lgpainel'] = $f['id'];

            header("Location:".BASE_URL.'painel');
        }else {
            $retorno = 'Email e/ou senha incorretos';
        }

        return $retorno;
    }

    public function logout(){
        unset($_SESSION['lgpainel']);
        header("Location:".BASE_URL.'painel');
    }
}