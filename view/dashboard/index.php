<?php 

include_once($_SERVER['DOCUMENT_ROOT'] . '/mindblow/path.php');

include_once(VIEW_PATH . 'includes/dashboard_Head.php');

include_once(VIEW_PATH . 'includes/dashboard_Menu.php');

if(isset($_GET['u'])){
    $url = $_GET['u'];
}else{
    $url = 'index';
}

if ($url == 'index' || $url=='compras') {
    include_once('modulos/' . $url. '.php');
}else{
    include_once('modulos/404.php');
}


include_once(VIEW_PATH . 'includes/dashboard_Footer.php');

?>