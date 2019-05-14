{* Order page *}

{* The page title *}
{$meta_title = "`$lang->email_order_title` `$order->id`" scope=parent}

{* The page heading *}
<div class="order_notify">
    <div class="order_heading">
        <span data-language="order_greeting">{$lang->order_greeting}</span> {$order->name|escape}!
    </div>

    <div class="order_heading_promo">
        <div>
            <span data-language="order_header">{$lang->order_header}</span>
            <span class="order_tag">{$order->id}</span>
            <span data-language="order_success_issued">{$lang->order_success_issued}</span>
        </div>
        <div data-language="order_success_text">{$lang->order_success_text}</div>
        <div class="order_thank" data-language="order_thank">{$lang->order_thank}</div>
    </div>
</div>

{foreach $purchases as $purchase}
    <div class="clearfix purchase_item">
        {* Product image *}
        <div class="purchase_image">
            {$image = $purchase->product->images|first}
            <a href="{$lang_link}products/{$purchase->product->url}">
                {if $image}
                    <img src="{$image->filename|resize:110:110}" alt="{$purchase->product_name|escape}" title="{$purchase->product_name|escape}">
                {else}
                    <img width="110" height="110" src="design/{$settings->theme}/images/no_image.png" alt="{$purchase->product->name|escape}" title="{$purchase->product->name|escape}">
                {/if}
            </a>
        </div>
        <div class="purchase_info clrerfix">
            {* Product name *}
            <a class="purchase_name" href="{$lang_link}products/{$purchase->product->url}">{$purchase->product_name|escape} <span>{$purchase->variant_name|escape}</span>
            {if $purchase->variant->stock == 0}<span class="purchase_preorder">{$lang->product_pre_order}</span>{/if}</a>

            {if $order->paid && $purchase->variant->attachment}
                <a class="button" href="{$lang_link}order/{$order->url}/{$purchase->variant->attachment}" data-language="order_download_file">{$lang->order_download_file}</a>
            {/if}

            {* Price per unit *}
            <div class="purchase_units">
                <div class="purchase_price">
                    <span class="nowrap">{($purchase->variant->price)|convert} <span class="price_currency">{$currency->sign|escape}</span></span>
                </div>

                {* Quantity *}
                <span class="order_amount">x {$purchase->amount|escape} {if $purchase->units}/ {$purchase->units|escape}{/if}</span>
            </div>

            {* Extended price *}
            <span class="purchase_sum nowrap"><span>{($purchase->price*$purchase->amount)|convert}</span> {$currency->sign|escape}</span>
        </div>
    </div>
{/foreach}

{* Discount *}
{if $order->discount > 0}
    <div class="clearfix purchase_item">
        <span data-language="cart_discount">{$lang->cart_discount}:</span>
        <span>{$order->discount}%</span>
    </div>
{/if}

{* Coupon *}
{if $order->coupon_discount > 0}
    <div class="clearfix purchase_item">
        <span data-language="cart_coupon">{$lang->cart_coupon} {$order->coupon->coupon_percent|escape} %:</span>
        <span>{$order->coupon_discount|convert} {$currency->sign|escape}</span>
    </div>
{/if}

{* Delivery price *}
{if $order->separate_delivery || !$order->separate_delivery && $order->delivery_price > 0}
    <div class="clearfix purchase_item">
        <span>{$delivery->name|escape}</span>
        {if !$order->separate_delivery}
            <span>{$order->delivery_price|convert} {$currency->sign|escape}</span>
        {/if}
    </div>
{/if}
{*novaposta_ttn*}
{if $order->ttn_ref}
    <tr>
        <td>
            <span data-language="order_ttn">{$lang->order_ttn_num}</span>
        </td>
        <td>{$order->ttn_num}</td>
    </tr>
{/if}
{*/novaposta_ttn*}
<div class="order_total">
    <span data-language="cart_total_price">{$lang->cart_total_price}:</span>
    <span class="total_sum nowrap">{$order->total_price|convert} {$currency->sign|escape}</span>
</div>

