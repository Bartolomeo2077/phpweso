<?php
/* Smarty version 4.3.0, created on 2023-04-18 01:48:00
  from 'D:\Studia\Semestr IV\Aplikacje Webowe\htdocs\php_01_widok_kontroler\app\calc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_643ddab09dba11_39178889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2403f9fa26822cfe90b9f20fc1c33a0a75c4e00' => 
    array (
      0 => 'D:\\Studia\\Semestr IV\\Aplikacje Webowe\\htdocs\\php_01_widok_kontroler\\app\\calc.html',
      1 => 1681775271,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643ddab09dba11_39178889 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1364815634643ddab09c1953_05678556', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_892812663643ddab09c2526_84082887', 'footer');
?>

		
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1423051567643ddab09c2cc8_83422188', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'header'} */
class Block_1364815634643ddab09c1953_05678556 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_1364815634643ddab09c1953_05678556',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_892812663643ddab09c2526_84082887 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_892812663643ddab09c2526_84082887',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_1423051567643ddab09c2cc8_83422188 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1423051567643ddab09c2cc8_83422188',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<!-- Wrapper-->
<div id="wrapper">

	<!-- Nav -->
	<nav id="nav" class="navMenu">
		<a href="#" class="icon solid fa-home"><span>Home</span></a>
		<a href="#calculate" class="icon solid fa-envelope"><span>Calculator</span></a>
		<?php if ($_smarty_tpl->tpl_vars['role']->value == 'admin') {?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/inna_chroniona.php" class="icon solid fa-user-secret"><span>Chroniona</span></a>
		<?php }?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/security/logout.php" class="icon solid fa-fingerprint"><span>Wyloguj</span></a>
	</nav>

	<!-- Main -->
	<div id="main">


		<!-- Meme -->
		<article id="home" class="panel intro">
			<header>
				<h1>Kalkulator odsetek</h1>
				<p>Bartlomiej Nimiec</p>
			</header>
			<a href="https://github.com/Bartolomeo2077" class="jumplink pic">
				<img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/images/me.jpg" alt="" />
			</a>
		</article>

		<!-- Kalkulator -->
		<article id="calculate" class="panel">
			<header>
				<h2>Twoj Kredyt~</h2>
			</header>
			<form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php#calculate" method="post">
				<div>
					<div class="col">
						<div class="col-6 col-12-medium">
							<input type="text" name="Kwota" autocomplete="off" placeholder="Podaj Kwote" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['Kwota'];?>
"/>
						</div>
						<div class="col-6 col-12-medium">
							<input type="text" name="Miesiace" autocomplete="off" placeholder="Podaj Miesiace" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['Miesiace'];?>
"/>
						</div>
						<div class="col-12">
							<input type="text" name="Oprocentowanie" autocomplete="off" placeholder="Podaj Oprocentowanie" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['Oprocentowanie'];?>
"/>
						</div>
						<div class="col-6">
							<input type="submit" value="Oblicz!" />
							<?php if (($_smarty_tpl->tpl_vars['role']->value == 'admin')) {?>
								<a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
#calculate"><input class="button" type="button" value="Reset"/></a>
							<?php }?>
						</div>
					</div>
				</div>
			</form>
			<div>
								<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
					<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
						<h2>Wystąpiły błędy: </h2>
						<div id="msgFound">
						<ol>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
						<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</ol>
						</div>
					<?php }?>
				<?php }?>

				<?php if (($_smarty_tpl->tpl_vars['result']->value)) {?>
					<h2>Wynik:</h2>
					<div id="msg">
						<?php echo $_smarty_tpl->tpl_vars['result']->value;?>

					</div>
				<?php }?>

			</div>
		</article>
	</div>
</div>

<!-- skrypt -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/util.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/main.js"><?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'content'} */
}
