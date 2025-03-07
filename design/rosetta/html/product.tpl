{* Product page *}

{* The canonical address of the page *}
{$canonical="/products/{$product->url}" scope=parent}
<div class="breadnav clearfix">
    {include file="categories.tpl"}

    {include file='breadcrumb.tpl'}
</div>

<div class="fn_product product">

    {* The product name *}
    <h1 class="h1">
        <span data-product="{$product->id}">{$product->name|escape} {if $product->variants|count == 1 && !empty($product->variant->name)}({$product->variant->name|escape}){/if}</span>
    </h1>

    <div class="row fn_transfer">
        <div class="col-lg-9">
            <div class="row">
                <div class="col-sm-6 mb">
                    <div class="product_image">
                        {* Main product image *}
                        {if $product->image}
                            <a href="{$product->image->filename|resize:800:600:w}" data-fancybox="group" data-caption="{$product->name|escape}">
                                <img class="fn_img product_img"  src="{$product->image->filename|resize:300:300}" alt="{$product->name|escape}" title="{$product->name|escape}">
                            </a>
                        {else}
                            <img class="fn_img" src="design/{$settings->theme}/images/no_image.png" width="340" height="340" alt="{$product->name|escape}"/>
                        {/if}

                        {* Promo image *}
                        {if $product->special}
                            <img class="promo_img" alt='{$product->special}' title="{$product->special}"  src='files/special/{$product->special}'/>
                        {/if}
                    </div>

                    {* Additional product images *}
                    {if $product->images|count > 1}
                        <div class="fn_images images clearfix">
                            {* cut removes the first image, if you need start from the second - write cut:2 *}
                            {foreach $product->images|cut as $i=>$image}
                                <div class="images_item slick-slide">
                                    <a class="images_link" href="{$image->filename|resize:800:600:w}" data-fancybox="group" data-caption="{$product->name|escape} #{$image@iteration}">
                                        <img src="{$image->filename|resize:75:75}" alt="{$product->name|escape}"/>
                                    </a>
                                </div>
                            {/foreach}
                        </div>
                    {/if}
                </div>
                <div class="col-sm-6 mb">
                    <div class="product_details">
						<form class="fn_variants" action="/{$lang_link}cart">
							{* Product variants *}
							<select name="variant" class="fn_variant variant_select{if $product->variants|count < 2} hidden{/if}">
								{foreach $product->variants as $v}
									<option value="{$v->id}" data-price="{$v->price|convert}" data-stock="{$v->stock}"{if $v->compare_price > 0} data-cprice="{$v->compare_price|convert}"{/if}{if $v->sku} data-sku="{$v->sku|escape}"{/if} {if $v->units}data-units="{$v->units}"{/if}>{if $v->name}{$v->name|escape}{else}{$product->name|escape}{/if} {if $v->stock<1} - нет в наличии{/if}
