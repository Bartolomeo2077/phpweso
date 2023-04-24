<?php
require_once dirname(__FILE__).'/../config.php';
require_once $conf->root_path.'/smarty/libs/Smarty.class.php';
include $conf->root_path.'/app/security/check.php';

$smarty = new Smarty();
$smarty->assign('conf',$conf);

$smarty->assign('app_url',$conf->app_url);
$smarty->assign('root_path',$conf->root_path);
$smarty->assign('page_title','Jako taki Kalkulator ;)');
$smarty->assign('page_description','Szablonowanie oparte na bibliotece smarty');
$smarty->assign('page_header','Szablony smarty wykorzystane w kalkulatorze');


$smarty->assign('role',$role);
if( $role  == 'admin' ) 
{
    $smarty->display($conf->root_path.'/app/inna_chroniona.html');
}
else 
{
    header("Location: ".$conf->app_url);
}