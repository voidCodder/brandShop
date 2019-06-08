{* Шаблон корзины *}

{include file="parts/MenuArrivals.tpl"}

<main>
    <div class="container">
        <div class="shopping-cart-wrap">
            <article class="purchases grid">
                <div class="purchases-table-wrap">
                    <span class="purchases-table__title">Product Details</span>
                </div>
                <div class="purchases-table-wrap">
                    <span class="purchases-table__title">unite Price</span>
                </div>
                <div class="purchases-table-wrap">
                    <span class="purchases-table__title">Quantity</span>
                </div>
                <div class="purchases-table-wrap">
                    <span class="purchases-table__title">shipping</span>
                </div>
                <div class="purchases-table-wrap">
                    <span class="purchases-table__title">Subtotal</span>
                </div>
                <div class="purchases-table-wrap">
                    <span class="purchases-table__title">ACTION</span>
                </div>

{assign var=totalPrice value=0}
{if $rsCartProducts != null}
    
        {foreach $rsCartProducts as $item}
            {foreach $item['amount'] as $size => $cnt}

{assign var=totalPrice value={$totalPrice} + ($item['price']*$cnt)}

                <div 
                class="purchases-table-wrap purchases-table-wrap_descriptor" 
                data-id="{$item['id_good']}{$size}">
                    <div class="purchases-table-descriptor flex">
                        <img src="/img/goods/{$item['id_category']}/{$item['image']}.jpg" alt="{$item['brand']} - {$item['name']}">
                        <div>
                            <span class="purchases-table-descriptor__text_title">
                                {$item['name']}
                            </span>
                            <div>
                                <span class="purchases-table-descriptor__text">
                                    Brand: 
                                </span>
                                <span class="purchases-table-descriptor__text purchases-table-descriptor__text_light">
                                    {$item['brand']}
                                </span>
                            </div>
                            <div>
                                <span class="purchases-table-descriptor__text">
                                    Size: 
                                </span>
                                <span class="purchases-table-descriptor__text purchases-table-descriptor__text_light">
                                    {$size}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div 
                class="purchases-table-wrap" 
                data-id="{$item['id_good']}{$size}">
                    <span class="purchases-text"
                    id="itemPrice_{$item['id_good']}{$size}" 
                    data-value="{$item['price']}">
                    ${$item['price']}
                    </span>
                </div>
                <div 
                class="purchases-table-wrap"
                data-id="{$item['id_good']}{$size}">
                    <input type="text" name="quantity" 
                    data-cart-item-id="{$item['id_good']}{$size}" 
                    id="itemCnt_{$item['id_good']}{$size}" class="purchases-table__quantity purchases-text"
                    value="{$cnt}">
                </div>
                <div class="purchases-table-wrap"
                data-id="{$item['id_good']}{$size}">
                    <span class="purchases-text">FREE</span>
                </div>
                <div 
                class="purchases-table-wrap" 
                data-id="{$item['id_good']}{$size}">
                    <span class="purchases-text"
                    id="itemRealPrice_{$item['id_good']}{$size}"
                    data-id="itemRealPrice">
                        ${$item['price'] * $cnt}
                    </span>
                </div>
                <div class="purchases-table-wrap" 
                data-id="{$item['id_good']}{$size}">
                    <span>
                        <i class="fas fa-times-circle cart-item-remove" 
                        data-cart-item-remove-id="{$item['id_good']}" 
                        data-cart-item-remove-size="{$size}">
                        </i>
                    </span>
                </div>

            {/foreach}        
        {/foreach}      

{else}
        <div class="cart-empty-items emptyItem">Cart empty!</div>         
{/if}
            </article>


            <div class="purchases-buttons flex">

            {if $rsCartProducts != null}
                <button 
                class="purchases-buttons__button"
                id="clearCart">
                    <span>CLEAR SHOPPING CART</span>
                </button>
            {else}
                <button 
                class="purchases-buttons__button v-hidden"
                id="clearCart">
                    <span>CLEAR SHOPPING CART</span>
                </button>
            {/if}

                <button class="purchases-buttons__button"
                id="pageBack">
                    <span>cONTINUE sHOPPING</span>
                </button>
            </div>

{if $rsCartProducts != null}

            <div class="shopping-cart-forms">
                <div class="shopping-cart-forms-wrap flex">
                    <div class="shopping-cart-forms-form">
                        <span class="shopping-cart-forms-form__title">
                        Shipping Adress
                        </span>
                        <input type="text" placeholder="Bangladesh" class="shopping-cart-forms-form__textbox">
                        <input type="text" placeholder="State" class="shopping-cart-forms-form__textbox">
                        <input type="text" placeholder="Postcode / Zip" class="shopping-cart-forms-form__textbox">
                        <button class="shopping-cart-forms-form__button-sm">
                            <span>get a quote</span>
                        </button>
                    </div>
                    <div class="shopping-cart-forms-form">
                        <span class="shopping-cart-forms-form__title">
                        coupon  discount
                        </span>
                        <span class="shopping-cart-forms-form__text">Enter your coupon code if you have one</span>
                        <input type="text" placeholder="State" class="shopping-cart-forms-form__textbox">
                        <button class="shopping-cart-forms-form__button-sm">
                            <span>Apply coupon</span>
                        </button>
                    </div>
                    <div class="shopping-cart-forms-form shopping-cart-forms-form_bg">
                        <div class="shopping-cart-forms-form-total">
                            <span class="shopping-cart-forms-form-total__subtext">Sub total   <b id="subTotalPrice">${$totalPrice}</b>
                            </span>
                            <span class="shopping-cart-forms-form__title shopping-cart-forms-form-total__title">
                            GRAND TOTAL 
                            <b id="grandTotalPrice">
                                ${$totalPrice}
                            </b>
                            </span>
                        </div>
                        <button class="shopping-cart-forms-form__button-big"
                        id="go-to-checkout-btn">
                            <span>proceed to checkout</span>
                        </button>
                    </div>
                </div>
            </div> 
{else}
{/if}

        </div>
    </div>
</main>