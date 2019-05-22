<?php
/* Smarty version 3.1.33, created on 2019-05-16 19:35:46
  from 'C:\OSPanel\domains\ShopKyrs\views\default\order.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cdd9162b65a61_65788716',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8492d2dba367ee244d645f51b37df775bf1c965e' => 
    array (
      0 => 'C:\\OSPanel\\domains\\ShopKyrs\\views\\default\\order.tpl',
      1 => 1558024522,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cdd9162b65a61_65788716 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2>Данные заказа</h2>
<form id="frmOrder" action="/cart/save order/" method="post">
<div>
    <div class="flex">
        <div>№</div>
        <div>Наименование</div>
        <div>Количество</div>
        <div>Цена за ед</div>
        <div>Цена</div>
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
        <div><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null);?>
</div>
        <div><a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></div>
        <div>
            <span id="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                <input type="hidden" name="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['cnt'];?>
">
                <?php echo $_smarty_tpl->tpl_vars['item']->value['cnt'];?>

            </span>/
        </div>
        <div>
            <span id="itemPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                <input type="hidden" name="itemPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
">
                <?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>

            </span>/
        </div>
        <div>
            <span id="itemRealPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                <input type="hidden" name="itemRealPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['realPrice'];?>
">
                <?php echo $_smarty_tpl->tpl_vars['item']->value['realPrice'];?>

            </span>
        </div>
    </div>  

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</div>

<?php if (isset($_smarty_tpl->tpl_vars['arUser']->value)) {?>

    <?php $_smarty_tpl->_assignInScope('buttonClass', '');?>
    <h2>Данные заказчика</h2>
    <div id="orderUserInfoBox" <?php echo $_smarty_tpl->tpl_vars['buttonClass']->value;?>
>
        <?php $_smarty_tpl->_assignInScope('name', $_smarty_tpl->tpl_vars['arUser']->value['name']);?>
        <?php $_smarty_tpl->_assignInScope('phone', $_smarty_tpl->tpl_vars['arUser']->value['phone']);?>
        <?php $_smarty_tpl->_assignInScope('address', $_smarty_tpl->tpl_vars['arUser']->value['address']);?>
        <div>
            <div>Имя*</div>
            <div><input type="text" name="name" id="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"></div>
        </div>
        <div>
            <div>Телефон*</div>
            <div><input type="text" name="phone" id="phone" value="<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
"></div>
        </div>
        <div>
            <div>Адрес*</div>
                        <div><textarea name="address" id="address"><?php echo $_smarty_tpl->tpl_vars['address']->value;?>
</textarea></div>
        </div>
    </div>

<?php } else { ?>

    <div id="loginBox">
        <div class="menuCaption">Авторизация</div>
        <div>
            <div>Логин</div>
            <div>
                <input type="text" id="loginEmail" name="loginEmail" value=""/>
            </div>
        </div>
        <div>
            <div>Пароль</div>
            <div>
                <input type="password" id="loginPwd" name="loginPwd" value=""/>
            </div>
        </div>
        <div>
            <input type="button" onclick="login();" value="Войти"/>
        </div>
    </div>

     <div id="registerBox"> или <br>
        <div class="menuCaption">Регистрация нового пользователя</div>
        email*: <br>
        <input type="text" name="email" id="email" value=""><br>
        пароль*: <br>
        <input type="password" name="pwd1" id="pwd1" value=""><br>
        повторите пароль*: <br> 
        <input type="password" name="pwd2" id="pwd2" value=""><br> 

        Имя*: <input type="text" name="name" id="name" value=""><br> 
        Тел*: <input type="text" name="phone" id="phone" value="">
        Адрес*: <input name="address" id="address" value="">

        <input type="button" onclick="registerNewUser();" value="Зарегистрироваться">
    </div>
    <?php $_smarty_tpl->_assignInScope('buttonClass', "class='hideme'");?>

<?php }?>

<input <?php echo $_smarty_tpl->tpl_vars['buttonClass']->value;?>
 id="btnSaveOrder" type="button" value="Оформить заказ" onclick="saveOrder();">
</form><?php }
}
