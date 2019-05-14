{* Post page *}

{* The canonical address of the page *}
{if $smarty.get.type_post == "blog"}
    {$canonical="/blog/{$post->url}" scope=parent}
{else}
    {$canonical="/news/{$post->url}" scope=parent}
{/if}

{* The page heading *}
<h1 class="h1">
    <span data-post="{$post->id}">{$post->name|escape}</span>
</h1>

<div class="mb">
    {* Post date *}
    <div class="post_date">
        <span>{$post->date|date}</span>
    </div>

    {* Post content *}
    {$post->description}

    {* Social share *}
    <div class="share post_share">
        <a class="fb" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={$config->root_url}{if $lang_link}/{str_replace('/', '', $lang_link)}{/if}{$canonical}">{include file="svg.tpl" svgId="fb"}</a>

        <a class="tw" target="_blank" href="http://twitter.com/intent/tweet?url={$config->root_url}{if $lang_link}/{str_replace('/', '', $lang_link)}{/if}{$canonical}&text={str_replace(' ', '+', $post->name)}">{include file="svg.tpl" svgId="tw"}</a>

        <a class="vk" target="_blank" href="https://vk.com/share.php?url={$config->root_url}{if $lang_link}/{str_replace('/', '', $lang_link)}{/if}{$canonical}">{include file="svg.tpl" svgId="vk"}</a>

        <a class="tg" target="_blank" href="https://telegram.me/share/url?url={$config->root_url}{if $lang_link}/{str_replace('/', '', $lang_link)}{/if}{$canonical}&title={str_replace(' ', '+', $post->name)}">{include file="svg.tpl" svgId="tg"}</a>
    </div>
</div>

<div class="h1">
    <span data-language="post_comments">{$lang->post_comments}</span>
</div>

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
        <span data-language="post_no_comments">{$lang->post_no_comments}</span>
    </div>
{/if}

<div class="h2">
    <span data-language="post_write_comment">{$lang->post_write_comment}</span>
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

{* Comment form *}
<form id="fn_blog_comment" class="fn_validate_post shadowbox"  method="post" action="">
    <div class="row">
        {* User's name *}
        <div class="col-md-6 form_group">
            <label class="label_block required">{$lang->form_name}</label>
            <input class="form_input" type="text" name="name" value="{$comment_name|escape}">
        </div>

        {* User's email *}
        <div class="col-md-6 form_group">
            <label class="label_block">{$lang->form_email}</label>
            <input class="form_input" type="text" name="email" value="{$comment_email|escape}"/>
        </div>
    </div>

    {* User's comment *}
    <div class="form_group">
        <label class="label_block required">{$lang->form_enter_comment}</label>
        <textarea class="form_textarea" rows="5" name="text">{$comment_text}</textarea>
    </div>

    {* Captcha *}
    {if $settings->captcha_post}
        {get_captcha var="captcha_post"}
        <div class="captcha">
            <div class="secret_number">{$captcha_post[0]|escape} + ? =  {$captcha_post[1]|escape}</div>
            <input class="form_input input_captcha" type="text" name="captcha_code" value="" placeholder="{$lang->form_enter_captcha}*">
        </div>
    {/if}

    {* Submit button *}
    <input class="button" type="submit" name="comment" data-language="form_send" value="{$lang->form_send}">
</form>


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