<div class="h1">
    <span data-language="order_details">{$lang->order_details}</span>
</div>

{* Order details *}
<table class="table table_striped">
    <tr>
        <td>
            <span data-language="user_order_status">{$lang->user_order_status}</span>
        </td>
        <td>
            {$order_status->name|escape}
            {if $order->paid == 1}
                , <span data-language="status_paid">{$lang->status_paid}</span>
            {/if}
        </td>
    </tr>
    <tr>
        <td>
            <span data-language="order_date">{$lang->order_date}</span>
        </td>
        <td>{$order->date|date} <span data-language="order_time">{$lang->order_time}</span> {$order->date|time}</td>
    </tr>
    <tr>
        <td>
            <span data-language="order_name">{$lang->order_name}</span>
        </td>
        <td>{$order->name|escape}</td>
    </tr>
    <tr>
        <td>
            <span data-language="order_email">{$lang->order_email}</span>
        </td>
        <td>{$order->email|escape}</td>
    </tr>
    {if $order->phone}
        <tr>
            <td>
                <span data-language="order_phone2">{$lang->order_phone}</span>
            </td>
            <td>{$order->phone|escape}</td>
        </tr>
    {/if}
    {if $order->address}
        <tr>
            <td>
                <span data-language="order_address">{$lang->order_address}</span>
            </td>
            <td>{$order->address|escape}</td>
        </tr>
    {/if}
    {if $order->comment}
        <tr>
            <td>
                <span data-language="order_comment">{$lang->order_comment}</span>
            </td>
            <td>{$order->comment|escape|nl2br}</td>
        </tr>
    {/if}
    {if $delivery}
        <tr>
            <td>
                <span data-language="order_delivery">{$lang->order_delivery}</span>
            </td>
            <td>{$delivery->name|escape}</td>
        </tr>
    {/if}
</table>


{if !$order->paid}
    {* Payments *}
    <div class="h1">
        <span data-language="order_payment_details">{$lang->order_payment_details}</span>
    </div>

    {if $payment_methods && !$payment_method && $order->total_price>0}
        <form method="post" class="shadowbox">
            {foreach $payment_methods as $payment_method}
                <div class="delivery_item">
                    <label class="delivery_label{if $payment_method@first} active{/if}">
                        <input
                        id="payment_{$delivery->id}_{$payment_method->id}" class="visually_hidden"  type="radio" name="payment_method_id" value="{$payment_method->id}" {if $delivery@first && $payment_method@first} checked{/if} />

                        {if $payment_method->image}
                            <img src="{$payment_method->image|resize:50:25:false:$config->resized_payments_dir}"/>
                        {/if}

                        <span class="delivery_name">
                            {$total_price_with_delivery = $cart->total_price}
                            {if !$delivery->separate_payment && $cart->total_price < $delivery->free_from}
                                {$total_price_with_delivery = $cart->total_price + $delivery->price}
                            {/if}

                            {$payment_method->name|escape} {$lang->cart_deliveries_to_pay} <span class="nowrap">{$order->total_price|convert:$payment_method->currency_id} {$all_currencies[$payment_method->currency_id]->sign}</span>
                        </span>
                    </label>
                    <div class="delivery_description">
                        {$payment_method->description}
                    </div>
                </div>
            {/foreach}

            <div class="form_group">
                <input type="submit" data-language="cart_checkout" value="{$lang->cart_checkout}" name="checkout" class="button">
            </div>
        </form>
    {elseif $payment_method}
        {* Selected payment *}
        <div class="mb">
            <span data-language="order_payment">{$lang->order_payment}:</span>
            <span class="method_name">{$payment_method->name|escape}</span>

            <form class="method_form" method="post">
                <input class="button" type=submit name='reset_payment_method' data-language="order_change_payment" value='{$lang->order_change_payment}'/>
            </form>

            {if $payment_method->description}
                <div class="method_description">
                    {$payment_method->description}
                </div>
            {/if}

            {* Payment form is generated by payment module *}
            {checkout_form order_id=$order->id module=$payment_method->module}
        </div>
    {/if}
{/if}
