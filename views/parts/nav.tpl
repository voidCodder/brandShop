 <nav class="navMenu">
	<div class="navMenu__container">
		<ul class="flex">
			<li><a href="/" class="activ_link">Home</a></li>

            {foreach  $rsCategories as $item}

            <li><a href="/category/{$item['id_category']}/" class="activ_link">{$item['name']}</a>


            {if isset($item['children'])}

            <div class="containerDropdown flex">
                <div class="containerDropdown__categories">
                    <ul>
                    <li><a href="/category/{$item['id_category']}/" class="categories__title">Categories</a></li>

                {foreach $item['children'] as $itemChild}
                        <li><a href="/category/{$itemChild['id_category']}/">{$itemChild['name']}</a></li>
                {/foreach}

                    </ul>
                </div>
            </div>
            {/if}         

            </li>

            {/foreach}
            
			<li><a href="#" class="activ_link">Featured</a></li>
			<li><a href="#" class="activ_link">Hot Deals</a></li>
		</ul>
	</div>
</nav>

{* <a href="#">
                    <div class="containerDropdown__categories_img" style="background-image: url('img/MegaMenuImg.png')">
                        <span>Super <br> sale!</span>
                    </div>
                </a> *}