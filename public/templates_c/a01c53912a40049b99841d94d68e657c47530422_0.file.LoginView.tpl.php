<?php
/* Smarty version 4.3.1, created on 2023-06-27 19:19:21
  from 'C:\xampp\htdocs\Projekt\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_649b1a192e9603_90252289',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a01c53912a40049b99841d94d68e657c47530422' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt\\app\\views\\LoginView.tpl',
      1 => 1687886360,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_649b1a192e9603_90252289 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1417084449649b1a192e4c26_73834936', 'bottom');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'bottom'} */
class Block_1417084449649b1a192e4c26_73834936 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_1417084449649b1a192e4c26_73834936',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style_login.css">
    </head>

    <!DOCTYPE html>
    <html lang="en">
        <body>
            <div class="wrapper">
                <span class="icon-close"><ion-icon name="close"></ion-icon></span>
                <div class="form-box login">
                    <h2>Login</h2>
                    <form action="#">
                        <div class="input-box">
                            <span class="icon"><ion-icon name="person"></ion-icon></span>
                            <input type="text" required>
                            <label>Login</label>
                        </div>
                        <div class="input-box">
                            <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                            <input type="password" required>
                            <label>Password</label>
                        </div>
                        <button type="submit" class="btn">Login</button>
                    </form>
                </div>
            </div>

            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/script/script.js"><?php echo '</script'; ?>
>
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
