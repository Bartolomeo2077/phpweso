<?php
require_once dirname(__FILE__).'/../../config.php';
require_once _ROOT_PATH.'/smarty/libs/Smarty.class.php';

//pobranie parametrów
function getParamsLogin(&$form){
	$form['login'] = isset ($_REQUEST ['login']) ? $_REQUEST ['login'] : null;
	$form['pass'] = isset ($_REQUEST ['pass']) ? $_REQUEST ['pass'] : null;
}

//walidacja parametrów z przygotowaniem zmiennych dla widoku
function validateLogin(&$form,&$messages)
{
	// sprawdzenie, czy parametry zostały przekazane
	if ( ! (isset($form['login']) && isset($form['pass']))) {
		//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
		return false;
	}

	if ( $form['login'] == "") {
		$messages [] = 'Nie podano loginu';
	}
	if ( $form['pass'] == "") {
		$messages [] = 'Nie podano hasła';
	}

	if (count ( $messages ) > 0) return false;

	if ($form['login'] == "admin" && $form['pass'] == "admin") {
		session_start();
		$_SESSION['role'] = 'admin';
		return true;
	}
	if ($form['login'] == "user" && $form['pass'] == "user") {
		session_start();
		$_SESSION['role'] = 'user';
		return true;
	}
	
	$messages [] = 'Niepoprawny login lub hasło';
	return false; 
}

//inicjacja potrzebnych zmiennych
$form = array();
$messages = array();

// pobierz parametry i podejmij akcję
getParamsLogin($form);

if (!validateLogin($form,$messages)) 
{
	header(_ROOT_PATH.'/app/security/login.html');	
//	include _ROOT_PATH.'/app/security/login.html';
} else 
{ 		
	header("Location: "._APP_URL);	
}

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Jako taki Kalkulator ;)');
$smarty->assign('page_description','Szablonowanie oparte na bibliotece smarty');
$smarty->assign('page_header','Szablony smarty wykorzystane w kalkulatorze');


$smarty->assign('form',$form);
$smarty->assign('role',$role);
$smarty->assign('messages',$messages);

$smarty->display(_ROOT_PATH.'/app/security/login.html');