{extends file="main.tpl"}
{block name="content"}

<!-- Main -->
	<div id="main">

		<section>
			<form action="{rel_url action="dodajFilm"}" method="post">
				<div class="fields">
					<div class="field">
						<label for="tytul">Tytuł</label>
						<input type="text" name="tytul" id="tytul" />
					</div>
					<div class="field">
						<label for="opis">Opis</label>
						<input type="text" name="opis" id="text"></input>
					</div>
					<div class="field">
						<label for="trailer">Trailer</label>
						<input type="text" name="trailer" id="trailer"></input>
					</div>
					<div class="field">
						<label for="pic">Zdjęcie</label>
						<input type="file" name="pic" id="file"></input>
					</div>
				</div>
				<ul class="actions">
					<li><input type="submit" value="Dodaj film" /></li>
				</ul>
			</form>
		</section>
		<table id="tab_people" class="pure-table pure-table-bordered">
		<thead>
			<tr>
				<th>Nazwa</th>
				{if $uzytkownik->role == "admin"}
					<th>Email</th>
				{/if}
				<th>Rola</th>
				{if $uzytkownik->role == "admin"}
					<th class="actions">Opcje</th>
				{/if}
			</tr>
		</thead>
		<tbody>
		{foreach $records as $r}
		{strip}
			<tr>
				<td>{$r["nazwa"]}</td>
				{if $uzytkownik->role == "admin"}
					<td>{$r["email"]}</td>
				{/if}
				<td>{$r["rola"]}</td>
				{if $uzytkownik->role == "admin"}
				<td>
					<ul class="actions">
						<li>
							<a href="{url action="uzytkownikUsun" id=$r['id']}">Usuń</a>
						</li>
					</ul>
				</td>
				{/if}
			</tr>
		{/strip}
		{/foreach}
		</tbody>
		</table>
	</div>
{/block}