{* Главная страница *}

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


                    {foreach $rsProducts as $item}

					<div class="item">
						<img src="/img/goods/{$item['id_category']}/{$item['image']}.jpg" alt="{$item['brand']}{$item['name']}" class="item__img">
						<p>{$item['brand']} - {$item['name']}</p>
						<span>{$item['price']}$</span>
						<a href="/product/{$item['id_good']}/" class="item__hover">
							<img src="/img/shopping-cart.png" alt="Add to cart">
							<span>Add to Cart</span>
						</a>
					</div>

                    {/foreach}					


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
</main>