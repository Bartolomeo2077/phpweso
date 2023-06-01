<?php
/* Smarty version 4.3.0, created on 2023-06-01 03:37:53
  from 'E:\dev\xampp\htdocs\paw\php_01_widok_kontroler\app\views\calc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6477f671b39723_34515611',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f83ef0180063be09022321ea36bd8b71d2643f6b' => 
    array (
      0 => 'E:\\dev\\xampp\\htdocs\\paw\\php_01_widok_kontroler\\app\\views\\calc.html',
      1 => 1685583472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.html' => 1,
    'file:scripts.html' => 1,
  ),
),false)) {
function content_6477f671b39723_34515611 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5486668976477f671b22a93_72888084', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20327554206477f671b23746_17506648', 'footer');
?>

		
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4160272406477f671b23d64_50228072', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
}
/* {block 'header'} */
class Block_5486668976477f671b22a93_72888084 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_5486668976477f671b22a93_72888084',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_20327554206477f671b23746_17506648 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_20327554206477f671b23746_17506648',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_4160272406477f671b23d64_50228072 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4160272406477f671b23d64_50228072',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<!-- Wrapper-->
<div id="wrapper">

	<!-- Nav -->
	<nav id="nav" class="navMenu">
		<a href="#" class="icon solid fa-home"><span>Home</span></a>
		<a href="#calculate" class="icon solid fa-calculator"><span>Calculator</span></a>
		<?php if ($_smarty_tpl->tpl_vars['user']->value->role == 'admin') {?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
chronionaView" class="icon solid fa-key"><span>Chroniona</span></a>
		<?php }?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout" class="icon solid fa-arrow-up"><span>Wyloguj</span></a>
	</nav>
	
	<!-- Main -->
	<div id="main">


		<!-- Meme -->
		<article id="home" class="panel intro">
			<header>
				<h1>Kalkulator odsetek</h1>
				<p>Bartlomiej Niemiec</p>
				<p>użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
</p>
				<p>rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
</p>
			</header>
			<a href="https://github.com/Bartolomeo2077" class="jumplink pic">
				<img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/images/me.jpg" alt="" />
			</a>
		</article>

		<!-- Kalkulator -->
		<article id="calculate" class="panel">
			<header>
				<h2>Twoj Kredyt~</h2>
			</header>
			<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcCompute#calculate" method="post">
				<div>
					<div class="col">
						<div class="col-6 col-12-medium">
							<input type="text" name="Kwota" autocomplete="off" placeholder="Podaj Kwote" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->Kwota;?>
"/>
						</div>
						<div class="col-6 col-12-medium">
							<input type="text" name="Miesiace" autocomplete="off" placeholder="Podaj Miesiace" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->Miesiace;?>
"/>
						</div>
						<div class="col-12">
							<input type="text" name="Oprocentowanie" autocomplete="off" placeholder="Podaj Oprocentowanie" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->Oprocentowanie;?>
"/>
						</div>
						<div class="col-6">
							<input type="submit" value="Oblicz!" />
							<?php if ($_smarty_tpl->tpl_vars['user']->value->role == 'admin') {?>
								<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
#calculate"><input class="button" type="button" value="Reset"/></a>
							<?php }?>
						</div>
					</div>
				</div>
			</form>
			<div>
				<?php $_smarty_tpl->_subTemplateRender('file:messages.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				
				<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
					<h2>Wynik:</h2>
					<div>
						<?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

					</div>
				<?php }?>



				<table id="tab_people">
					<thead>
						<tr>
							<th>Kwota</th>
							<th>Miesiace</th>
							<th>Oprocentowanie</th>
							<th>Wynik</th>
						</tr>
					</thead>
					<tbody>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['record']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
					<tr><td><?php echo $_smarty_tpl->tpl_vars['r']->value["Kwota"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["Miesiace"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["Oprocentowanie"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["result"];?>
</td></tr>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</tbody>
					</table>

			</div>
		</article>
	</div>
</div>


<?php $_smarty_tpl->_subTemplateRender('file:scripts.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'content'} */
}