</option>
								{/foreach}
							</select>

							{*  SKU (stock keeping unit) number *}
							<div class="sku{if !$product->variant->sku} hidden{/if}">
								<span class="prod_label" data-language="product_sku">{$lang->product_sku}:</span>
								<span class="fn_sku sku_nubmer">{$product->variant->sku|escape}</span>
							</div>

                            <div class="clearfix">
                                <div class="product_price">
                                    {* Old price *}
                                    <div class="old_price{if !$product->variant->compare_price} hidden{/if}">
                                        <span class="fn_old_price">{$product->variant->compare_price|convert}</span> {$currency->sign|escape}
                                    </div>

                                    {* Price *}
                                    <div class="price ">
                                        <span class="fn_price"content="{$product->variant->price|convert:'':false}">{$product->variant->price|convert}</span>
                                        <span content="{$currency->code|escape}">{$currency->sign|escape}</span>
                                    </div>

                                    {if !$settings->is_preorder}
                                        {* No stock *}
                                        <div class="fn_not_preorder {if $product->variant->stock > 0} hidden{/if}">
                                            <button class="disable_button" type="button" data-language="product_out_of_stock">{$lang->product_out_of_stock}</button>
                                        </div>
                                    {else}
                                        {* Preorder *}
                                        <button class="button product_button fn_is_preorder{if $product->variant->stock > 0} hidden{/if}" type="submit" data-language="product_pre_order">{$lang->product_pre_order}</button>
                                    {/if}

                                    {* Submit button *}
                                    <button class="fn_is_stock button product_button{if $product->variant->stock < 1} hidden{/if}" type="submit" data-language="product_add_cart">{$lang->product_add_cart}</button>

                                    {* Schema.org *}
                                    <span class="hidden">
                                        <time datetime="{$product->created|date:'Ymd'}"></time>
                                        {if $product->variant->stock > 0}
                                        <link href="https://schema.org/InStock" />
                                        {else}
                                        <link href="http://schema.org/OutOfStock" />
                                        {/if}
                                        <link href="https://schema.org/NewCondition" />
                                        <span>
                                        <span>{$settings->company_name}</span></span>
                                    </span>
                                </div>

                                <div class="product_block">
                                    {* Quantity *}
                                    <div class="amount fn_product_amount fn_is_stock{if $product->variant->stock < 1} hidden{/if}">
                                        <span class="minus">&minus;</span>
                                        <input class="input_amount" type="text" name="amount" value="1" data-max="{$product->variant->stock}">
                                        <span class="plus">&plus;</span>
                                    </div>

                                    <div class="product_buttons">
                                        {* Comparison *}
                                        {if !in_array($product->id,$comparison->ids)}
                                            <a class="fn_comparison product_compare" href="#" data-id="{$product->id}" title="{$lang->product_add_comparison}" data-result-text="{$lang->product_remove_comparison}" data-language="product_add_comparison"><i></i></a>
                                        {else}
                                            <a class="fn_comparison selected product_compare" href="#" data-id="{$product->id}" title="{$lang->product_remove_comparison}" data-result-text="{$lang->product_add_comparison}" data-language="product_remove_comparison"><i></i></a>
                                        {/if}

                                        {* Wishlist *}
                                        {if $product->id|in_array:$wished_products}
                                            <a href="#" data-id="{$product->id}" class="fn_wishlist selected product_wish" title="{$lang->product_remove_favorite}" data-result-text="{$lang->product_add_favorite}" data-language="product_remove_favorite"><i></i></a>
                                        {else}
                                            <a href="#" data-id="{$product->id}" class="fn_wishlist product_wish" title="{$lang->product_add_favorite}" data-result-text="{$lang->product_remove_favorite}" data-language="product_add_favorite"><i></i></a>
                                        {/if}
                                    </div>
                                </div>
                            </div>
                        </form>

                        {* Product Rating *}
                        <div id="product_{$product->id}" class="product_rating">

                            <span class="rating_starOff">
                                <span class="rating_starOn" style="width:{$product->rating*90/5|string_format:'%.0f'}px;"></span>
                            </span>
                            <span class="rating_text"></span>

                            {*Вывод количества голосов данного товара, скрыт ради микроразметки*}
                            {if $product->rating > 0}
                                <span class="hidden">{$product->votes|string_format:"%.0f"}</span>
                                <span class="hidden">({$product->rating|string_format:"%.1f"})</span>
                                {*Вывод лучшей оценки товара для микроразметки*}
                                <span class="hidden" style="display:none;">5</span>
                            {else}
                                <span class="hidden">({$product->rating|string_format:"%.1f"})</span>
                            {/if}
                        </div>

                        {* Share buttons *}
                        <div class="share product_share">
                        	<a class="fb" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={$config->root_url}{if $lang_link}/{str_replace('/', '', $lang_link)}{/if}{$canonical}">{include file="svg.tpl" svgId="fb"}</a>

                        	<a class="tw" target="_blank" href="http://twitter.com/intent/tweet?url={$config->root_url}{if $lang_link}/{str_replace('/', '', $lang_link)}{/if}{$canonical}&text={str_replace(' ', '+', $product->name|escape)}">{include file="svg.tpl" svgId="tw"}</a>

                        	<a class="tg" target="_blank" href="https://telegram.me/share/url?url={$config->root_url}{if $lang_link}/{str_replace('/', '', $lang_link)}{/if}{$canonical}&title={str_replace(' ', '+', $product->name|escape)}">{include file="svg.tpl" svgId="tg"}</a>

                          <a class="gp" target="_blank" href="https://plus.google.com/share?url={$config->root_url}{if $lang_link}/{str_replace('/', '', $lang_link)}{/if}{$canonical}&title={str_replace(' ', '+', $product->name|escape)}">{include file="svg.tpl" svgId="gp"}</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 tablet-hidden">
            {* Delivery *}
            <div class="info_delivery">
                <div class="info_h">
                    <span data-language="product_delivery">{$lang->product_delivery}</span>
                </div>
                <p data-language="product_delivery_1">{$lang->product_delivery_1}</p>
                <p data-language="product_delivery_2">{$lang->product_delivery_2}</p>
                <p data-language="product_delivery_3">{$lang->product_delivery_5}</p>
                <p data-language="product_delivery_3">{$lang->product_delivery_3}</p>
                <p data-language="product_delivery_4">{$lang->product_delivery_4}</p>
            </div>

            {* Payments *}
            <div class="info_payment fn_col">
                <div class="info_h">
                    <span data-language="product_payment">{$lang->product_payment}</span>
                </div>
                <p data-language="product_payment_1">{$lang->product_payment_1}</p>
                <p data-language="product_payment_2">{$lang->product_payment_2}</p>
                <p data-language="product_payment_3">{$lang->product_payment_3}</p>
                <p data-language="product_payment_3">{$lang->product_payment_4}</p>
            </div>
        </div>

    </div>

    <div class="tabs clearfix">
        <div class="tab_navigation">
            {if $product->description}
                <a href="#description" data-language="product_description">{$lang->product_description}</a>
            {/if}

            {if $product->features}
                <a href="#features" data-language="product_features">{$lang->product_features}</a>
            {/if}

            <a href="#comments" data-language="product_comments">{$lang->product_comments}</a>
        </div>

        <div class="tab_container">
            {if $product->description}
                <div id="description" class="tab product_description">
                    {$product->description}
                </div>
            {/if}

            {if $product->features}
                <div id="features" class="tab">
                    <ul class="features">
                        {foreach $product->features as $f}
                            <li>
                                <span class="features_name"><span>{$f->name|escape}</span></span>
                                <span class="features_value">{$f->value|escape}</span>
                            </li>
                        {/foreach}
                    </ul>
                </div>
            {/if}

            {* Comments *}
            <div id="comments" class="tab">
                <div class="row">
                    <div class="col-lg-7">
                        {if $comments}
                            {function name=comments_tree level=0}
                                {foreach $comments as $comment}

                                    {* Comment anchor *}
                                    <a name="comment_{$comment->id}"></a>

                                    {* Comment list *}
                                    <div class="comment_item{if $level > 0} admin_note{/if}">

                                        <div class="comment_header">
                                            {* Comment name *}
                                            <span class="comment_author">{$comment->name|escape}</span>
                                            {* Comment date *}
                                            <span class="comment_date">{$comment->date|date}, {$comment->date|time}</span>
                                            {* Comment status *}
                                            {if !$comment->approved}
                                                <span data-language="post_comment_status">({$lang->post_comment_status})</span>
                                            {/if}
                                        </div>

                                        {* Comment content *}
                                        <div class="comment_content">
                                            {$comment->text|escape|nl2br}
                                        </div>
                                        {if isset($children[$comment->id])}
                                            {comments_tree comments=$children[$comment->id] level=$level+1}
                                        {/if}
                                    </div>
                                {/foreach}
                            {/function}
                            {comments_tree comments=$comments}
                        {else}
                            <div class="no_comments">
                                <span data-language="product_no_comments">{$lang->product_no_comments}</span>
                            </div>
                        {/if}
                    </div>

                    <div class="col-lg-5">
                        {* Comment form *}
                        <form class="comment_form fn_validate_product" method="post">

                            <div class="h3">
                                <span data-language="product_write_comment">{$lang->product_write_comment}</span>
                            </div>

                            {* Form error messages *}
                            {if $error}
                                <div class="message_error">
                                    {if $error=='captcha'}
                                        <span data-language="form_error_captcha">{$lang->form_error_captcha}</span>
                                    {elseif $error=='empty_name'}
                                        <span data-language="form_enter_name">{$lang->form_enter_name}</span>
                                    {elseif $error=='empty_comment'}
                                        <span data-language="form_enter_comment">{$lang->form_enter_comment}</span>
                                    {elseif $error=='empty_email'}
                                        <span data-language="form_enter_email">{$lang->form_enter_email}</span>
                                    {/if}
                                </div>
                            {/if}

                            <div class="row">
                                {* User's name *}
                                <div class="col-lg-6 form_group">
                                    <input class="form_input" type="text" name="name" value="{$comment_name|escape}" placeholder="{$lang->form_name}*"/>
                                </div>

                                {* User's email *}
                                <div class="col-lg-6 form_group">
                                    <input class="form_input" type="text" name="email" value="{$comment_email|escape}" data-language="form_email" placeholder="{$lang->form_email}"/>
                                </div>
                            </div>

                            {* User's comment *}
                            <div class="form_group">
                                <textarea class="form_textarea" rows="3" name="text" placeholder="{$lang->form_enter_comment}*">{$comment_text}</textarea>
                            </div>

                            {* Captcha *}
                            {if $settings->captcha_product}
                                {get_captcha var="captcha_product"}
                                <div class="captcha">
                                    <div class="secret_number">{$captcha_product[0]|escape} + ? =  {$captcha_product[1]|escape}</div>
                                    <input class="form_input input_captcha" type="text" name="captcha_code" value="" placeholder="{$lang->form_enter_captcha}*"/>
                                </div>
                            {/if}

                            {* Submit button *}
                            <input class="button" type="submit" name="comment" data-language="form_send" value="{$lang->form_send}"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


{* Related products *}
{if $related_products}
    <div class="h1">
        <span data-language="product_recommended_products">{$lang->product_recommended_products}</span>
    </div>

    <div class="fn_slider_products slider_products related clearfix">
        {foreach $related_products as $p}
            <div class="products_item slick-slide">
                {include "product_list.tpl" product = $p}
            </div>
        {/foreach}
    </div>
{/if}


{* Related products *}
{if $recommended_products}
    <div class="h1">
        <span data-language="product_recommended_products">{$lang->product_recommended_new_products}</span>
    </div>

    <div class="fn_slider_products slider_products related clearfix">
        {foreach $recommended_products as $p}
            <div class="products_item slick-slide">
                {include "product_list.tpl" product = $p}
            </div>
        {/foreach}
    </div>
{/if}


{if $related_posts}
    <div class="h1">
        <span data-language="product_related_post">{$lang->product_related_post}</span>
    </div>
    <div class="blog clearfix">
        {foreach $related_posts as $r_p}
            <div class="blog_item no_padding col-sm-6 col-md-4 col-lg-3">

                {* The post image *}
                <a class="blog_image" href="{$lang_link}{$r_p->type_post}/{$r_p->url}">
                    {if $r_p->image}
                        <img class="blog_img" src="{$r_p->image|resize:360:360:false:$config->resized_blog_dir}" />
                    {/if}
                </a>

                <div class="blog_content">
                    {* The post date *}
                    <div class="blog_date">
                        <span>{$r_p->date|date}</span>
                    </div>

                    {* The post name *}
                    <div class="4">
                        <a href="{$lang_link}{$r_p->type_post}/{$r_p->url}" data-post="{$r_p->id}">{$r_p->name|escape}</a>
                    </div>
                </div>
            </div>
        {/foreach}
    </div>
{/if}

{*микроразметка по схеме JSON-LD*}
{literal}
<script type="application/ld+json">
{
"@context": "http://schema.org/",
"@type": "Product",
"name": "{/literal}{$product->name|escape}{literal}",
"image": "{/literal}{$product->image->filename|resize:330:300}{literal}",
"description": "{/literal}{str_replace(array("\r", "\n"), "", $product->annotation|strip_tags|escape)}{literal}",
"mpn": "{/literal}{if $product->variant->sku}{$product->variant->sku|escape}{else}Не указано{/if}{literal}",
{/literal}
{if $brand->name}
{literal}
"brand": {
"@type": "Brand",
"name": "{/literal}{$brand->name|escape}{literal}"
},
{/literal}
{/if}
{if $product->rating > 0}
{literal}
"aggregateRating": {
"@type": "AggregateRating",
"ratingValue": "{/literal}{$product->rating|string_format:'%.1f'}{literal}",
"ratingCount": "{/literal}{$product->votes|string_format:'%.0f'}{literal}"
},
{/literal}
{/if}
{literal}
"offers": {
"@type": "Offer",
"priceCurrency": "{/literal}{$currency->code|escape}{literal}",
"price": "{/literal}{$product->variant->price|convert:null:false}{literal}",
"priceValidUntil": "{/literal}{"+1 year"|date_format:"%d-%m-%Y"}{literal}",
"itemCondition": "http://schema.org/NewCondition",
{/literal}
{if $product->variant->stock > 0}
{literal}
"availability": "http://schema.org/InStock",
{/literal}
{else}
{literal}
"availability": "http://schema.org/OutOfStock",
{/literal}
{/if}
{literal}
"seller": {
"@type": "Organization",
"name": "{/literal}{$settings->company_name|escape}{literal}"
}
}
}
</script>
{/literal}
