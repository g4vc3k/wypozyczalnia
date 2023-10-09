<?php
/* Smarty version 4.3.0, created on 2023-09-27 09:27:45
  from 'F:\wamp64\www\Projekty\Projekt_Gracjan\app\views\Konto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6513f5913749e5_92201244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da37636d85191f0863aa7e420ac8b358f7f84900' => 
    array (
      0 => 'F:\\wamp64\\www\\Projekty\\Projekt_Gracjan\\app\\views\\Konto.tpl',
      1 => 1695806864,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6513f5913749e5_92201244 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16810711586513f59135ca55_59438098', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "content"} */
class Block_16810711586513f59135ca55_59438098 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_16810711586513f59135ca55_59438098',
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
					<input id="wyszukaj" type="text" placeholder="Samochód" /><br>
					<div class="row">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['samochody']->value, 's');
$_smarty_tpl->tpl_vars['s']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->do_else = false;
?>
						<div class="col-6 col-12-narrower">
							<section class="box special">
								<span class="image featured"><img src="images/<?php echo $_smarty_tpl->tpl_vars['s']->value["zdjecie"];?>
.jpg" alt="" /></span>
								<h3><?php echo $_smarty_tpl->tpl_vars['s']->value["marka"];?>
 <?php echo $_smarty_tpl->tpl_vars['s']->value["model"];?>
</h3>
								<p>Skrzynia: <?php echo $_smarty_tpl->tpl_vars['s']->value["skrzynia"];?>
</p>
								<p>Wypożyczone od: <?php echo $_smarty_tpl->tpl_vars['s']->value["start_wyp"];?>
</p>
								<p>Wypożyczone do: <?php echo $_smarty_tpl->tpl_vars['s']->value["koniec_wyp"];?>
</p>
								<h4>Cena: <?php echo $_smarty_tpl->tpl_vars['s']->value["cena"];?>
 zł</h4>
								<form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"oddaj",'id'=>$_smarty_tpl->tpl_vars['s']->value['id']),$_smarty_tpl ) );?>
" method="post">
									<input type="submit" name="submit" class="button" value="Oddaj" />
								</form>
							</section>
						</div>
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
