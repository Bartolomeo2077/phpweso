<?php
/* Smarty version 4.3.0, created on 2023-09-20 21:51:02
  from 'D:\Studia\Semestr IV\Aplikacje Webowe\htdocs\Projekt_Niemiec\app\views\Strona.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_650b4d265384d8_30839671',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25ac58cf9eec406da47be10e33490face7ee4496' => 
    array (
      0 => 'D:\\Studia\\Semestr IV\\Aplikacje Webowe\\htdocs\\Projekt_Niemiec\\app\\views\\Strona.tpl',
      1 => 1695238543,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_650b4d265384d8_30839671 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1722165772650b4d2631aec0_89130976', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "content"} */
class Block_1722165772650b4d2631aec0_89130976 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1722165772650b4d2631aec0_89130976',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<!-- Main -->
	<div id="main">
		<!-- Featured Post -->
			<article class="post featured">
				<header class="major">
					<span class="date"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</span>
					<h2><a href="#szukaj">wypożycz każdy możliwy film, już dziś!</a></h2>
					<?php if (empty($_smarty_tpl->tpl_vars['uzytkownik']->value->login)) {?><p>Aby móc wypożyczyć którykolwiek film wymagane jest posiadanie konta.</p><?php } else { ?>
					<p>Dziękujemy za bycie naszym użytkownikiem, ciesz się dowoli wybranymi filmami!</p><?php }?>
				</header>
			</article>
		<!-- Posts -->
			<section class="posts">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filmy']->value, 'f');
$_smarty_tpl->tpl_vars['f']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->do_else = false;
?>					
					<article>
						<header>
							<h2><a><?php echo $_smarty_tpl->tpl_vars['f']->value["tytul"];?>
</a></h2>
						</header>
						<a class="image fit"><img src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('src'=>"filmy/pic".((string)$_smarty_tpl->tpl_vars['f']->value["zdjecie"]).".jpg"),$_smarty_tpl ) );?>
" alt="" /></a>
						<p><?php echo $_smarty_tpl->tpl_vars['f']->value["opis"];?>
</p>
						<ul class="actions special">
						<form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"wypozycz",'id'=>$_smarty_tpl->tpl_vars['f']->value['id']),$_smarty_tpl ) );?>
" method="post">
							<input type="submit" name="submit" class="button" value="Wypożycz" />
						</form>
						</ul>
					</article>
				
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</section>
			<div>
				<div class="pagination">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['str']->value->elementy, 'e');
$_smarty_tpl->tpl_vars['e']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['e']->value) {
$_smarty_tpl->tpl_vars['e']->do_else = false;
?>
						<form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"Strona",'id'=>$_smarty_tpl->tpl_vars['e']->value),$_smarty_tpl ) );?>
" method="post">
							<input type="submit" name="submit" class="button" value="<?php echo $_smarty_tpl->tpl_vars['e']->value;?>
" />
						</form>
					<?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

				</div>
			</div>
	</div>
<?php
}
}
/* {/block "content"} */
}
