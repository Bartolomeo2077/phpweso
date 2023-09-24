<?php
/* Smarty version 4.3.0, created on 2023-09-24 20:30:40
  from 'F:\wamp64\www\Projekty\Projekt_Bartek\app\views\Film.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_65109c70423451_81322026',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '473df3503536c2a2222fb18dfb25e0ba12617f09' => 
    array (
      0 => 'F:\\wamp64\\www\\Projekty\\Projekt_Bartek\\app\\views\\Film.tpl',
      1 => 1695587438,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65109c70423451_81322026 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_96323997165109c7041e130_22795366', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "content"} */
class Block_96323997165109c7041e130_22795366 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_96323997165109c7041e130_22795366',
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
