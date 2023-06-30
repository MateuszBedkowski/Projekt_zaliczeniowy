<?php
/* Smarty version 4.3.1, created on 2023-06-30 17:26:07
  from 'C:\xampp\htdocs\Projekt\app\views\RentList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_649ef40f8bf685_96982667',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ab70bf54e4ecf317f924fe218c8b0d0bc55c0c6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt\\app\\views\\RentList.tpl',
      1 => 1688138766,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_649ef40f8bf685_96982667 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_728566318649ef40f8aeee3_33939642', 'head_style');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1766269809649ef40f8b4560_77281235', 'bottom');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'head_style'} */
class Block_728566318649ef40f8aeee3_33939642 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_style' => 
  array (
    0 => 'Block_728566318649ef40f8aeee3_33939642',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style_rent.css">

<?php
}
}
/* {/block 'head_style'} */
/* {block 'bottom'} */
class Block_1766269809649ef40f8b4560_77281235 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_1766269809649ef40f8b4560_77281235',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Rent</title>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style_rent.css">
    </head>

	<!DOCTYPE html>
		<html lang="en">
			<body>
				<div class="filter">
					<div class="bottom-margin">
						<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
rentList">
							<legend>Filtrowanie</legend>
							<fieldset>
								<input type="text" placeholder="kwota" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->kwota;?>
" /><br />
								<button type="submit" class="pure-button pure-button-primary">Filtruj</button>
							</fieldset>
						</form>
					</div>
				</div>	
				<div class="table-container">
					<table id="tab_wypozyczenie" class="pure-table pure-table-bordered">
						<thead>
							<tr>
								<th>początek</th>
								<th>koniec</th>
								<th>kwota</th>
								<th>klient id</th>
								<th>samochod id</th>
								<th>pracownik id</th>
							</tr>
						</thead>
							<tbody>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wypozyczenie']->value, 'w');
$_smarty_tpl->tpl_vars['w']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['w']->value) {
$_smarty_tpl->tpl_vars['w']->do_else = false;
?>
									<tr><td><?php echo $_smarty_tpl->tpl_vars['w']->value["poczatek"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['w']->value["koniec"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['w']->value["kwota"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['w']->value["klienci_idklient"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['w']->value["samochody_idsamochod"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['w']->value["pracownicy_idpracownik"];?>
</td><td><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
rentEdit/<?php echo $_smarty_tpl->tpl_vars['w']->value['idwypozyczenie'];?>
">Edytuj</a>&nbsp;<a class="button-small pure-button button-warning" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
rentDelete/<?php echo $_smarty_tpl->tpl_vars['w']->value['idwypozyczenie'];?>
">Usuń</a></td></tr>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</tbody>
					</table>
				</div>
				<div class="car-list">
					<div class="car-item" >
						<img src="../public/cars/Audi_S3.jpg" alt="Audi S3">
						<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
rentNew"><button class="rent-button">Wypożycz</button></a>
					</div>
					<div class="car-item">
						<img src="../public/cars/BMW_F30.jpg" alt="BMW F30">
						<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
rentNew"><button class="rent-button">Wypożycz</button></a>
					</div>
					<div class="car-item">
						<img src="../public/cars/BMW_F36.jpg" alt="BMW F36">
						<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
rentNew"><button class="rent-button">Wypożycz</button></a>
					</div>
					<div class="car-item">
						<img src="../public/cars/Chevrolet_Trax.jpg" alt="Chevrolet Trax">
						<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
rentNew"><button class="rent-button">Wypożycz</button></a>
					</div>
					<div class="car-item">
						<img src="../public/cars/Mercedes_A45s.jpg" alt="Mercedes AMG A45s">
						<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
rentNew"><button class="rent-button">Wypożycz</button></a>
					</div>
					<div class="car-item">
						<img src="../public/cars/Porsche_Macan.jpg" alt="Porsche Macan">
						<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
rentNew"><button class="rent-button">Wypożycz</button></a>
					</div>
				</div>

				<?php echo '<script'; ?>
 type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"><?php echo '</script'; ?>
>
				<?php echo '<script'; ?>
 nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"><?php echo '</script'; ?>
>
		</body>
	</html>
<?php
}
}
/* {/block 'bottom'} */
}
