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

                        {foreach $rsBrands as $item name=brands}

                            <li class="cat-nav-item">
                                <span class="cat-nav-item_li">
                                    <div class="cat-nav-block-checkbox">
                                        <input id="cat-brand_{$smarty.foreach.brands.iteration}" type="checkbox" name="category">
                                        <label for="cat-brand_{$smarty.foreach.brands.iteration}" class="link">{$item}</label>
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

                        <div class="cat-nav-block-checkbox select-size">

                        {$arSize=['XXS','XS','S','M','L','XL','XXL']}
                        {foreach $arSize as $size name=sizes}
                        
                            <input id="cat-size_{$size}" type="checkbox" name="size">
                            <label for="cat-size_{$size}">{$size}</label>
                        {/foreach}

                        </div>

                        
                    </div>
                    <div class="products-sort-cat">
                        <span class="products-sort-cat__title">pRICE</span>
                        {* <input type="range" name="" id="" multiple min="0" max="180" step="5">  *}
                        {* <input type="range" name="" id=""> <br> *}

                        <div id="slider"></div>
                        <div class="slider-price flex">
                            <div>
                                <span>$</span>
                                <input type="text" name="" id="input-low">
                            </div>
                            <div>
                                <span>$</span>
                                <input type="text" name="" id="input-up">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="products-sort-by flex">
                    <div class="flex">
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
                                <option>30</option>
                                <option>15</option>
                                <option>9</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <button id="filter-clear" class="products-sort-by__button accent-button">Clear</button>
                        <button id="filter-apply" class="products-sort-by__button  accent-button">Apply</button>
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

{if $paginator['currentPage'] != 1}
                    <a href="{$paginator['link']}{$paginator['currentPage']-1}" class="paginator__num">
                        <i class="far fa-chevron-left"></i>
                    </a>
{/if}

{assign var=pg value=1}
{while $paginator['pageCnt'] >= $pg}
                    
                    {if $paginator['currentPage'] == $pg}
                        <a href="{$paginator['link']}{$pg}" class="paginator__num button_toggled">{$pg}</a>
                    {else}
                        <a href="{$paginator['link']}{$pg}" class="paginator__num">{$pg}</a>
                    {/if}

{assign var=pg value=$pg+1} 
{/while}

{if $paginator['currentPage'] < $paginator['pageCnt']}
                    <a href="{$paginator['link']}{$paginator['currentPage']+1}" class="paginator__num">
                        <i class="far fa-chevron-right"></i>
                    </a>
{/if}                
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