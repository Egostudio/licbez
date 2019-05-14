<nav class="fn_mobile_nav mobile_nav">
    <div class="mobile_nav_header">
        {* Logo *}
        <a class="logo" {if $smarty.get.module != 'MainView'}href="{$lang_link}"{/if}>
            <img class="responsive_img" src="design/{$settings->theme|escape}/images/{$settings->site_logo}" alt="{$settings->site_name|escape}"/>
        </a>
        {*Если вам нужно загружать разные логотипы на разных языках, закомментируйте код выше, и пользуйтесь кодом ниже*}
        {*<a class="logo" {if $smarty.get.module != 'MainView'}href="{$lang_link}"{/if}>
            <img class="responsive_img" src="design/{$settings->theme|escape}/images/logo{if $language->label}_{$language->label}{/if}.png" alt="{$settings->site_name|escape}"/>
        </a>*}

        <div class="mobile_account">
            {if $user}
                {* User account *}
                <a class="mobile_account_link user_mobile" href="{$lang_link}user">
                    <span>{$user->name|escape}</span>
                </a>
                {* Logout *}
                <a class="mobile_account_link" href="{$lang_link}user/logout" data-language="index_logout">{$lang->index_logout}</a>
            {else}
                {* Login *}
                <a class="mobile_account_link" href="{$lang_link}user/login" title="{$lang->index_login}">
                    <span data-language="index_login_small">{$lang->index_login_small}</span>
                </a>
                {* Link to registration *}
                <a class="mobile_account_link" href="{$lang_link}user/register"  data-language="index_registration">{$lang->index_registration}</a>
            {/if}
        </div>
    </div>

    <ul class="mobile_menu">
        {* Main menu *}
        {foreach $pages as $p}
            {if $p->menu_id == 1}
                <li>
                    <a class="mobile_menu_link{if $page->id == $p->id} selected{/if}" data-page="{$p->id}" href="{$lang_link}{$p->url}">{$p->name|escape}</a>
                </li>
            {/if}
        {/foreach}

        <li>
            <a class="mobile_menu_link" href="{$lang_link}all-products" data-language="menu_catalog">{$lang->menu_catalog}</a>
        </li>

        <li>
            <a class="mobile_menu_link" href="{$lang_link}discounted" data-language="menu_discount">{$lang->menu_discount}</a>
        </li>

        {* Wishlist informer *}
        <li id="wishlist">
            {include file="wishlist_informer.tpl"}
        </li>

        {* Comparison informer *}
        <li id="comparison">
            {include "comparison_informer.tpl"}
        </li>

        {* Languages *}
        {if $languages|count > 1}
            {$cnt = 0}
            {foreach $languages as $ln}
                {if $ln->enabled}
                    {$cnt = $cnt+1}
                {/if}
            {/foreach}
            {if $cnt>1}
                <li class="mobile_languages clearfix">
                    {foreach $languages as $l}
                        {if $l->enabled}
                            {if $language->id == $l->id}
                                <span class="language">{$l->label}</span>
                           {else}
                                <a class="language" href="{$l->url}">{$l->label}</a>
                           {/if}
                        {/if}
                    {/foreach}
                </li>
            {/if}
        {/if}

        {* Currencies *}
        {if $currencies|count > 1}
            <li class="mobile_currencies clearfix">
                {foreach $currencies as $c}
                    {if $c->enabled}
                        {if $currency->id== $c->id}
                            <span class="currency">{$c->sign}</span>
                        {else}
                            <a class="currency" href="{url currency_id=$c->id}">{$c->sign}</a>
                        {/if}
                    {/if}
                {/foreach}
            </li>
        {/if}
    </ul>
</nav>


<header class="mobile_header clearfix">
    {* Main menu toggle button*}
    <div class="fn_menu_switch menu_switch">
        <svg class="menu_icon" width="24px" height="14px" viewBox="0 0 24 14"  version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g>
                <rect fill="currentColor" class="bar" x="0" y="12" width="24" height="2"></rect>
                <rect fill="currentColor" class="bar" x="0" y="6" width="24" height="2"></rect>
                <rect fill="currentColor" class="bar" x="0" y="0" width="24" height="2"></rect>
            </g>
        </svg>
    </div>

    {* Cart informer*}
    <div id="cart_informer" class="header_cart">
        {include file='cart_informer.tpl'}
    </div>

    {* Search form *}
    <form id="fn_search" class="mobile_search" action="{$lang_link}all-products">
        <input class="fn_search search_input" type="text" name="keyword" value="{$keyword|escape}" data-language="index_search" placeholder="{$lang->index_search}"/>
        <button class="mobile_search_button" type="submit">
            <svg class="search_icon" version="1.1" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                <path fill="currentColor"  d="M8.333 0.833q1.523 0 2.913 0.596t2.393 1.598 1.598 2.393 0.596 2.913q0 1.309-0.426 2.507t-1.214 2.174l4.733 4.727q0.241 0.241 0.241 0.592 0 0.358-0.238 0.596t-0.596 0.238q-0.352 0-0.592-0.241l-4.727-4.733q-0.977 0.788-2.174 1.214t-2.507 0.426q-1.523 0-2.913-0.596t-2.393-1.598-1.598-2.393-0.596-2.913 0.596-2.913 1.598-2.393 2.393-1.598 2.913-0.596zM8.333 2.5q-1.185 0-2.266 0.462t-1.862 1.243-1.243 1.862-0.462 2.266 0.462 2.266 1.243 1.862 1.862 1.243 2.266 0.462 2.266-0.462 1.862-1.243 1.243-1.862 0.462-2.266-0.462-2.266-1.243-1.862-1.862-1.243-2.266-0.462z"></path>
            </svg>
        </button>
    </form>
</header>
