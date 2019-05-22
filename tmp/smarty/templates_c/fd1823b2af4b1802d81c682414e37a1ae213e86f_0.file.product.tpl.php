<?php
/* Smarty version 3.1.33, created on 2019-05-13 22:15:33
  from 'C:\OSPanel\domains\ShopKyrs\views\default\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd9c2556745e2_74723297',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd1823b2af4b1802d81c682414e37a1ae213e86f' => 
    array (
      0 => 'C:\\OSPanel\\domains\\ShopKyrs\\views\\default\\product.tpl',
      1 => 1557774910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd9c2556745e2_74723297 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="center">

    <h3><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>
</h3>

    <img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image'];?>
" alt="">
    Стоимость: <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['price'];?>


    <a id="removeCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
"  <?php if (!$_smarty_tpl->tpl_vars['itemInCart']->value) {?>
        class="hideme"
    <?php }?>   onClick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;" href="#" alt="Удалить из корзины">Удалить из корзины</a>

    <a id="addCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['itemInCart']->value) {?>
        class="hideme"
    <?php }?>   onClick="addToCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;" href="#" alt="Добавить в корзину">Добавить в корзину</a>
    <p>Описание <br><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['description'];?>
</p>


</div>









<?php }
}
