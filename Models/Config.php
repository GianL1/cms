<?php 

namespace Models;
use \Core\Model;

class Config extends Model {

    public function getConfig(){
        $array = array();

        $sql = $this->db->query("SELECT * FROM config");
        
        if($sql->rowCount() > 0) {
            foreach($sql->fetchAll() as $c) {
                $array[$c['name']] = $c['valor'];
            }
        }

        return $array;
    }

    public function setPropriedade($nome, $valor){
        $sql = $this->db->prepare("UPDATE config SET valor = :valor WHERE name = :name");
        $sql->bindValue(":valor", $valor);
        $sql->bindValue(":name", $nome);
        $sql->execute();
    }
}