<?php 

namespace Models;

use \Core\Model;

class Paginas extends Model {
    public function getPagina($url){
        $array = array();

        $sql = $this->db->prepare("SELECT titulo, corpo FROM paginas WHERE url =:url");
        $sql->bindValue(":url", $url);
        $sql->execute();

        if($sql->rowCount() > 0) {
            $array = $sql->fetch();
        }

        return $array;
    }

    public function getPaginas(){
        $array = array();

        $sql= $this->db->query("SELECT id, url, titulo FROM paginas");

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }

        return $array;
    }
}