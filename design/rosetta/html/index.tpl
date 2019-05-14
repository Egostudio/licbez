<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru-UA" lang="ru-UA">
<head>
 <meta name="robots" content="noindex, nofollow" />
  <!-- Global site tag (gtag.js) - Google Analytics -->
  {literal}
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-117913367-1"></script>
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-117913367-1');
  </script>
  {/literal}

      {* Full base address *}
      <base href="{$config->root_url}/">

      {* Title *}
      <title>{$meta_title|escape}</title>

      {* Meta tags *}
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

      {if (!empty($meta_description) || !empty($meta_keywords) || !empty($filter_meta->description) || !empty($filter_meta->keywords)) && !$smarty.get.page}
          <meta name="description" content="{$meta_description|escape}">
          <meta name="keywords" content="{$meta_keywords|escape}">
      {/if}

      <meta name="referrer" content="origin">

      {if $module == 'ProductsView'}
          {if $set_canonical}
              <meta name="robots" content="noindex,nofollow">
          {elseif $smarty.get.page || $smarty.get.sort}
              <meta name="robots" content="noindex,follow">
          {elseif isset($smarty.get.keyword)}
              <meta name="robots" content="noindex,follow">
          {else}
              <meta name="robots" content="index,follow">
          {/if}
      {elseif $smarty.get.module == "RegisterView" || $smarty.get.module == "LoginView" || $smarty.get.module == "UserView" || $smarty.get.module == "CartView"}
          <meta name="robots" content="noindex,follow">
      {elseif $smarty.get.module == "OrderView"}
          <meta name="robots" content="noindex,nofollow">
      {else}
          <meta name="robots" content="index,follow">
      {/if}

      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      {if $settings->g_webmaster}
          <meta name="google-site-verification" content="{$settings->g_webmaster}">
      {/if}

      {if $settings->y_webmaster}
          <meta name='yandex-verification' content="{$settings->y_webmaster}">
      {/if}

      {* rel prev next для блога *}
      {if $smarty.get.module == "BlogView" && $total_pages_num > 1}
          {if $current_page_num == $total_pages_num}
              {if $current_page_num == 2}
                  <link rel="prev" href="{url page=null}"/>
              {else}
                  <link rel="prev" href="{url page=$current_page_num-1}"/>
              {/if}
          {elseif $current_page_num == 1}
              <link rel="next" href="{url page=2}"/>
          {else}
              {if $current_page_num == 2}
                  <link rel="prev" href="{url page=null}"/>
              {else}
                  <link rel="prev" href="{url page=$current_page_num-1}"/>
              {/if}
              <link rel="next" href="{url page=$current_page_num+1}"/>
          {/if}
      {/if}

      {* rel prev next для каталога товаров *}
      {$rel_prev_next}

      {* Product image/Post image for social networks *}
          <meta property="og:locale" content="ru_UA" />
          <meta property="og:type" content="website" />
          <meta property="og:site_name" content="{$settings->site_name|escape}">
          <meta property="og:title" content="{$meta_title|escape}">
          <meta property="og:description" content="{$meta_description|escape}">
      {if $module == 'ProductView'}
          <meta property="og:url" content="{$config->root_url}{if $lang_link}/{str_replace('/', '', $lang_link)}{/if}{$canonical}">
          <meta property="og:image" content="{$product->image->filename|resize:330:300}">
      {elseif $module == 'BlogView'}
          <meta property="og:url" content="{$config->root_url}{if $lang_link}/{str_replace('/', '', $lang_link)}{/if}{$canonical}">
          {if $post->image}
          <meta property="og:image" content="{$post->image|resize:400:300:false:$config->resized_blog_dir}">
          {else}
          <meta property="og:image" content="{$config->root_url}/design/{$settings->theme}/images/{$settings->site_logo}">
          {/if}
      {else}
          <meta property="og:url" content="{$config->root_url}">
          <meta property="og:image" content="{$config->root_url}/design/{$settings->theme}/images/{$settings->site_logo}">
      {/if}
          <meta property="og:fb:app_id" content="1358607630886611" />

      {* The canonical address of the page *}
      {if isset($canonical)}
          <link rel="canonical" href="{$config->root_url}{if $lang_link}/{str_replace('/', '', $lang_link)}{/if}{$canonical}">
      {elseif $smarty.get.sort}
          <link rel="canonical" href="{$sort_canonical}">
      {/if}

      {* Language attribute *}
      {if !$hide_alternate}
          {foreach $languages as $l}
              {if $l->enabled}
                  <link rel="alternate" href="{$config->root_url}/{$l->url}" hreflang="x-default">
                  <link rel="alternate" href="{$config->root_url}/{$l->url}" hreflang="ru-UA">
              {/if}
          {/foreach}
      {/if}


    {* Favicon *}
    <link href="design/{$settings->theme}/images/" type="image/x-icon" rel="icon">
    <link href="design/{$settings->theme}/images/" type="image/x-icon" rel="shortcut icon">

    {* JQuery *}
    <script src="design/{$settings->theme}/js/jquery-2.1.4.min.js"></script>

    {* Slick slider *}
    <script src="design/{$settings->theme}/js/slick.min.js"></script>

    {* Match height *}
    <script src="design/{$settings->theme}/js/jquery.matchHeight-min.js"></script>

    {* CSS *}

    <link href="design/{$settings->theme|escape}/css/libs.css" rel="stylesheet">
    <link href="design/{$settings->theme|escape}/css/style.css?v=2.207" rel="stylesheet">
    <link href="design/{$settings->theme|escape}/css/responsive.css" rel="stylesheet">

    {* Google Analytics *}
    {if $settings->g_analytics}
    {literal}
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', {/literal}'{$settings->g_analytics}'{literal}, 'auto');
            ga('send', 'pageview');
        </script>
    {/literal}
    {/if}

    {if $settings->head_custom_script}
        {$settings->head_custom_script}
    {/if}

