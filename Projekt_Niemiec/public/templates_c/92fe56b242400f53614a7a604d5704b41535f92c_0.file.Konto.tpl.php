<?php
/* Smarty version 4.3.0, created on 2023-09-24 20:39:10
  from 'F:\wamp64\www\Projekty\Projekt_Bartek\app\views\Konto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_65109e6ee14369_53046081',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92fe56b242400f53614a7a604d5704b41535f92c' => 
    array (
      0 => 'F:\\wamp64\\www\\Projekty\\Projekt_Bartek\\app\\views\\Konto.tpl',
      1 => 1695587899,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65109e6ee14369_53046081 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_161531552165109e6edeb936_31673722', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "content"} */
class Block_161531552165109e6edeb936_31673722 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_161531552165109e6edeb936_31673722',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<!-- Main -->
	<div id="main">
		<!-- Featured Post -->
			<article class="post featured">
				<header class="major">
					<?php if (!empty($_smarty_tpl->tpl_vars['uzytkownik']->value->login)) {?><p>Nazwa: <?php echo $_smarty_tpl->tpl_vars['uzytkownik']->value->login;?>
</p>
					<p>Email: <?php echo $_smarty_tpl->tpl_vars['uzytkownik']->value->email;?>
</p><?php }?>
					<p>Rola: <?php echo $_smarty_tpl->tpl_vars['uzytkownik']->value->role;?>
</p>
					<?php if ($_smarty_tpl->tpl_vars['ilosc']->value != 0) {?><p>Oto lista wypożyczonych przez Ciebie filmów:</p>
					<?php } else { ?><p>Nie masz jeszcze wypożyczonych filmów</p><?php }?>
				</header>
			</article>
		<!-- Posts -->
			<?php if ($_smarty_tpl->tpl_vars['ilosc']->value != 0) {?><input type="text" id="searchInput" placeholder="Szukaj"><?php }?>
		<!-- Posts -->
			<section class="posts">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['film']->value, 'f');
$_smarty_tpl->tpl_vars['f']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->do_else = false;
?>					
					<article>
						<header>
							<h2><a><?php echo $_smarty_tpl->tpl_vars['f']->value["tytul"];?>
</a></h2>
						</header>
						<form method="get">
							<a class="image fit" type="submit" <?php if ($_smarty_tpl->tpl_vars['f']->value["expired"] == 0) {?>href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"trailer",'id'=>$_smarty_tpl->tpl_vars['f']->value["id"]),$_smarty_tpl ) );?>
"<?php }?>><img src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('src'=>"filmy/".((string)$_smarty_tpl->tpl_vars['f']->value["zdjecie"])),$_smarty_tpl ) );?>
" alt="" /></a>
						</form>
						<p><?php echo $_smarty_tpl->tpl_vars['f']->value["opis"];?>
</p>
						<ul class="data" >
							<li><p>Wypożyczony od <?php echo date("d/m/Y",strtotime($_smarty_tpl->tpl_vars['f']->value["wypozyczony"]));?>
</p></li>
							<li><p><br>Wypożyczony do <?php echo date("d/m/Y",strtotime($_smarty_tpl->tpl_vars['f']->value["zwrot"]));?>
</p></li>
							<?php if ($_smarty_tpl->tpl_vars['f']->value["expired"] == 1) {?><li><p><br>EXPIRED</p></li><?php }?>
						</ul>
					</article>
				
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</section>
	</div>
<?php
}
}
/* {/block "content"} */
}
