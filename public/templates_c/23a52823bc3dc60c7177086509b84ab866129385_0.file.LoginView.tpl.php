<?php
/* Smarty version 4.3.0, created on 2023-10-02 15:53:23
  from 'C:\xampp\htdocs\Projekty\wypozyczalnia\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_651acb53747669_31991433',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23a52823bc3dc60c7177086509b84ab866129385' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekty\\wypozyczalnia\\app\\views\\LoginView.tpl',
      1 => 1696178871,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_651acb53747669_31991433 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_879984036651acb53718ed3_05731208', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "content"} */
class Block_879984036651acb53718ed3_05731208 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_879984036651acb53718ed3_05731208',
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
