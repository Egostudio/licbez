{* Breadcrumb navigation *}
{if $module != "MainView"}
{if $smarty.get.module == "ProductsView"}
{assign var=position value=2}
{literal}
<script type="application/ld+json">
  {
    "@context":"http://schema.org/",
    "@type":"BreadcrumbList",
    "itemListElement":[
      {
        "@type":"ListItem",
        "position":1,
        "item":
        {
          "@id":"{/literal}{if !empty($lang_link)}{$lang_link}{else}{$config->root_url}{/if}{literal}",
          "name":"{/literal}{$lang->breadcrumb_home}{literal}"
        }
      }{/literal}{if $category->path|@count > 1},{/if}{literal}
{/literal}
    {if $category && !$keyword}
        {foreach from=$category->path item=cat}
        {if !$cat@last}
            {if $cat->visible}
{literal}
            {
              "@type":"ListItem",
              "position":{/literal}{$position}{literal},
              "item":
              {
                "@id":"{/literal}{$config->root_url}/{$lang_link}category/{$cat->url}{literal}",
                "name":"{/literal}{$cat->name|escape}{literal}"
              }
            }{/literal}{if $category->path|@count > $position },{/if}{literal}
{/literal}
{assign "position" $position+1}
            {/if}
        {/if}
        {/foreach}
    {/if}
{literal}
  ]
}
</script>
{/literal}
{elseif $smarty.get.module == "ProductView"}
        {assign var=position value=2}
{literal}
<script type="application/ld+json">
  {
     "@context":"http://schema.org/",
     "@type":"BreadcrumbList",
     "itemListElement":[
     {
        "@type":"ListItem",
         "position":1,
          "item":
           {
              "@id":"{/literal}{if !empty($lang_link)}{$lang_link}{else}{$config->root_url}{/if}{literal}",
               "name":"{/literal}{$lang->breadcrumb_home}{literal}"
           }
     },
{/literal}
     {if $category && !$keyword}
        {foreach from=$category->path item=cat}
            {if $cat->visible}
{literal}
            {
              "@type":"ListItem",
              "position":{/literal}{$position}{literal},
              "item":
              {
                    "@id":"{/literal}{$config->root_url}/{$lang_link}category/{$cat->url}{literal}",
                    "name":"{/literal}{$cat->name|escape}{literal}"
              }
            }{/literal}{if ($category->path|@count +1 ) > $position },{/if}{literal}
{/literal}
{assign "position" $position+1}
            {/if}
        {/foreach}
    {/if}
{literal}
          ]
        }
        </script>
{/literal}

{/if}
    <ol class="breadcrumbs ">

        {* The link to the homepage *}
        <li>
            <a href="{if !empty($lang_link)}{$lang_link}{else}{$config->root_url}{/if}" data-language="breadcrumb_home">
                <span>{$lang->breadcrumb_home}</span>
            </a>
        </li>

        {* Categories page *}
        {if $smarty.get.module == "ProductsView"}
            {if $category && !$keyword}
                {foreach from=$category->path item=cat}
                    {if !$cat@last}
                        {if $cat->visible}
                            <li>
                                <a href="{$lang_link}category/{$cat->url}">
                                    <span >{$cat->name|escape}</span>
                                </a>
                            </li>
                        {/if}
                    {else}
                        <li><span>{$cat->name|escape}</span></li>
                    {/if}
                {/foreach}
            {elseif $brand}
                <li>
                    <a href="{$lang_link}brands" data-language="breadcrumb_brands">
                        <span>{$lang->breadcrumb_brands}</span>
                    </a>
                </li>
                <li><span>{$brand->name|escape}</span></li>
            {elseif $keyword}
                <li data-language="breadcrumb_search"><span>{$lang->breadcrumb_search}</span></li>
            {else}
                <li><span>{$page->name|escape}</span></li>
            {/if}

        {* Brand list page *}
        {elseif $smarty.get.module == "BrandsView"}
            <li><span>{$page->name|escape}</span></li>

        {* Product page *}
        {elseif $smarty.get.module == "ProductView"}
            {foreach from=$category->path item=cat}
                {if $cat->visible}
                    <li>
                        <a href="{$lang_link}category/{$cat->url}">
                            <span>{$cat->name|escape}</span>
                        </a>
                    </li>
                {/if}
            {/foreach}
            <li><span>{$product->name|escape}</span></li>

        {* Page *}
        {elseif $smarty.get.module == "FeedbackView" || $smarty.get.module == "PageView"}
            <li><span>{$page->name|escape}</span></li>

        {* Cart page *}
        {elseif $smarty.get.module == "CartView"}
            <li data-language="breadcrumb_cart"><span>{$lang->breadcrumb_cart}</span></li>

        {* Order page *}
        {elseif $smarty.get.module == "OrderView"}
            <li data-language="breadcrumb_order"><span>{$lang->breadcrumb_order} {$order->id}</span></li>

        {* Password remind page *}
        {elseif $smarty.get.module == "LoginView" && $smarty.get.action == "password_remind"}
            <li data-language="breadcrumbs_password_remind"><span>{$lang->breadcrumbs_password_remind}</span></li>

        {* Login page *}
        {elseif $smarty.get.module == "LoginView"}
            <li data-language="breadcrumbs_enter"><span>{$lang->breadcrumbs_enter}</span></li>

        {* Register page *}
        {elseif $smarty.get.module == "RegisterView"}
            <li data-language="breadcrumbs_registration"><span>{$lang->breadcrumbs_registration}</span></li>

        {* User account page *}
        {elseif $smarty.get.module == "UserView"}
            <li data-language="breadcrumbs_user"><span>{$lang->breadcrumbs_user}</span></li>

        {* Blog page *}
        {elseif $smarty.get.module == "BlogView"}
            {if $smarty.get.url}
                <li>
                    <a href="{$lang_link}{$smarty.get.type_post}" data-language="breadcrumbs_blog">
                        <span>
                            {if $smarty.get.type_post == "news"}
                                {$lang->main_news}
                            {else}
                                {$lang->breadcrumbs_blog}
                            {/if}
                        </span>
                    </a>
                </li>
                <li>
                    <span>{$post->name|escape}</span>
                </li>
            {else}
                <li data-language="breadcrumbs_blog">
                    {if $smarty.get.type_post == "news"}
                        {$lang->main_news}
                    {else}
                        {$lang->breadcrumbs_blog}
                    {/if}
                </li>
            {/if}
        {elseif $smarty.get.module == 'ComparisonView'}
            <li data-language="breadcrumb_comparison">{$lang->breadcrumb_comparison}</li>
        {elseif $smarty.get.module == 'WishlistView'}
            <li data-language="breadcrumb_wishlist">{$lang->breadcrumb_wishlist}</li>
        {/if}
    </ol>
{/if}
