<?php 
include "databaseAd.php";
class m_cate extends database {
    public function read_cate() {
        $sql = "select * from categories ";
        $this->setQuery($sql);
        return $this->execute();
    }
    public function read_all_cate(){
        $sql = "select * from categories ";
        $this ->setQuery($sql);
        return $this->loadAllRows();
    }
    public function delete_cate_byid($id){
        $sql = "delete from categories where cate_id =? ";
        $this ->setQuery($sql);
        return $this -> execute(array($id));
    }
    public function insert_cate($name){
        $sql = "insert into categories (name) values (?)  ";
        $this ->setQuery($sql);
        return $this -> execute(array($name));
    }
    public function update_cate($name, $id){
        $sql = "update categories set name=? where cate_id =?";
        $this ->setQuery($sql);
        return $this -> execute(array($name, $id));
    }
    public function update_cate_byid($id){
        $sql = "select * from categories where cate_id =?";
        $this -> setQuery($sql);
        return $this -> loadRow(array($id));
    }
}