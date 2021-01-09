<?php


class Product{
    public $db = null;

    public function __construct(DBController $db){
        if(!isset($db->conn)) 
            return null;
        $this->db = $db;
    }

    public function getData ($table="products"){
        $result = $this->db->conn->query("SELECT * FROM {$table};");

        $resultArray = array();

        while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray [] = $item;   
        }
        return $resultArray;
    }
    public function getDataFeatured($table="products"){
        $result = $this->db->conn->query("SELECT * FROM ($table) GROUP BY productPrice LIMIT 3;");
        $resultArray = array();
        while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray [] = $item;
        }
        return $resultArray;
    }
    public function getDataSelected($table = "cart"){
        $idsession = 0;
        if(isset($_SESSION['userID'])){
            $idsession = $_SESSION['userID'];
        }
        $result = $this->db->conn->query("SELECT * FROM ($table) WHERE userID = $idsession");
        $resultArray = array();
        while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray [] = $item;
        }
        return $resultArray;
    }
    public function getProduct($productID=null, $table="products"){
        if(isset($productID)){
            $result = $this->db->conn->query("SELECT * FROM {$table} WHERE productID={$productID};");
            $resultArray = array();

            while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArray [] = $item;   
            }
            return $resultArray;
        }
    }



    
}