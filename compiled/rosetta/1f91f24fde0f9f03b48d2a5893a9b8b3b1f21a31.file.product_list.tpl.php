<?php /* Smarty version Smarty-3.1.18, created on 2019-05-13 18:40:37
         compiled from "/Users/ivansavchuk/Documents/Development/sportdream.loc/design/rosetta/html/product_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2778851835cd9ba25050b19-06094809%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f91f24fde0f9f03b48d2a5893a9b8b3b1f21a31' => 
    array (
      0 => '/Users/ivansavchuk/Documents/Development/sportdream.loc/design/rosetta/html/product_list.tpl',
      1 => 1553277900,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2778851835cd9ba25050b19-06094809',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'lang' => 0,
    'lang_link' => 0,
    'settings' => 0,
    'currency' => 0,
    'comparison' => 0,
    'wished_products' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5cd9ba25761479_09840939',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd9ba25761479_09840939')) {function content_5cd9ba25761479_09840939($_smarty_tpl) {?>
<div class="preview fn_product">
    <div class="fn_transfer preview_inner clearfix">

        <?php if ($_GET['module']=="ComparisonView") {?>
            <a href="#" class="fn_comparison selected remove_link" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->remove_comparison;?>
">
                <?php echo $_smarty_tpl->getSubTemplate ("svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>"remove_icon"), 0);?>

                <span><?php echo $_smarty_tpl->tpl_vars['lang']->value->remove_comparison;?>
</span>
            </a>
        <?php }?>

        <?php if ($_GET['module']=="WishlistView") {?>
            <a href="#" class="fn_wishlist selected remove_link" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->remove_favorite;?>
">
                <?php echo $_smarty_tpl->getSubTemplate ("svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>"remove_icon"), 0);?>

                <span><?php echo $_smarty_tpl->tpl_vars['lang']->value->remove_favorite;?>
</span>
            </a>
        <?php }?>

        
        <a class="preview_image" href="<?php if ($_GET['module']=='ComparisonView') {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['product']->value->image->filename,800,600,'w');?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
products/<?php echo $_smarty_tpl->tpl_vars['product']->value->url;?>
<?php }?>" <?php if ($_GET['module']=='ComparisonView') {?>data-fancybox="group" data-caption="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>>
            <?php if ($_smarty_tpl->tpl_vars['product']->value->image->filename) {?>
                <img class="fn_img preview_img" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['product']->value->image->filename,200,200);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
            <?php } else { ?>
                <img class="fn_img preview_img" src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/no_image.png" width="200" height="200" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['product']->value->special) {?>
                <img class="promo_img" src='files/special/<?php echo $_smarty_tpl->tpl_vars['product']->value->special;?>
' alt='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->special, ENT_QUOTES, 'UTF-8', true);?>
' title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->special, ENT_QUOTES, 'UTF-8', true);?>
"/>
            <?php }?>
        </a>

        <div class="preview_details">
            
            <a class="product_name" data-product="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
products/<?php echo $_smarty_tpl->tpl_vars['product']->value->url;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>

            <form class="fn_variants" action="/<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
cart">
                <div class="clearfix preview_info">
                    <div class="price_container">
                        
                        <div class="old_price<?php if (!$_smarty_tpl->tpl_vars['product']->value->variant->compare_price) {?> hidden<?php }?>">
                            <span class="fn_old_price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['product']->value->variant->compare_price);?>
</span> <span class="old_price_currency"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        </div>

                        
                        <div class="price">
                            <span class="fn_price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['product']->value->variant->price);?>
</span> <span class="price_currency"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        </div>
                    </div>
                    
                    <div id="product_<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" class="preview_rating">
                        <span class="rating_starOff">
                            <span class="rating_starOn" style="width:<?php echo $_smarty_tpl->tpl_vars['product']->value->rating*90/sprintf('%.0f',5);?>
px;"></span>
                        </span>
                    </div>
                </div>

                <div class="clearfix preview_buttons">
                    <?php if (!$_smarty_tpl->tpl_vars['settings']->value->is_preorder) {?>
                        
                        <p class="fn_not_preorder <?php if ($_smarty_tpl->tpl_vars['product']->value->variant->stock>0) {?> hidden<?php }?>">
                            <span data-language="out_of_stock"><?php echo $_smarty_tpl->tpl_vars['lang']->value->out_of_stock;?>
</span>
                        </p>
                    <?php } else { ?>
                        
                        <button class="buy fn_is_preorder<?php if ($_smarty_tpl->tpl_vars['product']->value->variant->stock>0) {?> hidden<?php }?>" type="submit"><span data-language="pre_order"><?php echo $_smarty_tpl->tpl_vars['lang']->value->pre_order;?>
</span></button>
                    <?php }?>

                    
                    <button class="buy fn_is_stock<?php if ($_smarty_tpl->tpl_vars['product']->value->variant->stock<1) {?> hidden<?php }?>" type="submit">
                        <span data-language="add_to_cart"><?php echo $_smarty_tpl->tpl_vars['lang']->value->add_to_cart;?>
</span>
                    </button>

                    <div class="add_buttons">
                        
                        <?php if ($_GET['module']!="ComparisonView") {?>
                            <?php if (!in_array($_smarty_tpl->tpl_vars['product']->value->id,$_smarty_tpl->tpl_vars['comparison']->value->ids)) {?>
                                <a class="fn_comparison comparison_button" href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->add_comparison;?>
" data-result-text="<?php echo $_smarty_tpl->tpl_vars['lang']->value->remove_comparison;?>
"></a>
                            <?php } else { ?>
                                <a class="fn_comparison comparison_button selected" href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->remove_comparison;?>
" data-result-text="<?php echo $_smarty_tpl->tpl_vars['lang']->value->add_comparison;?>
"></a>
                            <?php }?>
                        <?php }?>

                        
                        <?php if ($_GET['module']!="WishlistView") {?>
                            <?php if (in_array($_smarty_tpl->tpl_vars['product']->value->id,$_smarty_tpl->tpl_vars['wished_products']->value)) {?>
                                <a href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" class="fn_wishlist wishlist_button selected" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->remove_favorite;?>
" data-result-text="<?php echo $_smarty_tpl->tpl_vars['lang']->value->add_favorite;?>
"></a>
                            <?php } else { ?>
                                <a href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" class="fn_wishlist wishlist_button" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->add_favorite;?>
" data-result-text="<?php echo $_smarty_tpl->tpl_vars['lang']->value->remove_favorite;?>
"></a>
                            <?php }?>
                        <?php }?>
                    </div>
                </div>

                
                <select name="variant" class="fn_variant variant_select<?php if (count($_smarty_tpl->tpl_vars['product']->value->variants)==1) {?> hidden<?php }?>">
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value->variants; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
" data-price="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['v']->value->price);?>
" data-stock="<?php echo $_smarty_tpl->tpl_vars['v']->value->stock;?>
"<?php if ($_smarty_tpl->tpl_vars['v']->value->compare_price>0) {?> data-cprice="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['v']->value->compare_price);?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['v']->value->sku) {?> data-sku="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value->sku, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>><?php if ($_smarty_tpl->tpl_vars['v']->value->name) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value->name, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
<?php }?></option>
                    <?php } ?>
                </select>
            </form>
        </div>
    </div>
</div>
<?php }} ?>
