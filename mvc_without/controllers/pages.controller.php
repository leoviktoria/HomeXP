<?php

function index($params){
    echo 'Главная страница';
}

function show($params){
    echo 'Запрошена страница с алиасом '.$params['alias'];
}

function contact_us($params){
    echo 'Контактная форма здесь';
}