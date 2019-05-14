<?php /* Smarty version Smarty-3.1.18, created on 2019-05-14 13:28:26
         compiled from "/Users/ivansavchuk/Documents/Development/sportdream.loc/design/rosetta/html/header_desktop.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3024495175cdac27a6c8902-36245172%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0468a09958535845a5a876ef3a695aa5bf5b7db' => 
    array (
      0 => '/Users/ivansavchuk/Documents/Development/sportdream.loc/design/rosetta/html/header_desktop.tpl',
      1 => 1553277900,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3024495175cdac27a6c8902-36245172',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'banner_top_banner' => 0,
    'bi' => 0,
    'config' => 0,
    'lang' => 0,
    'languages' => 0,
    'ln' => 0,
    'cnt' => 0,
    'l' => 0,
    'language' => 0,
    'currencies' => 0,
    'c' => 0,
    'currency' => 0,
    'user' => 0,
    'lang_link' => 0,
    'pages' => 0,
    'p' => 0,
    'settings' => 0,
    'keyword' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5cdac27ad11427_93888181',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cdac27ad11427_93888181')) {function content_5cdac27ad11427_93888181($_smarty_tpl) {?><header class="header">
    
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_banner'][0][0]->get_banner_plugin(array('var'=>'banner_top_banner','group'=>'top_banner'),$_smarty_tpl);?>

    <?php if ($_smarty_tpl->tpl_vars['banner_top_banner']->value->items) {?>
        <div class="fn_top_banner top_banner center">
            <?php  $_smarty_tpl->tpl_vars['bi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bi']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['banner_top_banner']->value->items; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bi']->key => $_smarty_tpl->tpl_vars['bi']->value) {
$_smarty_tpl->tpl_vars['bi']->_loop = true;
?>
            <div>
                <?php if ($_smarty_tpl->tpl_vars['bi']->value->url) {?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['bi']->value->url;?>
" target="_blank">
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['bi']->value->image) {?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value->banners_images_dir;?>
<?php echo $_smarty_tpl->tpl_vars['bi']->value->image;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['bi']->value->alt;?>
" title="<?php echo $_smarty_tpl->tpl_vars['bi']->value->title;?>
"/>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['bi']->value->url) {?>
                </a>
                <?php }?>
            </div>
            <?php } ?>
        </div>
    <?php }?>

    <div class="container">
        <nav class="header_nav tablet-hidden">
            <div class="clearfix">
                
                <div class="header_phones">
                    <a class="header_phone nowrap" href="tel:<?php echo str_replace(array(' ','-','(',')'),array('','','',''),$_smarty_tpl->tpl_vars['lang']->value->company_phone_1);?>
" data-language="company_phone_1" ><?php echo $_smarty_tpl->tpl_vars['lang']->value->company_phone_1;?>
,</a>
                    <a class="header_phone nowrap" href="tel:<?php echo str_replace(array(' ','-','(',')'),array('','','',''),$_smarty_tpl->tpl_vars['lang']->value->company_phone_2);?>
" data-language="company_phone_2" ><?php echo $_smarty_tpl->tpl_vars['lang']->value->company_phone_2;?>
</a>
                    
                    <a class="fn_callback header_callback" href="#fn_callback" data-language="index_back_call"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_back_call;?>
</span></a>
                </div>

                
                <?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
                    <?php $_smarty_tpl->tpl_vars['cnt'] = new Smarty_variable(0, null, 0);?>
                    <?php  $_smarty_tpl->tpl_vars['ln'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ln']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ln']->key => $_smarty_tpl->tpl_vars['ln']->value) {
$_smarty_tpl->tpl_vars['ln']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['ln']->value->enabled) {?>
                            <?php $_smarty_tpl->tpl_vars['cnt'] = new Smarty_variable($_smarty_tpl->tpl_vars['cnt']->value+1, null, 0);?>
                        <?php }?>
                    <?php } ?>
                    <?php if ($_smarty_tpl->tpl_vars['cnt']->value>1) {?>
                        <div class="header_languages">
                            <?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
?>
                                <?php if ($_smarty_tpl->tpl_vars['l']->value->enabled) {?>
                                    <?php if ($_smarty_tpl->tpl_vars['language']->value->id==$_smarty_tpl->tpl_vars['l']->value->id) {?>
                                        <span class="language"><?php echo $_smarty_tpl->tpl_vars['l']->value->label;?>
</span>
                                   <?php } else { ?>
                                        <a class="language" href="<?php echo $_smarty_tpl->tpl_vars['l']->value->url;?>
"><?php echo $_smarty_tpl->tpl_vars['l']->value->label;?>
</a>
                                   <?php }?>
                                <?php }?>
                            <?php } ?>
                        </div>
                    <?php }?>
                <?php }?>

                
                <?php if (count($_smarty_tpl->tpl_vars['currencies']->value)>1) {?>
                    <div class="header_currencies">
                        <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['c']->value->enabled) {?>
                                <?php if ($_smarty_tpl->tpl_vars['currency']->value->id==$_smarty_tpl->tpl_vars['c']->value->id) {?>
                                    <span class="currency"><?php echo $_smarty_tpl->tpl_vars['c']->value->sign;?>
</span>
                                <?php } else { ?>
                                    <a class="currency" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('currency_id'=>$_smarty_tpl->tpl_vars['c']->value->id),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value->sign;?>
</a>
                                <?php }?>
                            <?php }?>
                        <?php } ?>
                    </div>
                <?php }?>

                 <?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
                     
                     <a class="header_account" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
user">
                         <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                     </a>
                 <?php } else { ?>
                     
                     <a class="header_account" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
user/login" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->index_login;?>
">
                         <span data-language="index_login"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_login;?>
</span>
                     </a>
                 <?php }?>
            </div>

            
            <ul class="header_menu">
                <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['p']->value->menu_id==1) {?>
                        <li class="header_menu_item">
                            <a data-page="<?php echo $_smarty_tpl->tpl_vars['p']->value->id;?>
" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
<?php echo $_smarty_tpl->tpl_vars['p']->value->url;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                        </li>
                    <?php }?>
                <?php } ?>
            </ul>
        </nav>

        <div class="header_info clearfix">
            
            <a class="logo" <?php if ($_GET['module']!='MainView') {?>href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
"<?php }?>>
                <img class="responsive_img" src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/<?php echo $_smarty_tpl->tpl_vars['settings']->value->site_logo;?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_name, ENT_QUOTES, 'UTF-8', true);?>
"/>
            </a>
            
            

            
             <div id="cart_informer" class="header_cart">
                 <?php echo $_smarty_tpl->getSubTemplate ('cart_informer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

             </div>

            
            <div id="wishlist" class="header_wish tablet-hidden">
                <?php echo $_smarty_tpl->getSubTemplate ("wishlist_informer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>

            
            <div id="comparison" class="header_compare tablet-hidden">
                <?php echo $_smarty_tpl->getSubTemplate ("comparison_informer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>

            
            <form id="fn_search" class="search" action="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
all-products">
                <input class="fn_search search_input" type="text" name="keyword" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['keyword']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-language="index_search" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->index_search;?>
"/>
                <button class="button search_button" type="submit"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_search_button;?>
</button>
            </form>
        </div>
    </div>
</header>
<?php }} ?>
