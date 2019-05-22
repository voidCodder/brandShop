{* Шаблон категориии товаров *}

{include file="parts/menuArrivals.tpl"}

<div class="container m-bot110px">
    <div class="flex p-top70px">
        <aside class="cat-products">
            <ul class="cat-nav">
                <li class="cat-nav-item n-item_li1">
                    <span class="cat-nav-item_li cat-nav-item_span1">
                        <a href="#" class="link_1">Category</a>
                    </span>

                    {* Если показываем все категории *}
                    {if $isAllCats == 1}
                    <ul class="cat-nav cat-nav-sub">

                        {foreach $rsCategories as $item}

                            <li class="cat-nav-item">
                                <span class="cat-nav-item_li">
                                    <a href="#" class="link sub-cat1">{$item['name']}</a>
                                </span>

                                {if isset($item['children'])}
                                <ul class="cat-nav cat-nav-sub">
                                
                                {foreach $item['children'] as $itemChild}

                                    <li class="cat-nav-item">
                                        <span class="cat-nav-item_li">
                                       <a href="/category/{$itemChild['id_category']}/" class="link">{$itemChild['name']}</a>
                                        </span>
                                    </li>

                                {/foreach}
                                
                                </ul>
                                {/if}
                            
                            </li>

                        {/foreach}
                        
                    </ul>
                    {/if}
                    {* //Если показываем все категории *}

                    {* Если показываем подкатегории *}
                    {if isset($rsChildCats)}
                    <ul class="cat-nav cat-nav-sub">

                        {foreach $rsChildCats as $item}

                            <li class="cat-nav-item">
                                <span class="cat-nav-item_li">
                                    <a href="/category/{$item['id_category']}/" class="link">{$item['name']}</a>
                                </span>
                            </li>

                        {/foreach}
                        
                    </ul>
                    {/if}
                    {* //Если показываем подкатегории *}

                </li>
                <li class="cat-nav-item n-item_li1">
                    <span class="cat-nav-item_li cat-nav-item_span1">
                        <a href="#" class="link_1">BRAND</a>
                    </span>
{* Если показываем список брендов *}
                    {if isset($rsBrands)}
                    <ul class="cat-nav cat-nav-sub">

                        {foreach $rsBrands as $item}

                            <li class="cat-nav-item">
                                <span class="cat-nav-item_li">
                                    <div class="cat-nav-block-checkbox flex">
                                        <a href="#" class="link">{$item}</a>
                                        <input type="checkbox" name="category">
                                    </div>
                                </span>
                            </li>

                        {/foreach}
                        
                    </ul>
                    {/if}
{* //Если показываем список брендов *}

                </li>
                <li class="cat-nav-item n-item_li1">
                    <span class="cat-nav-item_li cat-nav-item_span1">
                        <a href="#" class="link_1">dESIGNER</a>
                    </span>
                    <ul class="cat-nav cat-nav-sub">
                        <li class="cat-nav-item"></li>
                    </ul>
                </li>
            </ul>
        </aside>
        <div class="catalog-wrap_product">
            <aside>
                <div class="products-sort flex">
                    <div class="products-sort-cat">
                        <span class="products-sort-cat__title">Trending now</span>
                        <span><a href="#">Bohemian</a> |</span>
                        <span><a href="#">Floral</a> |</span>
                        <span><a href="#">Lace</a> |</span>
                        <span><a href="#">Floral</a> |</span>
                        <span><a href="#">Lace</a> |</span>
                        <span><a href="#">Bohemian</a> </span>
                    </div>
                    <div class="products-sort-cat products-sort-cat_size">
                        <span class="products-sort-cat__title">Size</span>
                        <label>
                            <input type="checkbox" name="size" id="">
                            XXS
                        </label>
                        <label>
                            <input type="checkbox" name="size" id="">
                            XS
                        </label>
                        <label>
                            <input type="checkbox" name="size" id="">
                            S
                        </label>
                        <label>
                            <input type="checkbox" name="size" id="">
                            M
                        </label>
                        <label>
                            <input type="checkbox" name="size" id="">
                            L
                        </label>
                        <label>
                            <input type="checkbox" name="size" id="">
                            XL
                        </label>
                        <label>
                            <input type="checkbox" name="size" id="">
                            XXL
                        </label>
                    </div>
                    <div class="products-sort-cat">
                        <span class="products-sort-cat__title">pRICE</span>
                        <input type="range" name="" id="" multiple min="0" max="180" step="5"> <!-- JS -->
                    </div>
                </div>
                <div class="products-sort-by flex">
                    <div class="products-sort-by-container">
                        <label>Sort By</label>
                        <select name="sort-by">
                            <option>Name</option>
                            <option>Increase price</option>
                            <option>Decrease price</option>
                            <option>On new</option>
                            <option>On discounts</option>
                        </select>
                    </div>
                    <div class="products-sort-by-container">
                        <label>Show</label>
                        <select name="show-kolvo">
                            <option>6</option>
                            <option>9</option>
                            <option>12</option>
                            <option>All</option>
                        </select>
                    </div>
                </div>
            </aside>
            <article class="catalog">
                <section class="catalog__items grid">

{* Вывод товаров *}
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
{* //Вывод товаров *}
                    
                </section>
            </article>
            <aside class="paginator paginator_page flex">
                <span class="paginator__pages">
                    <a href="#" class="paginator__num">
                        <i class="far fa-chevron-left"></i>
                    </a>
                    <a href="#" class="paginator__num button_toggled">1</a>
                    <a href="#" class="paginator__num">2</a>
                    <a href="#" class="paginator__num">3</a>
                    <a href="#" class="paginator__num">4</a>
                    <a href="#" class="paginator__num">5</a>
                    <a href="#" class="paginator__num">6</a>
                    <a href="#" class="paginator__num">
                        <i class="far fa-chevron-right"></i>
                    </a>
                </span>
                <button class="paginator__button">
                    <span>View All</span>
                </button>
            </aside>
        </div>
    </div>
</div>

<div class="features">
    <div class="features-wrap flex">
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
    </div>
</div>