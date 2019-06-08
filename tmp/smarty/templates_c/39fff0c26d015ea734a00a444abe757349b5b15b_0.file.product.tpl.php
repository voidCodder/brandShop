<?php
/* Smarty version 3.1.33, created on 2019-06-07 13:48:42
  from 'C:\OSPanel\domains\brandShop\views\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfa410ac0bc52_86053908',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39fff0c26d015ea734a00a444abe757349b5b15b' => 
    array (
      0 => 'C:\\OSPanel\\domains\\brandShop\\views\\product.tpl',
      1 => 1559904373,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cfa410ac0bc52_86053908 (Smarty_Internal_Template $_smarty_tpl) {
?><main>
    <div class="container">
        <div class="product-container flex">
            <div class="product-img-box">
                <div class="big-image">
                    <img src="/img/goods/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id_category'];?>
/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image'];?>
.jpg"
                        alt="<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['brand'];?>
 - <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>
"
                        id="product-bigImage">
                </div>
            </div>
            <div class="product-shop-box">
                <div class="product-shop flex">
                    <div class="product-shop-brand">
                        <span>
                            <a href="/category/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id_category'];?>
/"
                            id="product-brand">
                                <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['brand'];?>

                            </a>
                        </span>
                    </div>
                    <div class="product-shop-name">
                        <span id="product-name">
                            <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>

                        </span>
                    </div>
                    <div class="product-shop-price">
                        <span class="product-text"
                        id="product-price">
                            <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['price'];?>
 $
                        </span>
                    </div>
                    <div class="product-shop-vat-hint">
                        <span>excl. VAT, <a href="">excl. shipping costs</a></span>
                    </div>
                    <div class="product-shop-detail-links">
                        <span>
                            <a href="#desc-details" class="details-and-more-anchor">Details & More</a>
                        </span>
                        <span>
                            <a href="">Size & Fit</a>
                        </span>
                    </div>
                    <div class="product-shop-size-chooser">
                        <select name="sizes">
    
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsProduct']->value['size'], 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['size'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['size'];?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    
                        </select>
                    </div>
                    <div class="product-shop-addtocart-button">
                        <button id="addToCartBtn" data-product-id="<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id_good'];?>
" class="accent-button">
                            <span>ADD TO CART</span>
                        </button>
                    </div>
                    <div class="product-shop-customer-care">
                        <span>Have questions or need styling advice?</span>
                        <span>
                            Our
                            <a href="">customer service</a>
                            team or in-house
                            <a href="">stylist</a>
                            would be happy to help!
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-details-wrap">
            <div class="product-details-content flex">
                <div class="product-details-section">
                    <span class="product-details-title">DETAILS</span>
                    <span class="product-details-text"><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['description'];?>
</span>
                </div>
                <div class="product-details-section">
                    <span class="product-details-title">Material & Care</span>
                    <span class="product-details-text">Machine wash</span>
                </div>
            </div>
        </div>
    </div>
</main><?php }
}
