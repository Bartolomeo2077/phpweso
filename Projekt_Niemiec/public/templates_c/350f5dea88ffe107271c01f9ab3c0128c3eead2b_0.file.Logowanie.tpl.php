<?php
/* Smarty version 4.3.0, created on 2023-09-24 22:48:06
  from 'F:\wamp64\www\Projekty\Projekt_Bartek\app\views\Logowanie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6510bca666f702_42666168',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '350f5dea88ffe107271c01f9ab3c0128c3eead2b' => 
    array (
      0 => 'F:\\wamp64\\www\\Projekty\\Projekt_Bartek\\app\\views\\Logowanie.tpl',
      1 => 1695575337,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6510bca666f702_42666168 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14349141436510bca666b7d0_28747370', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "content"} */
class Block_14349141436510bca666b7d0_28747370 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14349141436510bca666b7d0_28747370',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


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
			<form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"Logowanie"),$_smarty_tpl ) );?>
" method="post">
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
<?php
}
}
/* {/block "content"} */
}
