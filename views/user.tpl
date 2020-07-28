{* Шаблон страницы пользователя *}

<main class="user-main" style="background-image: linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)), url('/img/Logo.svg')">

    <div class="dashboard">
        <div class="page-title">
            <h1>My Account</h1>
        </div>
        <div class="box-head">
            <h2 class="customer-section-title">My information</h2>
        </div>
        <div class="dashboard-contact" id="userInf">
            
            <div class="dashboard-contact-box">
                <span>Login(email)</span>
                <span>{$arUser['user_email']}</span>
            </div>
            <div class="dashboard-contact-box">
                <span>Name</span>
                <input type="text" name="name" value="{$arUser['user_name']}">
            </div>
            <div class="dashboard-contact-box">
                <span>Phone</span>
                <input type="tel" name="phone" value="{$arUser['phone']}"
                pattern="[0-9]{1} [0-9]{3}-[0-9]{3}-[0-9]{4}"
                placeholder="0 000-000-0000">
            </div>
            <div class="dashboard-contact-box">
                <span>Address</span>
                <input type="text" name="address" value="{$arUser['address']}">
            </div>
            <div class="dashboard-contact-box">
                <span>New password</span>
                <input type="password" name="pwd1">
            </div>
            <div class="dashboard-contact-box">
                <span>Repeat new password</span>
                <input type="password" name="pwd2">
            </div>
            <div class="dashboard-contact-box">
                <span>Enter current password</span>
                <input type="password" name="curPwd">
            </div>
            <div class="dashboard-contact-box_button">
                <button class="dashboard-contact__button accent-button" 
                value="Save changes" 
                id="updateUserDataBtn" onclick="updateUserData()">
                    Save changes
                </button>
            </div>
        </div>
        <div class="box-head">
            <h2 class="customer-section-title">My orders</h2>
        </div>


        <article class="user-orders grid">
            <div class="purchases-table-wrap">
                <span class="purchases-table__title">№</span>
            </div>
            <div class="purchases-table-wrap">
                <span class="purchases-table__title">Action</span>
            </div>
            <div class="purchases-table-wrap">
                <span class="purchases-table__title">Id order</span>
            </div>
            <div class="purchases-table-wrap">
                <span class="purchases-table__title">Status</span>
            </div>
            <div class="purchases-table-wrap">
                <span class="purchases-table__title">Date created</span>
            </div>
            <div class="purchases-table-wrap">
                <span class="purchases-table__title">Date payment</span>
            </div>
            <div class="purchases-table-wrap">
                <span class="purchases-table__title">More detail</span>
            </div>

{if ! $rsUserOrders}
    <span class="emptyItem">No orders</span>
{else}

{foreach $rsUserOrders as $item name=orders}


            <div class="purchases-table-wrap">
                <span class="purchases-text">
                    {$smarty.foreach.orders.iteration}
                </span>
            </div>
            <div class="purchases-table-wrap">
                <span class="purchases-text">
                    <a href="#" class="purchace-order-link" 
                    onclick="showProducts('{$item['id_order']}');return false;">Show order products</a>
                </span>
            </div>
            <div class="purchases-table-wrap">
                <span class="purchases-text">{$item['id_order']}</span>
            </div>
            <div class="purchases-table-wrap">
                <span class="purchases-text">
                    {if {$item['status']} == 1}
                        The order is paid
                    {else}
                        The order is not paid                
                    {/if}
                </span>
            </div>
            <div class="purchases-table-wrap">
                <span class="purchases-text">{$item['datetime_create']}</span>
            </div>
            <div class="purchases-table-wrap">
                <span class="purchases-text">{$item['date_payment']}</span>
            </div>
            <div class="purchases-table-wrap
            user-orders__moreinf">
                <span class="purchases-text">
                    Name: {$item['user_name']}
                </span>
                <span class="purchases-text">
                    Phone: {$item['user_phone']}
                </span>
                <span class="purchases-text">
                    Address: {$item['user_address']}
                </span>
            </div>



            {if $item['children']}
                <div class="purchases-table-wrap 
                user-orders-item-cell user-orders-item-cell_left"
                data-id="purchasesForOrderId_{$item['id_order']}">
                    <span class="purchases-table__title">
                        №
                    </span>
                </div>
                <div class="purchases-table-wrap 
                user-orders-item-cell"
                data-id="purchasesForOrderId_{$item['id_order']}">
                    <span class="purchases-table__title">
                        Article
                    </span>
                </div>
                <div class="purchases-table-wrap 
                user-orders-item-cell"
                data-id="purchasesForOrderId_{$item['id_order']}">
                    <span class="purchases-table__title">
                        Article ID
                    </span>
                </div>
                <div class="purchases-table-wrap 
                user-orders-item-cell"
                data-id="purchasesForOrderId_{$item['id_order']}">
                    <span class="purchases-table__title">
                        Price
                    </span>
                </div>
                <div class="purchases-table-wrap 
                user-orders-item-cell"
                data-id="purchasesForOrderId_{$item['id_order']}">
                    <span class="purchases-table__title">
                        Size
                    </span>
                </div>
                <div class="purchases-table-wrap 
                user-orders-item-cell"
                data-id="purchasesForOrderId_{$item['id_order']}">
                    <span class="purchases-table__title">
                        Quantity
                    </span>
                </div>
                <div class="purchases-table-wrap 
                user-orders-item-cell"
                data-id="purchasesForOrderId_{$item['id_order']}">
                </div>

            {foreach $item['children'] as $itemChild name=products}
                <div class="purchases-table-wrap user-orders-item-cell_left"
                data-id="purchasesForOrderId_{$item['id_order']}">
                    <span class="purchases-text">
                        {$smarty.foreach.products.iteration}
                    </span>
                </div>
                <div class="purchases-table-wrap purchases-table-wrap_descriptor"
                data-id="purchasesForOrderId_{$item['id_order']}">
                    <span class="purchases-text">
                        <a href="/product/{$itemChild['good_id']}/">
                            {$itemChild['name']}
                        </a>
                    </span>
                </div>
                <div class="purchases-table-wrap"
                data-id="purchasesForOrderId_{$item['id_order']}">
                    <span class="purchases-text">
                        {$itemChild['good_id']}
                    </span>
                </div>
                <div class="purchases-table-wrap"
                data-id="purchasesForOrderId_{$item['id_order']}">
                    <span class="purchases-text">
                        {$itemChild['price']}
                    </span>
                </div>
                <div class="purchases-table-wrap"
                data-id="purchasesForOrderId_{$item['id_order']}">
                    <span class="purchases-text">
                        {$itemChild['size']}
                    </span>
                </div>
                <div class="purchases-table-wrap"
                data-id="purchasesForOrderId_{$item['id_order']}">
                    <span class="purchases-text">
                        {$itemChild['amount']}
                    </span>
                </div>
                <div class="purchases-table-wrap"
                data-id="purchasesForOrderId_{$item['id_order']}">
                </div>

            {/foreach} 
            {/if}

    {/foreach}
{/if}

        </article>

    </div>

</main>