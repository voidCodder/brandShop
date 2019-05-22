<?php
/* Smarty version 3.1.33, created on 2019-05-19 14:28:31
  from 'C:\OSPanel\domains\brandShop\views\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce13ddfb132a0_53406953',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a379d349e8bd7fb73f38cf2a35c8b0bb50acfcfe' => 
    array (
      0 => 'C:\\OSPanel\\domains\\brandShop\\views\\footer.tpl',
      1 => 1558264312,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:parts/subscribeBlock.tpl' => 1,
    'file:parts/bottomMenu.tpl' => 1,
  ),
),false)) {
function content_5ce13ddfb132a0_53406953 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:parts/subscribeBlock.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:parts/bottomMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<footer class="mainFooter">
    <div class="container">
        <div class="mainFooter-wrap flex">
            <span>© 2019 Brand All Rights Reserved.</span>
            <div class="mainFooter__icon">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                <a href="#"><i class="fab fa-google-plus-g"></i></a>
            </div>
        </div>
    </div>
</footer>


</body>

</html><?php }
}
