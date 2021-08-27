<?php

class Mysql_message implements iMysql_Connect{
    private $db;
    public function __construct($db){
        $this->db=$db;
    }
    public function getAll(){
        $query="SELECT * FROM messages";
        return $this->db->execQuery($query);
    }

    public function insert($id_articulo,$id_user,$message){
        $id_articulo=$this->db->escStr($id_articulo);
        $id_user=$this->db->escStr($id_user);
        $message=$this->db->escStr($message);

        $query="INSERT INTO messages " .
               "(id_articulo,id_user,message) VALUE ".
               "('{$id_articulo}','{$id_user}','{$message}')";
        return $this->db->execQuery($query);
    }

    public function deleteById($id){
        $id=$this->db->escStr($id);
        
        $query="DELETE FROM messages WHERE id={$id}";               
        return $this->db->execQuery($query);
    }

    public function updateById($id,$id_articulo,$id_user,$message){
        $id=$this->db->escStr($id);
        $id_articulo=$this->db->escStr($id_articulo);
        $message=$this->db->escStr($message);

        $query="UPDATE messages ".
        "SET id_articulo='{$id_articulo}',id_user='{$id_user}',message='{$message}'".
        "WHERE id='{$id}'";
        return $this->db->execQuery($query);
    }
}