<?php

class DBController 
{
    protected $serverName = "localhost";
    protected $dBusername = "root";
    protected $dBpassword = "";
    protected $dBname = "webshop";
    
    public $conn = null;
    public function __construct(){
        

        $this->conn = mysqli_connect($this->serverName, $this->dBusername, $this->dBpassword, $this->dBname);
                echo 'success';

        if($this->conn->connect_error){
            echo 'Failed';
            die("Connection failed:".$this->conn->connect_error);
        }
    }
    public function __destruct()
    {
        $this->closeConnection();
    }

    protected function closeConnection(){
        if ($this->conn != null ){
            $this->conn->close();
            $this->conn = null;
        }
    }
}