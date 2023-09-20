<?php
/* Smarty version 4.3.0, created on 2023-09-18 16:45:46
  from 'F:\wamp64\www\Projekty\Projekt_Bartek\app\views\Strona.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_65087eba03e747_63672524',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b88ce923940a6842819a979c9a8f27f1e956fee' => 
    array (
      0 => 'F:\\wamp64\\www\\Projekty\\Projekt_Bartek\\app\\views\\Strona.tpl',
      1 => 1695055400,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65087eba03e747_63672524 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_84094447065087eba024335_74520218', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "content"} */
class Block_84094447065087eba024335_74520218 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_84094447065087eba024335_74520218',
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
			<input type="text" id="szukaj" placeholder="Szukaj">
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
						<a class="image fit"><img src="filmy/pic<?php echo $_smarty_tpl->tpl_vars['f']->value["zdjecie"];?>
.jpg" alt="" /></a>
						<p><?php echo $_smarty_tpl->tpl_vars['f']->value["opis"];?>
</p>
						<?php if (!empty($_smarty_tpl->tpl_vars['uzytkownik']->value->login)) {?><ul class="actions special">
						<form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"wypozycz",'id'=>$_smarty_tpl->tpl_vars['f']->value['id']),$_smarty_tpl ) );?>
" method="post">
							<input type="submit" name="submit" class="button" value="Wypożycz" />
						</form>
						</ul><?php }?>
					</article>
				
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</section>
			<div>
				<div class="pagination">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['str']->value->array, 'a');
$_smarty_tpl->tpl_vars['a']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->do_else = false;
?>
						<a href="#" class="page"><?php echo $_smarty_tpl->tpl_vars['a']->value;?>
</a>
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
