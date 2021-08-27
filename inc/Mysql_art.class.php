<?php

    class Mysql_art implements iMysql_Connect{
        private $db;                
        public function __construct($db){
            $this->db=$db;        
        }
    
        public function getAll(){
            $query="SELECT * FROM articulos";
            return $this->db->execQuery($query);
        }
        //agregue este metodo 
        public function getById($id){
            $query="SELECT * FROM articulos WHERE id = {$id}";
            return $this->db->execQuery($query);
        }

        public function getByIdCategoria($id){
            $query="SELECT * FROM articulos WHERE id_categoria = {$id}";
            return $this->db->execQuery($query);
        }

        public function insert($id_categoria, $nombre, $precio, $stock, $url, $detalle){
            $query="INSERT INTO articulos " .
                "(id_categoria, nombre, precio, stock, url, detalle) VALUE ".
                "('{$id_categoria}','{$nombre}','{$precio}','{$stock}','{$url}','{$detalle}')";
            return $this->db->execQuery($query);
        }

        public function deleteById($id){
            $query="DELETE FROM articulos WHERE id={$id}";               
            return $this->db->execQuery($query);
        }

        public function updateById($id,$id_categoria, $nombre, $precio, $stock, $url, $detalle){
            $query="UPDATE articulos ".
            "SET id_categoria='{$id_categoria}', nombre= '{$nombre}', precio= '{$precio}', stock= '{$stock}', url= '{$url}', detalle= '{$detalle}'".
            "WHERE id='{$id}'";
            return $this->db->execQuery($query);
        }
    }

?>