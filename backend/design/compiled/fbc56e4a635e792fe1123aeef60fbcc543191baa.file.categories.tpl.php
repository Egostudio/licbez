<?php /* Smarty version Smarty-3.1.18, created on 2019-04-22 12:58:19
         compiled from "backend/design/html/categories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14116106295cbdba6be5aab5-31705263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbc56e4a635e792fe1123aeef60fbcc543191baa' => 
    array (
      0 => 'backend/design/html/categories.tpl',
      1 => 1553277840,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14116106295cbdba6be5aab5-31705263',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'btr' => 0,
    'categories' => 0,
    'category' => 0,
    'config' => 0,
    'lang_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5cbdba6c72bae5_60718766',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cbdba6c72bae5_60718766')) {function content_5cbdba6c72bae5_60718766($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['btr']->value->general_categories, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>


<div class="row">
    <div class="col-lg-7 col-md-7">
        <div class="wrap_heading">
            <div class="box_heading heading_page">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_categories, ENT_QUOTES, 'UTF-8', true);?>

            </div>
            <div class="box_btn_heading">
                <a class="btn btn_small btn-info" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'CategoryAdmin','return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl);?>
">
                    <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'plus'), 0);?>

                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->categories_add, ENT_QUOTES, 'UTF-8', true);?>
</span>
                </a>
            </div>
        </div>
    </div>
</div>


<div class="boxed fn_toggle_wrap">
    <?php if ($_smarty_tpl->tpl_vars['categories']->value) {?>
        <form method="post" class="fn_form_list">
            <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
" />
            <div class="okay_list products_list fn_sort_list">
                
                <div class="okay_list_head">
                    <div class="okay_list_heading okay_list_subicon"></div>
                    <div class="okay_list_heading okay_list_drag"></div>
                    <div class="okay_list_heading okay_list_check">
                        <input class="hidden_check fn_check_all" type="checkbox" id="check_all_1" name="" value=""/>
                        <label class="okay_ckeckbox" for="check_all_1"></label>
                    </div>
                    <div class="okay_list_heading okay_list_photo hidden-sm-down"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_photo, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="okay_list_heading okay_list_categories_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="okay_list_heading okay_list_status"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_enable, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="okay_list_heading okay_list_setting"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_activities, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="okay_list_heading okay_list_close"></div>
                </div>

                
                <div class="okay_list_body categories_wrap sortable ">
                <?php if ($_smarty_tpl->tpl_vars['categories']->value) {?>
                    <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
                        <div class="fn_row okay_list_body_item   fn_sort_item">
                            <div class="okay_list_row ">
                                <input type="hidden" name="positions[<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['category']->value->position;?>
" />

                                <?php if ($_smarty_tpl->tpl_vars['category']->value->subcategories) {?>
                                    <div class="okay_list_heading okay_list_subicon">
                                        <a href="javascript:;" class="fn_ajax_toggle" data-toggle="0" data-category_id="<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
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
                                    <input class="hidden_check" type="checkbox" id="id_<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
" />
                                    <label class="okay_ckeckbox" for="id_<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
"></label>
                                </div>

                                <div class="okay_list_boding okay_list_photo hidden-sm-down">
                                    <?php if ($_smarty_tpl->tpl_vars['category']->value->image) {?>
                                        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'CategoryAdmin','id'=>$_smarty_tpl->tpl_vars['category']->value->id,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl);?>
">
                                            <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['category']->value->image,55,55,false,$_smarty_tpl->tpl_vars['config']->value->resized_categories_dir);?>
" alt="" />
                                        </a>
                                    <?php } else { ?>
                                        <img height="55" width="55" src="design/images/no_image.png"/>
                                    <?php }?>
                                </div>

                                <div class="okay_list_boding okay_list_categories_name">
                                    <a class="link" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'CategoryAdmin','id'=>$_smarty_tpl->tpl_vars['category']->value->id,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl);?>
">
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->name, ENT_QUOTES, 'UTF-8', true);?>

                                    </a>
                                </div>

                                <div class="okay_list_boding okay_list_status">
                                    
                                    <label class="switch switch-default">
                                        <input class="switch-input fn_ajax_action <?php if ($_smarty_tpl->tpl_vars['category']->value->visible) {?>fn_active_class<?php }?>" data-module="category" data-action="visible" data-id="<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
" name="visible" value="1" type="checkbox"  <?php if ($_smarty_tpl->tpl_vars['category']->value->visible) {?>checked=""<?php }?>/>
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                </div>

                                <div class=" okay_list_setting">
                                    
                                    <a href="../<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
category/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->url, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank" data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_view, ENT_QUOTES, 'UTF-8', true);?>
" class="setting_icon setting_icon_open hint-bottom-middle-t-info-s-small-mobile  hint-anim">
                                        <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'icon_desktop'), 0);?>

                                    </a>
                                </div>
                                <div class="okay_list_boding okay_list_close">
                                    
                                    <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->categories_delete, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="btn_close fn_remove hint-bottom-right-t-info-s-small-mobile  hint-anim" data-toggle="modal" data-target="#fn_action_modal" onclick="success_action($(this));">
                                        <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'delete'), 0);?>

                                    </button>
                                </div>
                            </div>

                            <?php if ($_smarty_tpl->tpl_vars['category']->value->subcategories) {?>
                                <div class="fn_ajax_categories categories_sub_block subcategories_level_1">
                                    <?php echo $_smarty_tpl->getSubTemplate ("categories_ajax.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                                </div>
                            <?php }?>
                        </div>
                    <?php } ?>
                <?php }?>
                </div>

                
                <div class="okay_list_footer fn_action_block">
                    <div class="okay_list_foot_left">
                        <div class="okay_list_heading okay_list_subicon"></div>
                        <div class="okay_list_heading okay_list_drag"></div>
                        <div class="okay_list_heading okay_list_check">
                            <input class="hidden_check fn_check_all" type="checkbox" id="check_all_2" name="" value=""/>
                            <label class="okay_ckeckbox" for="check_all_2"></label>
                        </div>
                        <div class="okay_list_option">
                            <select name="action" class="selectpicker">
                                <option value="enable"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_do_enable, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <option value="in_feed"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->categories_in_xml, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <option value="out_feed"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->categories_out_xml, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <option value="disable"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_do_disable, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <option value="delete"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_delete, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            </select>
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
    <?php } else { ?>
        <div class="heading_box mt-1">
            <div class="text_grey"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->categories_no, ENT_QUOTES, 'UTF-8', true);?>
</div>
        </div>
    <?php }?>
</div>

<script>
    $(document).on("click", ".fn_ajax_toggle", function () {
        elem = $(this);
        var toggle = parseInt(elem.data("toggle"));
        var category_id = parseInt(elem.data("category_id"));
        session_id = '<?php echo $_SESSION['id'];?>
';
        if(toggle == 0){
            $.ajax({
                dataType: 'json',
                url: "ajax/get_categories.php",
                data: {
                    category_id: category_id,
                    session_id : session_id,
                },
                success: function(data){
                    var msg = "";

                    if(data.success){
                        elem.closest(".fn_row").find(".fn_ajax_categories").html(data.cats);
                        elem.closest(".fn_row").find(".fn_ajax_categories").addClass("sortable");
                        elem.data("toggle",1);
                        elem.find("i").toggleClass("fa-minus-square");
                    } else {
                        toastr.error(msg, "Error");
                    }

                    var el = document.querySelectorAll("div.sortable , .fn_ajax_categories.sortable");
                    for (i = 0; i < el.length; i++) {
                        var sortable = Sortable.create(el[i], {
                            handle: ".move_zone",  // Drag handle selector within list items
                            sort: true,  // sorting inside list
                            animation: 150,  // ms, animation speed moving items when sorting, `0` — without animation
                            scroll: true, // or HTMLElement
                            ghostClass: "sortable-ghost",  // Class name for the drop placeholder
                            chosenClass: "sortable-chosen",  // Class name for the chosen item
                            dragClass: "sortable-drag",  // Class name for the dragging item
                            scrollSensitivity: 30, // px, how near the mouse must be to an edge to start scrolling.
                            scrollSpeed: 10, // px
                        });
                    }

                }
            });
        } else {
            elem.closest(".fn_row").children(".fn_ajax_categories").slideToggle(500);
            elem.find("i").toggleClass("fa-minus-square");
        }
    });
</script>
<?php }} ?>
