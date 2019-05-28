<?php
/* Smarty version 3.1.33, created on 2019-05-24 20:28:48
  from 'C:\OSPanel\domains\brandShop\views\category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce829d06d5de6_24427378',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a73725a2c8b668a97f7b9bb19a27e251763faed' => 
    array (
      0 => 'C:\\OSPanel\\domains\\brandShop\\views\\category.tpl',
      1 => 1558718801,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:parts/menuArrivals.tpl' => 1,
  ),
),false)) {
function content_5ce829d06d5de6_24427378 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:parts/menuArrivals.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container m-bot110px">
    <div class="flex p-top70px">
        <aside class="cat-products">
            <ul class="cat-nav">
                <li class="cat-nav-item n-item_li1">
                    <span class="cat-nav-item_li cat-nav-item_span1">
                        <a href="#" class="link_1">Category</a>
                    </span>

                                        <?php if ($_smarty_tpl->tpl_vars['isAllCats']->value == 1) {?>
                    <ul class="cat-nav cat-nav-sub">

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>

                            <li class="cat-nav-item">
                                <span class="cat-nav-item_li">
                                    <a href="#" class="link sub-cat1"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
                                </span>

                                <?php if (isset($_smarty_tpl->tpl_vars['item']->value['children'])) {?>
                                <ul class="cat-nav cat-nav-sub">
                                
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['children'], 'itemChild');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->value) {
?>

                                    <li class="cat-nav-item">
                                        <span class="cat-nav-item_li">
                                       <a href="/category/<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id_category'];?>
/" class="link"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</a>
                                        </span>
                                    </li>

                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                
                                </ul>
                                <?php }?>
                            
                            </li>

                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        
                    </ul>
                    <?php }?>
                    
                                        <?php if (isset($_smarty_tpl->tpl_vars['rsChildCats']->value)) {?>
                    <ul class="cat-nav cat-nav-sub">

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsChildCats']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>

                            <li class="cat-nav-item">
                                <span class="cat-nav-item_li">
                                    <a href="/category/<?php echo $_smarty_tpl->tpl_vars['item']->value['id_category'];?>
/" class="link"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
                                </span>
                            </li>

                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        
                    </ul>
                    <?php }?>
                    
                </li>
                <li class="cat-nav-item n-item_li1">
                    <span class="cat-nav-item_li cat-nav-item_span1">
                        <a href="#" class="link_1">BRAND</a>
                    </span>
                    <?php if (isset($_smarty_tpl->tpl_vars['rsBrands']->value)) {?>
                    <ul class="cat-nav cat-nav-sub">

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsBrands']->value, 'item', false, NULL, 'brands', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_brands']->value['iteration']++;
?>

                            <li class="cat-nav-item">
                                <span class="cat-nav-item_li">
                                    <div class="cat-nav-block-checkbox">
                                        <input id="cat-brand_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_brands']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_brands']->value['iteration'] : null);?>
" type="checkbox" name="brands" value="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
">
                                        <label for="cat-brand_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_brands']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_brands']->value['iteration'] : null);?>
" class="link"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</label>
                                    </div>
                                </span>
                            </li>

                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        
                    </ul>
                    <?php }?>

                </li>
                <li class="cat-nav-item n-item_li1">
                    <span class="cat-nav-item_li cat-nav-item_span1">
                        <a href="#" class="link_1">dESIGNER</a>
                    </span>
                    <ul class="cat-nav cat-nav-sub">
                        <li class="cat-nav-item"></li>
                    </ul>
                </li>
            </ul>
        </aside>
        <div class="catalog-wrap_product">
            <aside>
                <div class="products-sort flex">
                    <div class="products-sort-cat">
                        <span class="products-sort-cat__title">Trending now</span>
                        <span><a href="#">Bohemian</a> |</span>
                        <span><a href="#">Floral</a> |</span>
                        <span><a href="#">Lace</a> |</span>
                        <span><a href="#">Floral</a> |</span>
                        <span><a href="#">Lace</a> |</span>
                        <span><a href="#">Bohemian</a> </span>
                    </div>
                    <div class="products-sort-cat products-sort-cat_size">
                        <span class="products-sort-cat__title">Size</span>

                        <div class="cat-nav-block-checkbox select-size">

                        <?php $_smarty_tpl->_assignInScope('arSize', array('XXS','XS','S','M','L','XL','XXL'));?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arSize']->value, 'size', false, NULL, 'sizes', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['size']->value) {
?>
                        
                            <input id="cat-size_<?php echo $_smarty_tpl->tpl_vars['size']->value;?>
" type="checkbox" name="sizes" value="<?php echo $_smarty_tpl->tpl_vars['size']->value;?>
">
                            <label for="cat-size_<?php echo $_smarty_tpl->tpl_vars['size']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['size']->value;?>
</label>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        </div>

                        
                    </div>
                    <div class="products-sort-cat">
                        <span class="products-sort-cat__title">pRICE</span>
                        <div id="slider"></div>
                        <div class="slider-price flex">
                            <div>
                                <span>$</span>
                                <input type="text" name="" id="input-low">
                            </div>
                            <div>
                                <span>$</span>
                                <input type="text" name="" id="input-up">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="products-sort-by flex">
                    <div class="flex">
                        <div class="products-sort-by-container">
                            <label>Sort By</label>
                            <select name="sort-by">
                                <option>Name</option>
                                <option>Increase price</option>
                                <option>Decrease price</option>
                                <option>On new</option>
                                <option>On discounts</option>
                            </select>
                        </div>
                        <div class="products-sort-by-container">
                            <label>Show</label>
                            <select name="show-kolvo">
                                <option>30</option>
                                <option>15</option>
                                <option>9</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <button id="filter-clear" class="products-sort-by__button accent-button">Clear</button>
                        <button id="filter-apply" class="products-sort-by__button  accent-button">Apply</button>
                    </div>
                </div>
            </aside>
            <article class="catalog">
                <section class="catalog__items grid">

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsProducts']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                        
                    <div class="item">
						<img src="/img/goods/<?php echo $_smarty_tpl->tpl_vars['item']->value['id_category'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['brand'];
echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" class="item__img">
						<p><?php echo $_smarty_tpl->tpl_vars['item']->value['brand'];?>
 - <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</p>
						<span><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
$</span>
						<a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id_good'];?>
/" class="item__hover">
							<img src="/img/shopping-cart.png" alt="Add to cart">
							<span>Add to Cart</span>
						</a>
					</div>

                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    
                </section>
            </article>
            <aside class="paginator paginator_page flex">
                <span class="paginator__pages">

<?php if ($_smarty_tpl->tpl_vars['paginator']->value['currentPage'] != 1) {?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['paginator']->value['link'];
echo $_smarty_tpl->tpl_vars['paginator']->value['currentPage']-1;?>
" class="paginator__num">
                        <i class="far fa-chevron-left"></i>
                    </a>
<?php }?>

<?php $_smarty_tpl->_assignInScope('pg', 1);
while ($_smarty_tpl->tpl_vars['paginator']->value['pageCnt'] >= $_smarty_tpl->tpl_vars['pg']->value) {?>
                    
                    <?php if ($_smarty_tpl->tpl_vars['paginator']->value['currentPage'] == $_smarty_tpl->tpl_vars['pg']->value) {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['paginator']->value['link'];
echo $_smarty_tpl->tpl_vars['pg']->value;?>
" class="paginator__num button_toggled"><?php echo $_smarty_tpl->tpl_vars['pg']->value;?>
</a>
                    <?php } else { ?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['paginator']->value['link'];
echo $_smarty_tpl->tpl_vars['pg']->value;?>
" class="paginator__num"><?php echo $_smarty_tpl->tpl_vars['pg']->value;?>
</a>
                    <?php }?>

<?php $_smarty_tpl->_assignInScope('pg', $_smarty_tpl->tpl_vars['pg']->value+1);?> 
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['paginator']->value['currentPage'] < $_smarty_tpl->tpl_vars['paginator']->value['pageCnt']) {?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['paginator']->value['link'];
echo $_smarty_tpl->tpl_vars['paginator']->value['currentPage']+1;?>
" class="paginator__num">
                        <i class="far fa-chevron-right"></i>
                    </a>
<?php }?>                
                </span>
                <button class="paginator__button">
                    <span>View All</span>
                </button>
            </aside>
        </div>
    </div>
</div>

<div class="features">
    <div class="features-wrap flex">
    <div class="box flex">
            <i class="fal fa-truck"></i>
            <div class="box__text">
                <h3>Free Delivery</h3>
                <p>Worldwide delivery on all. Authorit tively morph next-generation innov tion with extensive
                    models.</p>
            </div>
        </div>
        <div class="box flex">
            <i class="fal fa-badge-percent"></i>
            <div class="box__text">
                <h3>Sales & discounts</h3>
                <p>Worldwide delivery on all. Authorit tively morph next-generation innov tion with extensive
                    models.</p>
            </div>
        </div>
        <div class="box flex">
            <i class="fal fa-crown"></i>
            <div class="box__text">
                <h3>Quality assurance</h3>
                <p>Worldwide delivery on all. Authorit tively morph next-generation innov tion with extensive
                    models.</p>
            </div>
        </div>
    </div>
</div><?php }
}
