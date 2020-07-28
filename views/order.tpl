{* Шаблон страницы проверки заказа *}


{include file="parts/MenuArrivals.tpl"}

<main>
    <article class="hero hero_checkout">
        <div class="container">
            <form class="content_checkout-wrap">
                <article class="content_checkout">
                    <ol class="ship-nav">
                        <li class="ship-nav-item ship-nav-item_li1">
                            <span class="ship-nav-item_li ship-nav-item_span1">
                                <span class="ship-link_1">Shipping</span>
                            </span>
                            <div class="ship-nav-item__block-wrap flex">


{if $hideLoginBox == 1}
    
                                <div class="shipping-form"
                                id="order-select-login-reg">
                                    <div class="shipping-form-wrap flex">
                                        <span class="shipping-form-text_regular">Check as a guest or register</span>
                                        <span class="shipping-form-text_light">Register with us for future convenience</span>
                                        <div class="form-radio-padding">
                                            <input type="radio" name="checkout-as-guest" id="checkout-as-guest_guest" checked>
                                            <label for="checkout-as-guest_guest" class="shipping-form-radio-label">login</label>
                                        </div>
                                        <div class="form-radio-padding">
                                            <input type="radio" name="checkout-as-guest" id="checkout-as-guest_register">
                                            <label for="checkout-as-guest_register" class="shipping-form-radio-label">register</label>
                                        </div>
                                        <span class="shipping-form-text_regular">register and save time!</span>
                                        <span class="shipping-form-text_light">Register with us for future convenience</span>
                                        <span class="shipping-form-text_light shipping-form-text_light_arrow">
                                            <i class="far fa-chevron-double-right"></i>
                                            Fast and easy checkout
                                        </span>
                                        <span class="shipping-form-text_light shipping-form-text_light_arrow">
                                            <i class="far fa-chevron-double-right"></i>
                                            Easy access to your order history and status
                                        </span>
                                        <button class="shipping-form-button">
                                            <span class="shipping-form-button__text">Continue</span>
                                        </button>
                                    </div>
                                </div>

                                <div class="shipping-form" 
                                id="order-loginBox">
                                    <div class="shipping-form-wrap flex">
                                        <span class="shipping-form-text_regular">Already registered?</span>
                                        <span class="shipping-form-text_light">Please log in below</span>
                                        <label class="shipping-form-typetext-label label_required">EMAIL ADDRESS</label>
                                        <input type="email" name="loginEmail"
                                        placeholder="sophie@example.com" required>
                                        <label class="shipping-form-typetext-label  label_required">PASSWORD</label>
                                        <input type="password" name="loginPwd" required>
                                        <span class="shipping-form-text_light shipping-form-text_light_redreq">required fields</span>
                                        <div>
                                            <button type="submit" class="shipping-form-button"
                                            id="order-loginBtn">
                                                <span class="shipping-form-button__text">
                                                Log in</span>
                                            </button>
                                            <span class="shipping-form-text_regular pad-l30">Forgot Password ?</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="shipping-form hideme" id="order-registerBox">
                                    <div class="shipping-form-wrap flex">
                                        <span class="shipping-form-text_regular">Not registered yet?</span>
                                        <span class="shipping-form-text_light">Please log in below</span>
                                        <label class="shipping-form-typetext-label label_required">EMAIL ADDRESS</label>
                                        <input type="email" name="email"
                                        placeholder="sophie@example.com" required>
                                        <label class="shipping-form-typetext-label  label_required">PASSWORD</label>
                                        <input type="password" name="pwd1" required>
                                        <label class="shipping-form-typetext-label  label_required">REPEAT PASSWORD</label>
                                        <input type="password" name="pwd2" required>
                                        <span class="shipping-form-text_light shipping-form-text_light_redreq">required fields</span>
                                        <div>
                                            <button type="submit" class="shipping-form-button"
                                            id="order-registerBtn">
                                                <span class="shipping-form-button__text">
                                                REGISTER</span>
                                            </button>
                                            <span class="shipping-form-text_regular pad-l30">Forgot Password ?</span>
                                        </div>
                                    </div>
                                </div>


                                <div class="shipping-form hideme"
                                id="order-data-user">
                                    <div class="shipping-form-wrap flex">
                                        <label class="shipping-form-typetext-label label_required">
                                            Name
                                        </label>
                                        <input type="text" name="name" required
                                        value="{$arUser['user_name']}">
                                        <label class="shipping-form-typetext-label  label_required">
                                            Phone
                                        </label>
                                        <input type="tel" name="phone"
                                        value="{$arUser['phone']}"
                                        placeholder="+7-495-000-00-00"
                                        required>
                                        <label class="shipping-form-typetext-label  label_required">
                                            Address
                                        </label>
                                        <input type="text" name="address" required
                                        value="{$arUser['address']}">
                                        <span class="shipping-form-text_light shipping-form-text_light_redreq">
                                            required fields
                                        </span>
                                        <button type="submit" 
                                        class="shipping-form-button"
                                        id="order-shipping-cont">
                                            <span
                                            class="shipping-form-button__text">Continue</span>
                                        </button>
                                    </div>
                                </div>
        
