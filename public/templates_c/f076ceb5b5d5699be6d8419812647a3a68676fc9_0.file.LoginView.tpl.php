<?php
/* Smarty version 4.3.0, created on 2023-09-24 23:23:01
  from 'F:\wamp64\www\Projekty\Projekt_Gracjan\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6510c4d5d30591_61536253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f076ceb5b5d5699be6d8419812647a3a68676fc9' => 
    array (
      0 => 'F:\\wamp64\\www\\Projekty\\Projekt_Gracjan\\app\\views\\LoginView.tpl',
      1 => 1695575346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6510c4d5d30591_61536253 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19360363346510c4d5d2b1e6_72310001', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "content"} */
class Block_19360363346510c4d5d2b1e6_72310001 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19360363346510c4d5d2b1e6_72310001',
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
