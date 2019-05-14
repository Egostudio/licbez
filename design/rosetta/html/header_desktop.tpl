<header class="header">
    {* Promo-Banner *}
    {get_banner var=banner_top_banner group=top_banner}
    {if $banner_top_banner->items}
        <div class="fn_top_banner top_banner center">
            {foreach $banner_top_banner->items as $bi}
            <div>
                {if $bi->url}
                    <a href="{$bi->url}" target="_blank">
                {/if}
                {if $bi->image}
                    <img src="{$config->banners_images_dir}{$bi->image}" alt="{$bi->alt}" title="{$bi->title}"/>
                {/if}
                {if $bi->url}
                </a>
                {/if}
            </div>
            {/foreach}
        </div>
    {/if}

    <div class="container">
        <nav class="header_nav tablet-hidden">
            <div class="clearfix">
                {* Phones *}
                <div class="header_phones">
                    <a class="header_phone nowrap" href="tel:{str_replace([' ','-','(',')'], ['','','',''], $lang->company_phone_1)}" data-language="company_phone_1" >{$lang->company_phone_1},</a>
                    <a class="header_phone nowrap" href="tel:{str_replace([' ','-','(',')'], ['','','',''], $lang->company_phone_2)}" data-language="company_phone_2" >{$lang->company_phone_2}</a>
                    {* Callback *}
                    <a class="fn_callback header_callback" href="#fn_callback" data-language="index_back_call"><span>{$lang->index_back_call}</span></a>
                </div>

                {* Languages *}
                {if $languages|count > 1}
                    {$cnt = 0}
                    {foreach $languages as $ln}
                        {if $ln->enabled}
                            {$cnt = $cnt+1}
                        {/if}
                    {/foreach}
                    {if $cnt>1}
                        <div class="header_languages">
                            {foreach $languages as $l}
                                {if $l->enabled}
                                    {if $language->id == $l->id}
                                        <span class="language">{$l->label}</span>
                                   {else}
                                        <a class="language" href="{$l->url}">{$l->label}</a>
                                   {/if}
                                {/if}
                            {/foreach}
                        </div>
                    {/if}
                {/if}

                {* Currencies *}
                {if $currencies|count > 1}
                    <div class="header_currencies">
                        {foreach $currencies as $c}
                            {if $c->enabled}
                                {if $currency->id== $c->id}
                                    <span class="currency">{$c->sign}</span>
                                {else}
                                    <a class="currency" href="{url currency_id=$c->id}">{$c->sign}</a>
                                {/if}
                            {/if}
                        {/foreach}
                    </div>
                {/if}

                 {if $user}
                     {* User account *}
                     <a class="header_account" href="{$lang_link}user">
                         <span>{$user->name|escape}</span>
                     </a>
                 {else}
                     {* Login *}
                     <a class="header_account" href="{$lang_link}user/login" title="{$lang->index_login}">
                         <span data-language="index_login">{$lang->index_login}</span>
                     </a>
                 {/if}
            </div>

            {* Main menu *}
            <ul class="header_menu">
                {foreach $pages as $p}
                    {if $p->menu_id == 1}
                        <li class="header_menu_item">
                            <a data-page="{$p->id}" href="{$lang_link}{$p->url}">{$p->name|escape}</a>
                        </li>
                    {/if}
                {/foreach}
            </ul>
        </nav>

        <div class="header_info clearfix">
            {* Logo *}
            <a class="logo" {if $smarty.get.module != 'MainView'}href="{$lang_link}"{/if}>
                <img class="responsive_img" src="design/{$settings->theme|escape}/images/{$settings->site_logo}" alt="{$settings->site_name|escape}"/>
            </a>
            {*Если вам нужно загружать разные логотипы на разных языках, закомментируйте код выше, и пользуйтесь кодом ниже*}
            {*<a class="logo" {if $smarty.get.module != 'MainView'}href="{$lang_link}"{/if}>
                <img class="responsive_img" src="design/{$settings->theme|escape}/images/logo{if $language->label}_{$language->label}{/if}.png" alt="{$settings->site_name|escape}"/>
            </a>*}

            {* Cart informer*}
             <div id="cart_informer" class="header_cart">
                 {include file='cart_informer.tpl'}
             </div>

            {* Wishlist informer *}
            <div id="wishlist" class="header_wish tablet-hidden">
                {include file="wishlist_informer.tpl"}
            </div>

            {* Comparison informer *}
            <div id="comparison" class="header_compare tablet-hidden">
                {include "comparison_informer.tpl"}
            </div>

            {* Search form *}
            <form id="fn_search" class="search" action="{$lang_link}all-products">
                <input class="fn_search search_input" type="text" name="keyword" value="{$keyword|escape}" data-language="index_search" placeholder="{$lang->index_search}"/>
                <button class="button search_button" type="submit">{$lang->index_search_button}</button>
            </form>
        </div>
    </div>
</header>
