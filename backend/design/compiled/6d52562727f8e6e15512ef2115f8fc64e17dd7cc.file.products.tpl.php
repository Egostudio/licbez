<?php /* Smarty version Smarty-3.1.18, created on 2019-04-14 19:22:54
         compiled from "backend/design/html/products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6145548375cb36c6ee98c77-58561834%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d52562727f8e6e15512ef2115f8fc64e17dd7cc' => 
    array (
      0 => 'backend/design/html/products.tpl',
      1 => 1553339313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6145548375cb36c6ee98c77-58561834',
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
    'category_select_btn' => 
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
    'category' => 0,
    'btr' => 0,
    'products_count' => 0,
    'brand' => 0,
    'keyword' => 0,
    'filter' => 0,
    'category_id' => 0,
    'categories' => 0,
    'c' => 0,
    'level' => 0,
    'brand_id' => 0,
    'brands' => 0,
    'b' => 0,
    'current_limit' => 0,
    'products' => 0,
    'product' => 0,
    'image' => 0,
    'currencies' => 0,
    'settings' => 0,
    'brands_name' => 0,
    'lang_link' => 0,
    'variant' => 0,
    'pages_count' => 0,
    'all_brands' => 0,
    'selected_id' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5cb36c6f2d60d6_49030659',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cb36c6f2d60d6_49030659')) {function content_5cb36c6f2d60d6_49030659($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['category']->value) {?>
	<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['category']->value->name, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['btr']->value->general_products, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>
<?php }?>


<div class="row">
    <div class="col-lg-7 col-md-12">
        <div class="wrap_heading">
            <?php if ($_smarty_tpl->tpl_vars['products_count']->value) {?>
                <div class="box_heading heading_page">
                    <?php if ($_smarty_tpl->tpl_vars['category']->value->name||$_smarty_tpl->tpl_vars['brand']->value->name) {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->name, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->name, ENT_QUOTES, 'UTF-8', true);?>
 - <?php echo $_smarty_tpl->tpl_vars['products_count']->value;?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['keyword']->value) {?>
                         <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_products, ENT_QUOTES, 'UTF-8', true);?>
 - <?php echo $_smarty_tpl->tpl_vars['products_count']->value;?>

                    <?php } else { ?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_products, ENT_QUOTES, 'UTF-8', true);?>
 - <?php echo $_smarty_tpl->tpl_vars['products_count']->value;?>

                    <?php }?>
                </div>
            <?php } else { ?>
                <div class="box_heading heading_page"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->products_no, ENT_QUOTES, 'UTF-8', true);?>
</div>
            <?php }?>
            <div class="box_btn_heading">
                <a class="btn btn_small btn-info" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'ProductAdmin','return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl);?>
">
                    <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'plus'), 0);?>

                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->products_add, ENT_QUOTES, 'UTF-8', true);?>
</span>
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-5 col-xs-12 float-xs-right">
        <div class="boxed_search">
            <form class="search" method="get">
            <input type="hidden" name="module" value="ProductsAdmin">
            <div class="input-group">
                <input name="keyword" class="form-control" placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->products_search, ENT_QUOTES, 'UTF-8', true);?>
" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['keyword']->value, ENT_QUOTES, 'UTF-8', true);?>
" >
                <span class="input-group-btn">
                    <button type="submit" class="btn btn_blue"><i class="fa fa-search"></i> <span class="hidden-md-down"></span></button>
                </span>
            </div>
            </form>
        </div>
    </div>
</div>

<div class="boxed fn_toggle_wrap">
    <div class="row">
        <div class="col-lg-12 col-md-12 ">
            <div class="boxed_sorting">
                <div class="row">
                    <div class="col-md-3 col-lg-3 col-sm-12">
                        <div>
                            <select id="id_filter" name="products_filter" class="selectpicker form-control" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->products_filter, ENT_QUOTES, 'UTF-8', true);?>
" data-live-search="true" onchange="location = this.value;">
                                <option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('brand_id'=>null,'category_id'=>null,'keyword'=>null,'page'=>null,'limit'=>null,'filter'=>null),$_smarty_tpl);?>
" <?php if (!$_smarty_tpl->tpl_vars['filter']->value) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_all_products, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('keyword'=>null,'brand_id'=>null,'category_id'=>null,'page'=>null,'limit'=>null,'filter'=>'featured'),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['filter']->value=='featured') {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->products_bestsellers, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('keyword'=>null,'brand_id'=>null,'category_id'=>null,'page'=>null,'limit'=>null,'filter'=>'discounted'),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['filter']->value=='discounted') {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->products_discount, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('keyword'=>null,'brand_id'=>null,'category_id'=>null,'page'=>null,'limit'=>null,'filter'=>'visible'),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['filter']->value=='visible') {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->products_enable, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('keyword'=>null,'brand_id'=>null,'category_id'=>null,'page'=>null,'limit'=>null,'filter'=>'hidden'),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['filter']->value=='hidden') {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->products_disable, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('keyword'=>null,'brand_id'=>null,'category_id'=>null,'page'=>null,'limit'=>null,'filter'=>'outofstock'),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['filter']->value=='outofstock') {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->products_out_of_stock, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('keyword'=>null,'brand_id'=>null,'category_id'=>null,'page'=>null,'limit'=>null,'filter'=>'in_feed'),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['filter']->value=='in_feed') {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_add_xml_short, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('keyword'=>null,'brand_id'=>null,'category_id'=>null,'page'=>null,'limit'=>null,'filter'=>'out_feed'),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['filter']->value=='out_feed') {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_not_in_xml_short, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('keyword'=>null,'brand_id'=>null,'category_id'=>null,'page'=>null,'limit'=>null,'filter'=>'without_images'),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['filter']->value=='without_images') {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->products_without_photos, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-12">
                        <select id="id_categories" name="categories_filter" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_category_filter, ENT_QUOTES, 'UTF-8', true);?>
" class="selectpicker form-control" data-live-search="true" data-size="10" onchange="location = this.value;">
                            <option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('keyword'=>null,'brand_id'=>null,'page'=>null,'limit'=>null,'category_id'=>null),$_smarty_tpl);?>
" <?php if (!$_smarty_tpl->tpl_vars['category_id']->value) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_all_categories, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            <option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('keyword'=>null,'brand_id'=>null,'page'=>null,'limit'=>null,'category_id'=>-1),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['category_id']->value==-1) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->products_without_category, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            <?php if (!function_exists('smarty_template_function_category_select')) {
    function smarty_template_function_category_select($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['category_select']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
                                <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                                    <option value='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('keyword'=>null,'brand_id'=>null,'page'=>null,'limit'=>null,'category_id'=>$_smarty_tpl->tpl_vars['c']->value->id),$_smarty_tpl);?>
' <?php if ($_smarty_tpl->tpl_vars['category']->value->id==$_smarty_tpl->tpl_vars['c']->value->id) {?>selected<?php }?>>
                                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sp'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sp']);
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
?>- <?php endfor; endif; ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>

                                    </option>
                                    <?php smarty_template_function_category_select($_smarty_tpl,array('categories'=>$_smarty_tpl->tpl_vars['c']->value->subcategories,'level'=>$_smarty_tpl->tpl_vars['level']->value+1));?>

                                <?php } ?>
                            <?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

                            <?php smarty_template_function_category_select($_smarty_tpl,array('categories'=>$_smarty_tpl->tpl_vars['categories']->value));?>

                        </select>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-12">
                        <select id="id_brands" name="brands_filter" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_brand_filter, ENT_QUOTES, 'UTF-8', true);?>
" class="selectpicker form-control" data-live-search="true" data-size="10" onchange="location = this.value;">
                            <option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('keyword'=>null,'brand_id'=>null,'page'=>null,'limit'=>null),$_smarty_tpl);?>
" <?php if (!$_smarty_tpl->tpl_vars['brand_id']->value) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_all_brands, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            <option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('keyword'=>null,'brand_id'=>-1,'page'=>null,'limit'=>null),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['brand_id']->value==-1) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['btr']->value->products_without_brand;?>
</option>
                            <?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['b']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['brands']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value) {
$_smarty_tpl->tpl_vars['b']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('keyword'=>null,'page'=>null,'limit'=>null,'brand_id'=>$_smarty_tpl->tpl_vars['b']->value->id),$_smarty_tpl);?>
" brand_id="<?php echo $_smarty_tpl->tpl_vars['b']->value->id;?>
"  <?php if ($_smarty_tpl->tpl_vars['brand']->value->id==$_smarty_tpl->tpl_vars['b']->value->id) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['b']->value->name;?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm 12">
                        <div class="pull-right">
                            <select onchange="location = this.value;" class="selectpicker">
                                <option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('limit'=>5),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['current_limit']->value==5) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_show_by, ENT_QUOTES, 'UTF-8', true);?>
 5</option>
                                <option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('limit'=>10),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['current_limit']->value==10) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_show_by, ENT_QUOTES, 'UTF-8', true);?>
 10</option>
                                <option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('limit'=>25),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['current_limit']->value==25) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_show_by, ENT_QUOTES, 'UTF-8', true);?>
 25</option>
                                <option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('limit'=>50),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['current_limit']->value==50) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_show_by, ENT_QUOTES, 'UTF-8', true);?>
 50</option>
                                <option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('limit'=>100),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['current_limit']->value==100) {?>selected=""<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_show_by, ENT_QUOTES, 'UTF-8', true);?>
 100</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
        <div class="row">
            
            <div class="col-lg-12 col-md-12 col-sm-12">
                <form method="post" class="fn_form_list fn_fast_button">
                    <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">

                    <div class="okay_list products_list fn_sort_list">
                        
                        <div class="okay_list_head">
                            <div class="okay_list_boding okay_list_drag"></div>
                            <div class="okay_list_heading okay_list_check">
                                <input class="hidden_check fn_check_all" type="checkbox" id="check_all_1" name="" value="" />
                                <label class="okay_ckeckbox" for="check_all_1"></label>
                            </div>
                            <div class="okay_list_heading okay_list_photo"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_photo, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_name, ENT_QUOTES, 'UTF-8', true);?>
 </div>
                            <div class="okay_list_heading okay_list_price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_price, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_count"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_qty, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_status"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_enable, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_setting okay_list_products_setting"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_activities, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_close"></div>
                        </div>
                        
                        <div class="okay_list_body sortable">
                            <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
                                <div class="fn_row okay_list_body_item fn_sort_item">
                                    <div class="okay_list_row">
                                        <input type="hidden" name="positions[<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->position;?>
">

                                        <div class="okay_list_boding okay_list_drag move_zone">
                                            <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'drag_vertical'), 0);?>

                                        </div>

                                        <div class="okay_list_boding okay_list_check">
                                            <input class="hidden_check" type="checkbox" id="id_<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
"/>
                                            <label class="okay_ckeckbox" for="id_<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
"></label>
                                        </div>
                                        <div class="okay_list_boding okay_list_photo">
                                            <?php $_smarty_tpl->tpl_vars['image'] = new Smarty_variable($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['first'][0][0]->first_modifier($_smarty_tpl->tpl_vars['product']->value->images), null, 0);?>
                                            <?php if ($_smarty_tpl->tpl_vars['image']->value) {?>
                                                <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'ProductAdmin','id'=>$_smarty_tpl->tpl_vars['product']->value->id,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl);?>
">
                                                    <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier(htmlspecialchars($_smarty_tpl->tpl_vars['image']->value->filename, ENT_QUOTES, 'UTF-8', true),55,55);?>
"/></a>
                                            <?php } else { ?>
                                                <img height="55" width="55" src="design/images/no_image.png"/>
                                            <?php }?>
                                        </div>
                                        <div class="okay_list_boding okay_list_name">

                                            <a class="link" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'ProductAdmin','id'=>$_smarty_tpl->tpl_vars['product']->value->id,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl);?>
">
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>

                                                <?php if ($_smarty_tpl->tpl_vars['product']->value->variants[0]->name) {?>
                                                    <span class="text_grey">(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->variants[0]->name, ENT_QUOTES, 'UTF-8', true);?>
)</span>
                                                <?php }?>
                                            </a>
                                            <div class="hidden-lg-up mt-q">
                                                <span class="text_primary text_600"><?php echo $_smarty_tpl->tpl_vars['product']->value->variants[0]->price;?>
 <?php if (isset($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['product']->value->variants[0]->currency_id])) {?>
                                                          <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['product']->value->variants[0]->currency_id]->code, ENT_QUOTES, 'UTF-8', true);?>

                                                      <?php }?></span>
                                                <span class="text_500"><?php if ($_smarty_tpl->tpl_vars['product']->value->variants[0]->infinity) {?>∞<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['product']->value->variants[0]->stock;?>
<?php }?> <?php if ($_smarty_tpl->tpl_vars['product']->value->variants[0]->units) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->variants[0]->units, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->units, ENT_QUOTES, 'UTF-8', true);?>
<?php }?></span>
                                            </div>
                                            <?php if ($_smarty_tpl->tpl_vars['brands_name']->value[$_smarty_tpl->tpl_vars['product']->value->brand_id]->name) {?>
                                                <div class="okay_list_name_brand"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_brand, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brands_name']->value[$_smarty_tpl->tpl_vars['product']->value->brand_id]->name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                            <?php }?>
                                            <?php if (count($_smarty_tpl->tpl_vars['product']->value->variants)>1) {?>
                                                <div class="fn_variants_toggle variants_toggle">
                                                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_options, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                    <i class="fn_icon_arrow fa fa-angle-down fa-lg m-t-2"></i>
                                                </div>
                                            <?php }?>
                                        </div>
                                        <div class="okay_list_boding okay_list_price">
                                            <div class="input-group">
                                                <input class="form-control <?php if ($_smarty_tpl->tpl_vars['product']->value->variants[0]->compare_price>0) {?>text_warning<?php }?>" type="text" name="price[<?php echo $_smarty_tpl->tpl_vars['product']->value->variants[0]->id;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->variants[0]->price;?>
">
                                                <span class="input-group-addon">
                                                      <?php if (isset($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['product']->value->variants[0]->currency_id])) {?>
                                                          <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['product']->value->variants[0]->currency_id]->code, ENT_QUOTES, 'UTF-8', true);?>

                                                      <?php }?>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="okay_list_boding okay_list_count">
                                            <div class="input-group">
                                                <input class="form-control " type="text" name="stock[<?php echo $_smarty_tpl->tpl_vars['product']->value->variants[0]->id;?>
]" value="<?php if ($_smarty_tpl->tpl_vars['product']->value->variants[0]->infinity) {?>∞<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['product']->value->variants[0]->stock;?>
<?php }?>"/>
                                                <span class="input-group-addon  p-0">
                                                     <?php if ($_smarty_tpl->tpl_vars['product']->value->variants[0]->units) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->variants[0]->units, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->units, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>
                                                </span>
                                            </div>
                                        </div>
                                        
                                        <div class="okay_list_boding okay_list_status">
                                            <label class="switch switch-default ">
                                                <input class="switch-input fn_ajax_action <?php if ($_smarty_tpl->tpl_vars['product']->value->visible) {?>fn_active_class<?php }?>" data-module="product" data-action="visible" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" name="visible" value="1" type="checkbox"  <?php if ($_smarty_tpl->tpl_vars['product']->value->visible) {?>checked=""<?php }?>/>
                                                <span class="switch-label"></span>
                                                <span class="switch-handle"></span>
                                            </label>
                                        </div>
                                        <div class=" okay_list_setting okay_list_products_setting">
                                            
                                            <div class="">
                                                
                                                <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_add_xml, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="setting_icon setting_icon_yandex fn_ajax_action <?php if ($_smarty_tpl->tpl_vars['product']->value->variants[0]->feed) {?>fn_active_class<?php }?> hint-bottom-middle-t-info-s-small-mobile  hint-anim" data-module="variant" data-action="feed" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value->variants[0]->id;?>
">
                                                   XML
                                                </button>

                                                
                                                <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_bestseller, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="setting_icon setting_icon_featured fn_ajax_action <?php if ($_smarty_tpl->tpl_vars['product']->value->featured) {?>fn_active_class<?php }?> hint-bottom-middle-t-info-s-small-mobile  hint-anim" data-module="product" data-action="featured" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" >
                                                    <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'icon_featured'), 0);?>

                                                </button>

                                                
                                                <a href="../<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
products/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->url, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank" data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_view, ENT_QUOTES, 'UTF-8', true);?>
" class="setting_icon setting_icon_open hint-bottom-middle-t-info-s-small-mobile  hint-anim">
                                                    <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'icon_desktop'), 0);?>

                                                </a>

                                                
                                                <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->products_dublicate, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="setting_icon setting_icon_copy fn_copy hint-bottom-middle-t-info-s-small-mobile  hint-anim">
                                                    <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'icon_copy'), 0);?>

                                                </button>
                                            </div>
                                        </div>
                                        <div class="okay_list_boding okay_list_close">
                                            
                                            <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_delete_product, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="btn_close fn_remove hint-bottom-right-t-info-s-small-mobile  hint-anim" data-toggle="modal" data-target="#fn_action_modal" onclick="success_action($(this));">
                                                <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'delete'), 0);?>

                                            </button>
                                        </div>
                                    </div>

                                    <?php if (count($_smarty_tpl->tpl_vars['product']->value->variants)>1) {?>
                                    
                                        <div class="okay_list_variants products_variants_block">
                                        <?php  $_smarty_tpl->tpl_vars['variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value->variants; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['variant']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->key => $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->_loop = true;
 $_smarty_tpl->tpl_vars['variant']->iteration++;
?>
                                            <?php if ($_smarty_tpl->tpl_vars['variant']->iteration>1) {?>
                                                <div class="okay_list_row">
                                                    <div class="okay_list_boding okay_list_drag"></div>
                                                    <div class="okay_list_boding okay_list_check"></div>
                                                    <div class="okay_list_boding okay_list_photo"></div>
                                                    <div class="okay_list_boding okay_list_variant_name">
                                                        <span class="text_grey"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                    </div>
                                                    <div class="okay_list_boding okay_list_price">
                                                        <div class="input-group">
                                                            <input class="form-control" type="text" name="price[<?php echo $_smarty_tpl->tpl_vars['variant']->value->id;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['variant']->value->price;?>
">
                                                            <span class="input-group-addon">
                                                                  <?php if (isset($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['variant']->value->currency_id])) {?>
                                                                      <?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['variant']->value->currency_id]->code;?>

                                                                  <?php }?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="okay_list_boding okay_list_count">
                                                        <div class="input-group">
                                                            <input class="form-control" type="text" name="stock[<?php echo $_smarty_tpl->tpl_vars['variant']->value->id;?>
]" value="<?php if ($_smarty_tpl->tpl_vars['variant']->value->infinity) {?>∞<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['variant']->value->stock;?>
<?php }?>"/>
                                                            <span class="input-group-addon p-0">
                                                                 <?php if ($_smarty_tpl->tpl_vars['variant']->value->units) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value->units, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->units, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="okay_list_boding okay_list_status"></div>
                                                    <div class="okay_list_setting okay_list_products_setting">
                                                        
                                                        <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_add_xml, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="setting_icon setting_icon_yandex fn_ajax_action <?php if ($_smarty_tpl->tpl_vars['variant']->value->feed) {?>fn_active_class<?php }?> hint-bottom-middle-t-info-s-small-mobile  hint-anim" data-module="variant" data-action="feed" data-id="<?php echo $_smarty_tpl->tpl_vars['variant']->value->id;?>
">
                                                           XML
                                                        </button>
                                                    </div>
                                                    <div class="okay_list_boding okay_list_close"></div>
                                                </div>
                                            <?php }?>
                                        <?php } ?>
                                        </div>
                                    <?php }?>
                                </div>
                            <?php } ?>
                        </div>

                        
                        <div class="okay_list_footer fn_action_block">
                            <div class="okay_list_foot_left">
                                <div class="okay_list_boding okay_list_drag"></div>
                                <div class="okay_list_heading okay_list_check">
                                    <input class="hidden_check fn_check_all" type="checkbox" id="check_all_2" name="" value=""/>
                                    <label class="okay_ckeckbox" for="check_all_2"></label>
                                </div>
                                <div class="okay_list_option">
                                    <select name="action" class="selectpicker products_action">
                                        <option value="enable"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_do_enable, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <option value="disable"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_do_disable, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <option value="set_featured"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->products_mark_bestseller, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <option value="unset_featured"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->products_unmark_bestseller, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <option value="set_feed"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_add_xml_short, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <option value="unset_feed"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_from_xml_short, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <option value="duplicate"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->products_create_dublicate, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <?php if ($_smarty_tpl->tpl_vars['pages_count']->value>1) {?>
                                            <option value="move_to_page"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->products_move_to_page, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <?php }?>
                                        <?php if (count($_smarty_tpl->tpl_vars['categories']->value)>1) {?>
                                            <option value="move_to_category"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->products_move_to_category, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <?php }?>
                                        <?php if (count($_smarty_tpl->tpl_vars['all_brands']->value)>0) {?>
                                            <option value="move_to_brand"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->products_specify_brand, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <?php }?>
                                        <option value="delete"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_delete, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                    </select>
                                </div>

                                <div class="col-lg-8 col-md-6 col-sm-12">
                                    <div id="move_to_page" class="col-lg-12 col-md-12 col-sm-12 hidden fn_hide_block">
                                        <select name="target_page" class="selectpicker">
                                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['target_page'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['target_page']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['target_page']['name'] = 'target_page';
$_smarty_tpl->tpl_vars['smarty']->value['section']['target_page']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['pages_count']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['target_page']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['target_page']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['target_page']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['target_page']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['target_page']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['target_page']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['target_page']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['target_page']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['target_page']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['target_page']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['target_page']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['target_page']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['target_page']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['target_page']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['target_page']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['target_page']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['target_page']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['target_page']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['target_page']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['target_page']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['target_page']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['target_page']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['target_page']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['target_page']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['target_page']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['target_page']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['target_page']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['target_page']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['target_page']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['target_page']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['target_page']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['target_page']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['target_page']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['target_page']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['target_page']['total']);
?>
                                                <option value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['target_page']['index']+1;?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['target_page']['index']+1;?>
</option>
                                            <?php endfor; endif; ?>
                                        </select>
                                    </div>
                                    <div id="move_to_category" class="col-lg-12 col-md-12 col-sm-12 hidden fn_hide_block">
                                        <select name="target_category" class="selectpicker" data-live-search="true" data-size="10">
                                            <?php if (!function_exists('smarty_template_function_category_select_btn')) {
    function smarty_template_function_category_select_btn($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['category_select_btn']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
                                                <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
                                                    <option value='<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
'><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sp'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sp']);
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
?>&nbsp;&nbsp;&nbsp;&nbsp;<?php endfor; endif; ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                                    <?php smarty_template_function_category_select_btn($_smarty_tpl,array('categories'=>$_smarty_tpl->tpl_vars['category']->value->subcategories,'selected_id'=>$_smarty_tpl->tpl_vars['selected_id']->value,'level'=>$_smarty_tpl->tpl_vars['level']->value+1));?>

                                                <?php } ?>
                                            <?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

                                            <?php smarty_template_function_category_select_btn($_smarty_tpl,array('categories'=>$_smarty_tpl->tpl_vars['categories']->value));?>

                                        </select>
                                    </div>
                                    <div id="move_to_brand" class="col-lg-12 col-md-12 col-sm-12 hidden fn_hide_block">
                                        <select name="target_brand" class="selectpicker" data-live-search="true" data-size="10">
                                            <option value="0"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_not_set, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                            <?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['b']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['all_brands']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value) {
$_smarty_tpl->tpl_vars['b']->_loop = true;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['b']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn_small btn_blue">
                                <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'checked'), 0);?>

                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm 12 txt_center">
                <?php echo $_smarty_tpl->getSubTemplate ('pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>
        </div>
    <?php } else { ?>
        <div class="heading_box mt-1">
            <div class="text_grey"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->products_no, ENT_QUOTES, 'UTF-8', true);?>
</div>
        </div>
    <?php }?>
</div>



<script>

$(function() {
    $(document).on('click','.fn_variants_toggle',function(){
        $(this).find('.fn_icon_arrow').toggleClass('rotate_180');
        $(this).parents('.fn_row').find('.products_variants_block').slideToggle();
    });


    $(document).on('change','.fn_action_block select.products_action',function(){
        var elem = $(this).find('option:selected').val();
        $('.fn_hide_block').addClass('hidden');
        if($('#'+elem).size()>0){
            $('#'+elem).removeClass('hidden');
        }
    });

    $(document).on('click','.fn_show_icon_menu',function(){
        $(this).toggleClass('show');
    });

    // Дублировать товар
    $(document).on("click", ".fn_copy", function () {
        $('.fn_form_list input[type="checkbox"][name*="check"]').attr('checked', false);
        $(this).closest(".fn_form_list").find('select[name="action"] option[value=duplicate]').attr('selected', true);
        $(this).closest(".fn_row").find('input[type="checkbox"][name*="check"]').attr('checked', true);
        $(this).closest(".fn_row").find('input[type="checkbox"][name*="check"]').click();
        $(this).closest(".fn_form_list").submit();
    });
    // Бесконечность на складе
    $("input[name*=stock]").focus(function() {
        if($(this).val() == '∞')
            $(this).val('');
        return false;
    });
    $("input[name*=stock]").blur(function() {
        if($(this).val() == '')
            $(this).val('∞');
    });
    });

</script>

<?php }} ?>
