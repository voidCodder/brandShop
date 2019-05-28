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
                    <div class="dropdown searchMenu__dropdown">Browse

                    </div>
                    <input type="text" placeholder="Search fo item..">
                    <button class="searchMenu__search"></button>
                </div>
                <div class="container__brushMenu flex">
                    <div class="brushMenu__dropdown">
                        <img src="/img/shopping-cart-header.png" alt="" class="brushMenu__icon">

                        <!-- CART DROPDOWN-MENU -->

                        <div class="dropdown__cart flex">
                            <div class="cart__items">
                                <div class="cart-item"></div>
                                <div class="cart-item"></div>
                            </div>
                            <span class="cart__totalPrice">TOTAL $500.00</span>
                            <div class="cart__buttons">
                                <button><a href="/checkout/">Checkout</a></button>
                                <button><a href="/cart/">Go to cart</a></button>
                            </div>
                        </div>
                        <!-- END CART DROPDOWN-MENU -->

                    </div>

                    <div class="pos-rel">
                        <button class="brushMenu__myAcc accent-button" id="showMyAcc">My Account</button>
                        <div class="dropdown__myAcc flex" id="myAccContainer">           
                            

                    {if isset($arUser)}
                             <div id="userBox">
                                <span><a href="/user/" id="userLink">{$arUser['displayName']}</a></span>
                                <span><a href="/user/logout/">Выход</a></span>
                            </div>
                    {else}
                                
                            <div id="userBox" class="hideme">
                                <span><a href="#" id="userLink"></a></span>
                                <span><a href="/user/logout/">Выход</a></span>
                            </div>
                            <div class="myAcc__loginBox" id="loginBox">
                                <span class="myAcc__title-text">Login</span>
                                <input type="text" name="loginEmail" id="loginEmail">
                                <input type="text" name="loginPwd" id="loginPwd">
                                <button class="accent-button" id="loginBtn">login</button>
                            </div>                           
                            <div class="myAcc__registerBox" id="registerBox">
                                <span class="myAcc__title-text">Register</span>
                                <input type="text" name="email" id="email">
                                <input type="text" name="pwd1" id="pwd1">
                                <input type="text" name="pwd2" id="pwd2">
                                <button class="accent-button" id="registerBtn" >register</button>
                            </div>
                    {/if}     
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

{include file="parts/nav.tpl"}