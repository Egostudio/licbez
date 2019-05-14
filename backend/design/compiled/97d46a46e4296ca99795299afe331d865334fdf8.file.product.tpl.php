<?php /* Smarty version Smarty-3.1.18, created on 2019-04-14 19:22:57
         compiled from "backend/design/html/product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16527719525cb36c712843c5-29005331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97d46a46e4296ca99795299afe331d865334fdf8' => 
    array (
      0 => 'backend/design/html/product.tpl',
      1 => 1553277840,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16527719525cb36c712843c5-29005331',
  'function' => 
  array (
    'category_select' => 
    array (
      'parameter' => 
      array (
        'level' => 0,
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'product' => 0,
    'btr' => 0,
    'lang_link' => 0,
    'message_success' => 0,
    'message_error' => 0,
    'lang_id' => 0,
    'product_images' => 0,
    'image' => 0,
    'brands' => 0,
    'brand' => 0,
    'product_categories' => 0,
    'categories' => 0,
    'category' => 0,
    'first_category' => 0,
    'level' => 0,
    'product_category' => 0,
    'product_variants' => 0,
    'variant' => 0,
    'currencies' => 0,
    'currency' => 0,
    'special_images' => 0,
    'special' => 0,
    'config' => 0,
    'features' => 0,
    'feature' => 0,
    'feature_id' => 0,
    'options' => 0,
    'related_products' => 0,
    'related_product' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5cb36c715f8232_47970273',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cb36c715f8232_47970273')) {function content_5cb36c715f8232_47970273($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Applications/XAMPP/xamppfiles/docs/turkeyorange.loc/Smarty/libs/plugins/modifier.truncate.php';
?><?php if ($_smarty_tpl->tpl_vars['product']->value->id) {?>
    <?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->name, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['btr']->value->product_new, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>
<?php }?>


<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="wrap_heading">
            <div class="box_heading heading_page">
                <?php if (!$_smarty_tpl->tpl_vars['product']->value->id) {?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->product_add, ENT_QUOTES, 'UTF-8', true);?>

                <?php } else { ?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>

                <?php }?>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['product']->value->id&&!empty($_smarty_tpl->tpl_vars['product']->value->url)) {?>
                <div class="box_btn_heading">
                    <a class="btn btn_small btn-info add" target="_blank" href="../<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
products/<?php echo $_smarty_tpl->tpl_vars['product']->value->url;?>
" >
                        <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'icon_desktop'), 0);?>

                        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_open, ENT_QUOTES, 'UTF-8', true);?>
</span>
                    </a>
                </div>
            <?php }?>
        </div>
    </div>
    <div class="col-md-12 col-lg-12 col-sm-12 float-xs-right"></div>
</div>


<?php if ($_smarty_tpl->tpl_vars['message_success']->value) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="boxed boxed_success">
                <div class="heading_box">
                    <?php if ($_smarty_tpl->tpl_vars['message_success']->value=='added') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->product_added, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_success']->value=='updated') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->product_updated, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } else { ?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message_success']->value, ENT_QUOTES, 'UTF-8', true);?>

                    <?php }?>
                    <?php if ($_GET['return']) {?>
                        <a class="btn btn_return float-xs-right" href="<?php echo $_GET['return'];?>
">
                            <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'return'), 0);?>

                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_back, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        </a>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['message_error']->value) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="boxed boxed_warning">
                <div class="heading_box">
                    <?php if ($_smarty_tpl->tpl_vars['message_error']->value=='url_exists') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->product_exists, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value=='empty_name') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_enter_title, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value=='empty_url') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_enter_url, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value=='url_wrong') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_not_underscore, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value=='empty_categories') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->product_no_category, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } else { ?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message_error']->value, ENT_QUOTES, 'UTF-8', true);?>

                    <?php }?>
                </div>
            </div>
        </div>
    </div>
<?php }?>


<form method="post" id="product" enctype="multipart/form-data" class="clearfix fn_fast_button">
    <input type=hidden name="session_id" value="<?php echo $_SESSION['id'];?>
">
    <input type="hidden" name="lang_id" value="<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
" />

    <div class="row">
        <div class="col-xs-12">
            <div class="boxed">
                
                <div class="row d_flex">
                    <div class="col-lg-10 col-md-9 col-sm-12">
                        <div class="heading_label">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_name, ENT_QUOTES, 'UTF-8', true);?>

                        </div>
                        <div class="form-group">
                            <input class="form-control" name="name" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
                            <input name="id" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->id, ENT_QUOTES, 'UTF-8', true);?>
"/>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-lg-6 col-md-10">
                                <div class="">
                                    <div class="input-group">
                                        <span class="input-group-addon">URL</span>
                                        <input name="url" class="fn_meta_field form-control fn_url <?php if ($_smarty_tpl->tpl_vars['product']->value->id) {?>fn_disabled<?php }?>" <?php if ($_smarty_tpl->tpl_vars['product']->value->id) {?>readonly=""<?php }?> type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->url, ENT_QUOTES, 'UTF-8', true);?>
" />
                                        <input type="checkbox" id="block_translit" class="hidden" value="1" <?php if ($_smarty_tpl->tpl_vars['product']->value->id) {?>checked=""<?php }?>>
                                        <span class="input-group-addon fn_disable_url">
                                            <?php if ($_smarty_tpl->tpl_vars['product']->value->id) {?>
                                                <i class="fa fa-lock"></i>
                                            <?php } else { ?>
                                                <i class="fa fa-lock fa-unlock"></i>
                                            <?php }?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="activity_of_switch">
                            <div class="activity_of_switch_item"> 
                                <div class="okay_switch clearfix">
                                    <label class="switch_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_enable, ENT_QUOTES, 'UTF-8', true);?>
</label>
                                    <label class="switch switch-default">
                                        <input class="switch-input" name="visible" value='1' type="checkbox" id="visible_checkbox" <?php if ($_smarty_tpl->tpl_vars['product']->value->visible) {?>checked=""<?php }?>/>
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="activity_of_switch_item"> 
                                <div class="okay_switch clearfix">
                                    <label class="switch_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_bestseller, ENT_QUOTES, 'UTF-8', true);?>
</label>
                                    <label class="switch switch-default">
                                        <input class="switch-input" name="featured" value="1" type="checkbox" id="featured_checkbox" <?php if ($_smarty_tpl->tpl_vars['product']->value->featured) {?>checked=""<?php }?>/>
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="row">
        <div class="col-lg-8 col-md-12 pr-0 ">
            <div class="boxed fn_toggle_wrap min_height_230px">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->product_images, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>

                <div class="toggle_body_wrap fn_card on ">
                    <ul class="fn_droplist_wrap product_images_list clearfix sortable" data-image="product">
                        <li class="fn_dropzone dropzone_block">
                            <i class="fa fa-plus font-5xl" aria-hidden="true"></i>
                            <input type="file" name="dropped_images[]" multiple class="dropinput">
                        </li>
                        <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['image']->iteration=0;
 $_smarty_tpl->tpl_vars['image']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
 $_smarty_tpl->tpl_vars['image']->iteration++;
 $_smarty_tpl->tpl_vars['image']->index++;
 $_smarty_tpl->tpl_vars['image']->first = $_smarty_tpl->tpl_vars['image']->index === 0;
?>
                            <li class="product_image_item <?php if ($_smarty_tpl->tpl_vars['image']->first) {?>first_image<?php }?> <?php if ($_smarty_tpl->tpl_vars['image']->iteration>4) {?>fn_toggle_hidden hidden<?php }?> fn_sort_item">
                                <button type="button" class="fn_remove_image remove_image"></button>
                                <i class="move_zone">
                                    <?php if ($_smarty_tpl->tpl_vars['image']->value) {?>
                                         <img class="product_icon" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['image']->value->filename,300,120);?>
" alt=""/>
                                    <?php } else { ?>
                                        <img class="product_icon" src="design/images/no_image.png" width="40">
                                    <?php }?>
                                   <input type=hidden name='images[]' value="<?php echo $_smarty_tpl->tpl_vars['image']->value->id;?>
">
                                </i>
                            </li>
                        <?php } ?>
                        <li class="fn_new_image_item product_image_item fn_sort_item">
                            <button type="button" class="fn_remove_image remove_image"></button>
                            <img src="" alt=""/>
                            <input type=hidden name='images_urls[]' value="">
                        </li>
                    </ul>
                    <?php if (count($_smarty_tpl->tpl_vars['product_images']->value)>4) {?>
                        <div class="show_more_images fn_show_images"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->product_images_all, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <?php }?>
                </div>
            </div>
        </div>

        
        <div class="col-lg-4 col-md-12 ">
            <div class="boxed fn_toggle_wrap min_height_230px">
                <div class="heading_label">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_brand, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="icon-arrow-down"></i></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 toggle_body_wrap on fn_card ">
                        <select name="brand_id" class="selectpicker mb-1<?php if (!$_smarty_tpl->tpl_vars['brands']->value) {?>hidden<?php }?> fn_meta_brand" data-live-search="true">
                            <option value="0" <?php if (!$_smarty_tpl->tpl_vars['product']->value->brand_id) {?>selected=""<?php }?> data-brand_name=""><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_not_set, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            <?php  $_smarty_tpl->tpl_vars['brand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['brand']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['brands']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->key => $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['brand']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['product']->value->brand_id==$_smarty_tpl->tpl_vars['brand']->value->id) {?>selected=""<?php }?> data-brand_name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            <?php } ?>
                        </select>
                        <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_category, ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <div id="product_cats">
                            <?php $_smarty_tpl->tpl_vars['first_category'] = new Smarty_variable(reset($_smarty_tpl->tpl_vars['product_categories']->value), null, 0);?>
                            <select class="selectpicker  mb-1 fn_product_category fn_meta_categories" data-live-search="true">
                                <option value="0" selected="" disabled="" data-category_name=""><?php echo $_smarty_tpl->tpl_vars['btr']->value->product_select_category;?>
</option>
                                <?php if (!function_exists('smarty_template_function_category_select')) {
    function smarty_template_function_category_select($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['category_select']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
                                    <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['category']->value->id==$_smarty_tpl->tpl_vars['first_category']->value->id) {?>selected<?php }?> data-category_name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sp'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sp']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['name'] = 'sp';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['level']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['total']);
?>- <?php endfor; endif; ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <?php smarty_template_function_category_select($_smarty_tpl,array('categories'=>$_smarty_tpl->tpl_vars['category']->value->subcategories,'level'=>$_smarty_tpl->tpl_vars['level']->value+1));?>

                                    <?php } ?>
                                <?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

                                <?php smarty_template_function_category_select($_smarty_tpl,array('categories'=>$_smarty_tpl->tpl_vars['categories']->value));?>

                            </select>
                            <div id="sortable_cat" class="fn_product_categories_list">
                                <?php  $_smarty_tpl->tpl_vars['product_category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product_category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product_category']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['product_category']->key => $_smarty_tpl->tpl_vars['product_category']->value) {
$_smarty_tpl->tpl_vars['product_category']->_loop = true;
 $_smarty_tpl->tpl_vars['product_category']->index++;
 $_smarty_tpl->tpl_vars['product_category']->first = $_smarty_tpl->tpl_vars['product_category']->index === 0;
?>
                                    <div class="fn_category_item product_category_item <?php if ($_smarty_tpl->tpl_vars['product_category']->first) {?>first_category<?php }?>">
                                        <span class="product_cat_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_category']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                        <label class="fn_delete_product_cat fa fa-times" for="id_<?php echo $_smarty_tpl->tpl_vars['product_category']->value->id;?>
"></label>
                                        <input id="id_<?php echo $_smarty_tpl->tpl_vars['product_category']->value->id;?>
" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['product_category']->value->id;?>
" data-cat_name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_category']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" checked="" name="categories[]">
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="fn_category_item fn_new_category_item product_category_item">
                                <span class="product_cat_name"></span>
                                <label class="fn_delete_product_cat fa fa-times" for=""></label>
                                <input id="" type="checkbox" value="" name="categories[]" data-cat_name="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="row">
        <div class="col-lg-12 col-md-12 ">
            <div class="boxed fn_toggle_wrap match_matchHeight_true">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_options, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>

                <div class="variants_wrapper fn_card">
                    <div class="okay_list variants_list scrollbar-variant">
                        <div class="okay_list_body sortable variants_listadd">
                            <?php  $_smarty_tpl->tpl_vars['variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_variants']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['variant']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->key => $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->_loop = true;
 $_smarty_tpl->tpl_vars['variant']->index++;
 $_smarty_tpl->tpl_vars['variant']->first = $_smarty_tpl->tpl_vars['variant']->index === 0;
?>
                                <div class="okay_list_body_item variants_list_item ">
                                    <div class="okay_list_row">
                                        <div class="okay_list_boding variants_item_drag">
                                            <div class="heading_label"></div>
                                            <div class="move_zone">
                                                <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'drag_vertical'), 0);?>

                                            </div>
                                        </div>
                                        <div class="okay_list_boding variants_item_sku">
                                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_sku, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                            <input class="variant_input" name="variants[sku][]" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value->sku, ENT_QUOTES, 'UTF-8', true);?>
"/>
                                        </div>
                                        <div class="okay_list_boding variants_item_name">
                                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_option_name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                            <input name="variants[id][]" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value->id, ENT_QUOTES, 'UTF-8', true);?>
" />
                                            <input class="variant_input" name="variants[name][]" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" />
                                        </div>
                                        <div class="okay_list_boding variants_item_price">
                                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_price, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                            <input class="variant_input" name="variants[price][]" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value->price, ENT_QUOTES, 'UTF-8', true);?>
"/>
                                        </div>
                                        <div class="okay_list_boding variants_item_discount">
                                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_old_price, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                            <input class="variant_input" name="variants[compare_price][]" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value->compare_price, ENT_QUOTES, 'UTF-8', true);?>
"/>
                                        </div>
                                        <div class="okay_list_boding variants_item_currency">
                                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_currency, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                            <select name="variants[currency_id][]" class="selectpicker">
                                                <?php  $_smarty_tpl->tpl_vars['currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['currency']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->key => $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->_loop = true;
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['currency']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['currency']->value->id==$_smarty_tpl->tpl_vars['variant']->value->currency_id) {?>selected=""<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->code, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="okay_list_boding variants_item_weight">
                                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_weight, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                            <input class="variant_input" name="variants[weight][]" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value->weight, ENT_QUOTES, 'UTF-8', true);?>
"/>
                                        </div>
                                        <div class="okay_list_boding variants_item_amount">
                                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_qty, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                            <input class="variant_input" name="variants[stock][]" type="text" value="<?php if ($_smarty_tpl->tpl_vars['variant']->value->infinity||$_smarty_tpl->tpl_vars['variant']->value->stock=='') {?>∞<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value->stock, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"/>
                                        </div>
                                        <div class="okay_list_boding variants_item_units">
                                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->products_variant_units, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                            <input class="variant_input" name="variants[units][]" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value->units, ENT_QUOTES, 'UTF-8', true);?>
"/>
                                        </div>
                                    </div>
                                    <div class="okay_list_row">
                                        <div class="okay_list_boding variants_item_drag"></div>
                                        <div class="okay_list_boding variants_item_yandex">
                                            <div class="okay_switch clearfix">
                                                <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_add_xml_short, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                                <label class="switch switch-default switch-pill switch-primary-outline-alt">
                                                    <input class="switch-input" name="feed[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value->id, ENT_QUOTES, 'UTF-8', true);?>
]" value="1" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['variant']->value->feed) {?>checked=""<?php }?>/>
                                                    <span class="switch-label"></span>
                                                    <span class="switch-handle"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="okay_list_boding variants_item_file fn_file_wrap">
                                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_digital_product, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                            <input type="file" name="attachment[]" />
                                            <input type="hidden" name="delete_attachment[]" />
                                            <?php if ($_smarty_tpl->tpl_vars['variant']->value->attachment) {?>
                                                <span class=fn_attachment_name><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['variant']->value->attachment,25,'...',false,true);?>
</span>
                                                <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_delete_file, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="btn_close delete_grey fn_remove_attach hint-top-middle-t-info-s-small-mobile  hint-anim">
                                                    <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'delete'), 0);?>

                                                </button>
                                            <?php }?>
                                        </div>
                                        <?php if (!$_smarty_tpl->tpl_vars['variant']->first) {?>
                                            <div class="okay_list_boding okay_list_close remove_variant">
                                                <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_delete_product, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="btn_close fn_remove_variant hint-bottom-right-t-info-s-small-mobile  hint-anim">
                                                    <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'delete'), 0);?>

                                                </button>
                                             </div>
                                        <?php }?>
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="okay_list_body_item variants_list_item fn_new_row_variant">
                                <div class="okay_list_row ">
                                    <div class="okay_list_boding variants_item_drag">
                                        <div class="heading_label"></div>
                                        <div class="move_zone">
                                            <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'drag_vertical'), 0);?>

                                        </div>
                                    </div>
                                    <div class="okay_list_boding variants_item_sku">
                                        <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_sku, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                        <input class="variant_input" name="variants[sku][]" type="text" value=""/>
                                    </div>
                                    <div class="okay_list_boding variants_item_name">
                                        <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_option_name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                        <input name="variants[id][]" type="hidden" value="" />
                                        <input class="variant_input" name="variants[name][]" type="text" value="" />
                                    </div>
                                    <div class="okay_list_boding variants_item_price">
                                        <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_price, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                        <input class="variant_input" name="variants[price][]" type="text" value=""/>
                                    </div>
                                    <div class="okay_list_boding variants_item_discount">
                                        <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_old_price, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                        <input class="variant_input" name="variants[compare_price][]" type="text" value=""/>
                                    </div>
                                    <div class="okay_list_boding variants_item_currency">
                                        <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_currency, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                        <select name="variants[currency_id][]" class="selectpicker">
                                            <?php  $_smarty_tpl->tpl_vars['currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['currency']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->key => $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->_loop = true;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['currency']->value->id;?>
" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->code, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="okay_list_boding variants_item_weight">
                                        <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_weight, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                        <input class="variant_input" name="variants[weight][]" type="text" value=""/>
                                    </div>
                                    <div class="okay_list_boding variants_item_amount">
                                        <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_qty, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                        <input class="variant_input" name="variants[stock][]" type="text" value=""/>
                                    </div>
                                    <div class="okay_list_boding variants_item_units">
                                        <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->products_variant_units, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                        <input class="variant_input" name="variants[units][]" type="text" value=""/>
                                    </div>
                                </div>
                                <div class="okay_list_row">
                                    <div class="okay_list_boding variants_item_drag"></div>
                                    <div class="okay_list_boding variants_item_file">
                                        <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_digital_product, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                        <input type="file" name="attachment[]" />
                                        <input type="hidden" name="delete_attachment[]" />
                                        <span class=fn_attachment_name></span>
                                    </div>
                                    <div class="okay_list_boding okay_list_close remove_variant">
                                        <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_delete_product, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="btn_close fn_remove_variant hint-bottom-right-t-info-s-small-mobile  hint-anim">
                                            <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'delete'), 0);?>

                                        </button>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box_btn_heading mt-1">
                        <button type="button" class="btn btn_mini btn-info fn_add_variant">
                            <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'plus'), 0);?>

                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->product_add_option, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="row">
        <div class="col-lg-8 col-md-12 pr-0 ">
            <div class="boxed fn_toggle_wrap min_height_230px">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->product_promotions, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card">
                    <ul class="fn_droplist_wrap product_images_list clearfix sortable" data-image="special">
                        <li class="fn_dropzone dropzone_block">
                            <i class="fa fa-plus font-5xl" aria-hidden="true"></i>
                            <input type="file" name="spec_dropped_images[]" multiple class="dropinput">
                        </li>
                        <?php if (count($_smarty_tpl->tpl_vars['special_images']->value)>0) {?>
                            <?php  $_smarty_tpl->tpl_vars['special'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['special']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['special_images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['special']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['special']->key => $_smarty_tpl->tpl_vars['special']->value) {
$_smarty_tpl->tpl_vars['special']->_loop = true;
 $_smarty_tpl->tpl_vars['special']->iteration++;
?>
                                <li class="product_image_item <?php if ($_smarty_tpl->tpl_vars['special']->iteration>4) {?>fn_toggle_hidden hidden<?php }?> fn_sort_item <?php if ($_smarty_tpl->tpl_vars['product']->value->special==$_smarty_tpl->tpl_vars['special']->value->filename) {?>product_special<?php }?>">
                                    <button type="button" class=" fn_remove_image remove_image"></button>
                                    <i class="move_zone">
                                        <img class="product_icon" title="<?php echo $_smarty_tpl->tpl_vars['special']->value->name;?>
" src="../<?php echo $_smarty_tpl->tpl_vars['config']->value->special_images_dir;?>
<?php echo $_smarty_tpl->tpl_vars['special']->value->filename;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['special']->value->filename;?>
" />
                                        <span class="fn_change_special change_special" data-origin="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_select, ENT_QUOTES, 'UTF-8', true);?>
" data-result="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_unselect, ENT_QUOTES, 'UTF-8', true);?>
">
                                            <?php if ($_smarty_tpl->tpl_vars['product']->value->special==$_smarty_tpl->tpl_vars['special']->value->filename) {?>
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_unselect, ENT_QUOTES, 'UTF-8', true);?>

                                            <?php } else { ?>
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_select, ENT_QUOTES, 'UTF-8', true);?>

                                            <?php }?>
                                        </span>
                                        <input type="radio" name="special" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['special']->value->filename, ENT_QUOTES, 'UTF-8', true);?>
" class="hidden" <?php if ($_smarty_tpl->tpl_vars['product']->value->special==$_smarty_tpl->tpl_vars['special']->value->filename) {?>checked<?php }?>>
                                    </i>
                                    <input type="hidden" name="spec_images[]" value="<?php echo $_smarty_tpl->tpl_vars['special']->value->id;?>
" />
                                </li>
                            <?php } ?>
                        <?php }?>
                        <li class="fn_new_spec_image_item product_image_item fn_sort_item">
                            <button type="button" class="fn_remove_image remove_image"></button>
                            <img src="" alt=""/>
                            <input type="hidden" name='spec_images_urls[]' value="" />
                            <i class="move_zone fa fa-arrows font-2xl"></i>
                        </li>
                    </ul>
                    <?php if (count($_smarty_tpl->tpl_vars['special_images']->value)>4) {?>
                        <div class="show_more_images fn_show_images"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->product_images_all, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <?php }?>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4 col-md-12">
            <div class="boxed fn_toggle_wrap min_height_230px">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->product_rating, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card">
                    <div class="heading_label">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->product_rating_value, ENT_QUOTES, 'UTF-8', true);?>

                        <span class="font-weight-bold fn_show_rating"><?php echo $_smarty_tpl->tpl_vars['product']->value->rating;?>
</span>
                    </div>
                    <div class="raiting_boxed">
                        <input class="fn_rating_value" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->rating;?>
" name="rating" />
                        <input class="fn_rating range_input" type="range" min="1" max="5" step="0.1" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->rating;?>
" />

                        <div class="raiting_range_number">
                            <span class="float-xs-left">1</span>
                            <span class="float-xs-right">5</span>
                        </div>
                    </div>
                    <div class="heading_label">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->product_rating_number, ENT_QUOTES, 'UTF-8', true);?>

                        <input type="text" class="form-control" name="votes" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->votes;?>
">
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="row">
        <div class="col-lg-6 col-md-12 pr-0 ">
            <div class="boxed fn_toggle_wrap min_height_210px">
            <div class="heading_box">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->product_features, ENT_QUOTES, 'UTF-8', true);?>

                <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                    <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                </div>
            </div>
            <div class="toggle_body_wrap on fn_card">
                <div class="features_wrap fn_features_wrap">
                    <?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->_loop = true;
?>
                        <?php $_smarty_tpl->tpl_vars["feature_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['feature']->value->id, null, 0);?>
                        <div class="feature_row clearfix">
                            <div class="feature_name">
                                <span title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            </div>
                            <div class="feature_value">
                                <input class="feature_input fn_auto_option" data-id="<?php echo $_smarty_tpl->tpl_vars['feature_id']->value;?>
" type="text" name="options[<?php echo $_smarty_tpl->tpl_vars['feature_id']->value;?>
][value]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['options']->value[$_smarty_tpl->tpl_vars['feature_id']->value]->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="fn_new_feature">
                        <div class="new_feature_row clearfix">
                            <div class="wrap_inner_new_feature">
                                <input type="text" class="new_feature new_feature_name" name="new_features_names[]" placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->product_features_enter, ENT_QUOTES, 'UTF-8', true);?>
" />
                                <input type="text" class="new_feature new_feature_value"  name="new_features_values[]" placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->product_features_value_enter, ENT_QUOTES, 'UTF-8', true);?>
"/>
                            </div>
                            <span class="fn_delete_feature btn_close delete_feature">
                                <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'delete'), 0);?>

                            </span>
                        </div>
                    </div>
                    <div class="fn_new_feature_category feature_row clearfix">
                        <div class="feature_name">
                            <span title="" class="fn_feature_name"></span>
                        </div>
                        <div class="feature_value">
                            <input class="feature_input fn_auto_option" data-id="" type="text" name="" value=""/>
                        </div>
                    </div>
                </div>
                <div class="box_btn_heading mt-1">
                    <button type="button" class="btn btn_mini btn-info fn_add_feature">
                    <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'plus'), 0);?>

                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->product_feature_add, ENT_QUOTES, 'UTF-8', true);?>
</span>
                    </button>
                </div>
            </div>
        </div>
        </div>

        
        <div class="col-lg-6 col-md-12">
            <div class="boxed fn_toggle_wrap min_height_210px">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_recommended, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card fn_sort_list">
                    <div class="okay_list ok_related_list">
                        <div class="okay_list_body related_products sortable">
                            <?php  $_smarty_tpl->tpl_vars['related_product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['related_product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['related_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['related_product']->key => $_smarty_tpl->tpl_vars['related_product']->value) {
$_smarty_tpl->tpl_vars['related_product']->_loop = true;
?>
                                <div class="fn_row okay okay_list_body_item fn_sort_item">
                                    <div class="okay_list_row">
                                        <div class="okay_list_boding okay_list_drag move_zone">
                                            <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'drag_vertical'), 0);?>

                                        </div>
                                        <div class="okay_list_boding okay_list_related_photo">
                                            <input type="hidden" name=related_products[] value='<?php echo $_smarty_tpl->tpl_vars['related_product']->value->id;?>
'>
                                            <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'ProductAdmin','id'=>$_smarty_tpl->tpl_vars['related_product']->value->id),$_smarty_tpl);?>
">
                                                <?php if ($_smarty_tpl->tpl_vars['related_product']->value->images[0]) {?>
                                                    <img class="product_icon" src='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['related_product']->value->images[0]->filename,40,40);?>
'>
                                                <?php } else { ?>
                                                    <img class="product_icon" src="design/images/no_image.png" width="40">
                                                <?php }?>
                                            </a>
                                        </div>
                                        <div class="okay_list_boding okay_list_related_name">
                                            <a class="link" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'ProductAdmin','id'=>$_smarty_tpl->tpl_vars['related_product']->value->id),$_smarty_tpl);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['related_product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                        </div>
                                        <div class="okay_list_boding okay_list_close">
                                            <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_delete_product, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="btn_close fn_remove_item hint-bottom-right-t-info-s-small-mobile  hint-anim">
                                                <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'delete'), 0);?>

                                            </button>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <div id="new_related_product" class="fn_row okay okay_list_body_item fn_sort_item" style='display:none;'>
                                <div class="okay_list_row">
                                    <div class="okay_list_boding okay_list_drag move_zone">
                                        <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'drag_vertical'), 0);?>

                                    </div>
                                    <div class="okay_list_boding okay_list_related_photo">
                                        <input type="hidden" name="related_products[]" value="">
                                        <img class=product_icon src="">
                                    </div>
                                    <div class="okay_list_boding okay_list_related_name">
                                        <a class="link related_product_name" href=""></a>
                                    </div>
                                    <div class="okay_list_boding okay_list_close">
                                        <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_delete_product, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="btn_close fn_remove_item hint-bottom-right-t-info-s-small-mobile  hint-anim">
                                            <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'delete'), 0);?>

                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_recommended_add, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="autocomplete_arrow">
                        <input type=text name=related id="related_products" class="form-control" placeholder='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_add_product, ENT_QUOTES, 'UTF-8', true);?>
'>
                    </div>
                </div>
            </div>

        </div>
    </div>

    
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="boxed match fn_toggle_wrap">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_metatags, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card row">
                    <div class="col-lg-6 col-md-6">
                        <div class="heading_label" >Meta-title</div>
                        <input name="meta_title" class="form-control fn_meta_field mb-h" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->meta_title, ENT_QUOTES, 'UTF-8', true);?>
" />
                        <div class="heading_label" >Meta-keywords</div>
                        <input name="meta_keywords" class="form-control fn_meta_field mb-h" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->meta_keywords, ENT_QUOTES, 'UTF-8', true);?>
" />
                    </div>

                    <div class="col-lg-6 col-md-6 pl-0">
                        <div class="heading_label" >Meta-description</div>
                        <textarea name="meta_description" class="form-control okay_textarea fn_meta_field"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->meta_description, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="boxed match fn_toggle_wrap tabs">
                <div class="heading_tabs">
                    <div class="tab_navigation">
                        <a href="#tab1" class="heading_box tab_navigation_link"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_short_description, ENT_QUOTES, 'UTF-8', true);?>
</a>
                        <a href="#tab2" class="heading_box tab_navigation_link"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_full_description, ENT_QUOTES, 'UTF-8', true);?>
</a>
                    </div>
                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="icon-arrow-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card">
                    <div class="tab_container">
                        <div id="tab1" class="tab">
                            <textarea name="annotation" id="annotation" class="editor_small"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->annotation, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                        </div>
                        <div id="tab2" class="tab">
                            <textarea id="fn_editor" name="description" class="editor_large fn_editor_class"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->description, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 mt-1">
                        <button type="submit" class="btn btn_small btn_blue float-md-right">
                            <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'checked'), 0);?>

                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<?php echo $_smarty_tpl->getSubTemplate ('tinymce_init.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



    <script src="design/js/autocomplete/jquery.autocomplete-min.js"></script>
    <script src="design/js/chosen/chosen.jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="design/js/chosen/chosen.min.css" media="screen" />
<script>
    $(window).on("load", function() {

        $(document).on("click", ".fn_show_images",function () {
           $(this).prev().find($(".fn_toggle_hidden")).toggleClass("hidden");
        });
        // Удаление товара
        $(document).on( "click", ".fn_remove_item", function() {
            $(this).closest(".fn_row").fadeOut(200, function() { $(this).remove(); });
            return false;
        });
        $(".chosen").chosen('chosen-select');

        $(document).on("input", ".fn_rating", function () {
            $(".fn_show_rating").html($(this).val());
            $(".fn_rating_value").val($(this).val());
        });

        var image_item_clone = $(".fn_new_image_item").clone(true);
        $(".fn_new_image_item").remove();
        var new_image_tem_clone = $(".fn_new_spec_image_item").clone(true);
        $(".fn_new_spec_image_item").remove();
        // Или перетаскиванием
        if(window.File && window.FileReader && window.FileList) {

            $(".fn_dropzone").on('dragover', function (e){
                e.preventDefault();
                $(this).css('background', '#bababa');
            });
            $(".fn_dropzone").on('dragleave', function(){
                $(this).css('background', '#f8f8f8');
            });

            function handleFileSelect(evt){
                dropInput = $(this).closest(".fn_droplist_wrap").find("input.dropinput:last").clone();
                var parent = $(this).closest(".fn_droplist_wrap");
                var files = evt.target.files; // FileList object
                // Loop through the FileList and render image files as thumbnails.
                for (var i = 0, f; f = files[i]; i++) {
                    // Only process image files.
                    if (!f.type.match('image.*')) {
                        continue;
                    }
                    var reader = new FileReader();
                    // Closure to capture the file information.
                    reader.onload = (function(theFile) {
                        return function(e) {
                            // Render thumbnail.
                            if(parent.data('image') == "product"){
                                var clone_item = image_item_clone.clone(true);
                            } else if(parent.data('image') == "special") {
                                var clone_item = new_image_tem_clone.clone(true);
                            }
                            clone_item.find("img").attr("onerror",'');
                            clone_item.find("img").attr("src", e.target.result);
                            clone_item.find("input").val(theFile.name);
                            clone_item.appendTo(parent);
                            temp_input =  dropInput.clone();
                            parent.find("input.dropinput").hide();
                            parent.find(".fn_dropzone").append(temp_input);
                        };
                    })(f);
                    // Read in the image file as a data URL.
                    reader.readAsDataURL(f);
                }
                $(".fn_dropzone").removeAttr("style");
            }
            $(document).on('change','.dropinput',handleFileSelect);
        }
        $(document).on("click", ".fn_remove_image", function () {
            $(this).closest("li").remove();
        });
        $(document).on("click", ".fn_change_special", function () {
            if($(this).closest('li').hasClass("product_special")) {
                $(this).closest("ul").find("input[type=radio]").attr("checked", false);
                $(this).closest("li").removeClass("product_special");
                $(this).text($(this).data("origin"));
            } else {
                $(this).closest("ul").find("input[type=radio]").attr("checked", false);
                $(this).closest("li").removeClass("product_special");
                $(this).closest("li").find("input[type=radio]").attr("checked", true).click();
                $(this).closest("ul").find("li").removeClass("product_special");
                $(this).closest("li").addClass("product_special");
                $(this).text($(this).data("result"));
            }

        });
        $(document).on("click",".fn_remove_variant",function () {
            $(this).closest(".variants_list_item ").fadeOut(200);
            $(this).closest(".variants_list_item ").remove();
        });
        // Удаление варианта

        // Удалить файл к варианту
        $(document).on("click", ".fn_remove_attach", function () {
            closest = $(this).closest(".fn_file_wrap");
            closest.find(".fn_attachment_name").hide("slow");
            $(this).hide("slow");
            closest.find("input[name*=delete_attachment]").val("1");
            return false;
        });

        // Добавление варианта
        var variant = $(".fn_new_row_variant").clone(false);
        $(".fn_new_row_variant").remove();
        variant.find('.bootstrap-select').replaceWith(function() { return $('select', this); });
        $(document).on("click", ".fn_add_variant", function () {
           var variant_clone = variant.clone(true);
           variant_clone.find("select").selectpicker();
           variant_clone.removeClass("hidden").removeClass("fn_new_row_variant");
           $(".variants_listadd").append(variant_clone);
            return false;
        });

        var clone_cat = $(".fn_new_category_item").clone();
        $(".fn_new_category_item").remove();
        clone_cat.removeClass("fn_new_category_item");
        $(document).on("change", ".fn_product_category select", function () {
            var clone = clone_cat.clone();
            clone.find("label").attr("for","id_"+$(this).find("option:selected").val());
            clone.find("span").html($(this).find("option:selected").data("category_name"));
            clone.find("input").attr("id","id_"+$(this).find("option:selected").val());
            clone.find("input").val($(this).find("option:selected").val());
            clone.find("input").attr("checked",true);
            clone.find("input").attr("data-cat_name",$(this).find("option:selected").data("category_name"));
            $(".fn_product_categories_list").append(clone);
            if ($(".fn_category_item").size() == 1) {
                change_product_category();
            }
        });
        $(document).on("click", ".fn_delete_product_cat", function () {
            var item = $(this).closest(".fn_category_item"),
                is_first = item.hasClass("first_category");
            item.remove();
            if (is_first && $(".fn_category_item").size() > 0) {
                change_product_category();
            }
        });

        var el = document.getElementById('sortable_cat');
        var sortable = Sortable.create(el, {
            handle: ".product_cat_name",  // Drag handle selector within list items
            sort: true,  // sorting inside list
            animation: 150,  // ms, animation speed moving items when sorting, `0` — without animation

            ghostClass: "sortable-ghost",  // Class name for the drop placeholder
            chosenClass: "sortable-chosen",  // Class name for the chosen item
            dragClass: "sortable-drag",  // Class name for the dragging item
            scrollSensitivity: 30, // px, how near the mouse must be to an edge to start scrolling.
            scrollSpeed: 10, // px
            // Changed sorting within list
            onUpdate: function (evt) {
                change_product_category();
            }
        });

        function change_product_category() {
            var wrapper = $(".fn_product_categories_list");
            var first_category = wrapper.find("div.fn_category_item:first input").val();
            wrapper.find("div.first_category").removeClass("first_category");
            wrapper.find("div.fn_category_item:first ").addClass("first_category");
            set_meta();
            show_category_features(first_category);
        }

        var new_feature_category = $(".fn_new_feature_category").clone(true);
        $(".fn_new_feature_category").remove();
        new_feature_category.removeClass("fn_new_feature_category");
        function show_category_features(category_id)
        {
            $("div.fn_features_wrap").empty();
            $.ajax({
                url: "ajax/get_features.php",
                data: {category_id: category_id, product_id: $("input[name=id]").val()},
                dataType: 'json',
                success: function(data){
                    for(i=0; i<data.length; i++)
                    {
                        feature = data[i];
                        var new_line = new_feature_category.clone(true);
                        new_line.find(".fn_feature_name").text(feature.name).attr('title', feature.name);
                        var value = new_line.find(".fn_auto_option");
                        value.data('id', feature.id);
                        value.attr('name', "options["+feature.id+"][value]");
                        value.val(feature.value);
                        value.autocomplete({
                            serviceUrl:'ajax/options_autocomplete.php',
                            minChars:0,
                            params: {feature_id:feature.id},
                            noCache: false,
                            onSelect:function(suggestion){
                                $(this).trigger('change');
                            }
                        });
                        new_line.appendTo("div.fn_features_wrap");
                    }
                }
            });
            return false;
        }

        // Автодополнение свойств
        $(".fn_auto_option").each(function() {
            feature_id = $(this).data("id");
            $(this).autocomplete({
                serviceUrl:'ajax/options_autocomplete.php',
                minChars:0,
                params: {feature_id:feature_id},
                noCache: false,
                onSelect:function(sugestion){
                    $(this).trigger('change');
                }
            });
        });

        // Добавление нового свойства товара
        var new_feature = $(".fn_new_feature").clone(true);
        $(".fn_new_feature").remove();
        new_feature.removeClass("fn_new_feature");
        $(document).on("click",".fn_add_feature",function () {
            $(new_feature).clone(true).appendTo(".features_wrap").fadeIn('slow');
            return false;
        });
        $(document).on("click",".fn_delete_feature",function () {
           $(this).parent().remove();
        });


        // Добавление связанного товара
        var new_related_product = $('#new_related_product').clone(true);
        $('#new_related_product').remove();
        new_related_product.removeAttr('id');
        $("input#related_products").autocomplete({
            serviceUrl:'ajax/search_products.php',
            minChars:0,
            noCache: false,
            onSelect:
                function(suggestion){
                    $("input#related_products").val('').focus().blur();
                    new_item = new_related_product.clone().appendTo('.related_products');
                    new_item.find('a.related_product_name').html(suggestion.data.name);
                    new_item.find('a.related_product_name').attr('href', 'index.php?module=ProductAdmin&id='+suggestion.data.id);
                    new_item.find('input[name*="related_products"]').val(suggestion.data.id);
                    if(suggestion.data.image)
                        new_item.find('img.product_icon').attr("src", suggestion.data.image);
                    else
                        new_item.find('img.product_icon').remove();
                    new_item.show();
                },
            formatResult:
                function(suggestions, currentValue){
                    var reEscape = new RegExp('(\\' + ['/', '.', '*', '+', '?', '|', '(', ')', '[', ']', '{', '}', '\\'].join('|\\') + ')', 'g');
                    var pattern = '(' + currentValue.replace(reEscape, '\\$1') + ')';
                    return "<div>" + (suggestions.data.image?"<img align=absmiddle src='"+suggestions.data.image+"'> ":'') + "</div>" +  "<span>" + suggestions.value.replace(new RegExp(pattern, 'gi'), '<strong>$1<\/strong>') + "</span>";
                }

        });
        // infinity
        $("input[name*=variant][name*=stock]").focus(function() {
            if($(this).val() == '∞')
                $(this).val('');
            return false;
        });

        $("input[name*=variant][name*=stock]").blur(function() {
            if($(this).val() == '')
                $(this).val('∞');
        });
    });
</script>
<?php }} ?>
