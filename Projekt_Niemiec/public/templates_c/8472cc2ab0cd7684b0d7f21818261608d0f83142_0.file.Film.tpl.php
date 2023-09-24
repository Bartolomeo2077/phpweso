<?php
/* Smarty version 4.3.0, created on 2023-09-25 01:33:32
  from 'D:\Studia\Semestr IV\Aplikacje Webowe\htdocs\Projekt_Niemiec\app\views\Film.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6510c74c0ef822_96158034',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8472cc2ab0cd7684b0d7f21818261608d0f83142' => 
    array (
      0 => 'D:\\Studia\\Semestr IV\\Aplikacje Webowe\\htdocs\\Projekt_Niemiec\\app\\views\\Film.tpl',
      1 => 1695597707,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6510c74c0ef822_96158034 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3889307706510c74c0e9c60_71535093', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "content"} */
class Block_3889307706510c74c0e9c60_71535093 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3889307706510c74c0e9c60_71535093',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<!-- Main -->
	<div id="main">
	<!-- Posts -->
		<section class="posts" style="overflow:visible">
			<iframe style="overflow:visible; width: 100%; height: 50vw;" src="<?php echo $_smarty_tpl->tpl_vars['trailer']->value["trailer"];?>
" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
		</section>
	</div>
<?php
}
}
/* {/block "content"} */
}
