<?php
/* Smarty version 3.1.33, created on 2019-05-21 19:51:05
  from 'C:\OSPanel\domains\brandShop\views\parts\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce42c7968f996_37122680',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae285eff4347372f54422bd4100ebd73793659ba' => 
    array (
      0 => 'C:\\OSPanel\\domains\\brandShop\\views\\parts\\nav.tpl',
      1 => 1558457463,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce42c7968f996_37122680 (Smarty_Internal_Template $_smarty_tpl) {
?> <nav class="navMenu">
	<div class="navMenu__container">
		<ul class="flex">
			<li><a href="/" class="activ_link">Home</a></li>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>

            <li><a href="/category/<?php echo $_smarty_tpl->tpl_vars['item']->value['id_category'];?>
/" class="activ_link"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>


            <?php if (isset($_smarty_tpl->tpl_vars['item']->value['children'])) {?>

            <div class="containerDropdown flex">
                <div class="containerDropdown__categories">
                    <ul>
                    <li><a href="/category/<?php echo $_smarty_tpl->tpl_vars['item']->value['id_category'];?>
/" class="categories__title">Categories</a></li>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['children'], 'itemChild');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->value) {
?>
                        <li><a href="/category/<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id_category'];?>
/"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</a></li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                    </ul>
                </div>
            </div>
            <?php }?>         

            </li>

            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            
			<li><a href="#" class="activ_link">Featured</a></li>
			<li><a href="#" class="activ_link">Hot Deals</a></li>
		</ul>
	</div>
</nav>

<?php }
}
