<?php /* Smarty version Smarty-3.1.18, created on 2019-05-14 13:28:24
         compiled from "/Users/ivansavchuk/Documents/Development/sportdream.loc/design/rosetta/html/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2149827855cdac278d88032-01593434%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77046bbdeacc4aa3916ae7e2ed5c2b62d0a13136' => 
    array (
      0 => '/Users/ivansavchuk/Documents/Development/sportdream.loc/design/rosetta/html/index.tpl',
      1 => 1553501605,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2149827855cdac278d88032-01593434',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'meta_title' => 0,
    'meta_description' => 0,
    'meta_keywords' => 0,
    'filter_meta' => 0,
    'module' => 0,
    'set_canonical' => 0,
    'settings' => 0,
    'total_pages_num' => 0,
    'current_page_num' => 0,
    'rel_prev_next' => 0,
    'lang_link' => 0,
    'canonical' => 0,
    'product' => 0,
    'post' => 0,
    'sort_canonical' => 0,
    'hide_alternate' => 0,
    'languages' => 0,
    'l' => 0,
    'is_mobile' => 0,
    'is_tablet' => 0,
    'content' => 0,
    'lang' => 0,
    'pages' => 0,
    'p' => 0,
    'subscribe_error' => 0,
    'subscribe_success' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5cdac27a691c11_81132531',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cdac27a691c11_81132531')) {function content_5cdac27a691c11_81132531($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/ivansavchuk/Documents/Development/sportdream.loc/Smarty/libs/plugins/modifier.date_format.php';
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru-UA" lang="ru-UA">
<head>
 <meta name="robots" content="noindex, nofollow" />
  <!-- Global site tag (gtag.js) - Google Analytics -->
  
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-117913367-1"></script>
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-117913367-1');
  </script>
  

      
      <base href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/">

      
      <title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8', true);?>
</title>

      
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

      <?php if ((!empty($_smarty_tpl->tpl_vars['meta_description']->value)||!empty($_smarty_tpl->tpl_vars['meta_keywords']->value)||!empty($_smarty_tpl->tpl_vars['filter_meta']->value->description)||!empty($_smarty_tpl->tpl_vars['filter_meta']->value->keywords))&&!$_GET['page']) {?>
          <meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
">
          <meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_keywords']->value, ENT_QUOTES, 'UTF-8', true);?>
">
      <?php }?>

      <meta name="referrer" content="origin">

      <?php if ($_smarty_tpl->tpl_vars['module']->value=='ProductsView') {?>
          <?php if ($_smarty_tpl->tpl_vars['set_canonical']->value) {?>
              <meta name="robots" content="noindex,nofollow">
          <?php } elseif ($_GET['page']||$_GET['sort']) {?>
              <meta name="robots" content="noindex,follow">
          <?php } elseif (isset($_GET['keyword'])) {?>
              <meta name="robots" content="noindex,follow">
          <?php } else { ?>
              <meta name="robots" content="index,follow">
          <?php }?>
      <?php } elseif ($_GET['module']=="RegisterView"||$_GET['module']=="LoginView"||$_GET['module']=="UserView"||$_GET['module']=="CartView") {?>
          <meta name="robots" content="noindex,follow">
      <?php } elseif ($_GET['module']=="OrderView") {?>
          <meta name="robots" content="noindex,nofollow">
      <?php } else { ?>
          <meta name="robots" content="index,follow">
      <?php }?>

      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <?php if ($_smarty_tpl->tpl_vars['settings']->value->g_webmaster) {?>
          <meta name="google-site-verification" content="<?php echo $_smarty_tpl->tpl_vars['settings']->value->g_webmaster;?>
">
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['settings']->value->y_webmaster) {?>
          <meta name='yandex-verification' content="<?php echo $_smarty_tpl->tpl_vars['settings']->value->y_webmaster;?>
">
      <?php }?>

      
      <?php if ($_GET['module']=="BlogView"&&$_smarty_tpl->tpl_vars['total_pages_num']->value>1) {?>
          <?php if ($_smarty_tpl->tpl_vars['current_page_num']->value==$_smarty_tpl->tpl_vars['total_pages_num']->value) {?>
              <?php if ($_smarty_tpl->tpl_vars['current_page_num']->value==2) {?>
                  <link rel="prev" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>null),$_smarty_tpl);?>
"/>
              <?php } else { ?>
                  <link rel="prev" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>$_smarty_tpl->tpl_vars['current_page_num']->value-1),$_smarty_tpl);?>
"/>
              <?php }?>
          <?php } elseif ($_smarty_tpl->tpl_vars['current_page_num']->value==1) {?>
              <link rel="next" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>2),$_smarty_tpl);?>
"/>
          <?php } else { ?>
              <?php if ($_smarty_tpl->tpl_vars['current_page_num']->value==2) {?>
                  <link rel="prev" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>null),$_smarty_tpl);?>
"/>
              <?php } else { ?>
                  <link rel="prev" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>$_smarty_tpl->tpl_vars['current_page_num']->value-1),$_smarty_tpl);?>
"/>
              <?php }?>
              <link rel="next" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>$_smarty_tpl->tpl_vars['current_page_num']->value+1),$_smarty_tpl);?>
"/>
          <?php }?>
      <?php }?>

      
      <?php echo $_smarty_tpl->tpl_vars['rel_prev_next']->value;?>


      
          <meta property="og:locale" content="ru_UA" />
          <meta property="og:type" content="website" />
          <meta property="og:site_name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_name, ENT_QUOTES, 'UTF-8', true);?>
">
          <meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8', true);?>
">
          <meta property="og:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
">
      <?php if ($_smarty_tpl->tpl_vars['module']->value=='ProductView') {?>
          <meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
<?php if ($_smarty_tpl->tpl_vars['lang_link']->value) {?>/<?php echo str_replace('/','',$_smarty_tpl->tpl_vars['lang_link']->value);?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['canonical']->value;?>
">
          <meta property="og:image" content="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['product']->value->image->filename,330,300);?>
">
      <?php } elseif ($_smarty_tpl->tpl_vars['module']->value=='BlogView') {?>
          <meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
<?php if ($_smarty_tpl->tpl_vars['lang_link']->value) {?>/<?php echo str_replace('/','',$_smarty_tpl->tpl_vars['lang_link']->value);?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['canonical']->value;?>
">
          <?php if ($_smarty_tpl->tpl_vars['post']->value->image) {?>
          <meta property="og:image" content="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['post']->value->image,400,300,false,$_smarty_tpl->tpl_vars['config']->value->resized_blog_dir);?>
">
          <?php } else { ?>
          <meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/<?php echo $_smarty_tpl->tpl_vars['settings']->value->site_logo;?>
">
          <?php }?>
      <?php } else { ?>
          <meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
">
          <meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/<?php echo $_smarty_tpl->tpl_vars['settings']->value->site_logo;?>
">
      <?php }?>
          <meta property="og:fb:app_id" content="1358607630886611" />

      
      <?php if (isset($_smarty_tpl->tpl_vars['canonical']->value)) {?>
          <link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
<?php if ($_smarty_tpl->tpl_vars['lang_link']->value) {?>/<?php echo str_replace('/','',$_smarty_tpl->tpl_vars['lang_link']->value);?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['canonical']->value;?>
">
      <?php } elseif ($_GET['sort']) {?>
          <link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['sort_canonical']->value;?>
">
      <?php }?>

      
      <?php if (!$_smarty_tpl->tpl_vars['hide_alternate']->value) {?>
          <?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
?>
              <?php if ($_smarty_tpl->tpl_vars['l']->value->enabled) {?>
                  <link rel="alternate" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/<?php echo $_smarty_tpl->tpl_vars['l']->value->url;?>
" hreflang="x-default">
                  <link rel="alternate" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/<?php echo $_smarty_tpl->tpl_vars['l']->value->url;?>
" hreflang="ru-UA">
              <?php }?>
          <?php } ?>
      <?php }?>


    
    <link href="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/" type="image/x-icon" rel="icon">
    <link href="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/" type="image/x-icon" rel="shortcut icon">

    
    <script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/jquery-2.1.4.min.js"></script>

    
    <script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/slick.min.js"></script>

    
    <script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/jquery.matchHeight-min.js"></script>

    

    <link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/css/libs.css" rel="stylesheet">
    <link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/css/style.css?v=2.207" rel="stylesheet">
    <link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/css/responsive.css" rel="stylesheet">

    
    <?php if ($_smarty_tpl->tpl_vars['settings']->value->g_analytics) {?>
    
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', '<?php echo $_smarty_tpl->tpl_vars['settings']->value->g_analytics;?>
', 'auto');
            ga('send', 'pageview');
        </script>
    
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['settings']->value->head_custom_script) {?>
        <?php echo $_smarty_tpl->tpl_vars['settings']->value->head_custom_script;?>

    <?php }?>


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


</head>

<body <?php if ($_smarty_tpl->tpl_vars['is_mobile']->value===true||$_smarty_tpl->tpl_vars['is_tablet']->value===true) {?>class="mobile"<?php }?>>

<?php if ($_smarty_tpl->tpl_vars['is_mobile']->value===false&&$_smarty_tpl->tpl_vars['is_tablet']->value===false) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("header_desktop.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
    <?php echo $_smarty_tpl->getSubTemplate ("header_mobile.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>


<div class="main">
    <div class="container">
        <?php if ($_smarty_tpl->tpl_vars['module']->value=="MainView"||$_smarty_tpl->tpl_vars['module']->value=="ProductView") {?>
            <div class="fn_ajax_content">
                <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

            </div>
        <?php } else { ?>
            <div class="row">
                <div class="col-lg-3">
                    <div class="aside">
                        <?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    </div>
                </div>
                <div class="fn_ajax_content col-lg-9">
                    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

                </div>
            </div>
        <?php }?>
    </div>
</div>

<div class="to_top"></div>


<?php if ($_smarty_tpl->tpl_vars['is_mobile']->value===false&&$_smarty_tpl->tpl_vars['is_tablet']->value===false) {?>
    <footer class="footer">
        <div class="container">
            <div class="row">
                
                <div class="foot col-md-3">
                    
                    <div class="copyright">
                        <span>©</span>
                        <span data-language="index_copyright"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_copyright;?>
</span>
                        <span><?php echo smarty_modifier_date_format(time(),"%Y");?>
</span>
                    </div>

                    <div class="foot_work">
                        <div class="foot_heading">
                            <span data-language="index_work"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_work;?>
</span>
                        </div>
                        <span data-language="company_open_1"><?php echo $_smarty_tpl->tpl_vars['lang']->value->company_open_1;?>
</span>
                        <br>
                        <span data-language="company_open_2"><?php echo $_smarty_tpl->tpl_vars['lang']->value->company_open_2;?>
</span>
                        <br>
                        <span data-language="company_open_3"><?php echo $_smarty_tpl->tpl_vars['lang']->value->company_open_3;?>
</span>
                    </div>
                </div>

                <nav class="foot col-md-3">
                    <ul class="foot_menu">
                        <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['p']->value->menu_id==1) {?>
                                <li class="foot_item">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
<?php echo $_smarty_tpl->tpl_vars['p']->value->url;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                </li>
                            <?php }?>
                        <?php } ?>
                    </ul>
                </nav>

                
                <div class="foot col-md-3">
                    <div class="foot_heading">
                        <span data-language="index_contacts"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_contacts;?>
</span>
                    </div>
                    <div class="foot_contacts">
                        <?php if ($_smarty_tpl->tpl_vars['lang']->value->company_address) {?>
                            <div class="foot_item">
                                <span data-language="company_address"><?php echo $_smarty_tpl->tpl_vars['lang']->value->company_address;?>
</span>
                            </div>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['lang']->value->company_street) {?>
                            <div class="foot_item">
                                <span data-language="company_street"><?php echo $_smarty_tpl->tpl_vars['lang']->value->company_street;?>
</span>
                            </div>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['lang']->value->company_phone_1) {?>
                            <div class="foot_item">
                                <a href="tel:<?php echo str_replace(array(' ','-','(',')'),array('','','',''),$_smarty_tpl->tpl_vars['lang']->value->company_phone_1);?>
" data-language="company_phone_1" ><?php echo $_smarty_tpl->tpl_vars['lang']->value->company_phone_1;?>
</a>
                            </div>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['lang']->value->company_phone_2) {?>
                            <div class="foot_item">
                                <a href="tel:<?php echo str_replace(array(' ','-','(',')'),array('','','',''),$_smarty_tpl->tpl_vars['lang']->value->company_phone_2);?>
" data-language="company_phone_2" ><?php echo $_smarty_tpl->tpl_vars['lang']->value->company_phone_2;?>
</a>
                            </div>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['lang']->value->company_skype) {?>
                            <div class="foot_item">
                                <a href="skype:<?php echo $_smarty_tpl->tpl_vars['lang']->value->company_skype;?>
?call" data-language="company_skype" ><?php echo $_smarty_tpl->tpl_vars['lang']->value->company_skype;?>
</a>
                            </div>
                        <?php }?>
                    </div>
                </div>

                <div class="foot col-md-3">
                    
                    <div id="subscribe_container">
                        <div class="subscribe_promotext">
                            <span data-language="subscribe_promotext"><?php echo $_smarty_tpl->tpl_vars['lang']->value->subscribe_promotext;?>
</span>
                        </div>

                        <form class="subscribe_form fn_validate_subscribe" method="post">
                            <input type="hidden" name="subscribe" value="1"/>

                            <input class="subscribe_input" type="email" name="subscribe_email" value="" data-format="email" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_email;?>
"/>

                            <button class="button subscribe_button" type="submit"><span data-language="subscribe_button"><?php echo $_smarty_tpl->tpl_vars['lang']->value->subscribe_button;?>
</span></button>

                            <?php if ($_smarty_tpl->tpl_vars['subscribe_error']->value) {?>
                                <div id="subscribe_error" class="popup">
                                    <?php if ($_smarty_tpl->tpl_vars['subscribe_error']->value=='email_exist') {?>
                                        <span data-language="subscribe_already"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_subscribe_already;?>
</span>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['subscribe_error']->value=='empty_email') {?>
                                        <span data-language="form_enter_email"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_email;?>
</span>
                                    <?php }?>
                                </div>
                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['subscribe_success']->value) {?>
                                <div id="fn_subscribe_sent" class="popup">
                                    <span data-language="subscribe_sent"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_subscribe_sent;?>
</span>
                                </div>
                            <?php }?>
                        </form>
                    </div>

                    <div class="foot_heading">
                        <span data-language="index_in_networks"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_in_networks;?>
</span>
                    </div>
                    
                    <div class="foot_social">
                        <a class="fb" href="" target="_blank" title="Facebook">
                            <?php echo $_smarty_tpl->getSubTemplate ("svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>"fb"), 0);?>

                        </a>
                        <a class="ins" href="" target="_blank"  title="youTube">
                            <?php echo $_smarty_tpl->getSubTemplate ("svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>"yt"), 0);?>

                        </a>
                        <a class="ins" href="" target="_blank"  title="Instagram">
                            <?php echo $_smarty_tpl->getSubTemplate ("svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>"insta"), 0);?>

                        </a>
                    </div>

                    <a class="okay_logo" href="http://okay-cms.com" target="_blank">
                        <span data-language="okay_logo"><?php echo $_smarty_tpl->tpl_vars['lang']->value->okay_logo;?>
</span>
                    </a>
                </div>

            </div>
        </div>
    </footer>
<?php } else { ?>
    <footer class="mobile_footer center">
        
        <a class="fn_callback footer_callback" href="#fn_callback" data-language="index_back_call"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_back_call;?>
</span></a>
        
        <div class="copyright">
            <span>©</span>
            <span data-language="index_copyright"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_copyright;?>
</span>
            <span><?php echo smarty_modifier_date_format(time(),"%Y");?>
</span>
        </div>
    </footer>
<?php }?>



<?php echo $_smarty_tpl->getSubTemplate ('callback.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['settings']->value->yandex_metrika_counter_id) {?>
    
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter<?php echo $_smarty_tpl->tpl_vars['settings']->value->yandex_metrika_counter_id;?>
 = new Ya.Metrika({
                        id:<?php echo $_smarty_tpl->tpl_vars['settings']->value->yandex_metrika_counter_id;?>
,
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

<?php }?>


<?php if ($_smarty_tpl->tpl_vars['settings']->value->body_custom_script) {?>
    <?php echo $_smarty_tpl->tpl_vars['settings']->value->body_custom_script;?>

<?php }?>




<script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/jquery-ui.min.js"></script>


<link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/css/jquery.fancybox.min.css" rel="stylesheet">
<script src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/js/jquery.fancybox.min.js" defer></script>


<script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/jquery.autocomplete-min.js" defer></script>


<?php if ($_SESSION['admin']) {?>
    <script>lang_id = <?php echo $_smarty_tpl->tpl_vars['language']->value->id;?>
</script>
    <script src ="backend/design/js/admintooltip/admintooltip.js"></script>
    <link href="backend/design/js/admintooltip/styles/admin.css" rel="stylesheet">
<?php }?>


<script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/jquery.validate.min.js" ></script>
<script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/additional-methods.min.js"></script>


<?php echo $_smarty_tpl->getSubTemplate ("scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/okay.js?v=1.002"></script>

</body>
</html>
<?php }} ?>
