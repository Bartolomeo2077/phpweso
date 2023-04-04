<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

// 1. pobranie parametrów

$Kwota = $_REQUEST ['Kwota'];
$Miesiace = $_REQUEST ['Miesiace'];
$Oprocentowanie = $_REQUEST ['Oprocentowanie'];

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

// sprawdzenie, czy parametry zostały przekazane
if ( ! (isset($Kwota) && isset($Miesiace) && isset($Oprocentowanie))) {
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

// sprawdzenie, czy potrzebne wartości zostały przekazane
if ( $Kwota == "") {
	$messages [] = 'Nie podano Kwoty';
}
if ( $Miesiace == "") {
	$messages [] = 'Nie podano Miesiecy';
}
if ( $Oprocentowanie == "") {
	$messages [] = 'Nie podano Oprocentowania';
}

//nie ma sensu walidować dalej gdy brak parametrów
if (empty( $messages )) 
{
	
	// sprawdzenie, czy $Kwota i $y są liczbami całkowitymi
	if (! is_numeric( $Kwota )) {
		$messages [] = 'Kwota wartość nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $Miesiace )) {
		$messages [] = 'Miesiace nie jest liczbą całkowitą';
	}
	if (! is_numeric( $Oprocentowanie )) {
		$messages [] = 'Oprocentowanie nie jest liczbą całkowitą';
	}	

}

// 3. wykonaj zadanie jeśli wszystko w porządku

if (empty ( $messages )) 
{ // gdy brak błędów
	
	//konwersja parametrów na int
	$Kwota = floatval($Kwota);
	$Miesiace = intval($Miesiace);
	$Oprocentowanie = floatval($Oprocentowanie);

	//operacja
	$result =round (($Kwota * ($Miesiace) * ($Oprocentowanie/100)/12),2);
	//$Odsetki = ($Kwota * $Miesiace * $Oprocentowanie/100)/12 ;
	//$result = $Odsetki/$Kwota * 100;
	
}

// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$Kwota,$Miesiace,$Oprocentowanie,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';