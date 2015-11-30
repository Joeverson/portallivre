<?php
namespace modules\admin\slider\model;
use models\database;

class DBSlide extends database{
//create
    public function insertSlide($array){
        try{
            var_dump($array);
            $stmt = $this->conn->prepare("INSERT INTO slider(url) VALUES(:url)");
            $stmt->execute($array);
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }
//update
    public function updateUser($array, $id)
    {
        try {
            if (array_key_exists(":pass", $array)) {
                $stmt = $this->conn->prepare("UPDATE usuarios set name = '" . $array[':name'] . "', pass = '" . $array[':pass'] . "', email = '" . $array[':email'] . "',  id_tipo = '" . $array[':cat'] . "' WHERE id = '" . $id . "'");
                $stmt->execute($array);
            } else {
                $stmt = $this->conn->prepare("UPDATE usuarios set name = '" . $array[':name'] . "',  email = '" . $array[':email'] . "',  id_tipo = '" . $array[':cat'] . "' WHERE id = '" . $id . "'");
                $stmt->execute($array);
            }
            return true;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function updateSlider($array)
    {
        try {
            $stmt = $this->conn->prepare("UPDATE slider set url= '" . $array['url'] . "' WHERE id_slider = '" . $array['id_slider']. "'");
            $stmt->execute($array);
            return true;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
 // views

    public function existSlider($id){
        try{
            $stmt = $this->conn->query("select * from slider where id_slider=".$id);
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
 * lugar especifico onde o slider ira ficar.
 * */
    public function getSliderForType($id){
        $rs = $this->conn->query("SELECT * FROM slider where id_slider=".$id);
        return $rs->fetch(\PDO::FETCH_ASSOC);
    }

    public function selectUser($id){ // retorna um array com as informações de acordo com o mês
        $rs = $this->conn->query("SELECT name, id, email, name_cat FROM usuarios inner JOIN tipos on usuarios.id_tipo = tipos.id_tipo WHERE usuarios.id = '".$id."'");
        if(($rs == false) || ($rs == NULL))
            return false;

        foreach($rs as $k)
            return $k;

    }

}