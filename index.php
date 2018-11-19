<?php

require_once 'core/library/main.php';
$url = strtolower($_GET['url']);

$urlSegments = explode('/', $url);

if (empty($urlSegments[0])) {
    $cntrName = 'main';
}else {
    $cntrName = $urlSegments[0];
}
//тернарный оператор
//$cntrName = (empty($urlSegments[0])) ? 'main' : $urlSegments[0];

if (empty($urlSegments[1])){
//    $actionName = 'action_index';
    $actionName = 'show_tours';
}else {
    $actionName = 'action_'.$urlSegments[1];
}
if(file_exists('core/controllers/'.$cntrName.'.php')){
//    require_once 'core/views/header.php';
    require_once 'core/controllers/'.$cntrName.'.php';
    if (function_exists("$actionName")) {
        $actionName();
    }else {
        require_once 'core/views/header.php';
        echo "Controller <b>$cntrName </b> found, but Action <b>$actionName </b>not found <br>";
        show404page();
    }
}else {
    require_once 'core/views/header.php';
    echo "Controller <b>$cntrName </b>not found <br>";
    show404page();
}




