{extends file="main.tpl"}
{block name="content"}

<!-- Main -->
	<div id="main">
		<!-- Featured Post -->
			<article class="post featured">
				<header id="formularz" class="major">
					<h2><a href="#">Logowanie</a></h2>
				</header>
			</article>

	<div>
		<section>
			<form action="{rel_url action="Logowanie"}" method="post">
				<div class="fields">
					<div class="field">
						<label for="nazwa">Nazwa</label>
						<input type="text" name="nazwa" id="name" />
					</div>
					<div class="field">
						<label for="haslo">Hasło</label>
						<input type="password" name="haslo" id="message"></input>
					</div>
				</div>
				<ul class="actions">
					<li><input type="submit" value="Zaloguj" /></li>
				</ul>
			</form>
		</section>
	</div>
{/block}