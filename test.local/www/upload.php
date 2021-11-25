<?php
require_once 'functions.php';

if(isset($_FILES["image"])){
  $isValid = validate_img($_FILES["image"]);  
    
  if($isValid){
    upload($_FILES["image"], './img');
    }
  else {
    echo $isValid;  
    }
}