<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ImageGallery</title>
    <style type='text/css'>
        a {
            text-decoration: none;
        }
        .gallery-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }
    </style>
</head>
<body>
    <header></header>
    <main>
        <div class='gallery-container'>
            <?php 
                $dir = './img';
                $files = scandir($dir);
                $images = [];
                foreach($files as $file){
                    if($file !== '.' && $file !== '..' ){
                        $images[]=$file;
                    }
                }
                foreach($images as $image){
                    ?>
                <a href='<?php echo $dir.'/'.$image ?>' target='_blank' class='gallery-item'>
                        <img src='<?php echo $dir.'/'.$image ?>' alt='' width='150px'>
                </a><?php } ?>
        </div>
        <form action="upload.php" enctype="multipart/form-data" method="POST">
                    <p class="send-text">Загрузите изображение</p>
                    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                    <input class="send-input" type="file" name="image">
                    <input class="send-submit" type="submit" value="Загрузить изображение">    
        </form> 

    </main>
    <footer></footer>
   
</body>
</html>

