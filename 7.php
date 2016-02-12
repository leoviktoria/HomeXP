<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
$years = 12;
if ($years>=18 && $years<=59){
    echo 'Вам еще работать и работать';
}if ($years>59){
    echo 'Вам пора на пенсию';
}if ($years>=0 && $years<=17){
    echo 'Вам еще рано работать';
}


?>
</body>
</html>