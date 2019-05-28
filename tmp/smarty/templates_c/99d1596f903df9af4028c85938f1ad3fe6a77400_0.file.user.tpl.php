<?php
/* Smarty version 3.1.33, created on 2019-05-25 22:29:50
  from 'C:\OSPanel\domains\brandShop\views\user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce997ae255aa5_34116092',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99d1596f903df9af4028c85938f1ad3fe6a77400' => 
    array (
      0 => 'C:\\OSPanel\\domains\\brandShop\\views\\user.tpl',
      1 => 1558812587,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce997ae255aa5_34116092 (Smarty_Internal_Template $_smarty_tpl) {
?>
<main class="user-main" style="background-image: linear-gradient(rgba(255, 255, 255, 0.568), rgba(255, 255, 255, 0.568)), url('/img/Logo.svg')">

    <div class="dashboard">
        <div class="page-title">
            <h1>My Account</h1>
        </div>
        <div class="box-head">
            <h2 class="customer-section-title">My information</h2>
        </div>
        <div class="dashboard-contact" id="userInf">
            <div>
                <span>Login(email)</span>
                <span><?php echo $_smarty_tpl->tpl_vars['arUser']->value['user_email'];?>
</span>
            </div>
            <div>
                <span>Name</span><input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['user_name'];?>
">
            </div>
            <div>
                <span>Phone</span><input type="text" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['phone'];?>
">
            </div>
            <div>
                <span>Address</span><input type="text" name="address" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['address'];?>
">
            </div>
            <div>
                <span>New password</span><input type="password" name="pwd1">
            </div>
            <div>
                <span>Repeat new password</span><input type="password" name="pwd2">
            </div>
            <div>
                <span>Enter current password</span><input type="password" name="curPwd">
            </div>
            <input type="button" value="Save changes" id="updateUserDataBtn">
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
            <div class="purchases-table-wrap">
                
            </div>
            <div class="purchases-table-wrap">
                <span><a href="">Show order products</a></span>
            </div>
            <div class="purchases-table-wrap">
                <span></span>
            </div>
            <div class="purchases-table-wrap">
                <span></span>
            </div>
            <div class="purchases-table-wrap">
                <span></span>
            </div>
            <div class="purchases-table-wrap">
                <span></span>
            </div>
            <div class="purchases-table-wrap">
                <span></span>
            </div>


        </article>

    </div>

</main><?php }
}
