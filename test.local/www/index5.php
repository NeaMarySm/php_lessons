<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ImageGallery</title>
    <style type='text/css'>
        body {
            background-color: black;
        }
        a {
            text-decoration: none;
        }
        .gallery-container {
            display: flex;
            justify-content: flex-start;
            flex-wrap: wrap;
        }
        .gallery-item {
            margin: 10px;
            padding: 0;
        }
        .gallery-item:hover {
            box-shadow: 0px 0px 16px 10px rgba(239, 242, 244, 0.88);
        }
    </style>
</head>
<body>
    <header></header>
    <main>
        <div class='gallery-container'>
        <?php 
    $link = mysqli_connect("localhost:3308", "root", "", "php_lessons");
    if($link){
        $result = mysqli_query($link, 'select * from gallery where 1 order by view_count desc');
        $images = [];
        while($row = mysqli_fetch_assoc($result)){
            $images[] = $row;
        }
        foreach($images as $image){ 
            ?>
            
            <a href='fullsized.php?id=<?php echo $image['id']?>' target='_blank' class='gallery-item'>
                    <img src='<?php echo $image['file'] ?> ' alt='' width='150px' height='120px'>
             </a><?php
              } 
        
        mysqli_close($link); }
    else {
        die('Couldnt connect to DB');
    }?>
        </div>

    </main>
    <footer></footer>
   
</body>
</html>

