<?php
/* Smarty version 4.3.0, created on 2023-09-29 13:30:24
  from 'E:\xampp\htdocs\Projekty\wypozyczalnia\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6516b550e25130_33379987',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65f164b90e4917dc95250afb7cc9d6e880357d9f' => 
    array (
      0 => 'E:\\xampp\\htdocs\\Projekty\\wypozyczalnia\\app\\views\\LoginView.tpl',
      1 => 1695807475,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6516b550e25130_33379987 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6639235656516b550ddef46_36434650', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "content"} */
class Block_6639235656516b550ddef46_36434650 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6639235656516b550ddef46_36434650',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- Main -->
<section id="main" class="container">
	<section class="box">
	<h3>login</h3>
	<form method="post" id="login" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"login"),$_smarty_tpl ) );?>
">
		<div class="row gtr-uniform gtr-50">
			<div class="col-6 col-12-mobilep">
				<input type="email" name="email" id="email" value="" placeholder="Email" />
			</div>
			<div class="col-6 col-12-mobilep">
				<input type="password" name="haslo" id="name" value="" placeholder="Hasło" />
			</div>
			<div class="col-12">
				<ul class="actions">
					<li><input type="submit" value="Zaloguj" /></li>
				</ul>
			</div>
		</div>
	</form>
	</section>
</section>

<?php
}
}
/* {/block "content"} */
}
