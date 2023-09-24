<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Massively by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{rel_url action="css/main.css"}" />
		<noscript><link rel="stylesheet" href="{rel_url action="css/noscript.css"}" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper" class="fade-in">

				<!-- Intro -->
					<div id="intro">
						<h1>Wypożyczalnia filmów<br />
						Bartolomeo</h1>
						<p>A free, fully responsive HTML5 + CSS3 site template designed by <a href="https://twitter.com/ajlkn">@ajlkn</a> for <a href="https://html5up.net">HTML5 UP</a><br />
						and released for free under the <a href="https://html5up.net/license">Creative Commons license</a>.</p>
					</div>

				<!-- Nav -->
					<nav id="nav">
						<ul class="links">
							<li><a href="{rel_url action="Strona"}">Przeglądaj</a></li>
							{if $uzytkownik->role == "admin"}<li><a href="{url action="panel"}">Panel admina</a></li>{/if}
							{if empty($uzytkownik->login)}<li><a href="{url action="Rejestracja"}#main">Rejestracja</a></li>
							<li><a href="{url action="loginShow"}#main">Logowanie</a></li>{/if}
							{if !empty($uzytkownik->login)}<li><a href="{url action="Konto"}">Konto</a></li>
							<li><a href="{url action="logout"}">Wyloguj</a></li>{/if}
						</ul>
						<ul class="icons">
							<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
						</ul>
					</nav>


{block name=top} {/block}

{block name=content} {/block}

{block name=messages}

{if $msgs->isMessage()}
<div class="messages bottom-margin">
	<ul>
	{foreach $msgs->getMessages() as $msg}
	{strip}
		<li class="msg {if $msg->isError()}error{/if} {if $msg->isWarning()}warning{/if} {if $msg->isInfo()}info{/if}">{$msg->text}</li>
	{/strip}
	{/foreach}
	</ul>
</div>
{/if}

{/block}

{block name=bottom} {/block}
	
				<!-- Copyright -->
				<footer id="copyright">
					<ul><li>&copy; Bartek Niemiec</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li></ul>
				</footer>
	</div>

<!-- Scripts -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="{rel_url action="js/search.js"}"></script>
	<script src="{rel_url action="js/jquery.min.js"}"></script>
	<script src="{rel_url action="js/jquery.scrollex.min.js"}"></script>
	<script src="{rel_url action="js/jquery.scrolly.min.js"}"></script>
	<script src="{rel_url action="js/browser.min.js"}"></script>
	<script src="{rel_url action="js/breakpoints.min.js"}"></script>
	<script src="{rel_url action="js/util.js"}"></script>
	<script src="{rel_url action="js/main.js"}"></script>



</body>
</html>