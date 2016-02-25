<?php
/**
 * Функция для получения адреса пункта меню
 * * @param $controller
 * @param $action
 * @param array $params
 */
function getUrlByParams($controller, $action, $params = array()){
    $url = http_build_query(
        array(
            'controller' => $controller,
            'action' => $action,
        ) + $params
    );

    return '/home'.'/?'.$url;
}


function getMenu()
{
    $menu = array(
        'Главная' => array(

            'controller' => 'pages',
            'action' => 'index',
        ),
        'О нас' => array(

            'controller' => 'pages',
            'action' => 'show',
            'params' => array(
                'alias' => 'about'
            )
        ),
        'Товары' => array(

            'controller' => 'goods',
            'action' => 'index',
        ),
        'Обратная связь' => array(

            'controller' => 'pages',
            'action' => 'contact_us',
        ),

    );

    foreach($menu as &$item){
        $item['url'] = getUrlByParams($item['controller'], $item['action'], isset($item['params'])?:array());
        unset($item);
    }

//    echo "<pre>";
//    print_r($menu);

/**
* Открыть буферизацию вывода
*/
    ob_start();
    include(TEMPLATES_PATH.'/helpers/menu.ctp');
    $html = ob_get_clean();

    return $html;
}