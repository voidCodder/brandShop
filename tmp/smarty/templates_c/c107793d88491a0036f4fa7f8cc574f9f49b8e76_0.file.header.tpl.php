<?php
/* Smarty version 3.1.33, created on 2019-05-13 12:17:45
  from 'C:\OSPanel\domains\ShopKyrs\views\default\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd9363924a737_35899848',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c107793d88491a0036f4fa7f8cc574f9f49b8e76' => 
    array (
      0 => 'C:\\OSPanel\\domains\\ShopKyrs\\views\\default\\header.tpl',
      1 => 1557693422,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:leftcolumn.tpl' => 1,
  ),
),false)) {
function content_5cd9363924a737_35899848 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.css">
    <?php echo '<script'; ?>
 src="/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/js/main.js"><?php echo '</script'; ?>
>
    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
</head>
<body>
    <header id="header">
        <h1>My shop- интернет-магазин</h1>
    </header>
    <div class="main">
        <?php $_smarty_tpl->_subTemplateRender("file:leftcolumn.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        
        
                <?php }
}
