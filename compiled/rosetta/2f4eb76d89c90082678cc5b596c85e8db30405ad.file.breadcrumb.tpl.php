<?php /* Smarty version Smarty-3.1.18, created on 2019-05-14 04:17:41
         compiled from "/Users/ivansavchuk/Documents/Development/sportdream.loc/design/rosetta/html/breadcrumb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15513545175cda41651b61f0-93493864%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f4eb76d89c90082678cc5b596c85e8db30405ad' => 
    array (
      0 => '/Users/ivansavchuk/Documents/Development/sportdream.loc/design/rosetta/html/breadcrumb.tpl',
      1 => 1553277900,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15513545175cda41651b61f0-93493864',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module' => 0,
    'lang_link' => 0,
    'config' => 0,
    'lang' => 0,
    'category' => 0,
    'keyword' => 0,
    'cat' => 0,
    'position' => 0,
    'brand' => 0,
    'page' => 0,
    'product' => 0,
    'order' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5cda41660e0707_90843852',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cda41660e0707_90843852')) {function content_5cda41660e0707_90843852($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['module']->value!="MainView") {?>
<?php if ($_GET['module']=="ProductsView") {?>
<?php $_smarty_tpl->tpl_vars['position'] = new Smarty_variable(2, null, 0);?>

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
          "@id":"<?php if (!empty($_smarty_tpl->tpl_vars['lang_link']->value)) {?><?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
<?php }?>",
          "name":"<?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumb_home;?>
"
        }
      }<?php if (count($_smarty_tpl->tpl_vars['category']->value->path)>1) {?>,<?php }?>

    <?php if ($_smarty_tpl->tpl_vars['category']->value&&!$_smarty_tpl->tpl_vars['keyword']->value) {?>
        <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value->path; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['cat']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['cat']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
 $_smarty_tpl->tpl_vars['cat']->iteration++;
 $_smarty_tpl->tpl_vars['cat']->last = $_smarty_tpl->tpl_vars['cat']->iteration === $_smarty_tpl->tpl_vars['cat']->total;
?>
        <?php if (!$_smarty_tpl->tpl_vars['cat']->last) {?>
            <?php if ($_smarty_tpl->tpl_vars['cat']->value->visible) {?>

            {
              "@type":"ListItem",
              "position":<?php echo $_smarty_tpl->tpl_vars['position']->value;?>
,
              "item":
              {
                "@id":"<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
category/<?php echo $_smarty_tpl->tpl_vars['cat']->value->url;?>
",
                "name":"<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"
              }
            }<?php if (count($_smarty_tpl->tpl_vars['category']->value->path)>$_smarty_tpl->tpl_vars['position']->value) {?>,<?php }?>

<?php $_smarty_tpl->tpl_vars["position"] = new Smarty_variable($_smarty_tpl->tpl_vars['position']->value+1, null, 0);?>
            <?php }?>
        <?php }?>
        <?php } ?>
    <?php }?>

  ]
}
</script>

<?php } elseif ($_GET['module']=="ProductView") {?>
        <?php $_smarty_tpl->tpl_vars['position'] = new Smarty_variable(2, null, 0);?>

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
              "@id":"<?php if (!empty($_smarty_tpl->tpl_vars['lang_link']->value)) {?><?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
<?php }?>",
               "name":"<?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumb_home;?>
"
           }
     },

     <?php if ($_smarty_tpl->tpl_vars['category']->value&&!$_smarty_tpl->tpl_vars['keyword']->value) {?>
        <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value->path; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['cat']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['cat']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
 $_smarty_tpl->tpl_vars['cat']->iteration++;
 $_smarty_tpl->tpl_vars['cat']->last = $_smarty_tpl->tpl_vars['cat']->iteration === $_smarty_tpl->tpl_vars['cat']->total;
?>
            <?php if ($_smarty_tpl->tpl_vars['cat']->value->visible) {?>

            {
              "@type":"ListItem",
              "position":<?php echo $_smarty_tpl->tpl_vars['position']->value;?>
,
              "item":
              {
                    "@id":"<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
category/<?php echo $_smarty_tpl->tpl_vars['cat']->value->url;?>
",
                    "name":"<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"
              }
            }<?php if ((count($_smarty_tpl->tpl_vars['category']->value->path)+1)>$_smarty_tpl->tpl_vars['position']->value) {?>,<?php }?>

<?php $_smarty_tpl->tpl_vars["position"] = new Smarty_variable($_smarty_tpl->tpl_vars['position']->value+1, null, 0);?>
            <?php }?>
        <?php } ?>
    <?php }?>

          ]
        }
        </script>


<?php }?>
    <ol class="breadcrumbs ">

        
        <li>
            <a href="<?php if (!empty($_smarty_tpl->tpl_vars['lang_link']->value)) {?><?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
<?php }?>" data-language="breadcrumb_home">
                <span><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumb_home;?>
</span>
            </a>
        </li>

        
        <?php if ($_GET['module']=="ProductsView") {?>
            <?php if ($_smarty_tpl->tpl_vars['category']->value&&!$_smarty_tpl->tpl_vars['keyword']->value) {?>
                <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value->path; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['cat']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['cat']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
 $_smarty_tpl->tpl_vars['cat']->iteration++;
 $_smarty_tpl->tpl_vars['cat']->last = $_smarty_tpl->tpl_vars['cat']->iteration === $_smarty_tpl->tpl_vars['cat']->total;
?>
                    <?php if (!$_smarty_tpl->tpl_vars['cat']->last) {?>
                        <?php if ($_smarty_tpl->tpl_vars['cat']->value->visible) {?>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
category/<?php echo $_smarty_tpl->tpl_vars['cat']->value->url;?>
">
                                    <span ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                </a>
                            </li>
                        <?php }?>
                    <?php } else { ?>
                        <li><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span></li>
                    <?php }?>
                <?php } ?>
            <?php } elseif ($_smarty_tpl->tpl_vars['brand']->value) {?>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
brands" data-language="breadcrumb_brands">
                        <span><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumb_brands;?>
</span>
                    </a>
                </li>
                <li><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span></li>
            <?php } elseif ($_smarty_tpl->tpl_vars['keyword']->value) {?>
                <li data-language="breadcrumb_search"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumb_search;?>
</span></li>
            <?php } else { ?>
                <li><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span></li>
            <?php }?>

        
        <?php } elseif ($_GET['module']=="BrandsView") {?>
            <li><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span></li>

        
        <?php } elseif ($_GET['module']=="ProductView") {?>
            <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value->path; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['cat']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['cat']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
 $_smarty_tpl->tpl_vars['cat']->iteration++;
 $_smarty_tpl->tpl_vars['cat']->last = $_smarty_tpl->tpl_vars['cat']->iteration === $_smarty_tpl->tpl_vars['cat']->total;
?>
                <?php if ($_smarty_tpl->tpl_vars['cat']->value->visible) {?>
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
category/<?php echo $_smarty_tpl->tpl_vars['cat']->value->url;?>
">
                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        </a>
                    </li>
                <?php }?>
            <?php } ?>
            <li><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span></li>

        
        <?php } elseif ($_GET['module']=="FeedbackView"||$_GET['module']=="PageView") {?>
            <li><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span></li>

        
        <?php } elseif ($_GET['module']=="CartView") {?>
            <li data-language="breadcrumb_cart"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumb_cart;?>
</span></li>

        
        <?php } elseif ($_GET['module']=="OrderView") {?>
            <li data-language="breadcrumb_order"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumb_order;?>
 <?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
</span></li>

        
        <?php } elseif ($_GET['module']=="LoginView"&&$_GET['action']=="password_remind") {?>
            <li data-language="breadcrumbs_password_remind"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumbs_password_remind;?>
</span></li>

        
        <?php } elseif ($_GET['module']=="LoginView") {?>
            <li data-language="breadcrumbs_enter"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumbs_enter;?>
</span></li>

        
        <?php } elseif ($_GET['module']=="RegisterView") {?>
            <li data-language="breadcrumbs_registration"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumbs_registration;?>
</span></li>

        
        <?php } elseif ($_GET['module']=="UserView") {?>
            <li data-language="breadcrumbs_user"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumbs_user;?>
</span></li>

        
        <?php } elseif ($_GET['module']=="BlogView") {?>
            <?php if ($_GET['url']) {?>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
<?php echo $_GET['type_post'];?>
" data-language="breadcrumbs_blog">
                        <span>
                            <?php if ($_GET['type_post']=="news") {?>
                                <?php echo $_smarty_tpl->tpl_vars['lang']->value->main_news;?>

                            <?php } else { ?>
                                <?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumbs_blog;?>

                            <?php }?>
                        </span>
                    </a>
                </li>
                <li>
                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                </li>
            <?php } else { ?>
                <li data-language="breadcrumbs_blog">
                    <?php if ($_GET['type_post']=="news") {?>
                        <?php echo $_smarty_tpl->tpl_vars['lang']->value->main_news;?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumbs_blog;?>

                    <?php }?>
                </li>
            <?php }?>
        <?php } elseif ($_GET['module']=='ComparisonView') {?>
            <li data-language="breadcrumb_comparison"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumb_comparison;?>
</li>
        <?php } elseif ($_GET['module']=='WishlistView') {?>
            <li data-language="breadcrumb_wishlist"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumb_wishlist;?>
</li>
        <?php }?>
    </ol>
<?php }?>
<?php }} ?>
