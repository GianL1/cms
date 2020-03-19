<?php

namespace Models;

use \Core\Model;

class Menu extends Model {
    
    public function getMenu(){
        $array = array();

        $sql = $this->db->query("SELECT * FROM menu");

        if($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }
    
}