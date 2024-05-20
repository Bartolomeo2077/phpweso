<?php
/* Smarty version 3.1.30, created on 2024-05-12 15:52:15
  from "C:\xampp\htdocs\projekt\bookrental\app\views\Home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6640c98f073434_53561885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '387acbcffc5c29c28703f807ff9a1e3d5c151cfa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\bookrental\\app\\views\\Home.tpl',
      1 => 1715521932,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_6640c98f073434_53561885 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19039758936640c98f072f69_06466105', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "content"} */
class Block_19039758936640c98f072f69_06466105 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- Header -->
    <header id="header">
        <a href="index.html" class="logo"><strong>Bookstore</strong> by BN</a>
        <ul class="icons">
            <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
            <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="#" class="icon brands fa-medium-m"><span class="label">Medium</span></a></li>
        </ul>
    </header>

    <!-- Banner -->
    <section id="banner">
        <div class="content">
            <header>
                <h1>Bookstore</h1>
                <p>A free and fully responsive site template</p>
            </header>
            <p>Aenean ornare velit lacus, ac varius enim ullamcorper eu. Proin aliquam facilisis ante interdum congue. Integer mollis, nisl amet convallis, porttitor magna ullamcorper, amet egestas mauris. Ut magna finibus nisi nec lacinia. Nam maximus erat id euismod egestas. Pellentesque sapien ac quam. Lorem ipsum dolor sit nullam.</p>
            <ul class="actions">
                <li><a href="#" class="button big">Learn More</a></li>
            </ul>
        </div>
        <span class="image object">
            <img src="<?php echo rel_url(array('src'=>"images/pic10.jpg"),$_smarty_tpl);?>
" alt="" />
        </span>
    </section>

    <!-- Section -->
    <section>
        <header class="major">
            <h2>Erat lacinia</h2>
        </header>
        <div class="features">
            <article>
                <span class="icon fa-gem"></span>
                <div class="content">
                    <h3>Portitor ullamcorper</h3>
                    <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                </div>
            </article>
            <article>
                <span class="icon solid fa-paper-plane"></span>
                <div class="content">
                    <h3>Sapien veroeros</h3>
                    <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                </div>
            </article>
            <article>
                <span class="icon solid fa-rocket"></span>
                <div class="content">
                    <h3>Quam lorem ipsum</h3>
                    <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                </div>
            </article>
            <article>
                <span class="icon solid fa-signal"></span>
                <div class="content">
                    <h3>Sed magna finibus</h3>
                    <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                </div>
            </article>
        </div>
    </section>

    <!-- Section -->
	<section>
		<header class="major">
			<h2>Ipsum sed dolor</h2>
		</header>
		<div class="posts">
			<article>
				<a href="#" class="image"><img src="<?php echo rel_url(array('src'=>"images/pic01.jpg"),$_smarty_tpl);?>
" alt="" /></a>
				<h3>Interdum aenean</h3>
				<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
				<ul class="actions">
					<li><a href="#" class="button">More</a></li>
				</ul>
			</article>
			<article>
				<a href="#" class="image"><img src="<?php echo rel_url(array('src'=>"images/pic02.jpg"),$_smarty_tpl);?>
" alt="" /></a>
				<h3>Nulla amet dolore</h3>
				<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
				<ul class="actions">
					<li><a href="#" class="button">More</a></li>
				</ul>
			</article>
			<article>
				<a href="#" class="image"><img src="<?php echo rel_url(array('src'=>"images/pic03.jpg"),$_smarty_tpl);?>
" alt="" /></a>
				<h3>Tempus ullamcorper</h3>
				<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
				<ul class="actions">
					<li><a href="#" class="button">More</a></li>
				</ul>
			</article>
			<article>
				<a href="#" class="image"><img src="<?php echo rel_url(array('src'=>"images/pic04.jpg"),$_smarty_tpl);?>
" alt="" /></a>
				<h3>Sed etiam facilis</h3>
				<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
				<ul class="actions">
					<li><a href="#" class="button">More</a></li>
				</ul>
			</article>
			<article>
				<a href="#" class="image"><img src="<?php echo rel_url(array('src'=>"images/pic05.jpg"),$_smarty_tpl);?>
" alt="" /></a>
				<h3>Feugiat lorem aenean</h3>
				<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
				<ul class="actions">
					<li><a href="#" class="button">More</a></li>
				</ul>
			</article>
			<article>
				<a href="#" class="image"><img src="<?php echo rel_url(array('src'=>"images/pic06.jpg"),$_smarty_tpl);?>
" alt="" /></a>
				<h3>Amet varius aliquam</h3>
				<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
				<ul class="actions">
					<li><a href="#" class="button">More</a></li>
				</ul>
			</article>
		</div>
	</section>

<?php
}
}
/* {/block "content"} */
}
