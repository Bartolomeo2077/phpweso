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
						<form method="get">
							<a class="image fit" type="submit" {if $f["expired"] == 0}href="{rel_url action="trailer" id=$f["filmID"]}"{/if}><img src="{rel_url src="filmy/{$f["zdjecie"]}"}" alt="" /></a>
						</form>
						<p>{$f["opis"]}</p>
						<ul class="data" >
							<li><p>Wypożyczony od {date("d/m/Y", strtotime($f["wypozyczony"]))}</p></li>
							<li><p><br>Wypożyczony do {date("d/m/Y", strtotime($f["zwrot"]))}</p></li>
							{if $f["expired"] == 1}<li><p><br>EXPIRED</p></li>{/if}
							<form action="{rel_url action="usunKonto" id=$f['id']}" method="post">
								<input type="submit" name="submit" class="button" value="Usuń" />
							</form>
						</ul>
					</article>
				{/strip}
			{/foreach}
			</section>
	</div>
{/block}