<?php 
ob_start();
class Book extends Products{
    private $weight;

    public function insertBook(){
        
        if(isset($_POST['type'])){
            $this->weight=$_POST['weight'];
            if($_POST['type']==="Book"){
                $sql = 'INSERT INTO book (`weight`)
                VALUES(:weight)';
                $result =$this->db_connect()->prepare($sql);
                $res= $result->execute(array(":weight"=>$this->weight));
                header("Location: index.php");
                ob_end_flush();
            }
        }
    }
}