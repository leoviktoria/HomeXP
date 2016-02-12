<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
$s = 100;//длина участка,км
$t = 1;//время в часах

$v1 = $s/$t;
$v2 = $s * 1000 / ($t * 3600);

echo "{$v1}км/ч, {$v2}м/с";
