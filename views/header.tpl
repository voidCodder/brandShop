{* шапка+навигация *}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="{$templateWebPath}img/favicon/favicon.ico">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{$templateWebPath}css/main.min.css">
    <script src="{$templateWebPath}dist/js/scripts.min.js"></script>

    <title>{$pageTitle}</title>
</head>

<body>
    <header class="mainHeader">
        <div class="container">
            <div class="mainHeader-wrap flex">
                <a class="logo container__logo" href="/"> <img src="/img/Group_2.png" alt="logo"><b>BRAN</b><span>D</span></a>
                <div class="container__searchMenu flex">
                    <div class="dropdown searchMenu__dropdown">
                        Browse
                    </div>
                    <input type="text" placeholder="Search fo item.."
                    id="searchInput">
                    <button class="searchMenu__search"></button>

                    {* Search block *}

                    <div class="dropdown-search" id="search-block" tabindex="1">

                    </div>
                    
                    {* Search block *}

                </div>
                <div class="container__brushMenu flex">
                    <div class="brushMenu__dropdown">
                        <img src="/img/shopping-cart-header.png" alt="" class="brushMenu__icon">

                        {* >cntItems block *}
                        <div class="cart-cnt-items" id="cart-cnt-items">
                            {if $cartCntItems > 0} 
                                {$cartCntItems}
                            {else} 0
                            {/if}
                        </div>
                        {* <cntItems block *}

                        <!-- CART DROPDOWN-MENU -->

                        <div class="dropdown__cart flex">

                            <div class="cart__items">
{assign var=totalPrice value=0}
{if $rsCartProducts != null}


    {foreach $rsCartProducts as $item}
        {foreach $item['amount'] as $size => $cnt}

{assign var=totalPrice value={$totalPrice} + ($item['price']*$cnt)}

                                <div class="cart-item"
                                data-id="{$item['id_good']}{$size}">
                                    <div class="cart__item flex">
                                        <a href="/product/{$item['id_good']}/">
                                            <img 
                                            src="/img/goods/{$item['id_category']}/{$item['image']}.jpg" 
                                            alt="{$item['brand']} - {$item['name']}">
                                        </a>
                                        <div class="cart__item-info">
                                            <span class="cart__item-text-brand">
                                                {$item['brand']}
                                            </span>
                                            <span class="cart__item-text-name">
                                                {$item['name']}
                                            </span>
                                            <span class="cart__item-text-name">
                                                Size: {$size}
                                            </span>
                                            <span class="cart__item-text-cnt">
                                                <span data-cart-item-cnt>
                                                    {$cnt}
                                                </span> 
                                                <i>x </i>
                                                <span data-cart-item-price>
                                                    ${$item['price']}
                                                </span>
                                            </span>
                                        </div>
                                        <div class="cart__item-remove">
                                            <i class="fas fa-times-circle cart-item-remove"
                                            data-cart-item-remove-id="{$item['id_good']}" 
                                            data-cart-item-remove-size="{$size}">
                                            </i>
                                        </div>
                                    </div>
                                </div>
    {/foreach}
        {/foreach}

{else}
    <span class="emptyItem cart-emptyItem">Cart empty</span>
{/if}


                            </div>


                            <span class="cart__totalPrice">
                                <span>TOTAL</span>
                                <span id="cart-totalPrice">
                                    ${$totalPrice}
                                </span>
                            </span>
                            <div class="cart__buttons">
                                <button id="go-to-checkout-btn-cart">
                                    <a href="#">Checkout</a>
                                </button>
                                <button><a href="/cart/">Go to cart</a></button>
                            </div>
                        </div>
                        <!-- END CART DROPDOWN-MENU -->

                    </div>

                    <div class="pos-rel">
                        <button class="brushMenu__myAcc accent-button" id="showMyAcc">My Account</button>
                        <div class="dropdown__myAcc flex" id="myAccContainer">           
                            

                    {if isset($arUser)}
                             <div class="user-userBox" 
                             id="userBox">
                                <span><a href="/user/" id="userLink">{$arUser['displayName']}</a></span>
                                <span><a href="/user/logout/">Logout</a></span>
                            </div>
                    {else}
                                
                            <div class="hideme" 
                            id="userBox">
                                <span><a href="#" id="userLink"></a></span>
                                <span><a href="/user/logout/">Logout</a></span>
                            </div>
                            <span class="myAcc__title-text"
                            id="loginBox-text">
                                Login
                            </span>

                            <form class="myAcc__loginBox" id="loginBox">
                                <label class="shipping-form-typetext-label">Email</label>
                                <input type="email" name="loginEmail" 
                                placeholder="sophie@example.com" required
                                id="loginEmail">
                                <label class="shipping-form-typetext-label">Password</label>
                                <input type="password" name="loginPwd"
                                required
                                id="loginPwd">
                                <button type="submit" class="accent-button" id="loginBtn">login</button>
                            </form>

                            <span class="myAcc__title-text"
                            id="registerBox-text">
                                Register
                            </span>

                            <form class="myAcc__registerBox" id="registerBox">
                                <label class="shipping-form-typetext-label">
                                    Email
                                </label>
                                <input type="email" name="email" 
                                placeholder="sophie@example.com" required 
                                id="email">
                                <label class="shipping-form-typetext-label">
                                    Password
                                </label>
                                <input type="password" name="pwd1"
                                required
                                id="pwd1">
                                <label class="shipping-form-typetext-label">
                                    Repeat Password
                                </label>
                                <input type="password" name="pwd2"
                                required
                                id="pwd2">
                                <button class="accent-button" id="registerBtn" >register</button>
                            </form>
                            
                    {/if}     
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

{include file="parts/nav.tpl"}