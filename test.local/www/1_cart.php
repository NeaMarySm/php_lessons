<?php 
session_start();
require_once('db.php');
global $DBlink;
$cart = $_SESSION['cart']; // ['good_id' => amount]
if(empty($cart)){
    echo 'cart is empty';
} else {
    foreach($cart as $cart_item => $amount){
        $result = mysqli_query($DBlink, "select * from goods where id = $cart_item");
        $result = mysqli_fetch_assoc($result);
        $total_price = $amount * $result['price'];
        echo $result['name'] .' '. $amount .' '. $total_price;
    }
}
