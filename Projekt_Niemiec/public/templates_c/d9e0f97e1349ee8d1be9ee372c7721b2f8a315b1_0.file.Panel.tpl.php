<?php
/* Smarty version 4.3.0, created on 2023-09-20 14:38:26
  from 'C:\xampp\htdocs\projekty\Projekt_Bartek\app\views\Panel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_650ae7c20d3399_77504294',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9e0f97e1349ee8d1be9ee372c7721b2f8a315b1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekty\\Projekt_Bartek\\app\\views\\Panel.tpl',
      1 => 1695149372,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_650ae7c20d3399_77504294 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2069706778650ae7c20ab848_59791091', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "content"} */
class Block_2069706778650ae7c20ab848_59791091 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2069706778650ae7c20ab848_59791091',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<!-- Main -->
	<div id="main">
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
