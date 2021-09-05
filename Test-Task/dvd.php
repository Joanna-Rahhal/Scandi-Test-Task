<?php
require_once 'require.php';
ob_start();
class DVD extends Products{
    private $size;

    public function insertDvd(){
        
        if(isset($_POST['type'])){
            $this->size=$_POST['size'];
            if($_POST['type']==="DVD"){
                $sql = 'INSERT INTO dvd (`size`)
                VALUES(:size)';
                $result =$this->db_connect()->prepare($sql);
                $res= $result->execute(array(":size"=>$this->size));
                header("Location: index.php");
                ob_end_flush();
            }

        }
    }
}