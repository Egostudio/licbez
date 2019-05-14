<?php /* Smarty version Smarty-3.1.18, created on 2019-04-22 12:58:20
         compiled from "backend/design/html/categories_ajax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16218199575cbdba6c7e5e27-93093512%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06187d9572d1e9fd636b1bf853020bc253f88556' => 
    array (
      0 => 'backend/design/html/categories_ajax.tpl',
      1 => 1553277840,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16218199575cbdba6c7e5e27-93093512',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categories_ajax' => 0,
    'ajax_category' => 0,
    'config' => 0,
    'lang_link' => 0,
    'btr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5cbdba6cb69622_10307925',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cbdba6cb69622_10307925')) {function content_5cbdba6cb69622_10307925($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['categories_ajax']->value) {?>
    <?php  $_smarty_tpl->tpl_vars['ajax_category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ajax_category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories_ajax']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ajax_category']->key => $_smarty_tpl->tpl_vars['ajax_category']->value) {
$_smarty_tpl->tpl_vars['ajax_category']->_loop = true;
?>
        <div class="fn_row">
            <div class="okay_list_row fn_sort_item">
                <input type="hidden" name="positions[<?php echo $_smarty_tpl->tpl_vars['ajax_category']->value->id;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['ajax_category']->value->position;?>
" />

                <?php if ($_smarty_tpl->tpl_vars['ajax_category']->value->subcategories) {?>
                    <div class="okay_list_heading okay_list_subicon">
                        <a href="javascript:;" class="fn_ajax_toggle" data-toggle="0" data-category_id="<?php echo $_smarty_tpl->tpl_vars['ajax_category']->value->id;?>
" >
                            <i class="fa fa-plus-square"></i>
                        </a>
                    </div>
                <?php } else { ?>
                    <div class="okay_list_heading okay_list_subicon"></div>
                <?php }?>

                <div class="okay_list_boding okay_list_drag move_zone">
                    <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'drag_vertical'), 0);?>

                </div>

                <div class="okay_list_boding okay_list_check">
                    <input class="hidden_check" type="checkbox" id="id_<?php echo $_smarty_tpl->tpl_vars['ajax_category']->value->id;?>
" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['ajax_category']->value->id;?>
" />
                    <label class="okay_ckeckbox" for="id_<?php echo $_smarty_tpl->tpl_vars['ajax_category']->value->id;?>
"></label>
                </div>

                <div class="okay_list_boding okay_list_photo hidden-sm-down">
                    <?php if ($_smarty_tpl->tpl_vars['ajax_category']->value->image) {?>
                        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'CategoryAdmin','id'=>$_smarty_tpl->tpl_vars['ajax_category']->value->id,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl);?>
">
                            <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['ajax_category']->value->image,55,55,false,$_smarty_tpl->tpl_vars['config']->value->resized_categories_dir);?>
" alt="" />
                        </a>
                    <?php } else { ?>
                        <img height="55" width="55" src="design/images/no_image.png"/>
                    <?php }?>
                </div>

                <div class="okay_list_boding okay_list_categories_name">
                    <a href="index.php?module=CategoryAdmin&id=<?php echo $_smarty_tpl->tpl_vars['ajax_category']->value->id;?>
">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_category']->value->name, ENT_QUOTES, 'UTF-8', true);?>

                    </a>
                </div>


                <div class="okay_list_boding okay_list_status">
                    
                    <div>
                        <label class="switch switch-default">
                            <input class="switch-input fn_ajax_action <?php if ($_smarty_tpl->tpl_vars['ajax_category']->value->visible) {?>fn_active_class<?php }?>" data-module="category" data-action="visible" data-id="<?php echo $_smarty_tpl->tpl_vars['ajax_category']->value->id;?>
" name="visible" value="1" type="checkbox"  <?php if ($_smarty_tpl->tpl_vars['ajax_category']->value->visible) {?>checked=""<?php }?>/>
                            <span class="switch-label"></span>
                            <span class="switch-handle"></span>
                        </label>
                    </div>
                </div>

                <div class="okay_list_setting">
                    
                    <a href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
../category/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_category']->value->url, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank" data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_view, ENT_QUOTES, 'UTF-8', true);?>
" class="setting_icon setting_icon_open hint-bottom-middle-t-info-s-small-mobile  hint-anim">
                        <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'icon_desktop'), 0);?>

                    </a>
                </div>
                <div class="okay_list_boding okay_list_close">
                    
                    <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->categories_delete, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="btn_close fn_remove hint-bottom-middle-t-info-s-small-mobile  hint-anim" data-toggle="modal" data-target="#fn_action_modal" onclick="success_action($(this));">
                        <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'delete'), 0);?>

                    </button>
                </div>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['ajax_category']->value->subcategories) {?>
                <div class="fn_ajax_categories categories_sub_block sortable subcategories_level_2"></div>
            <?php }?>
        </div>
    <?php } ?>
<?php }?>
<?php }} ?>