{else}
    
                                <form class="shipping-form"
                                id="order-data-user">
                                    <div class="shipping-form-wrap flex">
                                        <label class="shipping-form-typetext-label label_required">
                                            Name
                                        </label>
                                        <input type="text" name="name" required
                                        value="{$arUser['user_name']}">
                                        <label class="shipping-form-typetext-label  label_required">
                                            Phone
                                        </label>
                                        <input type="tel" name="phone"
                                        value="{$arUser['phone']}"
                                        placeholder="+7-495-000-00-00"
                                        required>
                                        <label class="shipping-form-typetext-label  label_required">
                                            Address
                                        </label>
                                        <input type="text" name="address" required
                                        value="{$arUser['address']}">
                                        <span class="shipping-form-text_light shipping-form-text_light_redreq">
                                            required fields
                                        </span>
                                        <button type="submit" 
                                        class="shipping-form-button"
                                        id="order-shipping-cont">
                                            <span
                                            class="shipping-form-button__text">Continue</span>
                                        </button>
                                    </div>
                                </form>

{/if}
                            </div>
                        </li>
                        <li class="ship-nav-item ship-nav-item_li1">
                            <span class="ship-nav-item_li ship-nav-item_span1">
                                <span class="ship-link_1">SHIPPING METHOD</span>
                            </span>
                            <div class="ship-nav-item__block-wrap flex
                            ship-nav-item__block-wrap_shipping-method"
                            id="order-shipping-method">
                                <div class="form-radio-padding">
                                        <input type="radio" name="shipping-methods" id="shipping-methods_standart">
                                        <label for="shipping-methods_standart" class="shipping-form-radio-label">Standart</label>
                                </div>
                                <div class="form-radio-padding">
                                        <input type="radio" name="shipping-methods" id="shipping-methods_ups">
                                        <label for="shipping-methods_ups" class="shipping-form-radio-label">UPS</label>
                                </div>
                                <div class="form-radio-padding">
                                        <input type="radio" name="shipping-methods" id="shipping-methods_usps">
                                        <label for="shipping-methods_usps" class="shipping-form-radio-label">USPS</label>
                                </div>
                                <div class="ship-nav-buttons">
                                    <button class="shipping-form-button"
                                    id="order-shipping-method-back">
                                        <span class="shipping-form-button__text">
                                            BACK
                                        </span>
                                    </button>
                                    <button class="shipping-form-button"
                                    id="order-shipping-method-cont">
                                        <span class="shipping-form-button__text">
                                            Continue
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </li>
                        <li class="ship-nav-item ship-nav-item_li1">
                            <span class="ship-nav-item_li ship-nav-item_span1">
                                <span class="ship-link_1">PAYMENT</s>
                            </span>
                            <div class="ship-nav-item__block-wrap flex
                            ship-nav-item__block-wrap_payment"
                            id="order-payment">
                                <div class="ship-nav-shipping">
                                    <span class="shipping-form-text_regular ship-nav-shipping__text">
                                    SELECT YOUR 
                                    <b>PAYMENT METHOD</b>
                                    HERE:</span>
                                    <div class="ship-nav-shipping__pay-method
                                    ship-nav-shipping__pay-method_creditcard">
                                        <input type="radio" name="payment-method" id="payment-method_creditcard">
                                        <label for="payment-method_creditcard" class="shipping-form-radio-label label-payment-method">
                                            <div class="logo-wrapper">
                                                <img src="/img/payment/logo-creditcard.png" alt="logo-creditcard"
                                                class="payment-logo">
                                            </div>
                                            <span>Credit card</span>
                                        </label>
                                    </div>
                                    <div class="ship-nav-shipping__pay-method">
                                        <input type="radio" name="payment-method" id="payment-method_paypal">
                                        <label for="payment-method_paypal" class="shipping-form-radio-label
                                        label-payment-method">
                                            <div class="logo-wrapper">
                                                <img src="/img/payment/logo-paypal.png" alt="logo-paypal"
                                                class="payment-logo">
                                            </div>
                                            <span>PayPal</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="ship-nav-buttons">
                                    <button class="shipping-form-button"
                                    id="order-payment-back">
                                        <span class="shipping-form-button__text">
                                            BACK
                                        </span>
                                    </button>
                                    <button class="shipping-form-button"
                                    id="order-payment-cont">
                                        <span class="shipping-form-button__text">
                                            Continue
                                        </span>
                                    </button>
                                </div>
                            </div> 
                        </li>
                        <li class="ship-nav-item ship-nav-item_li1">
                            <span class="ship-nav-item_li ship-nav-item_span1">
                                <span class="ship-link_1">ORDER REVIEW</span>
                            </span>
                            <div class="ship-nav-item__block-wrap flex
                            ship-nav-item__block-wrap_order-review"
                            id="order-review">

                                <article class="purchases grid purchases_order">
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
                                        <span class="purchases-table__title">Subtotal</span>
                                    </div>

{assign var=totalPrice value=0}
{if $rsProducts != null}
    
        {foreach $rsProducts as $item}
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
                                        <span>
                                        ${$item['price']}
                                        </span>
                                    </div>
                                    <div 
                                    class="purchases-table-wrap">
                                        <span>{$cnt}</span> 
                                    </div>
                                    <div 
                                    class="purchases-table-wrap">
                                        <span>
                                            ${$item['price'] * $cnt}
                                        </span>
                                    </div>
        {/foreach}        
            {/foreach}  
{/if}
                                </article>

        
                                <div class="ship-nav-buttons">
                                    <button class="shipping-form-button"
                                    id="order-review-back">
                                        <span class="shipping-form-button__text">
                                            BACK
                                        </span>
                                    </button>
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
                                        id="save-order-btn">
                                            <span>Save order</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ol>

                </article>
            </div>
        </div>
    </article>

</main>
