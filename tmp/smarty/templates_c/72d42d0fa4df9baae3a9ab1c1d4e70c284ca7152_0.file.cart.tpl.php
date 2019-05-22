<?php
/* Smarty version 3.1.33, created on 2019-05-15 20:53:49
  from 'C:\OSPanel\domains\ShopKyrs\views\default\cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cdc522d5db812_07389058',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72d42d0fa4df9baae3a9ab1c1d4e70c284ca7152' => 
    array (
      0 => 'C:\\OSPanel\\domains\\ShopKyrs\\views\\default\\cart.tpl',
      1 => 1557942674,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cdc522d5db812_07389058 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1>Корзина</h1>

<?php if (!$_smarty_tpl->tpl_vars['rsProducts']->value) {?>
    В корзине пусто!

<?php } else { ?>

<form action="/cart/order/" method="post">
    <div>    
        <div class="flex">
            <div>№</div>
            <div>Наименование</div>
            <div>Количество</div>
            <div>Цена за ед</div>
            <div>Цена</div>
            <div>Действие</div>
        </div> 

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsProducts']->value, 'item', false, NULL, 'products', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']++;
?>
        <div class="flex">
            <div> <?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null);?>
 </div>
            <div>
                <a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
            </div>
            <div>
                <input type="text" name="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" id="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="1" onchange="conversionPrice(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
);">
            </div>
            <div>
                <span id="itemPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</span>
            </div>
            <div>
                <span id="itemRealPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</span>
            </div>
            <div>
                <a id="removeCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" onClick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;" href="#" alt="Удалить из корзины">Удалить</a>

                 <a id="addCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="hideme" onClick="addToCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;" href="#" alt="Восстановить элемент">Восстановить</a>
            </div>
        </div> 
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </div>
<input type="submit" value="Оформить заказ">
</form>
   
<?php }
}
}
