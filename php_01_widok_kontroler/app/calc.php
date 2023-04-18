<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';
require_once _ROOT_PATH.'/smarty/libs/Smarty.class.php';
include _ROOT_PATH.'/app/security/check.php';

function getParams(&$form) 
{
	$form['Kwota'] = isset($_REQUEST['Kwota']) ? $_REQUEST['Kwota'] : null;
	$form['Miesiace'] = isset($_REQUEST['Miesiace']) ? $_REQUEST['Miesiace'] : null;
	$form['Oprocentowanie'] = isset($_REQUEST['Oprocentowanie']) ? $_REQUEST['Oprocentowanie'] : null;
}

function validate(&$form, &$messages)
{
    if(!(isset($form['Kwota']) && isset($form['Miesiace']) && isset($form['Oprocentowanie']))) 
	{
        return false;
    }

	if($form['Kwota'] == "") 
	{
		$messages [] = 'Nie podano kwoty';
	} elseif(!is_numeric($form['Kwota'])) 
	{
		$messages [] = 'Podaj Kwotę!';
	}
	if($form['Miesiace'] == "") 
	{
		$messages [] = 'Nie podano Miesiecy';
	} elseif(!is_numeric($form['Miesiace'])) 
	{
		$messages [] = 'Podaj Miesiące!';
	}
	if($form['Oprocentowanie'] == "") 
	{
		$messages [] = 'Nie podano Oprocentowanie';
	} elseif(!is_numeric($form['Oprocentowanie'])) 
	{
		$messages [] = 'Podaj Oprocentowanie!';
	}

	if(count($messages) != 0) return false;
	else return true;
}
	
	function process(&$form, &$result) 
{
	global $role;
	$form['Kwota'] = floatval($form['Kwota']);
	$form['Miesiace'] = intval($form['Miesiace']);
	$form['Oprocentowanie'] = floatval($form['Oprocentowanie']);

	
	//operacja


	//$result =round ($form['Kwota']) * ($form['Miesiace']) * ($form['Oprocentowanie']);
	$result =round (($form['Kwota'] * ($form['Miesiace']) * ($form['Oprocentowanie']/100)/12),2);
	//$result =round ($form['Kwota'] * ($form['Miesiace']) * ($form['Oprocentowanie']/100),2);
}

$form = null;
//$Kwota = null;
//$Miesiace = null;
//$Oprocentowanie = null;
$result = null;
$messages = array();

getParams($form);
if(validate($form, $messages)) 
{
	process($form, $result);
}
$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Jako taki Kalkulator ;)');
$smarty->assign('page_description','Szablonowanie oparte na bibliotece smarty');
$smarty->assign('page_header','Szablony smarty wykorzystane w kalkulatorze');

$smarty->assign('form',$form);
//$smarty->assign('form',$Kwota);
//$smarty->assign('form',$Miesiace);
//$smarty->assign('form',$Oprocentowanie);
$smarty->assign('role',$role);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages);

$smarty->display(_ROOT_PATH.'/app/calc.html');
