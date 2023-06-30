<?php
/* Smarty version 4.3.1, created on 2023-06-30 18:22:13
  from 'C:\xampp\htdocs\Projekt\app\views\RentEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_649f0135c8cd01_26962844',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ba9412685c469597f0d8ca1b6e93d9d9940259f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt\\app\\views\\RentEdit.tpl',
      1 => 1688142126,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_649f0135c8cd01_26962844 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_515303382649f0135c86143_30317847', 'bottom');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'bottom'} */
class Block_515303382649f0135c86143_30317847 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_515303382649f0135c86143_30317847',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>RentEdit</title>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style_rent.css">
    </head>

    <!DOCTYPE html>
    <html lang="en">
        <body>
            <div class="bottom-margin">
                <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
rentSave" method="post" class="pure-form pure-form-aligned">
                    <fieldset>
                        <legend>Wypożyczenie</legend>
                        <div class="pure-control-group">
                            <label for="poczatek">poczatek</label>
                            <input id="poczatek" type="text" placeholder="poczatek" name="poczatek" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->poczatek;?>
">
                        </div>
                        <div class="pure-control-group">
                            <label for="koniec">koniec</label>
                            <input id="koniec" type="text" placeholder="koniec" name="koniec" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->koniec;?>
">
                        </div>
                        <div class="pure-control-group">
                            <label for="kwota">kwota</label>
                            <input id="kwota" type="text" placeholder="kwota" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kwota;?>
">
                        </div>
                        <div class="pure-control-group">
                            <label for="klienci_idklient">klient id</label>
                            <input id="klienci_idklient" type="text" placeholder="klient id" name="klienci_idklient" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->klienci_idklient;?>
">
                        </div>
                        <div class="pure-control-group">
                            <label for="samochody_idsamochod">samochod id</label>
                            <input id="samochody_idsamochod" type="text" placeholder="samochod id" name="samochody_idsamochod" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->samochody_idsamochod;?>
">
                        </div>
                        <div class="pure-control-group">
                            <label for="pracownicy_idpracownik">pracownik id</label>
                            <input id="pracownicy_idpracownik" type="text" placeholder="pracownik id" name="pracownicy_idpracownik" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->pracownicy_idpracownik;?>
">
                        </div>
                        <div class="pure-controls">
                            <input type="submit" class="pure-button pure-button-primary" value="Zapisz"/>
                            <a class="pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
rentList">Powrót</a>
                        </div>
                    </fieldset>
                    <input type="hidden" name="idwypozyczenie" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->idwypozyczenie;?>
">
                </form>	
            </div>
        </body>
    </html>
<?php
}
}
/* {/block 'bottom'} */
}
