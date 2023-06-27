<?php
/* Smarty version 4.3.1, created on 2023-06-21 15:47:29
  from 'C:\xampp\htdocs\Projekt\app\views\RentList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6492ff71865cf1_26223314',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ab70bf54e4ecf317f924fe218c8b0d0bc55c0c6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt\\app\\views\\RentList.tpl',
      1 => 1687354780,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6492ff71865cf1_26223314 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8524214706492ff717b5ea4_43639924', 'content');
?>


	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12676940916492ff717b97f6_04749597', 'bottom');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_8524214706492ff717b5ea4_43639924 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8524214706492ff717b5ea4_43639924',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<div class="bottom-margin">
		<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
rentList">
			<legend>Opcje wyszukiwania</legend>
			<fieldset>
				<input type="text" placeholder="kwota" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->kwota;?>
" /><br />
				<button type="submit" class="pure-button pure-button-primary">Filtruj</button>
			</fieldset>
		</form>
	</div>	

	<?php
}
}
/* {/block 'content'} */
/* {block 'bottom'} */
class Block_12676940916492ff717b97f6_04749597 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_12676940916492ff717b97f6_04749597',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<div class="bottom-margin">
	<a class="pure-button button-success" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
rentNew">+ Nowe wypożyczenie</a>
	</div>	

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

<?php
}
}
/* {/block 'bottom'} */
}
