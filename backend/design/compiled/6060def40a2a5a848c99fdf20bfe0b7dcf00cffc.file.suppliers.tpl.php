<?php /* Smarty version Smarty-3.1.18, created on 2019-04-21 15:24:27
         compiled from "backend/design/html/suppliers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5568354245cb36cb2630bf1-02236375%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6060def40a2a5a848c99fdf20bfe0b7dcf00cffc' => 
    array (
      0 => 'backend/design/html/suppliers.tpl',
      1 => 1555860266,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5568354245cb36cb2630bf1-02236375',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5cb36cb2787725_01836866',
  'variables' => 
  array (
    'btr' => 0,
    'suppliers_count' => 0,
    'suppliers' => 0,
    'current_limit' => 0,
    'supplier' => 0,
    'lang_link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cb36cb2787725_01836866')) {function content_5cb36cb2787725_01836866($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['btr']->value->suppliers_suppliers, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>


<div class="row">
    <div class="col-lg-7 col-md-7">
        <div class="wrap_heading">
            <div class="box_heading heading_page">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->suppliers_suppliers, ENT_QUOTES, 'UTF-8', true);?>
 - <?php echo $_smarty_tpl->tpl_vars['suppliers_count']->value;?>

            </div>
            <div class="box_btn_heading">
                <a class="btn btn_small btn-info" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'SupplierAdmin','return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl);?>
">
                    <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'plus'), 0);?>

                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->suppliers_add_supplier, ENT_QUOTES, 'UTF-8', true);?>
</span>
                </a>
            </div>
        </div>
    </div>
</div>


<div class="boxed fn_toggle_wrap">
    <?php if ($_smarty_tpl->tpl_vars['suppliers']->value) {?>

        <div class="row">
            <div class="col-lg-12 col-md-12 ">
                <div class="boxed_sorting">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm 12">
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

        <form method="post" class="fn_form_list">
            <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
" />

            <div class="okay_list products_list fn_sort_list">
                
                <div class="okay_list_head">
                    <div class="okay_list_boding okay_list_drag"></div>
                    <div class="okay_list_heading okay_list_check">
                        <input class="hidden_check fn_check_all" type="checkbox" id="check_all_1" name="" value="" />
                        <label class="okay_ckeckbox" for="check_all_1"></label>
                    </div>
                    <div class="okay_list_heading okay_list_photo"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_photo, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="okay_list_heading okay_list_suppliers_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="okay_list_heading okay_list_status"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_enable, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="okay_list_heading okay_list_setting"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_activities, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="okay_list_heading okay_list_close"></div>
                </div>

                
                <div class="okay_list_body sortable">
                    <?php  $_smarty_tpl->tpl_vars['supplier'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['supplier']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['suppliers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['supplier']->key => $_smarty_tpl->tpl_vars['supplier']->value) {
$_smarty_tpl->tpl_vars['supplier']->_loop = true;
?>
                        <div class="fn_row okay_list_body_item fn_sort_item">
                            <div class="okay_list_row ">
                                <input type="hidden" name="positions[<?php echo $_smarty_tpl->tpl_vars['supplier']->value->id;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['supplier']->value->position;?>
" />

                                <div class="okay_list_boding okay_list_drag move_zone">
                                    <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'drag_vertical'), 0);?>

                                </div>

                                <div class="okay_list_boding okay_list_check">
                                    <input class="hidden_check" type="checkbox" id="id_<?php echo $_smarty_tpl->tpl_vars['supplier']->value->id;?>
" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['supplier']->value->id;?>
" />
                                    <label class="okay_ckeckbox" for="id_<?php echo $_smarty_tpl->tpl_vars['supplier']->value->id;?>
"></label>
                                </div>


                                <div class="okay_list_boding okay_list_suppliers_name" style="width:200px;text-align:left;">
                                    <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'SupplierAdmin','id'=>$_smarty_tpl->tpl_vars['supplier']->value->id,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl);?>
">
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier']->value->name, ENT_QUOTES, 'UTF-8', true);?>

                                    </a>
                                </div>

                                <div class="okay_list_boding okay_list_suppliers_name" style="width:150px;">
                                	<button type="button" class="btn btn-info " data-toggle="modal" data-target="#exampleModal" data-id="<?php echo $_smarty_tpl->tpl_vars['supplier']->value->id;?>
" id="exampleModalOpen-<?php echo $_smarty_tpl->tpl_vars['supplier']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['supplier']->value->filename) {?>disabled<?php }?>>Загрузить</button>

<!--
<button type="button" class="btn btn-secondary">Secondary</button>
<button type="button" class="btn btn-success">Success</button>
<button type="button" class="btn btn-danger">Danger</button>
<button type="button" class="btn btn-warning">Warning</button>
<button type="button" class="btn btn-light">Light</button>
<button type="button" class="btn btn-dark">Dark</button>

<button type="button" class="btn btn-link">Link</button>
-->
                                </div>

                                <div class="okay_list_boding okay_list_suppliers_name" style="width:150px; " id="loaderDiv-<?php echo $_smarty_tpl->tpl_vars['supplier']->value->id;?>
">
					<?php echo $_smarty_tpl->tpl_vars['supplier']->value->filename;?>

                                </div>


                                <div class="okay_list_boding okay_list_status">
                                    
                                     <label class="switch switch-default ">
                                        <input class="switch-input fn_ajax_action <?php if ($_smarty_tpl->tpl_vars['supplier']->value->visible) {?>fn_active_class<?php }?>" data-module="suppliers" data-action="visible" data-id="<?php echo $_smarty_tpl->tpl_vars['supplier']->value->id;?>
" name="visible" value="1" type="checkbox"  <?php if ($_smarty_tpl->tpl_vars['supplier']->value->visible) {?>checked=""<?php }?>/>
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                </div>

                                <div class="okay_list_setting">
                                    <a href="../<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
suppliers/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier']->value->url, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank" data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_view, ENT_QUOTES, 'UTF-8', true);?>
" class="setting_icon setting_icon_open hint-bottom-middle-t-info-s-small-mobile  hint-anim">
                                        <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'icon_desktop'), 0);?>

                                    </a>
                                </div>

                                <div class="okay_list_boding okay_list_close">
                                    
                                    <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->suppliers_delete_supplier, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="btn_close fn_remove hint-bottom-right-t-info-s-small-mobile  hint-anim" data-toggle="modal" data-target="#fn_action_modal" onclick="success_action($(this));">
                                        <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'delete'), 0);?>

                                    </button>
                                </div>
                            </div>
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
                            <select name="action" class="selectpicker">
                                <option value="in_feed"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->suppliers_in_xml, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <option value="out_feed"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->suppliers_out_xml, ENT_QUOTES, 'UTF-8', true);?>
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
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm 12 txt_center">
                <?php echo $_smarty_tpl->getSubTemplate ('pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>
        </div>
    <?php } else { ?>
        <div class="heading_box mt-1">
            <div class="text_grey"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->suppliers_no, ENT_QUOTES, 'UTF-8', true);?>
</div>
        </div>
    <?php }?>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
      </div>
      <div class="modal-body">
        <form method="post" id="upload_form" enctype="multipart/form-data">
            <p>Выбрать файл
                <input type="file"      name="upload_file" />
                <input type="hidden" name="supplierId" id="supplierId" value=""/>
                <input type="submit"    name="upload_button" class="btn btn-secondary upload" value="Загрузить">
            </p>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
</div>


<script>
$(function (global) {

<?php  $_smarty_tpl->tpl_vars['supplier'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['supplier']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['suppliers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['supplier']->key => $_smarty_tpl->tpl_vars['supplier']->value) {
$_smarty_tpl->tpl_vars['supplier']->_loop = true;
?>
    $("#exampleModalOpen-<?php echo $_smarty_tpl->tpl_vars['supplier']->value->id;?>
").click(function(){
        global.id = $(this).data('id');
        $('#supplierId').val($(this).data('id'));
    });
<?php } ?>  

//$("#loaderDiv").hide();

$('#upload_form').on('submit', function(){

//alert(global.id);

if($("input[name='upload_file']").val()) {
    $.ajax({
        url: "ajax/upload.php",
        method: "POST",
        data:new FormData(this),
        contentType:false,
        cache:false,
        processData:false,
        beforeSend:function(data)
        {
            $('#exampleModal').modal("hide");
            $("#loaderDiv-"+global.id).show();

            var imgurl = '/images/ajax-loading-icon-17.jpg';
            var img = $('<img id="dynamic" style="width:70px;">');
            img.attr('src', imgurl);
            img.appendTo('#loaderDiv-'+global.id);   

            $("button#exampleModalOpen-"+global.id).attr("disabled", "disabled");   
	    
        },
        success:function(data)
        {
            $("#loaderDiv-"+global.id+" img:last-child").remove();
	    if(data!='error')
	    {
            	$('#loaderDiv-'+global.id).append(data);
	    }
	    else
	    {
            	$("button#exampleModalOpen-"+global.id).removeAttr("disabled");   
	    }
        }
    });
    }
    else{
            $('#exampleModal').modal("hide");
    
    }
    return false;
});

    
});

</script>

<?php }} ?>
