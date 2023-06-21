<?php
/* Smarty version 4.3.1, created on 2023-06-21 15:48:43
  from 'C:\xampp\htdocs\Projekt\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6492ffbb502f66_33637315',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef297889daccf7b55ee0cfbe1cb57110ffbddea9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt\\app\\views\\templates\\main.tpl',
      1 => 1687355321,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6492ffbb502f66_33637315 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15808052256492ffbb49fe94_15667040', 'top');
}
/* {block 'messages'} */
class Block_16785978636492ffbb4fb928_52725840 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
<div class="messages bottom-margin">
    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
        <li class="msg <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>error<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>warning<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>info<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</div>
<?php }?>

<?php
}
}
/* {/block 'messages'} */
/* {block 'bottom'} */
class Block_16575826686492ffbb502627_50937426 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'bottom'} */
/* {block 'top'} */
class Block_15808052256492ffbb49fe94_15667040 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_15808052256492ffbb49fe94_15667040',
  ),
  'messages' => 
  array (
    0 => 'Block_16785978636492ffbb4fb928_52725840',
  ),
  'bottom' => 
  array (
    0 => 'Block_16575826686492ffbb502627_50937426',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<head>
    <meta charset="utf-8"/>
    <title>Home</title>
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css"
        integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous"> 
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style_login.css">
    <style>
    </style>
</head>

<body>

    <header>
        <h2>Rental</h2>
            <nav class="navigation">
                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow">Home</a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
rentList">Rent</a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
contact">Contact</a>
                <?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
                <button href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout" class="btnLogin-popup">Login</button>
                <?php } else { ?>    
                <button href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow" class="btnLogin-popup">Logout</button>
                <?php }?>
            </nav>
    </header>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16785978636492ffbb4fb928_52725840', 'messages', $this->tplIndex);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16575826686492ffbb502627_50937426', 'bottom', $this->tplIndex);
?>


</body>

</html>
<?php
}
}
/* {/block 'top'} */
}
