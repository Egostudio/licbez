<?php /* Smarty version Smarty-3.1.18, created on 2019-05-13 18:40:35
         compiled from "/Users/ivansavchuk/Documents/Development/sportdream.loc/design/rosetta/html/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2988879055cd9ba23688184-52264291%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71b9e57b6cd37b6b0df0fe35219dd7dfaf709534' => 
    array (
      0 => '/Users/ivansavchuk/Documents/Development/sportdream.loc/design/rosetta/html/main.tpl',
      1 => 1553277900,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2988879055cd9ba23688184-52264291',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'banner_group1' => 0,
    'bi' => 0,
    'config' => 0,
    'discounted_products' => 0,
    'lang' => 0,
    'lang_link' => 0,
    'featured_products' => 0,
    'new_products' => 0,
    'last_posts' => 0,
    'post' => 0,
    'page' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5cd9ba247f52a3_00925299',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd9ba247f52a3_00925299')) {function content_5cd9ba247f52a3_00925299($_smarty_tpl) {?>


<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable('', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>

<div class="row">
    <div class="col-xs-12 col-lg-3 home_categories">
        <?php echo $_smarty_tpl->getSubTemplate ("categories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
    <div class="col-xs-12 col-lg-9">
        
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_banner'][0][0]->get_banner_plugin(array('var'=>'banner_group1','group'=>'group1'),$_smarty_tpl);?>

        <?php if ($_smarty_tpl->tpl_vars['banner_group1']->value->items) {?>
            <div class="fn_slider main_slider">
                <?php  $_smarty_tpl->tpl_vars['bi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bi']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['banner_group1']->value->items; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bi']->key => $_smarty_tpl->tpl_vars['bi']->value) {
$_smarty_tpl->tpl_vars['bi']->_loop = true;
?>
                    <div class="slick-slide">
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
    </div>
</div>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_discounted_products'][0][0]->get_discounted_products_plugin(array('var'=>'discounted_products','limit'=>20),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['discounted_products']->value) {?>
    <div class="h2">
        <span data-language="main_discount_products"><?php echo $_smarty_tpl->tpl_vars['lang']->value->main_discount_products;?>
</span>
        <a class="look_all"  href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
discounted" data-language="main_look_all"><?php echo $_smarty_tpl->tpl_vars['lang']->value->main_look_all;?>
</a>
    </div>

    <div class="fn_slider_products slider_products clearfix">
        <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['discounted_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
            <div class="products_item slick-slide">
                <?php echo $_smarty_tpl->getSubTemplate ("product_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>
        <?php } ?>
    </div>
<?php }?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_featured_products'][0][0]->get_featured_products_plugin(array('var'=>'featured_products','limit'=>20),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['featured_products']->value) {?>
    <div class="h2">
        <span data-language="main_recommended_products"><?php echo $_smarty_tpl->tpl_vars['lang']->value->main_recommended_products;?>
</span>
        <a class="look_all" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
bestsellers" data-language="main_look_all"><?php echo $_smarty_tpl->tpl_vars['lang']->value->main_look_all;?>
</a>
    </div>

    <div class="fn_slider_products slider_products clearfix">
        <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['featured_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
            <div class="products_item slick-slide">
                <?php echo $_smarty_tpl->getSubTemplate ("product_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>
        <?php } ?>
    </div>
<?php }?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_new_products'][0][0]->get_new_products_plugin(array('var'=>'new_products','limit'=>20,'sort'=>'date_add'),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['new_products']->value) {?>
    <div class="h2">
        <span data-language="main_new_products"><?php echo $_smarty_tpl->tpl_vars['lang']->value->main_new_products;?>
</span>
        <a class="look_all" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
novye-tovary" data-language="main_look_all"><?php echo $_smarty_tpl->tpl_vars['lang']->value->main_look_all;?>
</a>
    </div>

    <div class="fn_slider_products slider_products clearfix">
        <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['new_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
            <div class="products_item slick-slide">
                <?php echo $_smarty_tpl->getSubTemplate ("product_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>
        <?php } ?>
    </div>
<?php }?>



<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_posts'][0][0]->get_posts_plugin(array('var'=>'last_posts','limit'=>2,'type_post'=>"news"),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['last_posts']->value) {?>
    <div class="mb">
        <div class="h2">
            <span data-language="main_news"><?php echo $_smarty_tpl->tpl_vars['lang']->value->main_news;?>
</span>
            <a class="look_all" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
news" data-language="main_all_news"><?php echo $_smarty_tpl->tpl_vars['lang']->value->main_all_news;?>
</a>
        </div>

        <div class="news clearfix">
            <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['last_posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
                <div class="news_item no_padding col-sm-6 col-md-4 cpl-xl-3">
                    <a class="news_image" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
<?php echo $_smarty_tpl->tpl_vars['post']->value->type_post;?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value->url;?>
">
                        <?php if ($_smarty_tpl->tpl_vars['post']->value->image) {?>
                            <img class="news_img" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['post']->value->image,360,360,false,$_smarty_tpl->tpl_vars['config']->value->resized_blog_dir);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
                        <?php }?>
                    </a>

                    <div class="news_content">
                        
                        <div class="news_date"><span><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date_modifier($_smarty_tpl->tpl_vars['post']->value->date);?>
</span></div>

                        
                        <h2 class="h4">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
<?php echo $_smarty_tpl->tpl_vars['post']->value->type_post;?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value->url;?>
" data-post="<?php echo $_smarty_tpl->tpl_vars['post']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                        </h2>

                        
                        

                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['page']->value->description) {?>
    <div class="h2">
        <h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</h1>
    </div>

    <div class="home_text clearfix">

        <?php echo $_smarty_tpl->tpl_vars['page']->value->description;?>


    </div>
<?php }?>

<script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/readmore.js"></script>
    
<script>
  $('.home_text').readmore({
    moreLink: '<a href="#" class="h32" style="font-size: 18px; margin-bottom: 10px;">Читать полностью</a>',
    lessLink: '<a href="#"></a>',
    collapsedHeight: 200,
    afterToggle: function(trigger, element, expanded) {
      if(! expanded) {
        $('html, body').animate({scrollTop: element.offset().top}, {duration: 100});
      }
    }
  });

  $('article').readmore({speed: 500});
</script>
    
<?php }} ?>
