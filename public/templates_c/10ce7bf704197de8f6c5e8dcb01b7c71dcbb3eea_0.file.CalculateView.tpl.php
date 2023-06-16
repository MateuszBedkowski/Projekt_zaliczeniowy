<?php
/* Smarty version 3.1.30, created on 2023-06-05 13:49:11
  from "C:\xampp\htdocs\php_09_bd\app\views\CalculateView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_647dcbb7defd31_91394172',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10ce7bf704197de8f6c5e8dcb01b7c71dcbb3eea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_09_bd\\app\\views\\CalculateView.tpl',
      1 => 1685965751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_647dcbb7defd31_91394172 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1270900077647dcbb7def998_87564767', 'top');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_1270900077647dcbb7def998_87564767 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="bottom-margin">
    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calculate" method="post" class="pure-form pure-form-aligned">
    <fieldset>
        <legend>Rata</legend>
            <div class="pure-control-group">
                <label for="amount">kwota</label>
                <input id="amount" type="text" placeholder="kwota" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->amount;?>
">
            </div>
            <div class="pure-control-group">
                <label for="percentage">oprocentowanie</label>
                <input id="percentage" type="text" placeholder="oprocentowanie" name="percentage" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->percentage;?>
">
            </div>
            <div class="pure-control-group">
                <label for="months">okres</label>
                <input id="months" type="text" placeholder="okres" name="months" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->months;?>
">
            </div>
            <div class="pure-controls">
                <button type="submit" class="pure-button pure-button-primary">Oblicz ratę</button>
            </div>
    </fieldset>
</form>
        <?php if (isset($_smarty_tpl->tpl_vars['monthlyPayment']->value)) {?>
            <div style="margin-top: 10px; display: inline-block; background-color: rgb(0, 255, 0); padding: 5px;">
    <label for="monthlyPayment" style="font-weight: bold; color: black;">Rata:</label>
    <span style="margin-left: 10px; color: black;"><?php echo $_smarty_tpl->tpl_vars['monthlyPayment']->value;?>
 zł</span>
</div>
        <?php }?>
        </fieldset>
</div>

<?php
}
}
/* {/block 'top'} */
}
