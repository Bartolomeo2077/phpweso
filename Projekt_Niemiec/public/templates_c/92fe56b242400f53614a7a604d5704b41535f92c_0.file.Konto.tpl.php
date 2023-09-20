<?php
/* Smarty version 4.3.0, created on 2023-09-15 15:34:07
  from 'F:\wamp64\www\Projekty\Projekt_Bartek\app\views\Konto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6504796fd4ed53_81749205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92fe56b242400f53614a7a604d5704b41535f92c' => 
    array (
      0 => 'F:\\wamp64\\www\\Projekty\\Projekt_Bartek\\app\\views\\Konto.tpl',
      1 => 1694791967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6504796fd4ed53_81749205 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11700879276504796fd30ae7_60005389', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "content"} */
class Block_11700879276504796fd30ae7_60005389 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11700879276504796fd30ae7_60005389',
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
						<a class="image fit"><img src="filmy/pic<?php echo $_smarty_tpl->tpl_vars['f']->value["zdjecie"];?>
.jpg" alt="" /></a>
						<p><?php echo $_smarty_tpl->tpl_vars['f']->value["opis"];?>
</p>
						<ul class="data" >
							<li><p>Wypożyczony od <?php echo date("d/m/Y",strtotime($_smarty_tpl->tpl_vars['f']->value["wypozyczony"]));?>
</p></li>
							<li><p><br>Wypożyczony do <?php echo date("d/m/Y",strtotime($_smarty_tpl->tpl_vars['f']->value["zwrot"]));?>
</p></li>
						</ul>
					</article>
				
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</section>

			<div>
				<div class="pagination">
					<!--<a href="#" class="previous">Prev</a>-->
					<a href="#" class="page active">1</a>
					<a href="#" class="page">2</a>
					<a href="#" class="page">3</a>
					<span class="extra">&hellip;</span>
					<a href="#" class="page">8</a>
					<a href="#" class="page">9</a>
					<a href="#" class="page">10</a>
					<a href="#" class="next">Next</a>
				</div>
			</div>
	</div>
<?php
}
}
/* {/block "content"} */
}
