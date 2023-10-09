<?php
/* Smarty version 4.3.0, created on 2023-09-25 08:49:18
  from 'F:\wamp64\www\Projekty\Projekt_Gracjan\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6511498e941e34_24496977',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2061de550a77c39050a204e3f6cf50a41dd6d05' => 
    array (
      0 => 'F:\\wamp64\\www\\Projekty\\Projekt_Gracjan\\app\\views\\templates\\main.tpl',
      1 => 1695631756,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6511498e941e34_24496977 (Smarty_Internal_Template $_smarty_tpl) {
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
		<title>Alpha by HTML5 UP</title>
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
">GracekAuto</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"Strona"),$_smarty_tpl ) );?>
">Home</a></li>
							<?php if (empty($_smarty_tpl->tpl_vars['osoba']->value->login)) {?><li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"registerShow"),$_smarty_tpl ) );?>
" class="button">Sign Up</a></li>
							<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"loginShow"),$_smarty_tpl ) );?>
" class="button">Sign In</a></li><?php }?>
							<?php if (!empty($_smarty_tpl->tpl_vars['osoba']->value->login)) {?><li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"konto"),$_smarty_tpl ) );?>
">Moje Konto</a></li>
							<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"logout"),$_smarty_tpl ) );?>
" class="button">Log out</a></li><?php }?>
						</ul>
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner">
					<h2>GracekAuto</h2>
					<p>Another fine responsive site template freebie by HTML5 UP.</p>
				</section>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7403696676511498e922ea3_79273458', 'top');
?>

	
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15813986756511498e924881_62612823', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17294191926511498e925ee0_18876777', 'messages');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10501705426511498e9374f5_03492923', 'bottom');
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
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
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
class Block_7403696676511498e922ea3_79273458 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_7403696676511498e922ea3_79273458',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'top'} */
/* {block 'content'} */
class Block_15813986756511498e924881_62612823 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15813986756511498e924881_62612823',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'content'} */
/* {block 'messages'} */
class Block_17294191926511498e925ee0_18876777 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_17294191926511498e925ee0_18876777',
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
class Block_10501705426511498e9374f5_03492923 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_10501705426511498e9374f5_03492923',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'bottom'} */
}
