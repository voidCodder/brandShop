<main>
    <div class="container">
        <div class="product-container flex">
            <div class="product-img-box">
                <div class="big-image">
                    <img src="/img/goods/{$rsProduct['id_category']}/{$rsProduct['image']}.jpg"
                        alt="{$rsProduct['brand']} - {$rsProduct['name']}"
                        id="product-bigImage">
                </div>
            </div>
            <div class="product-shop-box">
                <div class="product-shop flex">
                    <div class="product-shop-brand">
                        <span>
                            <a href="/category/{$rsProduct['id_category']}/"
                            id="product-brand">
                                {$rsProduct['brand']}
                            </a>
                        </span>
                    </div>
                    <div class="product-shop-name">
                        <span id="product-name">
                            {$rsProduct['name']}
                        </span>
                    </div>
                    <div class="product-shop-price">
                        <span class="product-text"
                        id="product-price">
                            {$rsProduct['price']} $
                        </span>
                    </div>
                    <div class="product-shop-vat-hint">
                        <span>excl. VAT, <a href="">excl. shipping costs</a></span>
                    </div>
                    <div class="product-shop-detail-links">
                        <span>
                            <a href="#desc-details" class="details-and-more-anchor">Details & More</a>
                        </span>
                        <span>
                            <a href="">Size & Fit</a>
                        </span>
                    </div>
                    <div class="product-shop-size-chooser">
                        <select name="sizes">
    
                            {foreach $rsProduct['size'] as $item}
                            <option value="{$item['size']}">{$item['size']}</option>
                            {/foreach}
    
                        </select>
                    </div>
                    <div class="product-shop-addtocart-button">
                        <button id="addToCartBtn" data-product-id="{$rsProduct['id_good']}" class="accent-button">
                            <span>ADD TO CART</span>
                        </button>
                    </div>
                    <div class="product-shop-customer-care">
                        <span>Have questions or need styling advice?</span>
                        <span>
                            Our
                            <a href="">customer service</a>
                            team or in-house
                            <a href="">stylist</a>
                            would be happy to help!
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-details-wrap">
            <div class="product-details-content flex">
                <div class="product-details-section">
                    <span class="product-details-title">DETAILS</span>
                    <span class="product-details-text">{$rsProduct['description']}</span>
                </div>
                <div class="product-details-section">
                    <span class="product-details-title">Material & Care</span>
                    <span class="product-details-text">Machine wash</span>
                </div>
            </div>
        </div>
    </div>
</main>