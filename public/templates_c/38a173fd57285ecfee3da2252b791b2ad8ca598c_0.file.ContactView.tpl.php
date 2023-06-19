<?php
/* Smarty version 4.3.1, created on 2023-06-19 09:06:57
  from 'C:\xampp\htdocs\Projekt\app\views\ContactView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_648ffe91e82038_03131899',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38a173fd57285ecfee3da2252b791b2ad8ca598c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt\\app\\views\\ContactView.tpl',
      1 => 1687158416,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_648ffe91e82038_03131899 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style_contact.css">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1420888843648ffe91e80a34_59718956', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1420888843648ffe91e80a34_59718956 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1420888843648ffe91e80a34_59718956',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style_contact.css">
</head>

<!DOCTYPE html>
<html lang="en">
<body>
    <header>
        <h2 class="rent">Rental</h2>
        <nav class="navigation">
            <a href="../../login/login.html">Home</a>
            <a href="#">Rent</a>
            <a href="Contact.html">Contact</a>
            <button class="btnLogin-popup">Login</button>
        </nav>
    </header>

    <div class="wrapper">
        <div class="form-box login">
            <h2>Contact</h2>
            <form action="mailto:bedkowskim@outlook.com" method="POST" enctype="text/plain">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" name="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="document"></ion-icon></span>
                    <input type="text" name="subject" required>
                    <label>Subject</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="chatbox"></ion-icon></span>
                    <textarea name="message" required></textarea>
                    <label>Message</label>
                </div>
                <button type="submit" class="btn-send">Send</button>
            </form>
        </div>
    </div>

    <?php echo '<script'; ?>
 src="script.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="module"
        src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 nomodule
        src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"><?php echo '</script'; ?>
>
</body>

</html>
<?php
}
}
/* {/block 'content'} */
}
