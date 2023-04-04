<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';
include _ROOT_PATH.'/app/security/check.php';

function getParams(&$Kwota, &$Miesiace, &$Oprocentowanie) 
{
    $Kwota = isset($_REQUEST['Kwota']) ? $_REQUEST['Kwota'] : null;
    $Miesiace = isset($_REQUEST['Miesiace']) ? $_REQUEST['Miesiace'] : null;
    $Oprocentowanie = isset($_REQUEST['Oprocentowanie']) ? $_REQUEST['Oprocentowanie'] : null;
}

function validate(&$Kwota,  &$Miesiace, &$Oprocentowanie, &$messages) 
{
    if(!(isset($Kwota) && isset($Miesiace) && isset($Oprocentowanie))) 
	{
        return false;
    }

// sprawdzenie, czy potrzebne wartości zostały przekazane
if ($Kwota == "") 
{
	$messages [] = 'Nie podano Kwoty';
}
if ($Miesiace == "") 
{
	$messages [] = 'Nie podano Miesiecy';
}
if ($Oprocentowanie == "") 
{
	$messages [] = 'Nie podano Oprocentowania';
}

if (empty( $messages )) 
{	
	if (! is_numeric( $Kwota )) 
	{
		$messages [] = 'Kwota wartość nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $Miesiace )) 
	{
		$messages [] = 'Miesiace nie jest liczbą całkowitą';
	}
	if (! is_numeric( $Oprocentowanie )) 
	{
		$messages [] = 'Oprocentowanie nie jest liczbą całkowitą';
	}	

	if(count($messages) != 0) return false;
    	else return true;
}
}
// 3. wykonaj zadanie jeśli wszystko w porządku

if (empty ( $messages )) 
{ // gdy brak błędów
	
	function process(&$Kwota, &$Miesiace, &$Oprocentowanie, &$messages, &$result) 
{
	global $role;
	$Kwota = floatval($Kwota);
	$Miesiace = intval($Miesiace);
	$Oprocentowanie = floatval($Oprocentowanie);
	//operacja
	$result =round (($Kwota * ($Miesiace) * ($Oprocentowanie/100)/12),2);
}
}
$Kwota = null;
$Miesiace = null;
$Oprocentowanie = null;
$result = null;
$messages = array();

getParams($Kwota, $Miesiace, $Oprocentowanie);
if(validate($Kwota, $Miesiace, $Oprocentowanie, $messages)) {
	process($Kwota, $Miesiace, $Oprocentowanie, $messages, $result);
}
include 'calc_view.php';