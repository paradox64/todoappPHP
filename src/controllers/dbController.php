<?php

namespace app\controllers;

class dbController{

    private  $servername;
    private  $database;
    private  $username;
    private  $password;
    private  $connection;

    public function __construct(){
        $this->servername = "localhost";
        $this->database = "to_doapp_db";
        $this->username = "root";
        $this->password = "";
    }

    public function connect(){
        try{
            $this->connection=mysqli_connect($this->servername,$this->username,$this->password,$this->database);
            echo 'connected';
        } catch (Exception $e){
            echo 'Excepción capturada: ',  $e->getMessage(), "\n";
        }
        
    }

    public function disconnect(){
        mysqli_close($this->connection);
    }
    
    public function getConnection(){
        
        return $this->connection;
    }

}



?>