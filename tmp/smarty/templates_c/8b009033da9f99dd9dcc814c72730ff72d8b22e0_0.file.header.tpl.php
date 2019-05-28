<?php
/* Smarty version 3.1.33, created on 2019-05-28 11:50:22
  from 'C:\OSPanel\domains\brandShop\views\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cecf64eedd9e0_61842284',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b009033da9f99dd9dcc814c72730ff72d8b22e0' => 
    array (
      0 => 'C:\\OSPanel\\domains\\brandShop\\views\\header.tpl',
      1 => 1558815071,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:parts/nav.tpl' => 1,
  ),
),false)) {
function content_5cecf64eedd9e0_61842284 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
img/favicon/favicon.ico">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.min.css">
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
dist/js/scripts.min.js"><?php echo '</script'; ?>
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
                                <button><a href="/checkout/">Checkout</a></button>
                                <button><a href="/cart/">Go to cart</a></button>
                            </div>
                        </div>
                        <!-- END CART DROPDOWN-MENU -->

                    </div>

                    <div class="pos-rel">
                        <button class="brushMenu__myAcc accent-button" id="showMyAcc">My Account</button>
                        <div class="dropdown__myAcc flex" id="myAccContainer">           
                            

                    <?php if (isset($_smarty_tpl->tpl_vars['arUser']->value)) {?>
                             <div id="userBox">
                                <span><a href="/user/" id="userLink"><?php echo $_smarty_tpl->tpl_vars['arUser']->value['displayName'];?>
</a></span>
                                <span><a href="/user/logout/">Выход</a></span>
                            </div>
                    <?php } else { ?>
                                
                            <div id="userBox" class="hideme">
                                <span><a href="#" id="userLink"></a></span>
                                <span><a href="/user/logout/">Выход</a></span>
                            </div>
                            <div class="myAcc__loginBox" id="loginBox">
                                <span class="myAcc__title-text">Login</span>
                                <input type="text" name="loginEmail" id="loginEmail">
                                <input type="text" name="loginPwd" id="loginPwd">
                                <button class="accent-button" id="loginBtn">login</button>
                            </div>                           
                            <div class="myAcc__registerBox" id="registerBox">
                                <span class="myAcc__title-text">Register</span>
                                <input type="text" name="email" id="email">
                                <input type="text" name="pwd1" id="pwd1">
                                <input type="text" name="pwd2" id="pwd2">
                                <button class="accent-button" id="registerBtn" >register</button>
                            </div>
                    <?php }?>     
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

<?php $_smarty_tpl->_subTemplateRender("file:parts/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
