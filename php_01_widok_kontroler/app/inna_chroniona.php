<?php
require_once dirname(__FILE__).'/../config.php';
require_once _ROOT_PATH.'/smarty/libs/Smarty.class.php';
include _ROOT_PATH.'/app/security/check.php';

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Jako taki Kalkulator ;)');
$smarty->assign('page_description','Szablonowanie oparte na bibliotece smarty');
$smarty->assign('page_header','Szablony smarty wykorzystane w kalkulatorze');


$smarty->assign('role',$role);
if( $role  == 'admin' ) {
    $smarty->display(_ROOT_PATH.'/app/inna_chroniona.html');
}
else {
    header("Location: "._APP_URL);
}