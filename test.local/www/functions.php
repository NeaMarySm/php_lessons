<?php

function validate_img($file){
    // проверка типа файла
    $image_tmp = $file["tmp_name"];

    $img_name = explode('.', $file["name"]);
    $file_type = strtolower(end($img_name));
    $types = ['jpg', 'png', 'gif', 'bmp', 'jpeg'];
    
    if(!in_array($file_type, $types))
		return 'Недопустимый тип файла.';

	return true;
}
  
function upload($file, $dir){	
    $name = $dir .'/'. basename($file["name"]);
    move_uploaded_file($file["tmp_name"], $name);
}
