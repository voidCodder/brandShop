<?php
/* Smarty version 3.1.33, created on 2019-05-16 14:06:49
  from 'C:\OSPanel\domains\ShopKyrs\views\default\leftcolumn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cdd4449edf984_85831117',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2dec8e6ce96f047602b454e98d99c447d929f856' => 
    array (
      0 => 'C:\\OSPanel\\domains\\ShopKyrs\\views\\default\\leftcolumn.tpl',
      1 => 1558004697,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cdd4449edf984_85831117 (Smarty_Internal_Template $_smarty_tpl) {
?><aside id="leftColumn">

    <div id="leftMenu">
        <div class="menuCaption">Меню:</div>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                        <a href="/category/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a><br>

            <?php if (isset($_smarty_tpl->tpl_vars['item']->value['children'])) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['children'], 'itemChild');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->value) {
?>
                                        --<a href="/category/<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</a><br />    
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>

    <?php if (isset($_smarty_tpl->tpl_vars['arUser']->value)) {?>

        <div id="userBox">
            <a href="/user/" id="userLink"><?php echo $_smarty_tpl->tpl_vars['arUser']->value['displayName'];?>
</a><br>
            <a href="/user/logout/" onclick="logout();">Выход</a>
        </div>   

    <?php } else { ?>

        <div id="userBox" class="hideme">
            <a href="#" id="userLink"></a><br>
            <a href="/user/logout/" onclick="logout();">Выход</a>
        </div>


        <?php if (!isset($_smarty_tpl->tpl_vars['hideLoginBox']->value)) {?>

        <div id="loginBox">
            <div class="menuCaption">Авторизация</div>
            <input type="text" id="loginEmail" name="loginEmail" value=""/><br />
            <input type="password" id="loginPwd" name="loginPwd" value=""/><br />
            <input type="button" onclick="login();" value="Войти"/>
        </div>

        <div id="registerBox">
            <div class="menuCaption showHidden" onclick="showRegisterBox();">Регистрация</div>
            <div id="registerBoxHidden">
                email: <br>
                <input type="text" name="email" id="email" value=""><br>
                пароль: <br>
                <input type="password" name="pwd1" id="pwd1" value=""><br>
                повторите пароль: <br> 
                <input type="password" name="pwd2" id="pwd2" value=""><br> 
                <input type="button" onclick="registerNewUser();" value="Зарегистрироваться">
            </div>
        </div>
        <?php }?>
    <?php }?>

    <div class="menuCaption">Корзина</div>
    <a href="/cart/" title="Перейти к корзину">В корзине:</a>
    <span id="cartCntItems">
        <?php if ($_smarty_tpl->tpl_vars['cartCntItems']->value > 0) {?> 
            <?php echo $_smarty_tpl->tpl_vars['cartCntItems']->value;?>

        <?php } else { ?> Пусто
        <?php }?>
    </span>

</aside><?php }
}
