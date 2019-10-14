<?php
class DBController {
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "rishabh";
    private $conn;
    
    function __construct() {
        $this->conn = $this->connectDB();
    }   
    
    function connectDB() {
        $conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
        return $conn;
    }

    function insert($sql) {
        if(mysqli_query($this->conn,$sql))
        return true;
        else
        return false;
    }

    function check($sql) {
        $result=mysqli_query($this->conn,$sql);
        if(mysqli_num_rows($result)>0)
        return true;
        else
        return false;
    }

    function runBase($sql) {
        $result = mysqli_query($this->conn,$sql); 
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                $resultset[] = $row;
            }
        }
        return $resultset;
    }
}
?>