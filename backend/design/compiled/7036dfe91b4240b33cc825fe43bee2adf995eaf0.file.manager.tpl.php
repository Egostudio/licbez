<?php /* Smarty version Smarty-3.1.18, created on 2019-04-14 19:20:04
         compiled from "backend/design/html/manager.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17746627485cb36bc4bae540-92825485%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7036dfe91b4240b33cc825fe43bee2adf995eaf0' => 
    array (
      0 => 'backend/design/html/manager.tpl',
      1 => 1553277840,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17746627485cb36bc4bae540-92825485',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'm' => 0,
    'btr' => 0,
    'message_success' => 0,
    'message_error' => 0,
    'btr_languages' => 0,
    'label' => 0,
    'name' => 0,
    'permission' => 0,
    'title' => 0,
    'items' => 0,
    'manager' => 0,
    'item' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5cb36bc4dec092_47060768',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cb36bc4dec092_47060768')) {function content_5cb36bc4dec092_47060768($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['m']->value->login) {?>
    <?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['m']->value->login, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['btr']->value->manager_new, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>
<?php }?>


<div class="row">
    <div class="col-lg-7 col-md-7">
        <?php if (!$_smarty_tpl->tpl_vars['m']->value->id) {?>
            <div class="heading_page"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->manager_add, ENT_QUOTES, 'UTF-8', true);?>
</div>
        <?php } else { ?>
            <div class="heading_page"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</div>
        <?php }?>
    </div>
    <div class="col-lg-4 col-md-3 text-xs-right float-xs-right"></div>
</div>


<?php if ($_smarty_tpl->tpl_vars['message_success']->value) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="boxed boxed_success">
                <div class="heading_box">
                    <?php if ($_smarty_tpl->tpl_vars['message_success']->value=='added') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->manager_added, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_success']->value=='updated') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->manager_updated, ENT_QUOTES, 'UTF-8', true);?>

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
                     <?php if ($_smarty_tpl->tpl_vars['message_error']->value=='login_exists') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->manager_exists, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value=='empty_login') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->manager_enter_login, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value=="password_wrong") {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->manager_pass_not_match, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } else { ?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message_error']->value, ENT_QUOTES, 'UTF-8', true);?>

                    <?php }?>
                </div>
            </div>
        </div>
    </div>
<?php }?>


<form method="post" enctype="multipart/form-data" class="fn_fast_button">
    <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
    <div class="row">
        <div class="col-lg-6 col-md-12 pr-0">
            <div class="boxed fn_toggle_wrap min_height_335px">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->manager_basic, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card">
                    <div class="mb-1">
                        <div class="heading_label" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->manager_login, ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <div class="">
                            <input class="form-control" name="login" autocomplete="off" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m']->value->login, ENT_QUOTES, 'UTF-8', true);?>
"/>
                            <input name="id" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m']->value->id, ENT_QUOTES, 'UTF-8', true);?>
"/>
                        </div>
                    </div>

                    <div class="mb-1">
                        <div class="heading_label" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->manager_pass, ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <div class="">
                            <input class="form-control" autocomplete="off" name="password" type="password" value="" placeholder="xxxxxxxx" />
                        </div>
                    </div>

                    <div class="mb-1">
                        <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->manager_pass_repeat, ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <div class="">
                            <input class="form-control" autocomplete="off" name="password_check" type="password" value="" placeholder="xxxxxxxx" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="boxed fn_toggle_wrap min_height_335px">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->manager_settings, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap fn_card on">
                    <div class="mb-1">
                        <div class="heading_label" for="block_translit"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->manager_language, ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <select name="manager_lang" class="selectpicker">
                            <?php  $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['label']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['btr_languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['label']->key => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['label']->key;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['label']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['m']->value->lang==$_smarty_tpl->tpl_vars['label']->value) {?>selected<?php }?>>
                                    <img src="../files/lang/<?php echo $_smarty_tpl->tpl_vars['label']->value;?>
.png"/>
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>

                                </option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="mb-1">
                        <div class="heading_label" for="block_translit"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_comment, ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <div class="">
                            <input class="form-control" autocomplete="off" name="comment" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m']->value->comment, ENT_QUOTES, 'UTF-8', true);?>
" placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->manager_example, ENT_QUOTES, 'UTF-8', true);?>
"/>
                        </div>
                    </div>

                    <div class="mb-1">
                        <div class="heading_label" for="block_translit"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->manager_date, ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <div class="">
                            <input class="form-control" autocomplete="off" name="" type="text" value="" placeholder="19.01.17|14:02"/>
                        </div>
                    </div>

                    <div class="mb-1">
                        <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->manager_sidebar, ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <div class="">
                            <select name="menu_status" class="selectpicker">
                                <option value="1" <?php if ($_smarty_tpl->tpl_vars['m']->value->menu_status==1) {?>selected=""<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->manager_open, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <option value="0" <?php if ($_smarty_tpl->tpl_vars['m']->value->menu_status==0) {?>selected=""<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->manager_closed, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
   <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="boxed fn_toggle_wrap min_height_230px">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->manager_rights, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                    <span class="font_14 text_600"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->manager_all_access, ENT_QUOTES, 'UTF-8', true);?>
</span>
                    <label class="switch switch-default">
                        <input class="switch-input fn_all_perms" value="" type="checkbox" />
                        <span class="switch-label"></span>
                        <span class="switch-handle"></span>
                    </label>
                </div>
                <div class="toggle_body_wrap on fn_card">
                    <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_smarty_tpl->tpl_vars['title'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['permission']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value) {
$_smarty_tpl->tpl_vars['items']->_loop = true;
 $_smarty_tpl->tpl_vars['title']->value = $_smarty_tpl->tpl_vars['items']->key;
?>
                        <div class="permission_block">
                            <div class="heading_box"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['btr']->value->get_translation($_tmp1);?>
</div>
                            <div class="permission_boxes row fn_perms_wrap">
                                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                                    <div class="col-xl-3 col-lg-4 col-md-6 <?php if ($_smarty_tpl->tpl_vars['m']->value->id==$_smarty_tpl->tpl_vars['manager']->value->id) {?>text-muted<?php }?>">
                                        <div class="permission_box">
                                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                            <label class="switch switch-default">
                                                <input class="switch-input fn_item_perm" name="permissions[]" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['m']->value->permissions&&in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['m']->value->permissions)) {?>checked<?php }?> <?php if ($_smarty_tpl->tpl_vars['m']->value->id==$_smarty_tpl->tpl_vars['manager']->value->id) {?>disabled<?php }?>  />
                                                <span class="switch-label"></span>
                                                <span class="switch-handle"></span>
                                            </label>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="col-xs-12 clearfix"></div>
                    <?php } ?>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 ">
                        <button type="submit" class="btn btn_small btn_blue float-md-right">
                            <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'checked'), 0);?>

                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        </button>
                        <?php if ($_smarty_tpl->tpl_vars['m']->value->cnt_try>=10) {?>
                            <button type="submit" name="unlock_manager" class="btn btn_small btn_blue">
                                <i class="fa fa-magic"></i>
                                &nbsp; <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->manager_unlock, ENT_QUOTES, 'UTF-8', true);?>

                            </button>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
   </div>
</form>

<script>
    $(document).on("change", ".fn_all_perms", function () {
        if($(this).is(":checked")) {
            $('.fn_item_perm').each(function () {
                if(!$(this).is(":checked")) {
                    $(this).trigger("click");
                }
            });
        } else {
            $('.fn_item_perm').each(function () {
                if($(this).is(":checked")) {
                    $(this).trigger("click");
                }
            })
        }
    })
</script><?php }} ?>
