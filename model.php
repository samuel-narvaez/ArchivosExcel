<?php

require_once("Conexion.php");
    
class Facultdad{

    public function getAll(){

        $connection = new Conexion();
        $connect = $connection->get_conexion();

        try {
            $sql = "SELECT * FROM facultad";
            $query = $connect->prepare($sql);
            $query->execute();
            $data = $query->fetchAll();
            $response = ['status' => 1, 'facultad' => $data];
        } catch (Exception $e) {
            $response = ['status' => 0, 'error' => $e];
        }

        return $response;
    }

    public function info($id){

        $connection = new Conexion();
        $connect = $connection->get_conexion();

        try {

            $sql = "SELECT * FROM facultad WHERE id=?";
            $query = $connect->prepare($sql);
            $data = [$id];
            $query->execute($data);
            $info = $query->fetch();
            $response = ['status' => 1, 'facultad' => $info];

        } catch (Exception $e) {

            $response = ['status' => 0, 'error' => $e];	    		
        }

        return $response;
    }
}


?>