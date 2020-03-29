<?php

namespace Models;

use \Core\Model;

class Menu extends Model {
    
    public function getMenu($id = 0){

        $array = array();

        if ($id > 0 ) {
            $sql = $this->db->prepare("SELECT * FROM menu WHERE id = :id");
            $sql->bindValue(":id", $id);
            $sql->execute();

            if($sql->rowCount() > 0) {

                $array = $sql->fetch();
        }

            return $array;
        }else{

            $sql = $this->db->query("SELECT * FROM menu");

            if($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            }

            return $array;
        }
        

        
    }

    public function add($nome, $url){
        $sql = $this->db->prepare("INSERT INTO menu SET nome =:nome, url = :url");
        $sql->bindValue(":nome", $nome);
        $sql->bindValue(":url", $url);
        $sql->execute(); 
    }

    public function delete($id){
        $sql = $this->db->prepare("DELETE FROM menu WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();
    }

    public function update($nome, $url, $id){
        $sql = $this->db->prepare("UPDATE menu SET nome = :nome, url = :url WHERE id = :id");
        $sql->bindValue(":nome", $nome);
        $sql->bindValue(":url", $url);
        $sql->bindValue(":id", $id);
        $sql->execute(); 
    }
    
}