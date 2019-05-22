<?php
/* Smarty version 3.1.33, created on 2019-05-16 23:37:58
  from 'C:\OSPanel\domains\ShopKyrs\views\default\user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cddca26c81ec0_36861696',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05a34624b2af440fe149bdfd90096ce72ec4083c' => 
    array (
      0 => 'C:\\OSPanel\\domains\\ShopKyrs\\views\\default\\user.tpl',
      1 => 1558039076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cddca26c81ec0_36861696 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1>Ваши регистрационные данные:</h1>
<div>
    <div class="flex">Логин(email) <span><?php echo $_smarty_tpl->tpl_vars['arUser']->value['email'];?>
</span></div>
    <div class="flex">Имя<input type="text" name="" id="newName" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['name'];?>
"></div>
    <div class="flex">Тел<input type="text" name="" id="newPhone" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['phone'];?>
"></div>
    <div class="flex">Адрес<input type="text" name="" id="newAddress" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['address'];?>
"></div>
    <div class="flex">Новый пароль<input type="password" name="" id="newPwd1" value=""></div>
    <div class="flex">Повтор пароля<input type="password" name="" id="newPwd2" value="""></div>
    <div class="flex">Чтобы изменить введите текущий пароль<input type="password" name="" id="curPwd" value=""></div>
    <input type="button" value="Сохранить изменения" onclick="updateUserData();">
</div>

<h2>Заказы:</h2>
<?php if (!$_smarty_tpl->tpl_vars['rsUserOrders']->value) {?>
    Нет заказов
<?php } else { ?>
    
    <div>
        <div class="flex">
            <div>№</div>
            <div>Действие</div>
            <div>ID заказа</div>
            <div>Статус</div>
            <div>Дата создания</div>
            <div>Дата оплаты</div>
            <div>Доп. информация</div>
        </div>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsUserOrders']->value, 'item', false, NULL, 'orders', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_orders']->value['iteration']++;
?>
        
        <div class="flex">
            <div><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_orders']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_orders']->value['iteration'] : null);?>
</div>
            <div><a href="" onclick="showProducts('<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
');return false;">Показать товар заказа</a></div>
            <div><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</div>

            <?php ob_start();
echo $_smarty_tpl->tpl_vars['item']->value['status'];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == 1) {?>
                <div>Заказ оплачен</div>
            <?php } else { ?>
                <div>Заказ не оплачен</div>                
            <?php }?>
            
            <div><?php echo $_smarty_tpl->tpl_vars['item']->value['date_created'];?>
</div>
            <div><?php echo $_smarty_tpl->tpl_vars['item']->value['date_payment'];?>
</div>
            <div><?php echo $_smarty_tpl->tpl_vars['item']->value['comment'];?>
</div>
        </div>

        <div class="hideme" id="purchasesForOrderId_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">

        <?php if ($_smarty_tpl->tpl_vars['item']->value['children']) {?>
            <div>
                <div class="flex">
                    <div>№</div>
                    <div>ID</div>
                    <div>Название</div>
                    <div>Цена</div>
                    <div>Кол-во</div>
                </div>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['children'], 'itemChild', false, NULL, 'products', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']++;
?>
                <div class="flex">
                    <div><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null);?>
</div>
                    <div><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['product_id'];?>
</div>
                    <div><a href="/product/<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['product_id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</a></div>
                    <div><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['price'];?>
</div>
                    <div><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['amount'];?>
</div>
                </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            </div>
            
        <?php }?>


        </div>
        
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </div>
        
<?php }
}
}
