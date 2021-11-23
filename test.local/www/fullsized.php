<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image</title>
    <style type='text/css'>
        body {
            background-color: black;
        }
        a {
            text-decoration: none;
        }
        .img-container {
            display: flex;
            justify-content: center;
        }
        .view_text {
            text-align: center;
            color: #fff;
        }
        .btn {
            border: 1px solid #fff;
            color: #fff;
            padding: 5px;
            float: right;
            margin-left: 30px;
        }
        .btn:hover {
            box-shadow: 0px 0px 16px 10px rgba(239, 242, 244, 0.88);
        }

    </style>
</head>
<body>
    <header></header>
    <main>
        <div class='img-container'>
        <?php 
        $link = mysqli_connect("localhost:3308", "root", "", "php_lessons");
        if($link){
            $image_id = $_GET['id'];
            $result = mysqli_query($link, "select `file` from gallery where id = $image_id");
            mysqli_query($link, "update gallery set view_count = view_count+1 where id = $image_id");
            $view_count_res = mysqli_query($link, "select view_count from gallery where id = $image_id");
            $view_count = mysqli_fetch_assoc($view_count_res);
            while($row = mysqli_fetch_assoc($result)){
                $images[] = $row;
            }
            foreach($images as $image){ ?>
            <img src="<?php echo $image['file']?>" alt="">
                <?php
             }
            ?> 
            
            <?php
             mysqli_close($link);
        }
        else {
            die('Couldnt connect to DB');
        }?>
      
    
        </div>
        <p class='view_text'>Просмотры: <span class='views'><?php echo $view_count['view_count']?></span></p>
        <a href="index5.php" class='btn'>Назад</a>
    </main>
    <footer></footer>
   
</body>
</html>