{literal}
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window,document,'script','https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '406802026449979');
    fbq('track', 'PageView');
    </script>
    <noscript>
     <img height="1" width="1" src="https://www.facebook.com/tr?id=406802026449979&ev=PageView&noscript=1" />
    </noscript>
{/literal}

</head>

<body {if $is_mobile === true || $is_tablet === true}class="mobile"{/if}>

{if $is_mobile === false && $is_tablet === false}
    {include file="header_desktop.tpl"}
{else}
    {include file="header_mobile.tpl"}
{/if}

{* Тело сайта *}
<div class="main">
    <div class="container">
        {if $module == "MainView" || $module == "ProductView"}
            <div class="fn_ajax_content">
                {$content}
            </div>
        {else}
            <div class="row">
                <div class="col-lg-3">
                    <div class="aside">
                        {include file="sidebar.tpl"}
                    </div>
                </div>
                <div class="fn_ajax_content col-lg-9">
                    {$content}
                </div>
            </div>
        {/if}
    </div>
</div>

<div class="to_top"></div>

{* Footer *}
{if $is_mobile === false && $is_tablet === false}
    <footer class="footer">
        <div class="container">
            <div class="row">
                {* Main menu *}
                <div class="foot col-md-3">
                    {* Copyright *}
                    <div class="copyright">
                        <span>©</span>
                        <span data-language="index_copyright">{$lang->index_copyright}</span>
                        <span>{$smarty.now|date_format:"%Y"}</span>
                    </div>

                    <div class="foot_work">
                        <div class="foot_heading">
                            <span data-language="index_work">{$lang->index_work}</span>
                        </div>
                        <span data-language="company_open_1">{$lang->company_open_1}</span>
                        <br>
                        <span data-language="company_open_2">{$lang->company_open_2}</span>
                        <br>
                        <span data-language="company_open_3">{$lang->company_open_3}</span>
                    </div>
                </div>

                <nav class="foot col-md-3">
                    <ul class="foot_menu">
                        {foreach $pages as $p}
                            {if $p->menu_id == 1}
                                <li class="foot_item">
                                    <a href="{$lang_link}{$p->url}">{$p->name|escape}</a>
                                </li>
                            {/if}
                        {/foreach}
                    </ul>
                </nav>

                {* Contacts *}
                <div class="foot col-md-3">
                    <div class="foot_heading">
                        <span data-language="index_contacts">{$lang->index_contacts}</span>
                    </div>
                    <div class="foot_contacts">
                        {if $lang->company_address}
                            <div class="foot_item">
                                <span data-language="company_address">{$lang->company_address}</span>
                            </div>
                        {/if}
                        {if $lang->company_street}
                            <div class="foot_item">
                                <span data-language="company_street">{$lang->company_street}</span>
                            </div>
                        {/if}
                        {if $lang->company_phone_1}
                            <div class="foot_item">
                                <a href="tel:{str_replace([' ','-','(',')'], ['','','',''], $lang->company_phone_1)}" data-language="company_phone_1" >{$lang->company_phone_1}</a>
                            </div>
                        {/if}
                        {if $lang->company_phone_2}
                            <div class="foot_item">
                                <a href="tel:{str_replace([' ','-','(',')'], ['','','',''], $lang->company_phone_2)}" data-language="company_phone_2" >{$lang->company_phone_2}</a>
                            </div>
                        {/if}
                        {if $lang->company_skype}
                            <div class="foot_item">
                                <a href="skype:{$lang->company_skype}?call" data-language="company_skype" >{$lang->company_skype}</a>
                            </div>
                        {/if}
                    </div>
                </div>

                <div class="foot col-md-3">
                    {* Subscribing *}
                    <div id="subscribe_container">
                        <div class="subscribe_promotext">
                            <span data-language="subscribe_promotext">{$lang->subscribe_promotext}</span>
                        </div>

                        <form class="subscribe_form fn_validate_subscribe" method="post">
                            <input type="hidden" name="subscribe" value="1"/>

                            <input class="subscribe_input" type="email" name="subscribe_email" value="" data-format="email" placeholder="{$lang->form_email}"/>

                            <button class="button subscribe_button" type="submit"><span data-language="subscribe_button">{$lang->subscribe_button}</span></button>

                            {if $subscribe_error}
                                <div id="subscribe_error" class="popup">
                                    {if $subscribe_error == 'email_exist'}
                                        <span data-language="subscribe_already">{$lang->index_subscribe_already}</span>
                                    {/if}
                                    {if $subscribe_error == 'empty_email'}
                                        <span data-language="form_enter_email">{$lang->form_enter_email}</span>
                                    {/if}
                                </div>
                            {/if}

                            {if $subscribe_success}
                                <div id="fn_subscribe_sent" class="popup">
                                    <span data-language="subscribe_sent">{$lang->index_subscribe_sent}</span>
                                </div>
                            {/if}
                        </form>
                    </div>

                    <div class="foot_heading">
                        <span data-language="index_in_networks">{$lang->index_in_networks}</span>
                    </div>
                    {* Social buttons *}
                    <div class="foot_social">
                        <a class="fb" href="" target="_blank" title="Facebook">
                            {include file="svg.tpl" svgId="fb"}
                        </a>
                        <a class="ins" href="" target="_blank"  title="youTube">
                            {include file="svg.tpl" svgId="yt"}
                        </a>
                        <a class="ins" href="" target="_blank"  title="Instagram">
                            {include file="svg.tpl" svgId="insta"}
                        </a>
                    </div>

                    <a class="okay_logo" href="http://okay-cms.com" target="_blank">
                        <span data-language="okay_logo">{$lang->okay_logo}</span>
                    </a>
                </div>

            </div>
        </div>
    </footer>
{else}
    <footer class="mobile_footer center">
        {* Callback *}
        <a class="fn_callback footer_callback" href="#fn_callback" data-language="index_back_call"><span>{$lang->index_back_call}</span></a>
        {* Copyright *}
        <div class="copyright">
            <span>©</span>
            <span data-language="index_copyright">{$lang->index_copyright}</span>
            <span>{$smarty.now|date_format:"%Y"}</span>
        </div>
    </footer>
{/if}


