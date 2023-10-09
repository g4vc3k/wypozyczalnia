<?php
/* Smarty version 4.3.0, created on 2023-09-27 08:40:34
  from 'F:\wamp64\www\Projekty\Projekt_Gracjan\app\views\RegisterView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6513ea827a1356_10830647',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4dea5e91ca29329c5afdd8455a4fcf0db68e27e' => 
    array (
      0 => 'F:\\wamp64\\www\\Projekty\\Projekt_Gracjan\\app\\views\\RegisterView.tpl',
      1 => 1695575346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6513ea827a1356_10830647 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12601564596513ea82742209_57070260', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "content"} */
class Block_12601564596513ea82742209_57070260 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12601564596513ea82742209_57070260',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- Main -->
	<section id="main" class="container">
		<section class="box">
		<h3>Rejestracja</h3>
		<form method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"register"),$_smarty_tpl ) );?>
">
			<div class="row gtr-uniform gtr-50">
				<div class="col-6 col-12-mobilep">
					<label for="imie">Imię</label>
					<input type="text" name="imie" id="name" value=""/>
				</div>
				<div class="col-6 col-12-mobilep">
					<label for="imie">Nazwisko</label>
					<input type="text" name="nazwisko" id="name" value=""/>
				</div>
				<div class="col-6 col-12-mobilep">
					<label for="imie">Email</label>
					<input type="email" name="email" id="email" value=""/>
				</div>
				<div class="col-6 col-12-mobilep">
					<label for="imie">Hasło</label>
					<input type="password" name="haslo" id="haslo" value=""/>
				</div>
				<div class="col-6 col-12-mobilep">
					<label for="imie">Telefon</label>
					<input type="text" name="telefon" id="name" value=""/>
				</div>
				<div class="col-6 col-12-mobilep">
					<label for="imie">Start prawka</label>
					<input type="date" name="start_prawka" id="name" value=""/>
				</div>
				<div class="col-6 col-12-mobilep">
					<label for="imie">Nr dowodu</label>
					<input type="text" name="nr_dowodu" id="name" value=""/>
				</div>
				<div class="col-6 col-12-mobilep">
					<label for="imie">Miejscowość</label>
					<input type="text" name="miejscowosc" id="name" value=""/>
				</div>
				<div class="col-6 col-12-mobilep">
					<label for="imie">Ulica</label>
					<input type="text" name="ulica" id="name" value=""/>
				</div>
				<div class="col-6 col-12-mobilep">
					<label for="imie">Nr lokalu</label>
					<input type="numeric" name="nr_lokalu" id="name" value=""/>
				</div>
				<div class="col-6 col-12-mobilep">
					<label for="imie">Data urodzenia</label>
					<input type="date" name="data_ur" id="name" value=""/>
				</div>
				<div class="col-12">
				<ul class="actions">
					<li><input type="submit" value="Zarejestruj" /></li>
				</ul>
				</div>
		</form>
		</section>
	</section>

<?php
}
}
/* {/block "content"} */
}
