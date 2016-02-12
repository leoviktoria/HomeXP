<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
$years = 10;
if ($years>=18 && $years<=59) {
    echo 'Вам еще работать и работать';
}elseif ($years>59){
    echo 'Вам пора на пенсию';
}


?>
</body>
</html>