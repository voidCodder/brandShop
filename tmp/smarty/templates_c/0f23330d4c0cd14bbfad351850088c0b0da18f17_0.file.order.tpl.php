<?php
/* Smarty version 3.1.33, created on 2019-06-10 11:08:49
  from 'C:\OSPanel\domains\brandShop\views\order.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfe101162a973_08820467',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f23330d4c0cd14bbfad351850088c0b0da18f17' => 
    array (
      0 => 'C:\\OSPanel\\domains\\brandShop\\views\\order.tpl',
      1 => 1560153947,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:parts/MenuArrivals.tpl' => 1,
  ),
),false)) {
function content_5cfe101162a973_08820467 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:parts/MenuArrivals.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main>
    <article class="hero hero_checkout">
        <div class="container">
            <form class="content_checkout-wrap">
                <article class="content_checkout">
                    <ol class="ship-nav">
                        <li class="ship-nav-item ship-nav-item_li1">
                            <span class="ship-nav-item_li ship-nav-item_span1">
                                <span class="ship-link_1">Shipping</span>
                            </span>
                            <div class="ship-nav-item__block-wrap flex">


<?php if ($_smarty_tpl->tpl_vars['hideLoginBox']->value == 1) {?>
    
                                <div class="shipping-form"
                                id="order-select-login-reg">
                                    <div class="shipping-form-wrap flex">
                                        <span class="shipping-form-text_regular">Check as a guest or register</span>
                                        <span class="shipping-form-text_light">Register with us for future convenience</span>
                                        <div class="form-radio-padding">
                                            <input type="radio" name="checkout-as-guest" id="checkout-as-guest_guest" checked>
                                            <label for="checkout-as-guest_guest" class="shipping-form-radio-label">login</label>
                                        </div>
                                        <div class="form-radio-padding">
                                            <input type="radio" name="checkout-as-guest" id="checkout-as-guest_register">
                                            <label for="checkout-as-guest_register" class="shipping-form-radio-label">register</label>
                                        </div>
                                        <span class="shipping-form-text_regular">register and save time!</span>
                                        <span class="shipping-form-text_light">Register with us for future convenience</span>
                                        <span class="shipping-form-text_light shipping-form-text_light_arrow">
                                            <i class="far fa-chevron-double-right"></i>
                                            Fast and easy checkout
                                        </span>
                                        <span class="shipping-form-text_light shipping-form-text_light_arrow">
                                            <i class="far fa-chevron-double-right"></i>
                                            Easy access to your order history and status
                                        </span>
                                        <button class="shipping-form-button">
                                            <span class="shipping-form-button__text">Continue</span>
                                        </button>
                                    </div>
                                </div>

                                <form class="shipping-form" 
                                id="order-loginBox">
                                    <div class="shipping-form-wrap flex">
                                        <span class="shipping-form-text_regular">Already registered?</span>
                                        <span class="shipping-form-text_light">Please log in below</span>
                                        <label class="shipping-form-typetext-label label_required">EMAIL ADDRESS</label>
                                        <input type="email" name="loginEmail"
                                        placeholder="sophie@example.com" required>
                                        <label class="shipping-form-typetext-label  label_required">PASSWORD</label>
                                        <input type="password" name="loginPwd" required>
                                        <span class="shipping-form-text_light shipping-form-text_light_redreq">required fields</span>
                                        <div>
                                            <button type="submit" class="shipping-form-button"
                                            id="order-loginBtn">
                                                <span class="shipping-form-button__text">
                                                Log in</span>
                                            </button>
                                            <span class="shipping-form-text_regular pad-l30">Forgot Password ?</span>
                                        </div>
                                    </div>
                                </form>

                                <form class="shipping-form hideme" id="order-registerBox">
                                    <div class="shipping-form-wrap flex">
                                        <span class="shipping-form-text_regular">Not registered yet?</span>
                                        <span class="shipping-form-text_light">Please log in below</span>
                                        <label class="shipping-form-typetext-label label_required">EMAIL ADDRESS</label>
                                        <input type="email" name="email"
                                        placeholder="sophie@example.com" required>
                                        <label class="shipping-form-typetext-label  label_required">PASSWORD</label>
                                        <input type="password" name="pwd1" required>
                                        <label class="shipping-form-typetext-label  label_required">REPEAT PASSWORD</label>
                                        <input type="password" name="pwd2" required>
                                        <span class="shipping-form-text_light shipping-form-text_light_redreq">required fields</span>
                                        <div>
                                            <button type="submit" class="shipping-form-button"
                                            id="order-registerBtn">
                                                <span class="shipping-form-button__text">
                                                REGISTER</span>
                                            </button>
                                            <span class="shipping-form-text_regular pad-l30">Forgot Password ?</span>
                                        </div>
                                    </div>
                                </form>


                                <form class="shipping-form hideme"
                                id="order-data-user">
                                    <div class="shipping-form-wrap flex">
                                        <label class="shipping-form-typetext-label label_required">
                                            Name
                                        </label>
                                        <input type="text" name="name" required
                                        value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['user_name'];?>
">
                                        <label class="shipping-form-typetext-label  label_required">
                                            Phone
                                        </label>
                                        <input type="tel" name="phone"
                                        value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['phone'];?>
"
                                        placeholder="+7-495-000-00-00"
                                        required>
                                        <label class="shipping-form-typetext-label  label_required">
                                            Address
                                        </label>
                                        <input type="text" name="address" required
                                        value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['address'];?>
">
                                        <span class="shipping-form-text_light shipping-form-text_light_redreq">
                                            required fields
                                        </span>
                                        <button type="submit" 
                                        class="shipping-form-button"
                                        id="order-shipping-cont">
                                            <span
                                            class="shipping-form-button__text">Continue</span>
                                        </button>
                                    </div>
                                </form>
        
<?php } else { ?>
    
                                <form class="shipping-form"
                                id="order-data-user">
                                    <div class="shipping-form-wrap flex">
                                        <label class="shipping-form-typetext-label label_required">
                                            Name
                                        </label>
                                        <input type="text" name="name" required
                                        value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['user_name'];?>
">
                                        <label class="shipping-form-typetext-label  label_required">
                                            Phone
                                        </label>
                                        <input type="tel" name="phone"
                                        value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['phone'];?>
"
                                        placeholder="+7-495-000-00-00"
                                        required>
                                        <label class="shipping-form-typetext-label  label_required">
                                            Address
                                        </label>
                                        <input type="text" name="address" required
                                        value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['address'];?>
">
                                        <span class="shipping-form-text_light shipping-form-text_light_redreq">
                                            required fields
                                        </span>
                                        <button type="submit" 
                                        class="shipping-form-button"
                                        id="order-shipping-cont">
                                            <span
                                            class="shipping-form-button__text">Continue</span>
                                        </button>
                                    </div>
                                </form>

<?php }?>
                            </div>
                        </li>
                        <li class="ship-nav-item ship-nav-item_li1">
                            <span class="ship-nav-item_li ship-nav-item_span1">
                                <span class="ship-link_1">SHIPPING METHOD</span>
                            </span>
                            <div class="ship-nav-item__block-wrap flex
                            ship-nav-item__block-wrap_shipping-method"
                            id="order-shipping-method">
                                <div class="form-radio-padding">
                                        <input type="radio" name="shipping-methods" id="shipping-methods_standart">
                                        <label for="shipping-methods_standart" class="shipping-form-radio-label">Standart</label>
                                </div>
                                <div class="form-radio-padding">
                                        <input type="radio" name="shipping-methods" id="shipping-methods_ups">
                                        <label for="shipping-methods_ups" class="shipping-form-radio-label">UPS</label>
                                </div>
                                <div class="form-radio-padding">
                                        <input type="radio" name="shipping-methods" id="shipping-methods_usps">
                                        <label for="shipping-methods_usps" class="shipping-form-radio-label">USPS</label>
                                </div>
                                <div class="ship-nav-buttons">
                                    <button class="shipping-form-button"
                                    id="order-shipping-method-back">
                                        <span class="shipping-form-button__text">
                                            BACK
                                        </span>
                                    </button>
                                    <button class="shipping-form-button"
                                    id="order-shipping-method-cont">
                                        <span class="shipping-form-button__text">
                                            Continue
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </li>
                        <li class="ship-nav-item ship-nav-item_li1">
                            <span class="ship-nav-item_li ship-nav-item_span1">
                                <span class="ship-link_1">PAYMENT</s>
                            </span>
                            <div class="ship-nav-item__block-wrap flex
                            ship-nav-item__block-wrap_payment"
                            id="order-payment">
                                <div class="ship-nav-shipping">
                                    <span class="shipping-form-text_regular ship-nav-shipping__text">
                                    SELECT YOUR 
                                    <b>PAYMENT METHOD</b>
                                    HERE:</span>
                                    <div class="ship-nav-shipping__pay-method
                                    ship-nav-shipping__pay-method_creditcard">
                                        <input type="radio" name="payment-method" id="payment-method_creditcard">
                                        <label for="payment-method_creditcard" class="shipping-form-radio-label label-payment-method">
                                            <div class="logo-wrapper">
                                                <img src="/img/payment/logo-creditcard.png" alt="logo-creditcard"
                                                class="payment-logo">
                                            </div>
                                            <span>Credit card</span>
                                        </label>
                                    </div>
                                    <div class="ship-nav-shipping__pay-method">
                                        <input type="radio" name="payment-method" id="payment-method_paypal">
                                        <label for="payment-method_paypal" class="shipping-form-radio-label
                                        label-payment-method">
                                            <div class="logo-wrapper">
                                                <img src="/img/payment/logo-paypal.png" alt="logo-paypal"
                                                class="payment-logo">
                                            </div>
                                            <span>PayPal</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="ship-nav-buttons">
                                    <button class="shipping-form-button"
                                    id="order-payment-back">
                                        <span class="shipping-form-button__text">
                                            BACK
                                        </span>
                                    </button>
                                    <button class="shipping-form-button"
                                    id="order-payment-cont">
                                        <span class="shipping-form-button__text">
                                            Continue
                                        </span>
                                    </button>
                                </div>
                            </div> 
                        </li>
                        <li class="ship-nav-item ship-nav-item_li1">
                            <span class="ship-nav-item_li ship-nav-item_span1">
                                <span class="ship-link_1">ORDER REVIEW</span>
                            </span>
                            <div class="ship-nav-item__block-wrap flex
                            ship-nav-item__block-wrap_order-review"
                            id="order-review">

                                <article class="purchases grid purchases_order">
                                    <div class="purchases-table-wrap">
                                        <span class="purchases-table__title">Product Details</span>
                                    </div>
                                    <div class="purchases-table-wrap">
                                        <span class="purchases-table__title">unite Price</span>
                                    </div>
                                    <div class="purchases-table-wrap">
                                        <span class="purchases-table__title">Quantity</span>
                                    </div>
                                    <div class="purchases-table-wrap">
                                        <span class="purchases-table__title">Subtotal</span>
                                    </div>

<?php $_smarty_tpl->_assignInScope('totalPrice', 0);
if ($_smarty_tpl->tpl_vars['rsProducts']->value != null) {?>
    
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsProducts']->value, 'item');
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
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_assignInScope('totalPrice', $_prefixVariable2+($_smarty_tpl->tpl_vars['item']->value['price']*$_smarty_tpl->tpl_vars['cnt']->value));?>

                                    <div 
                                    class="purchases-table-wrap purchases-table-wrap_descriptor" 
                                    data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id_good'];
echo $_smarty_tpl->tpl_vars['size']->value;?>
">
                                        <div class="purchases-table-descriptor flex">
                                            <img src="/img/goods/<?php echo $_smarty_tpl->tpl_vars['item']->value['id_category'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['brand'];?>
 - <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
">
                                            <div>
                                                <span class="purchases-table-descriptor__text_title">
                                                    <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

                                                </span>
                                                <div>
                                                    <span class="purchases-table-descriptor__text">
                                                        Brand: 
                                                    </span>
                                                    <span class="purchases-table-descriptor__text purchases-table-descriptor__text_light">
                                                        <?php echo $_smarty_tpl->tpl_vars['item']->value['brand'];?>

                                                    </span>
                                                </div>
                                                <div>
                                                    <span class="purchases-table-descriptor__text">
                                                        Size: 
                                                    </span>
                                                    <span class="purchases-table-descriptor__text purchases-table-descriptor__text_light">
                                                        <?php echo $_smarty_tpl->tpl_vars['size']->value;?>

                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div 
                                    class="purchases-table-wrap" 
                                    data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id_good'];
echo $_smarty_tpl->tpl_vars['size']->value;?>
">
                                        <span>
                                        $<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>

                                        </span>
                                    </div>
                                    <div 
                                    class="purchases-table-wrap">
                                        <span><?php echo $_smarty_tpl->tpl_vars['cnt']->value;?>
</span> 
                                    </div>
                                    <div 
                                    class="purchases-table-wrap">
                                        <span>
                                            $<?php echo $_smarty_tpl->tpl_vars['item']->value['price']*$_smarty_tpl->tpl_vars['cnt']->value;?>

                                        </span>
                                    </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>        
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
<?php }?>
                                </article>

        
                                <div class="ship-nav-buttons">
                                    <button class="shipping-form-button"
                                    id="order-review-back">
                                        <span class="shipping-form-button__text">
                                            BACK
                                        </span>
                                    </button>
                                    <div class="shopping-cart-forms-form shopping-cart-forms-form_bg">
                                        <div class="shopping-cart-forms-form-total">
                                            <span class="shopping-cart-forms-form-total__subtext">Sub total   <b id="subTotalPrice">$<?php echo $_smarty_tpl->tpl_vars['totalPrice']->value;?>
</b>
                                            </span>
                                            <span class="shopping-cart-forms-form__title shopping-cart-forms-form-total__title">
                                            GRAND TOTAL 
                                            <b id="grandTotalPrice">
                                                $<?php echo $_smarty_tpl->tpl_vars['totalPrice']->value;?>

                                            </b>
                                            </span>
                                        </div>
                                        <button class="shopping-cart-forms-form__button-big"
                                        id="save-order-btn">
                                            <span>Save order</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ol>

                </article>
            </div>
        </div>
    </article>

</main>
<?php }
}
