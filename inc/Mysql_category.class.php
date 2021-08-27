<?php

    class Mysql_category implements iMysql_Connect{
        private $db;
        
        public function __construct($db){
            $this->db=$db;
        }
        public function getAll(){
            $query="SELECT * FROM categoria";
            return $this->db->execQuery($query);
        }
        //agregue este metodo 
        public function getById($id){
            $query="SELECT * FROM categoria WHERE id = {$id}";
            return $this->db->execQuery($query);
        }

        public function insert($nombre){
            $query="INSERT INTO categoria " .
                "(nombre) VALUE ".
                "('{$nombre}')";
            return $this->db->execQuery($query);
        }

        public function deleteById($id){
            $query="DELETE FROM categoria WHERE id={$id}";               
            return $this->db->execQuery($query);
        }

        public function updateById($id,$nombre){
            $query="UPDATE categoria ".
            "SET id_articulo='{$nombre}'".
            "WHERE id='{$id}'";
            return $this->db->execQuery($query);
        }
    }

?>