<?php
/* Smarty version 4.3.0, created on 2023-09-29 12:39:08
  from 'E:\xampp\htdocs\Projekty\Projekt_Gracjan\app\views\Konto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6516a94c46b4b6_59810170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '625e53f003cae0c84125b133f1fa914c5671cefc' => 
    array (
      0 => 'E:\\xampp\\htdocs\\Projekty\\Projekt_Gracjan\\app\\views\\Konto.tpl',
      1 => 1695983943,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6516a94c46b4b6_59810170 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20110565616516a94c4599c4_12997230', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "content"} */
class Block_20110565616516a94c4599c4_12997230 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20110565616516a94c4599c4_12997230',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<!-- Main -->
				<section id="main" class="container">

					<section class="box special">
						<header class="major">
                            <h2>Twoje samochody znajdują się tutaj</h2>

							<p>Pamiętaj, żeby odwieźć samochód na nasz plac na czas!</p>
						</header>
											</section>

				
					<input id="wyszukaj" type="text" placeholder="Wyszukaj" /><br>
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
