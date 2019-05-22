{* шапка+навигация *}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{$templateWebPath}css/main.min.css">
    <script src="{$templateWebPath}js/scripts.min.js"></script>

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
                                <button>Checkout</button>
                                <button>Go to cart</button>
                            </div>
                        </div>
                        <!-- END CART DROPDOWN-MENU -->

                    </div>

                    <button class="brushMenu__myAcc">My Account</button>
                </div>
            </div>
        </div>
    </header>

{include file="parts/nav.tpl"}