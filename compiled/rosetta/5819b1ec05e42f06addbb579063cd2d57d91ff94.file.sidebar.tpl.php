<?php /* Smarty version Smarty-3.1.18, created on 2019-05-14 13:28:27
         compiled from "/Users/ivansavchuk/Documents/Development/sportdream.loc/design/rosetta/html/sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13102071065cdac27b05f050-63076041%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5819b1ec05e42f06addbb579063cd2d57d91ff94' => 
    array (
      0 => '/Users/ivansavchuk/Documents/Development/sportdream.loc/design/rosetta/html/sidebar.tpl',
      1 => 1553277900,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13102071065cdac27b05f050-63076041',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module' => 0,
    'is_mobile' => 0,
    'is_tablet' => 0,
    'last_posts' => 0,
    'lang' => 0,
    'post' => 0,
    'lang_link' => 0,
    'browsed_products' => 0,
    'browsed_product' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5cdac27b4b53c3_21475581',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cdac27b4b53c3_21475581')) {function content_5cdac27b4b53c3_21475581($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("categories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="aside_block">
    
    <?php echo $_smarty_tpl->getSubTemplate ('breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>

<?php if ($_smarty_tpl->tpl_vars['module']->value=="ProductsView") {?>
    <?php echo $_smarty_tpl->getSubTemplate ('features.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['is_mobile']->value===false&&$_smarty_tpl->tpl_vars['is_tablet']->value===false) {?>
    <?php if ($_smarty_tpl->tpl_vars['module']->value=="BlogView") {?>
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_posts'][0][0]->get_posts_plugin(array('var'=>'last_posts','limit'=>5,'type_post'=>"news"),$_smarty_tpl);?>

        <?php if ($_smarty_tpl->tpl_vars['last_posts']->value) {?>
            <div class="tablet-hidden aside_block">
                <div class="h4">
                    <span data-language="blog_news"><?php echo $_smarty_tpl->tpl_vars['lang']->value->blog_news;?>
</span>
                </div>

                <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['last_posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
                    <article class="side_blog">
                        
                        <p class="news_date"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date_modifier($_smarty_tpl->tpl_vars['post']->value->date);?>
</p>
                        <h3 class="h5">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
<?php echo $_smarty_tpl->tpl_vars['post']->value->type_post;?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value->url;?>
" data-post="<?php echo $_smarty_tpl->tpl_vars['post']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                        </h3>
                    </article>
                <?php } ?>

                <div class="side_all">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
news" data-language="main_all_news"><?php echo $_smarty_tpl->tpl_vars['lang']->value->main_all_news;?>
</a>
                </div>
            </div>
        <?php }?>

        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_posts'][0][0]->get_posts_plugin(array('var'=>'last_posts','limit'=>5,'type_post'=>"blog"),$_smarty_tpl);?>

        <?php if ($_smarty_tpl->tpl_vars['last_posts']->value) {?>
            <div class="tablet-hidden aside_block">
                <div class="h4">
                    <span data-language="blog_blog"><?php echo $_smarty_tpl->tpl_vars['lang']->value->blog_blog;?>
</span>
                </div>

                <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['last_posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
                    <article class="side_blog">
                        
                        <p class="news_date"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date_modifier($_smarty_tpl->tpl_vars['post']->value->date);?>
</p>
                        <h3 class="h5">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
<?php echo $_smarty_tpl->tpl_vars['post']->value->type_post;?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value->url;?>
" data-post="<?php echo $_smarty_tpl->tpl_vars['post']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                        </h3>
                    </article>
                <?php } ?>

                <div class="side_all">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
news" data-language="all_articles"><?php echo $_smarty_tpl->tpl_vars['lang']->value->all_articles;?>
</a>
                </div>
            </div>
        <?php }?>
    <?php }?>

    
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_browsed_products'][0][0]->get_browsed_products(array('var'=>'browsed_products','limit'=>4),$_smarty_tpl);?>

    <?php if ($_smarty_tpl->tpl_vars['browsed_products']->value) {?>
        <div class="tablet-hidden">
            <div class="h4"><?php echo $_smarty_tpl->tpl_vars['lang']->value->features_browsed;?>
</div>
            <div class="browsed clearfix">
                <?php  $_smarty_tpl->tpl_vars['browsed_product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['browsed_product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['browsed_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['browsed_product']->key => $_smarty_tpl->tpl_vars['browsed_product']->value) {
$_smarty_tpl->tpl_vars['browsed_product']->_loop = true;
?>
                    <div class="browsed_item clearfix">
                        <a class="browsed_image" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
products/<?php echo $_smarty_tpl->tpl_vars['browsed_product']->value->url;?>
">
                            <?php if ($_smarty_tpl->tpl_vars['browsed_product']->value->image->filename) {?>
                                <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['browsed_product']->value->image->filename,50,60);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['browsed_product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['browsed_product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
                            <?php } else { ?>
                                <img width="50" height="50" src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/no_image.png" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['browsed_product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['browsed_product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
                            <?php }?>
                        </a>
                        <a class="browsed_name" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
products/<?php echo $_smarty_tpl->tpl_vars['browsed_product']->value->url;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['browsed_product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                    </div>
                <?php } ?>
            </div>
        </div>
    <?php }?>
<?php }?>
<?php }} ?>
