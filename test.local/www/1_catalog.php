<?php 
session_start();
require_once('db.php');
global $DBlink;
$catalog_cart = [];
$result = mysqli_query($DBlink, 'select * from goods where 1');
    $images = [];
    while($row = mysqli_fetch_assoc($result)){
            $goods[] = $row;
    }
    foreach($goods as $good){ 
        ?>
            <div class="goods_item">
                <p><?php echo $good['name']?> </p> 
                <p><?php echo $good['price']?> </p>
                <form method="POST" action="/catalog.php">
                <input type="hidden" name="good_id" value="<?php echo $good['id']?>">
                <input type="submit" name="add_btn" value="add to cart">
                </form>
            </div>
            <?php 
    }
$good_id = (int)$_POST['good_id'];
if(isset($_POST['add_btn'])){
    if (isset($catalog_cart[$good_id])){
        $catalog_cart[$good_id] ++;
        echo 'added'; 
    } else {
        $catalog_cart[$good_id] = 1; 
        echo 'added'; 
    }
}
    
$_SESSION['cart'] = $catalog_cart;
var_dump($_SESSION['cart']);
mysqli_close($DBlink); 
