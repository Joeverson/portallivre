<?php
namespace modules\admin\colunista\model;
use models\database;

class DBColunista extends database{
//create
//todo sem suporte por em quanto a imagem
    public function insertColunista($array){
        try{
            $stmt = $this->conn->prepare("INSERT INTO colunista(title, content, id_user) VALUES(:title, :content, :id_user)");
            $stmt->execute($array);
            return $stmt->errorCode();
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }
//update

    public function updateColunista($array)
    {
        try {
            $stmt = $this->conn->prepare("UPDATE colunista set url= '" . $array['url'] . "' WHERE id_colunista = '" . $array['id_colunista']. "'");
            $stmt->execute($array);
            return true;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
 // views

    public function existColunista($id){
        try{
            $stmt = $this->conn->query("select * from colunista where id_colunista=".$id);
            return $stmt->fetchAll(\PDO::FETCH_ASSOC)[0];
        }catch(\PDOException $e){
            return $e->getMessage();
        }
    }


// delete

    public function deleteUser($id){
        try{
            $stmt = $this->conn->prepare("DELETE FROM usuarios WHERE id = '".$id."'");
            $stmt->execute();

            return true;
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

//gets

/*
 * os tipos é de 1 a sei la qunado onde cada numero significa um
 * lugar especifico onde o colunista ira ficar.
 * */
    public function getColunista(){
        $rs = $this->conn->query("SELECT * FROM colunista");
        return $rs->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getColunistaForLimit($limit){
        $rs = $this->conn->query("SELECT * FROM colunista limit ".$limit);
        return $rs->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function selectUser($id){ // retorna um array com as informações de acordo com o mês
        $rs = $this->conn->query("SELECT name, id, email, name_cat FROM usuarios inner JOIN tipos on usuarios.id_tipo = tipos.id_tipo WHERE usuarios.id = '".$id."'");
        if(($rs == false) || ($rs == NULL))
            return false;

        foreach($rs as $k)
            return $k;

    }

}