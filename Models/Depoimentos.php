<?php 

namespace Models;

use \Core\Model;

class Depoimentos extends Model {

    public function getDepoimentos($limit = 0){
        $array = array();

        if($limit > 0) {
            $sql = $this->db->query("SELECT * FROM depoimentos LIMIT $limit");
            
        }else{
            
            $sql = $this->db->query("SELECT * FROM depoimentos");
        }

        if($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }
}