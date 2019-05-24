<?php
/* Smarty version 3.1.33, created on 2019-05-23 18:10:01
  from 'C:\OSPanel\domains\brandShop\views\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce6b7c9edfac7_49026162',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8c78d92d6b80e7dc5e5cb59aecc979d3bb87498' => 
    array (
      0 => 'C:\\OSPanel\\domains\\brandShop\\views\\index.tpl',
      1 => 1558624178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce6b7c9edfac7_49026162 (Smarty_Internal_Template $_smarty_tpl) {
?>
<main>
	<div class="mainPic flex" style="background-image: url('/img/bigMan.png')">
		<div class="mainPic__text">
			<h1>THE BRAND</h1>
			<p>OF LUXERIOUS</p>
			<span>FASHION</span>
		</div>
	</div>

	<section class="CategorySale">
		<div class="container">
			<div class="CategorySale-wrap grid">
				<div style="background-image:url('/img/ManSale.png')" class="MenSale CategorySale__bigBanner">
					<div class="CategorySale_bannerContent">
						hOT dEAL
						<span>FOR MEN</span>
					</div>
				</div>
				<div style="background-image:url('/img/WomanSale.png')" class="WomenSale CategorySale__smallBanner">
					<div class="CategorySale_bannerContent">
						30% offer
						<span>women</span>
					</div>
				</div>
				<div class="AccesoriesSale CategorySale__smallBanner">
					<div class="CategorySale_bannerContent">
						LUXIROUS & trendy
						<span>ACCESORIES</span>
					</div>
					<img src="/img/AccesoriesSale.png" alt="">
				</div>
				<div style="background-image:url('/img/KidsSale.png')" class="KidsSale CategorySale__bigBanner">
					<div class="CategorySale_bannerContent">
						new arrivals
						<span>FOR kids</span>
					</div>
				</div>
			</div>
		</div>
	</section>

	<article class="catalog">
		<div class="container">
			<div class="catalog-wrap">
				<header class="catalog__title">
					<h2>Fetured Items</h2>
					<p>Shop for items based on what we featured in this week</p>
				</header>
				<section class="catalog__items grid">


                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsProducts']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>

					<div class="item">
						<img src="/img/goods/<?php echo $_smarty_tpl->tpl_vars['item']->value['id_category'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['brand'];
echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" class="item__img">
						<p><?php echo $_smarty_tpl->tpl_vars['item']->value['brand'];?>
 - <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</p>
						<span><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
$</span>
						<a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id_good'];?>
/" class="item__hover">
							<img src="/img/shopping-cart.png" alt="Add to cart">
							<span>Add to Cart</span>
						</a>
					</div>

                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>					


				</section>
				<footer>
					<a href="/category/0/"><button class="catalog__button accent-button">Browse All Product</button></a>
				</footer>
			</div>
		</div>
	</article>

	<article class="feature">
		<div class="container">
			<div class="feature-wrap flex">
				<div class="feature-img">
					<img src="/img/Banner.png" alt="">
					<h2>
						30% <span id="spanforoffer">OFFER</span> <span id="spanforwomen">FOR WOMEN</span>
					</h2>
				</div>
				<article class="feature__boxes flex">
					<div class="box flex">
						<i class="fal fa-truck"></i>
						<div class="box__text">
							<h3>Free Delivery</h3>
							<p>Worldwide delivery on all. Authorit tively morph next-generation innov tion with extensive
								models.</p>
						</div>
					</div>
					<div class="box flex">
						<i class="fal fa-badge-percent"></i>
						<div class="box__text">
							<h3>Sales & discounts</h3>
							<p>Worldwide delivery on all. Authorit tively morph next-generation innov tion with extensive
								models.</p>
						</div>
					</div>
					<div class="box flex">
						<i class="fal fa-crown"></i>
						<div class="box__text">
							<h3>Quality assurance</h3>
							<p>Worldwide delivery on all. Authorit tively morph next-generation innov tion with extensive
								models.</p>
						</div>
					</div>
				</article>
			</div>	
		</div>
	</article>
</main><?php }
}
