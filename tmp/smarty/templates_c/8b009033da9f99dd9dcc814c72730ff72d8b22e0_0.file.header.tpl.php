<?php
/* Smarty version 3.1.33, created on 2019-05-21 14:06:49
  from 'C:\OSPanel\domains\brandShop\views\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce3dbc9289623_84661354',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b009033da9f99dd9dcc814c72730ff72d8b22e0' => 
    array (
      0 => 'C:\\OSPanel\\domains\\brandShop\\views\\header.tpl',
      1 => 1558436417,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:parts/nav.tpl' => 1,
  ),
),false)) {
function content_5ce3dbc9289623_84661354 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.min.css">
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
js/scripts.min.js"><?php echo '</script'; ?>
>

    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
</head>

<body>
    <header class="mainHeader">
        <div class="container">
            <div class="mainHeader-wrap flex">
                <a class="logo container__logo" href="/"> <img src="/img/Group_2.png" alt="logo"><b>BRAN</b><span>D</span></a>
                <div class="container__searchMenu flex">
                    <div class="dropdown searchMenu__dropdown">Browse

                    </div>
                    <input type="text" placeholder="Search fo item..">
                    <button class="searchMenu__search"></button>
                </div>
                <div class="container__brushMenu flex">
                    <div class="brushMenu__dropdown">
                        <img src="/img/shopping-cart-header.png" alt="" class="brushMenu__icon">

                        <!-- CART DROPDOWN-MENU -->

                        <div class="dropdown__cart flex">
                            <div class="cart__items">
                                <div class="cart-item"></div>
                                <div class="cart-item"></div>
                            </div>
                            <span class="cart__totalPrice">TOTAL $500.00</span>
                            <div class="cart__buttons">
                                <button>Checkout</button>
                                <button>Go to cart</button>
                            </div>
                        </div>
                        <!-- END CART DROPDOWN-MENU -->

                    </div>

                    <button class="brushMenu__myAcc">My Account</button>
                </div>
            </div>
        </div>
    </header>

<?php $_smarty_tpl->_subTemplateRender("file:parts/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
