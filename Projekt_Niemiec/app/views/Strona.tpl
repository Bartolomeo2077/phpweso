{extends file="main.tpl"}
{block name="content"}

<!-- Main -->
	<div id="main">
		<!-- Featured Post -->
			<article class="post featured">
				<header class="major">
					<span class="date">{$data}</span>
					<h2><a href="#szukaj">wypożycz każdy możliwy film, już dziś!</a></h2>
					{if empty($uzytkownik->login)}<p>Aby móc wypożyczyć którykolwiek film wymagane jest posiadanie konta.</p>{else}
					<p>Dziękujemy za bycie naszym użytkownikiem, ciesz się dowoli wybranymi filmami!</p>{/if}
				</header>
			</article>
		<!-- Posts -->
			<section class="posts">
			{foreach $filmy as $f}					
					<article>
						<header>
							<h2><a>{$f["tytul"]}</a></h2>
						</header>
							<a class="image fit"><img src="{rel_url src="filmy/{$f["zdjecie"]}"}" alt="" /></a>
						<p>{$f["opis"]}</p>
						<ul class="actions special">
						<form action="{rel_url action="wypozycz" id=$f['id']}" method="post">
							<input type="submit" name="submit" class="button" value="Wypożycz" />
						</form>
						</ul>
					</article>
				{/strip}
			{/foreach}
			</section>
			<div>
				<div class="pagination">
					{foreach $str->elementy as $e}
						<form action="{rel_url action="Strona" id=$e}" method="post">
							<input type="submit" name="submit" class="button" value="{$e}" />
						</form>
					{/foreach}
				</div>
			</div>
	</div>
{/block}