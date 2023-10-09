<?php
/* Smarty version 4.3.0, created on 2023-09-29 14:45:02
  from 'E:\xampp\htdocs\Projekty\wypozyczalnia\app\views\Strona.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6516c6ce410d82_09778781',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2e54b44e17c37310fe38114e14ef69ec8b986a2' => 
    array (
      0 => 'E:\\xampp\\htdocs\\Projekty\\wypozyczalnia\\app\\views\\Strona.tpl',
      1 => 1695991501,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6516c6ce410d82_09778781 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18257038806516c6ce3fa083_68434666', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "content"} */
class Block_18257038806516c6ce3fa083_68434666 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18257038806516c6ce3fa083_68434666',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<!-- Main -->
				<section id="main" class="container">

                    
						
                            <?php if (\core\RoleUtils::inRole('Dealer')) {?>
                    <section class="box special">
					<h2>Jesteś zalogowany jako administrator.</h2>
</section>
<?php }?>
											
                    
					<section class="box special">
						<header class="major">
                            <h2><b>Wyjątkowe samochody</b>
							<br />
							<b>na każdą kieszeń</b></h2>
							<p><b>Wybierz samochód</b> spośród popularnych marek i pewnych modeli,<br />
							którym <b>na pewno dojedziesz bezpiecznie do celu.</b></p>
						</header>
											</section>

					<section class="box special features">
						<div class="features-row">
							<section>
								<span class="icon solid major fa-bolt accent2"></span>
								<h3>Ekonomiczność</h3>
								<p>Nikt nie chce płacić dużo za paliwo, dlatego wybraliśmy dla Ciebie modele
                                samochodów, które nie tylko pozwolą na dynamiczną jazdę, ale również niski
                                pobór paliwa.</p>
							</section>
							<section>
								<span class="icon solid major fa-chart-area accent3"></span>
								<h3>Bezpieczeństwo</h3>
								<p>Wszystkie części w samochodach są na bieżąco kontrolowane przez zaufanych
                                mechaników, którzy dbają o to, byś mógł przejechać tysiące kilometrów bezawaryjnie.</p>
							</section>
						</div>
					</section>

                    <input id="wyszukaj" type="text" placeholder="Wyszukaj" /><br>
					
                    
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
 zł / dzień</h3>
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
