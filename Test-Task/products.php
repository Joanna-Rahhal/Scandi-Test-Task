<?php 
require_once 'require.php';
class Products extends Database{
    protected $sku;
    protected $name;
    protected $price;
    protected $type;
    protected $ID;

    public function getDvds(){
        $stmt = $this->db_connect()->prepare('SELECT * FROM product_list where type="dvd" ORDER BY ID');
        $stmt->execute();
        $stmt2 = $this->db_connect()->prepare('SELECT size FROM dvd');
        $stmt2->execute();
        while($size = $stmt2->fetch()){
            while($row = $stmt->fetch()){
            echo '<div class="product">'.
            '<input type="checkbox" class="delete-checkbox" name="check[]" value ="'. $row['ID'].'">';
            echo '<p>'.$row['sku']. '<br>' .$row['name']. '<br>'.$row['price'].'$'.' <br>'.$size['size'].'MB'.'</p>';
            echo '</div>';
        } 
        }
    }
    public function getBooks(){
        $stmt = $this->db_connect()->prepare('SELECT * FROM product_list WHERE type="book" ORDER BY ID');
        $stmt->execute();
        $stmt2 = $this->db_connect()->prepare('SELECT weight FROM book');
        $stmt2->execute();
        while($weight = $stmt2->fetch()){
        while($row = $stmt->fetch()){
            echo '<div class="product">'.
            '<input type="checkbox" class="delete-checkbox" name="check[]"  value ="'. $row['ID'].'">';
            echo '<p>'.$row['sku']. '<br>' .$row['name']. '<br>'.$row['price'].'$'.' <br>'.$weight['weight'].'KG'.'</p>';
            echo '</div>';} 
        }
    }
    public function getFurniture(){
        $stmt = $this->db_connect()->prepare('SELECT * FROM product_list where type="furniture" ORDER BY ID');
        $stmt->execute();
        $stmt2 = $this->db_connect()->prepare('SELECT * FROM furniture');
        $stmt2->execute();
        while($f = $stmt2->fetch()){
        while($row = $stmt->fetch()){
            echo '<div class="product">'.
            '<input type="checkbox" class="delete-checkbox" name="check[]" value="'. $row["ID"].' ">';
            echo '<p>'.$row['sku']. '<br>' .$row['name']. '<br>'.$row['price'].'$'.' <br>'.$f['height'].'x'.$f['width'].'x'.$f['length']. '</p>';
            echo '</div>';
        } 
        }
    }
 
    public function insertProduct(){
        if(isset($_POST['add'])){
        $this->sku =$_POST['sku'];
            $this->name=$_POST['name'];
            $this->price=$_POST['price'];
            $this->type=$_POST['type'];
                $sql = 'INSERT INTO product_list (`sku`, `name`, `price`,`type`)
                VALUES(:sku, :name, :price,:type)';
                $result =$this->db_connect()->prepare($sql);
                $res= $result->execute(array(":sku"=>$this->sku,":name"=>$this->name,":price"=>$this->price,":type"=>$this->type));
                
        }
    }

    
    public function deleteProduct(){
        if(isset($_POST['delete-product-btn'])){
            if(isset($_POST['check'])){
                foreach($_POST['check'] as $id){
                    $stmt=$this->db_connect()->prepare("DELETE FROM product_list WHERE ID= $id");
                    // $stmt->bindParam('id', $id);
                    $stmt->execute();
                }
            }
        }
    }
    
}