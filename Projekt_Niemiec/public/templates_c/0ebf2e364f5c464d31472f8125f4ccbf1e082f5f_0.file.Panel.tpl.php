<?php
/* Smarty version 4.3.0, created on 2023-09-24 20:00:49
  from 'F:\wamp64\www\Projekty\Projekt_Bartek\app\views\Panel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_65109571ca9500_91846667',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ebf2e364f5c464d31472f8125f4ccbf1e082f5f' => 
    array (
      0 => 'F:\\wamp64\\www\\Projekty\\Projekt_Bartek\\app\\views\\Panel.tpl',
      1 => 1695585648,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65109571ca9500_91846667 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_79636226665109571c89d77_01906573', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "content"} */
class Block_79636226665109571c89d77_01906573 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_79636226665109571c89d77_01906573',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<!-- Main -->
	<div id="main">

		<section>
			<form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"dodajFilm"),$_smarty_tpl ) );?>
" method="post">
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
				<?php if ($_smarty_tpl->tpl_vars['uzytkownik']->value->role == "admin") {?>
					<th>Email</th>
				<?php }?>
				<th>Rola</th>
				<?php if ($_smarty_tpl->tpl_vars['uzytkownik']->value->role == "admin") {?>
					<th class="actions">Opcje</th>
				<?php }?>
			</tr>
		</thead>
		<tbody>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['records']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
		<tr><td><?php echo $_smarty_tpl->tpl_vars['r']->value["nazwa"];?>
</td><?php if ($_smarty_tpl->tpl_vars['uzytkownik']->value->role == "admin") {?><td><?php echo $_smarty_tpl->tpl_vars['r']->value["email"];?>
</td><?php }?><td><?php echo $_smarty_tpl->tpl_vars['r']->value["rola"];?>
</td><?php if ($_smarty_tpl->tpl_vars['uzytkownik']->value->role == "admin") {?><td><ul class="actions"><li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"uzytkownikUsun",'id'=>$_smarty_tpl->tpl_vars['r']->value['id']),$_smarty_tpl ) );?>
">Usuń</a></li></ul></td><?php }?></tr>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</tbody>
		</table>
	</div>
<?php
}
}
/* {/block "content"} */
}
