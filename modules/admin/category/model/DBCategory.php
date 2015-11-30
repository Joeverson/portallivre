<?php
namespace modules\admin\category\model;
use models\database;

class DBCategory extends database{

    public function insertCategory($array){
        try{
            $stmt = $this->conn->prepare("INSERT INTO category (category) VALUES (:category)");
            $stmt->execute($array);
            return $stmt->errorCode();
        }catch(\Exception $e){
            throw new \Exception($e->getMessage());
        }
    }

//gets


    public function getAllCategorys(){
        return $this->conn->query("select * from category")->fetchAll(\PDO::FETCH_ASSOC);
    }


    public function getArtigoById($id){
        $rs = $this->conn->query("select * from artigos join category on artigos.cat_artigo=category.id_category join user ON artigos.id_user=user.id_user where artigos.id_artigo=".$id);
        return $rs->fetch(\PDO::FETCH_ASSOC);
    }

    public function getProjectsById($id){
        $rs = $this->conn->query("select * from artigos where id_artigo=".$id);
        return $rs->fetch(\PDO::FETCH_ASSOC);
    }

}