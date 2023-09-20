{extends file="main.tpl"}
{block name="content"}

<!-- Main -->
	<div id="main">
		<!-- Featured Post -->
			<article class="post featured">
				<header class="major">
					{if !empty($uzytkownik->login)}<p>Nazwa: {$uzytkownik->login}</p>
					<p>Email: {$uzytkownik->email}</p>{/if}
					<p>Rola: {$uzytkownik->role}</p>
					{if $ilosc != 0}<p>Oto lista wypożyczonych przez Ciebie filmów:</p>
					{else}<p>Nie masz jeszcze wypożyczonych filmów</p>{/if}
				</header>
			</article>
		<!-- Posts -->
			{if $ilosc != 0}<input type="text" id="searchInput" placeholder="Szukaj">{/if}
		<!-- Posts -->
			<section class="posts">
			{foreach $film as $f}					
					<article>
						<header>
							<h2><a>{$f["tytul"]}</a></h2>
						</header>
						<a class="image fit"><img src="filmy/pic{$f["zdjecie"]}.jpg" alt="" /></a>
						<p>{$f["opis"]}</p>
						<ul class="data" >
							<li><p>Wypożyczony od {date("d/m/Y", strtotime($f["wypozyczony"]))}</p></li>
							<li><p><br>Wypożyczony do {date("d/m/Y", strtotime($f["zwrot"]))}</p></li>
						</ul>
					</article>
				{/strip}
			{/foreach}
			</section>
	</div>
{/block}