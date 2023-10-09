<?php
/* Smarty version 4.3.0, created on 2023-09-29 14:52:59
  from 'E:\xampp\htdocs\Projekty\wypozyczalnia\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6516c8ab3f7513_87957519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1a941b7616d6696639a3d9608dd13e7db737703' => 
    array (
      0 => 'E:\\xampp\\htdocs\\Projekty\\wypozyczalnia\\app\\views\\templates\\main.tpl',
      1 => 1695991877,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6516c8ab3f7513_87957519 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Wypożyczalnia samochodów</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"assets/css/main.css"),$_smarty_tpl ) );?>
" />
	</head>
	<body class="landing is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<h1><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"Strona"),$_smarty_tpl ) );?>
">Wypożyczalnia samochodów</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"Strona"),$_smarty_tpl ) );?>
">Strona główna</a></li>
							<?php if (empty($_smarty_tpl->tpl_vars['osoba']->value->login)) {?><li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"registerShow"),$_smarty_tpl ) );?>
" class="button">Zarejestruj</a></li>
							<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"loginShow"),$_smarty_tpl ) );?>
" class="button">Zaloguj</a></li><?php }?>
							<?php if (!empty($_smarty_tpl->tpl_vars['osoba']->value->login)) {?><li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"konto"),$_smarty_tpl ) );?>
">Moje Konto</a></li>
							<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"logout"),$_smarty_tpl ) );?>
" class="button">Wyloguj</a></li><?php }?>
						</ul>
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner">
					<h2>Wypożyczalnia samochodów</h2>
					<p>Zaplanuj swoją wymarzoną podróż.</p>
				</section>
            

            
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18122243186516c8ab3e5986_07425406', 'top');
?>

	
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11515951436516c8ab3e6474_59288583', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3402859126516c8ab3e6ab2_53840096', 'messages');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13629726916516c8ab3f4c58_64320505', 'bottom');
?>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon brands fa-google-plus"><span class="label">Google+</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Wypożyczalnia samochodów. Wyk. Gracjan Knopik</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"assets/js/szukaj.js"),$_smarty_tpl ) );?>
"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"assets/js/jquery.min.js"),$_smarty_tpl ) );?>
"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"assets/js/jquery.dropotron.min.js"),$_smarty_tpl ) );?>
"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"assets/js/jquery.scrollex.min.js"),$_smarty_tpl ) );?>
"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"assets/js/browser.min.js"),$_smarty_tpl ) );?>
"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"assets/js/breakpoints.min.js"),$_smarty_tpl ) );?>
"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"assets/js/util.js"),$_smarty_tpl ) );?>
"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"assets/js/main.js"),$_smarty_tpl ) );?>
"><?php echo '</script'; ?>
>

	</body>
</html><?php }
/* {block 'top'} */
class Block_18122243186516c8ab3e5986_07425406 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_18122243186516c8ab3e5986_07425406',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'top'} */
/* {block 'content'} */
class Block_11515951436516c8ab3e6474_59288583 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11515951436516c8ab3e6474_59288583',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'content'} */
/* {block 'messages'} */
class Block_3402859126516c8ab3e6ab2_53840096 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_3402859126516c8ab3e6ab2_53840096',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
<div class="messages bottom-margin">
	<ul>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
	<li class="msg <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>error<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>warning<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>info<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
</div>
<?php }?>

<?php
}
}
/* {/block 'messages'} */
/* {block 'bottom'} */
class Block_13629726916516c8ab3f4c58_64320505 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_13629726916516c8ab3f4c58_64320505',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'bottom'} */
}
