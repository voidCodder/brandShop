<?php
/* Smarty version 3.1.33, created on 2019-05-12 23:04:05
  from 'C:\OSPanel\domains\ShopKyrs\views\default\category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd87c351c5b37_72112543',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '951f3b30a9680107d1bb5e5de96d86d14b63dc46' => 
    array (
      0 => 'C:\\OSPanel\\domains\\ShopKyrs\\views\\default\\category.tpl',
      1 => 1557691410,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd87c351c5b37_72112543 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <h1>Товары категории <?php echo $_smarty_tpl->tpl_vars['rsCategory']->value['name'];?>
</h1>

    <div class="center">

                <?php if (isset($_smarty_tpl->tpl_vars['rsProducts']->value) || isset($_smarty_tpl->tpl_vars['rsChildCats']->value)) {?>    
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsProducts']->value, 'item', false, NULL, 'products', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                
                <div style = "height: 100px; padding: 0 30px 40px 0">
                    <a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
                        <img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" alt="">
                    </a><br>
                    <a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
                </div>
                
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php } else { ?>
            <h2 style="color:red"><ins> Товаров нет!</ins></h2>
        <?php }?>
    </div>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsChildCats']->value, 'item', false, NULL, 'childCats', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
        <h2><a href="/category/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></h2>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

  <?php }
}