{* Форма обратного звонка *}
{include file='callback.tpl'}

{if $settings->yandex_metrika_counter_id}
    {literal}
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter{/literal}{$settings->yandex_metrika_counter_id}{literal} = new Ya.Metrika({
                        id:{/literal}{$settings->yandex_metrika_counter_id}{literal},
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true,
                        webvisor:true,
                        trackHash:true,
                        ecommerce:"dataLayer"
                    });
                } catch(e) { }
            });

            var n = d.getElementsByTagName("script")[0],
                    s = d.createElement("script"),
                    f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks");
    </script>
    <!-- /Yandex.Metrika counter -->
{/literal}
{/if}


{if $settings->body_custom_script}
    {$settings->body_custom_script}
{/if}

{*template scripts*}
{* JQuery UI *}
{* Библиотека с "Slider", "Transfer Effect" *}
<script src="design/{$settings->theme}/js/jquery-ui.min.js"></script>

{* Fancybox *}
<link href="design/{$settings->theme|escape}/css/jquery.fancybox.min.css" rel="stylesheet">
<script src="design/{$settings->theme|escape}/js/jquery.fancybox.min.js" defer></script>

{* Autocomplete *}
<script src="design/{$settings->theme}/js/jquery.autocomplete-min.js" defer></script>

{* Admin tooltips *}
{if $smarty.session.admin}
    <script>lang_id = {$language->id}</script>
    <script src ="backend/design/js/admintooltip/admintooltip.js"></script>
    <link href="backend/design/js/admintooltip/styles/admin.css" rel="stylesheet">
{/if}

{*JQuery Validation*}
<script src="design/{$settings->theme}/js/jquery.validate.min.js" ></script>
<script src="design/{$settings->theme}/js/additional-methods.min.js"></script>

{* Okay *}
{include file="scripts.tpl"}
<script src="design/{$settings->theme}/js/okay.js?v=1.002"></script>
{*template scripts*}
</body>
</html>
