<?php 
ob_start();
class Furniture extends Products{
    private $height;
    private $length;
    private $width;

    public function insertFurniture(){
        

        if(isset($_POST['type'])){
            $this->height=$_POST['height'];
            $this->length=$_POST['length'];
            $this->width=$_POST['width'];
            if($_POST['type']==="Furniture"){
                $sql= 'INSERT INTO furniture(`height`, `length`, `width`)
                VALUES(:height, :length, :width)';

                $result= $this->db_connect()->prepare($sql);
                $res=$result->execute(array(":height"=>$this->height, ":length"=>$this->length, ":width"=>$this->width));
                header("Location: index.php");
                ob_end_flush();
            }
        }

    }
}