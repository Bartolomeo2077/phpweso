<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">	
<meta charset="utf-8" />
<title>Kalkulator</title>
</head>
<body>
<?php 
	if($role == 'admin')
	{
		echo '<a href='._APP_ROOT.'/app/chroniona.php class="pure-button">Chroniona strona</a>';
	}
?>
	<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>

	<form action="<?php print(_APP_URL);?>/app/calc.php" method="post" class="pure-form pure-form-aligned">
    <fieldset>
        <div class="pure-control-group">
            <label for="aligned-name">Kwota: </label>
            <input type="text" id="aligned-name" name="Kwota" value="<?php if(isset($Kwota)) {print($Kwota);} ?>" />
        </div>
        <div class="pure-control-group">
            <label for="aligned-password">Miesiace: </label>
            <input type="text" id="aligned-password" name="Miesiace" value="<?php if(isset($Miesiace)) {print($Miesiace);} ?>" />
        </div>
        <div class="pure-control-group">
            <label for="aligned-email">Oprocentowanie: </label>
            <input type="text" id="aligned-email" name="Oprocentowanie" value="<?php if(isset($Oprocentowanie)) {print($Oprocentowanie);} ?>" />
        </div>
        <div class="pure-controls">
            <button type="submit" class="pure-button pure-button-primary">Oblicz</button>
        </div>
    </fieldset>
<?php 
	if($role == 'admin')
	{
		echo '<a href='._APP_URL.'/app/calc.php><input class="button" type="button" value="Reset"/></a>';
	}
?>
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) 
	{
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
	}
?>

<?php if (isset($result))
{ 
?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo 'Odsetki: '.$result; ?>
</div>
<?php 
} 

?>

</body>
</html>