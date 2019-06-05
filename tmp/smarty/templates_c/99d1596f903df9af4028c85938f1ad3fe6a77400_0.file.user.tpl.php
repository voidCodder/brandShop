<?php
/* Smarty version 3.1.33, created on 2019-06-04 20:41:02
  from 'C:\OSPanel\domains\brandShop\views\user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf6ad2e5fc373_31780480',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99d1596f903df9af4028c85938f1ad3fe6a77400' => 
    array (
      0 => 'C:\\OSPanel\\domains\\brandShop\\views\\user.tpl',
      1 => 1559670058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf6ad2e5fc373_31780480 (Smarty_Internal_Template $_smarty_tpl) {
?>
<main class="user-main" style="background-image: linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)), url('/img/Logo.svg')">

    <div class="dashboard">
        <div class="page-title">
            <h1>My Account</h1>
        </div>
        <div class="box-head">
            <h2 class="customer-section-title">My information</h2>
        </div>
        <div class="dashboard-contact" id="userInf">
            
            <div class="dashboard-contact-box">
                <span>Login(email)</span>
                <span><?php echo $_smarty_tpl->tpl_vars['arUser']->value['user_email'];?>
</span>
            </div>
            <div class="dashboard-contact-box">
                <span>Name</span>
                <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['user_name'];?>
">
            </div>
            <div class="dashboard-contact-box">
                <span>Phone</span>
                <input type="tel" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['phone'];?>
"
                pattern="[0-9]<?php echo 1;?>
 [0-9]<?php echo 3;?>
-[0-9]<?php echo 3;?>
-[0-9]<?php echo 4;?>
"
                placeholder="0 000-000-0000">
            </div>
            <div class="dashboard-contact-box">
                <span>Address</span>
                <input type="text" name="address" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['address'];?>
">
            </div>
            <div class="dashboard-contact-box">
                <span>New password</span>
                <input type="password" name="pwd1">
            </div>
            <div class="dashboard-contact-box">
                <span>Repeat new password</span>
                <input type="password" name="pwd2">
            </div>
            <div class="dashboard-contact-box">
                <span>Enter current password</span>
                <input type="password" name="curPwd">
            </div>
            <div class="dashboard-contact-box_button">
                <button class="dashboard-contact__button accent-button" 
                value="Save changes" 
                id="updateUserDataBtn">
                    Save changes
                </button>
            </div>
        </div>
        <div class="box-head">
            <h2 class="customer-section-title">My orders</h2>
        </div>


        <article class="user-orders grid">
            <div class="purchases-table-wrap">
                <span class="purchases-table__title">№</span>
            </div>
            <div class="purchases-table-wrap">
                <span class="purchases-table__title">Action</span>
            </div>
            <div class="purchases-table-wrap">
                <span class="purchases-table__title">Id order</span>
            </div>
            <div class="purchases-table-wrap">
                <span class="purchases-table__title">Status</span>
            </div>
            <div class="purchases-table-wrap">
                <span class="purchases-table__title">Date created</span>
            </div>
            <div class="purchases-table-wrap">
                <span class="purchases-table__title">Date payment</span>
            </div>
            <div class="purchases-table-wrap">
                <span class="purchases-table__title">More detail</span>
            </div>

<?php if (!$_smarty_tpl->tpl_vars['rsUserOrders']->value) {?>
    <span class="emptyItem">No orders</span>
<?php } else { ?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsUserOrders']->value, 'item', false, NULL, 'orders', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_orders']->value['iteration']++;
?>


            <div class="purchases-table-wrap">
                <span class="purchases-text">
                    <?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_orders']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_orders']->value['iteration'] : null);?>

                </span>
            </div>
            <div class="purchases-table-wrap">
                <span class="purchases-text">
                    <a href="#" class="purchace-order-link" 
                    onclick="showProducts('<?php echo $_smarty_tpl->tpl_vars['item']->value['id_order'];?>
');return false;">Show order products</a>
                </span>
            </div>
            <div class="purchases-table-wrap">
                <span class="purchases-text"><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</span>
            </div>
            <div class="purchases-table-wrap">
                <span class="purchases-text">
                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['item']->value['status'];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == 1) {?>
                        The order is paid
                    <?php } else { ?>
                        The order is not paid                
                    <?php }?>
                </span>
            </div>
            <div class="purchases-table-wrap">
                <span class="purchases-text"><?php echo $_smarty_tpl->tpl_vars['item']->value['datetime_create'];?>
</span>
            </div>
            <div class="purchases-table-wrap">
                <span class="purchases-text"><?php echo $_smarty_tpl->tpl_vars['item']->value['date_payment'];?>
</span>
            </div>
            <div class="purchases-table-wrap
            user-orders__moreinf">
                <span class="purchases-text">
                    Name: <?php echo $_smarty_tpl->tpl_vars['item']->value['user_name'];?>

                </span>
                <span class="purchases-text">
                    Phone: <?php echo $_smarty_tpl->tpl_vars['item']->value['user_phone'];?>

                </span>
                <span class="purchases-text">
                    Address: <?php echo $_smarty_tpl->tpl_vars['item']->value['user_address'];?>

                </span>
            </div>



            <?php if ($_smarty_tpl->tpl_vars['item']->value['children']) {?>
                <div class="purchases-table-wrap 
                user-orders-item-cell user-orders-item-cell_left"
                data-id="purchasesForOrderId_<?php echo $_smarty_tpl->tpl_vars['item']->value['id_order'];?>
">
                    <span class="purchases-table__title">
                        №
                    </span>
                </div>
                <div class="purchases-table-wrap 
                user-orders-item-cell"
                data-id="purchasesForOrderId_<?php echo $_smarty_tpl->tpl_vars['item']->value['id_order'];?>
">
                    <span class="purchases-table__title">
                        Article
                    </span>
                </div>
                <div class="purchases-table-wrap 
                user-orders-item-cell"
                data-id="purchasesForOrderId_<?php echo $_smarty_tpl->tpl_vars['item']->value['id_order'];?>
">
                    <span class="purchases-table__title">
                        Article ID
                    </span>
                </div>
                <div class="purchases-table-wrap 
                user-orders-item-cell"
                data-id="purchasesForOrderId_<?php echo $_smarty_tpl->tpl_vars['item']->value['id_order'];?>
">
                    <span class="purchases-table__title">
                        Price
                    </span>
                </div>
                <div class="purchases-table-wrap 
                user-orders-item-cell"
                data-id="purchasesForOrderId_<?php echo $_smarty_tpl->tpl_vars['item']->value['id_order'];?>
">
                    <span class="purchases-table__title">
                        Size
                    </span>
                </div>
                <div class="purchases-table-wrap 
                user-orders-item-cell"
                data-id="purchasesForOrderId_<?php echo $_smarty_tpl->tpl_vars['item']->value['id_order'];?>
">
                    <span class="purchases-table__title">
                        Quantity
                    </span>
                </div>
                <div class="purchases-table-wrap 
                user-orders-item-cell"
                data-id="purchasesForOrderId_<?php echo $_smarty_tpl->tpl_vars['item']->value['id_order'];?>
">
                </div>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['children'], 'itemChild', false, NULL, 'products', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']++;
?>
                <div class="purchases-table-wrap user-orders-item-cell_left"
                data-id="purchasesForOrderId_<?php echo $_smarty_tpl->tpl_vars['item']->value['id_order'];?>
">
                    <span class="purchases-text">
                        <?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null);?>

                    </span>
                </div>
                <div class="purchases-table-wrap purchases-table-wrap_descriptor"
                data-id="purchasesForOrderId_<?php echo $_smarty_tpl->tpl_vars['item']->value['id_order'];?>
">
                    <span class="purchases-text">
                        <a href="/product/<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['good_id'];?>
/">
                            <?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>

                        </a>
                    </span>
                </div>
                <div class="purchases-table-wrap"
                data-id="purchasesForOrderId_<?php echo $_smarty_tpl->tpl_vars['item']->value['id_order'];?>
">
                    <span class="purchases-text">
                        <?php echo $_smarty_tpl->tpl_vars['itemChild']->value['good_id'];?>

                    </span>
                </div>
                <div class="purchases-table-wrap"
                data-id="purchasesForOrderId_<?php echo $_smarty_tpl->tpl_vars['item']->value['id_order'];?>
">
                    <span class="purchases-text">
                        <?php echo $_smarty_tpl->tpl_vars['itemChild']->value['price'];?>

                    </span>
                </div>
                <div class="purchases-table-wrap"
                data-id="purchasesForOrderId_<?php echo $_smarty_tpl->tpl_vars['item']->value['id_order'];?>
">
                    <span class="purchases-text">
                        <?php echo $_smarty_tpl->tpl_vars['itemChild']->value['size'];?>

                    </span>
                </div>
                <div class="purchases-table-wrap"
                data-id="purchasesForOrderId_<?php echo $_smarty_tpl->tpl_vars['item']->value['id_order'];?>
">
                    <span class="purchases-text">
                        <?php echo $_smarty_tpl->tpl_vars['itemChild']->value['amount'];?>

                    </span>
                </div>
                <div class="purchases-table-wrap"
                data-id="purchasesForOrderId_<?php echo $_smarty_tpl->tpl_vars['item']->value['id_order'];?>
">
                </div>

            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
            <?php }?>

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>

        </article>

    </div>

</main><?php }
}
