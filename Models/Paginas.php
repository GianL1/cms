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
}