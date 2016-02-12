<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php

$years = -50;
if ($years>=18 && $years<=59){
    echo 'Вам еще работать и работать';
}if ($years>59){
    echo 'Вам пора на пенсию';
}if ($years>=0 && $years<=17){
    echo 'Вам еще рано работать';
}if ($years<0){
    echo 'Неизвестный возраст';
}


?>
</body>
</html>