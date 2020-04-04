<?php 

namespace Models;

use \Core\Model;

class Paginas extends Model {
    public function getPagina($url){
        $array = array();

        $sql = $this->db->prepare("SELECT titulo, corpo, url FROM paginas WHERE url =:url");
        $sql->bindValue(":url", $url);
        $sql->execute();

        if($sql->rowCount() > 0) {
            $array = $sql->fetch();
        }

        return $array;
    }

    public function getPaginaById($id){
        $array = array();

        $sql = $this->db->prepare("SELECT titulo, url, corpo FROM paginas WHERE id =:id");
        $sql->bindValue(":id", $id);
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

    public function insert($titulo, $corpo, $url){
        $sql = $this->db->prepare("INSERT INTO paginas SET titulo = :titulo, corpo = :corpo, url = :url");
        $sql->bindValue(":titulo", $titulo);
        $sql->bindValue(":url", $url);
        $sql->bindValue(":corpo", $corpo);
        $sql->execute();

        return $this->db->lastInsertId();
    }

    public function delete($id){
        $sql = $this->db->prepare("DELETE FROM paginas WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();
    }

    public function update($titulo, $url, $corpo, $id){
        $sql = $this->db->prepare("UPDATE paginas SET titulo = :titulo, url = :url, corpo = :corpo WHERE id = :id");
        $sql->bindValue(":titulo", $titulo);
        $sql->bindValue(":url", $url);
        $sql->bindValue(":corpo", $corpo);
        $sql->bindValue(":id", $id);
        $sql->execute(); 
    }
}