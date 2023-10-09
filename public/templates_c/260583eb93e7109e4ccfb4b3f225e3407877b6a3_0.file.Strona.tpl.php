<?php
/* Smarty version 4.3.0, created on 2023-09-27 08:55:14
  from 'F:\wamp64\www\Projekty\Projekt_Gracjan\app\views\Strona.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6513edf2844393_67901942',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '260583eb93e7109e4ccfb4b3f225e3407877b6a3' => 
    array (
      0 => 'F:\\wamp64\\www\\Projekty\\Projekt_Gracjan\\app\\views\\Strona.tpl',
      1 => 1695804913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6513edf2844393_67901942 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6730010226513edf2825ee5_25537494', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "content"} */
class Block_6730010226513edf2825ee5_25537494 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6730010226513edf2825ee5_25537494',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<!-- Main -->
				<section id="main" class="container">

					<section class="box special">
						<header class="major">
							<h2>Introducing the ultimate mobile app
							<br />
							for doing stuff with your phone</h2>
							<p>Blandit varius ut praesent nascetur eu penatibus nisi risus faucibus nunc ornare<br />
							adipiscing nunc adipiscing. Condimentum turpis massa.</p>
						</header>
											</section>

					<section class="box special features">
						<div class="features-row">
							<section>
								<span class="icon solid major fa-bolt accent2"></span>
								<h3>Magna etiam</h3>
								<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
							</section>
							<section>
								<span class="icon solid major fa-chart-area accent3"></span>
								<h3>Ipsum dolor</h3>
								<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
							</section>
						</div>
					</section>

					<div id="row" class="row">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wypozyczalnia']->value->samochod, 's');
$_smarty_tpl->tpl_vars['s']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->do_else = false;
?>
						<div class="col-6 col-12-narrower">
							<section class="box special">
								<span class="image featured"><img src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"images/".((string)$_smarty_tpl->tpl_vars['s']->value["zdjecie"]).".jpg"),$_smarty_tpl ) );?>
" alt="" /></span>
								<h3><?php echo $_smarty_tpl->tpl_vars['s']->value["marka"];?>
 <?php echo $_smarty_tpl->tpl_vars['s']->value["model"];?>
</h3>
								<p>Skrzynia: <?php echo $_smarty_tpl->tpl_vars['s']->value["skrzynia"];?>
</p>
								<h3><?php echo $_smarty_tpl->tpl_vars['s']->value["cena"];?>
 zł</h3>
								<?php if (!empty($_smarty_tpl->tpl_vars['osoba']->value->id)) {?><form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"wypozycz",'id'=>$_smarty_tpl->tpl_vars['s']->value['id']),$_smarty_tpl ) );?>
" method="post">
									<label for="dataOd">Data wypożyczenia</label>
									<input type="date" name="dataOd" /><br>
									<label for="dataDo">Data oddania</label>
									<input type="date" name="dataDo" /><br>
									<input type="submit" name="submit" class="button" value="Wypożycz" />
								</form><?php }?>
							</section>
						</div>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</div>
					<div id="podstrony" class="center">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wypozyczalnia']->value->auta, 'a');
$_smarty_tpl->tpl_vars['a']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->do_else = false;
?>
							<form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"strona",'id'=>$_smarty_tpl->tpl_vars['a']->value),$_smarty_tpl ) );?>
#row" method="post">
								<input type="submit" class="button icon solid fa-file" value="<?php echo $_smarty_tpl->tpl_vars['a']->value;?>
"/>
							</form>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</div>

				</section>

<?php
}
}
/* {/block "content"} */
}
