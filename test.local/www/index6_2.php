<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALC</title>
    <style type='text/css'>
     
    </style>
</head>
<body>
    <main> 
        <form action="" method="POST">
            <p class="send-text">Калькулятор</p>
            <input class="send-input" type="text" name="first_value">
            <input class="send-input" type="text" name="second_value">
            <input type="submit" value="sum" name="operation">
            <input type="submit" value="sub" name="operation">
            <input type="submit" value="mult" name="operation">
            <input type="submit" value="div" name="operation">   
        </form> 
        <?php 
        if(!empty($_POST) && isset($_POST)){
            include_once('calc.php');
        }?>
        <p>Результат: <?php echo $result ?> </p>
    </main>
</body>
</html>