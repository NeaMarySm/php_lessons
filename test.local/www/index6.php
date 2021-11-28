<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAlC</title>
    <style type='text/css'>
     
    </style>
</head>
<body>
    <main> 
        <form action="" method="POST">
            <p class="send-text">Калькулятор</p>
            <input class="send-input" type="text" name="first_value">
            <input class="send-input" type="text" name="second_value">
            <select name="operation" id="">
                <option value="sum">Сложение</option>
                <option value="sub">Вычитание</option>
                <option value="mult">Умножение</option>
                <option value="div">Деление</option>
            </select>
            <input class="send-submit" type="submit" value="Отправить">    
        </form> 
        <?php 
        if(!empty($_POST) && isset($_POST)){
            include_once('calc.php');
        }?>
        <p>Результат: <?php echo $result ?> </p>
    </main>
</body>
</html>