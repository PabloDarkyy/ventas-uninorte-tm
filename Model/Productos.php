<?php

// la clase producto hereda las funciones de la clase conectar
    class Producto extends Conectar
    {
        //obtiene todos los productos de la basede datos
        public  function get_producto(){
            //entablece  la conexion
            $conectar = parent::conexion();
            //codificacion de caracteres
            parent::set_names();
            //consulta  sql
            $sql = "SELECT * FROM tm_producto WHERE est = 1";
            $sql = $conectar->prepare($sql);

            $sql = execute();
            $resultado = $sql->fetchAll();
            
            return $resultado;



        }
    }
?>