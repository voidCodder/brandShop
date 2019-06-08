<?php
/* Smarty version 3.1.33, created on 2019-06-05 15:39:47
  from 'C:\OSPanel\domains\brandShop\views\cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf7b813d7b651_82557467',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4d1190bec657947f22d3d789c160ba805e40e3f' => 
    array (
      0 => 'C:\\OSPanel\\domains\\brandShop\\views\\cart.tpl',
      1 => 1559738382,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:parts/MenuArrivals.tpl' => 1,
  ),
),false)) {
function content_5cf7b813d7b651_82557467 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:parts/MenuArrivals.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main>
    <div class="container">
        <div class="shopping-cart-wrap">
            <article class="purchases grid">
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
                    <span class="purchases-table__title">shipping</span>
                </div>
                <div class="purchases-table-wrap">
                    <span class="purchases-table__title">Subtotal</span>
                </div>
                <div class="purchases-table-wrap">
                    <span class="purchases-table__title">ACTION</span>
                </div>

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
                    <span class="purchases-text"
                    id="itemPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id_good'];
echo $_smarty_tpl->tpl_vars['size']->value;?>
" 
                    data-value="<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
">
                    $<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>

                    </span>
                </div>
                <div 
                class="purchases-table-wrap"
                data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id_good'];
echo $_smarty_tpl->tpl_vars['size']->value;?>
">
                    <input type="text" name="quantity" 
                    data-cart-item-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id_good'];
echo $_smarty_tpl->tpl_vars['size']->value;?>
" 
                    id="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id_good'];
echo $_smarty_tpl->tpl_vars['size']->value;?>
" class="purchases-table__quantity purchases-text"
                    value="<?php echo $_smarty_tpl->tpl_vars['cnt']->value;?>
">
                </div>
                <div class="purchases-table-wrap"
                data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id_good'];
echo $_smarty_tpl->tpl_vars['size']->value;?>
">
                    <span class="purchases-text">FREE</span>
                </div>
                <div 
                class="purchases-table-wrap" 
                data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id_good'];
echo $_smarty_tpl->tpl_vars['size']->value;?>
">
                    <span class="purchases-text"
                    id="itemRealPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id_good'];
echo $_smarty_tpl->tpl_vars['size']->value;?>
"
                    data-id="itemRealPrice">
                        $<?php echo $_smarty_tpl->tpl_vars['item']->value['price']*$_smarty_tpl->tpl_vars['cnt']->value;?>

                    </span>
                </div>
                <div class="purchases-table-wrap" 
                data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id_good'];
echo $_smarty_tpl->tpl_vars['size']->value;?>
">
                    <span>
                        <i class="fas fa-times-circle cart-item-remove" 
                        data-cart-item-remove-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id_good'];?>
" 
                        data-cart-item-remove-size="<?php echo $_smarty_tpl->tpl_vars['size']->value;?>
">
                        </i>
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

<?php } else { ?>
        <div class="cart-empty-items emptyItem">Cart empty!</div>         
<?php }?>
            </article>


            <div class="purchases-buttons flex">

            <?php if ($_smarty_tpl->tpl_vars['rsCartProducts']->value != null) {?>
                <button 
                class="purchases-buttons__button"
                id="clearCart">
                    <span>CLEAR SHOPPING CART</span>
                </button>
            <?php } else { ?>
                <button 
                class="purchases-buttons__button v-hidden"
                id="clearCart">
                    <span>CLEAR SHOPPING CART</span>
                </button>
            <?php }?>

                <button class="purchases-buttons__button"
                id="pageBack">
                    <span>cONTINUE sHOPPING</span>
                </button>
            </div>

<?php if ($_smarty_tpl->tpl_vars['rsCartProducts']->value != null) {?>

            <div class="shopping-cart-forms">
                <div class="shopping-cart-forms-wrap flex">
                    <div class="shopping-cart-forms-form">
                        <span class="shopping-cart-forms-form__title">
                        Shipping Adress
                        </span>
                        <input type="text" placeholder="Bangladesh" class="shopping-cart-forms-form__textbox">
                        <input type="text" placeholder="State" class="shopping-cart-forms-form__textbox">
                        <input type="text" placeholder="Postcode / Zip" class="shopping-cart-forms-form__textbox">
                        <button class="shopping-cart-forms-form__button-sm">
                            <span>get a quote</span>
                        </button>
                    </div>
                    <div class="shopping-cart-forms-form">
                        <span class="shopping-cart-forms-form__title">
                        coupon  discount
                        </span>
                        <span class="shopping-cart-forms-form__text">Enter your coupon code if you have one</span>
                        <input type="text" placeholder="State" class="shopping-cart-forms-form__textbox">
                        <button class="shopping-cart-forms-form__button-sm">
                            <span>Apply coupon</span>
                        </button>
                    </div>
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
                        id="go-to-checkout-btn">
                            <span>proceed to checkout</span>
                        </button>
                    </div>
                </div>
            </div> 
<?php } else {
}?>

        </div>
    </div>
</main><?php }
}
