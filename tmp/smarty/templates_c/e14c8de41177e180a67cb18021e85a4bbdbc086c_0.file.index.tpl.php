<?php
/* Smarty version 3.1.33, created on 2019-05-12 23:15:55
  from 'C:\OSPanel\domains\ShopKyrs\views\default\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd87efb219576_01404560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e14c8de41177e180a67cb18021e85a4bbdbc086c' => 
    array (
      0 => 'C:\\OSPanel\\domains\\ShopKyrs\\views\\default\\index.tpl',
      1 => 1557691480,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd87efb219576_01404560 (Smarty_Internal_Template $_smarty_tpl) {
?>    <div class="center">
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
    </div>

    <?php }
}
