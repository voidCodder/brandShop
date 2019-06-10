<?php
/* Smarty version 3.1.33, created on 2019-06-10 11:08:49
  from 'C:\OSPanel\domains\brandShop\views\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfe101122c7a3_28735051',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b009033da9f99dd9dcc814c72730ff72d8b22e0' => 
    array (
      0 => 'C:\\OSPanel\\domains\\brandShop\\views\\header.tpl',
      1 => 1560154020,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:parts/nav.tpl' => 1,
  ),
),false)) {
function content_5cfe101122c7a3_28735051 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <div class="dropdown searchMenu__dropdown">
                        Browse
                    </div>
                    <input type="text" placeholder="Search fo item.."
                    id="searchInput">
                    <button class="searchMenu__search"></button>

                    
                    <div class="dropdown-search" id="search-block" tabindex="1">

                    </div>
                    
                    
                </div>
                <div class="container__brushMenu flex">
                    <div class="brushMenu__dropdown">
                        <img src="/img/shopping-cart-header.png" alt="" class="brushMenu__icon">

                                                <div class="cart-cnt-items" id="cart-cnt-items">
                            <?php if ($_smarty_tpl->tpl_vars['cartCntItems']->value > 0) {?> 
                                <?php echo $_smarty_tpl->tpl_vars['cartCntItems']->value;?>

                            <?php } else { ?> 0
                            <?php }?>
                        </div>
                        
                        <!-- CART DROPDOWN-MENU -->

                        <div class="dropdown__cart flex">

                            <div class="cart__items">
<?php $_smarty_tpl->_assignInScope('totalPrice', 0);
if ($_smarty_tpl->tpl_vars['rsCartProducts']->value != null) {?>


    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCartProducts']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['amount'], 'cnt', false, 'size');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['size']->value => $_smarty_tpl->tpl_vars['cnt']->value) {
?>

<?php ob_start();
echo $_smarty_tpl->tpl_vars['totalPrice']->value;
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('totalPrice', $_prefixVariable1+($_smarty_tpl->tpl_vars['item']->value['price']*$_smarty_tpl->tpl_vars['cnt']->value));?>

                                <div class="cart-item"
                                data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id_good'];
echo $_smarty_tpl->tpl_vars['size']->value;?>
">
                                    <div class="cart__item flex">
                                        <a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id_good'];?>
/">
                                            <img 
                                            src="/img/goods/<?php echo $_smarty_tpl->tpl_vars['item']->value['id_category'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
.jpg" 
                                            alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['brand'];?>
 - <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
">
                                        </a>
                                        <div class="cart__item-info">
                                            <span class="cart__item-text-brand">
                                                <?php echo $_smarty_tpl->tpl_vars['item']->value['brand'];?>

                                            </span>
                                            <span class="cart__item-text-name">
                                                <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

                                            </span>
                                            <span class="cart__item-text-name">
                                                Size: <?php echo $_smarty_tpl->tpl_vars['size']->value;?>

                                            </span>
                                            <span class="cart__item-text-cnt">
                                                <span data-cart-item-cnt>
                                                    <?php echo $_smarty_tpl->tpl_vars['cnt']->value;?>

                                                </span> 
                                                <i>x </i>
                                                <span data-cart-item-price>
                                                    $<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>

                                                </span>
                                            </span>
                                        </div>
                                        <div class="cart__item-remove">
                                            <i class="fas fa-times-circle cart-item-remove"
                                            data-cart-item-remove-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id_good'];?>
" 
                                            data-cart-item-remove-size="<?php echo $_smarty_tpl->tpl_vars['size']->value;?>
">
                                            </i>
                                        </div>
                                    </div>
                                </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php } else { ?>
    <span class="emptyItem cart-emptyItem">Cart empty</span>
<?php }?>


                            </div>


                            <span class="cart__totalPrice">
                                <span>TOTAL</span>
                                <span id="cart-totalPrice">
                                    $<?php echo $_smarty_tpl->tpl_vars['totalPrice']->value;?>

                                </span>
                            </span>
                            <div class="cart__buttons">
                                <button id="go-to-checkout-btn-cart">
                                    <a href="#">Checkout</a>
                                </button>
                                <button><a href="/cart/">Go to cart</a></button>
                            </div>
                        </div>
                        <!-- END CART DROPDOWN-MENU -->

                    </div>

                    <div class="pos-rel">
                        <button class="brushMenu__myAcc accent-button" id="showMyAcc">My Account</button>
                        <div class="dropdown__myAcc flex" id="myAccContainer">           
                            

                    <?php if (isset($_smarty_tpl->tpl_vars['arUser']->value)) {?>
                             <div class="user-userBox" 
                             id="userBox">
                                <span><a href="/user/" id="userLink"><?php echo $_smarty_tpl->tpl_vars['arUser']->value['displayName'];?>
</a></span>
                                <span><a href="/user/logout/">Logout</a></span>
                            </div>
                    <?php } else { ?>
                                
                            <div class="hideme" 
                            id="userBox">
                                <span><a href="#" id="userLink"></a></span>
                                <span><a href="/user/logout/">Logout</a></span>
                            </div>
                            <span class="myAcc__title-text"
                            id="loginBox-text">
                                Login
                            </span>

                            <form class="myAcc__loginBox" id="loginBox">
                                <label class="shipping-form-typetext-label">Email</label>
                                <input type="email" name="loginEmail" 
                                placeholder="sophie@example.com" required
                                id="loginEmail">
                                <label class="shipping-form-typetext-label">Password</label>
                                <input type="password" name="loginPwd"
                                required
                                id="loginPwd">
                                <button type="submit" class="accent-button" id="loginBtn">login</button>
                            </form>

                            <span class="myAcc__title-text"
                            id="registerBox-text">
                                Register
                            </span>

                            <form class="myAcc__registerBox" id="registerBox">
                                <label class="shipping-form-typetext-label">
                                    Email
                                </label>
                                <input type="email" name="email" 
                                placeholder="sophie@example.com" required 
                                id="email">
                                <label class="shipping-form-typetext-label">
                                    Password
                                </label>
                                <input type="password" name="pwd1"
                                required
                                id="pwd1">
                                <label class="shipping-form-typetext-label">
                                    Repeat Password
                                </label>
                                <input type="password" name="pwd2"
                                required
                                id="pwd2">
                                <button class="accent-button" id="registerBtn" >register</button>
                            </form>
                            
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
