{extends file="main.tpl"}
{block name="content"}

<!-- Main -->
	<div id="main">
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