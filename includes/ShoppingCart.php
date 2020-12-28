<?php



class ShoppingCart {


public $db = null;


public function __construct(DBController $db){
    if(!isset($db->conn)) return null;
    $this->db = $db;
}
public function insertIntoShoppingCart($params=null, $table='cart'){
    if($this->db->conn!=null){
        if($params !=null){
            $columns = implode(',', array_keys($params));
            print_r($columns);
            $values = implode(',', array_values($params));
            print_r($values);

            //query
            $query = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);
            $result=$this->db->conn->query($query);
            return $result;
        }
    }
}
//get userID, productID, insert to cart
public function addToShoppingCart($userID, $productID){
    if(isset($userID) && isset($productID)){
        $params = array(
            "userID"=>$userID,
            "productID"=>$productID
        );
        //insert to cart
        $result = $this->insertIntoShoppingCart($params);
        if($result){
            //Reload
            header("Location:".$_SERVER['PHP_SELF']);
        }
    }
}

public function deleteFromShoppingCart($productID=null, $table='cart'){
    echo $productID;
    if($productID != null){
        $result=$this->db->conn->query("DELETE FROM {$table} WHERE productID={$productID};");
        if($result){
            //header("Location:" . $_SERVER['PHP_SELF']);
        }
        return $result;
    }


}

public function findTotal ($arr){
    if(isset($arr)){
        $sum = 0;
        foreach($arr as $product){
            $sum += floatval($product[0]);
        }
        return sprintf("%.2f", $sum);
    }
}

public function getCartID ($cartArray = null, $key="productID"){
    if($cartArray != null){
        $cartID = array_map(function($value) use($key){
            return $value[$key];
        },
        $cartArray);
        return $cartID;
    }
}







}