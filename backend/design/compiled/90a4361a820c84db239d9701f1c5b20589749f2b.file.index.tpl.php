<?php /* Smarty version Smarty-3.1.18, created on 2019-04-14 21:30:03
         compiled from "backend/design/html/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9727760155cb36bc4efa364-89525152%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90a4361a820c84db239d9701f1c5b20589749f2b' => 
    array (
      0 => 'backend/design/html/index.tpl',
      1 => 1555270200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9727760155cb36bc4efa364-89525152',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5cb36bc51902e0_48835094',
  'variables' => 
  array (
    'meta_title' => 0,
    'manager' => 0,
    'settings' => 0,
    'is_mobile' => 0,
    'is_tablet' => 0,
    'btr' => 0,
    'left_menu' => 0,
    'menu_selected' => 0,
    'items' => 0,
    'section' => 0,
    'title' => 0,
    'mod' => 0,
    'config' => 0,
    'lang_link' => 0,
    'support_info' => 0,
    'all_counter' => 0,
    'new_orders_counter' => 0,
    'new_comments_counter' => 0,
    'new_feedbacks_counter' => 0,
    'new_callbacks_counter' => 0,
    'content' => 0,
    'translit_pairs' => 0,
    'i' => 0,
    'pair' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cb36bc51902e0_48835094')) {function content_5cb36bc51902e0_48835094($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache"/>
    <META HTTP-EQUIV="Expires" CONTENT="-1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8', true);?>
</title>
    <link rel="icon" href="design/images/favicon.png" type="image/x-icon" />
    <script src="design/js/jquery/jquery.js"></script>
    <script src="design/js/jquery.scrollbar.min.js"></script>
    <script src="design/js/jquery/jquery-ui.min.js"></script>
    <link rel="stylesheet" type="text/css" href="design/js/jquery/jquery-ui.min.css" />
    <link href="design/css/okay.css" rel="stylesheet" type="text/css" />
    <link href="design/css/media.css" rel="stylesheet" type="text/css" />
    <script src="design/js/bootstrap.min.js"></script>
    <script src="design/js/bootstrap-select.js"></script>
    <script src="design/js/jquery.dd.min.js"></script>


    <?php if (in_array($_GET['module'],array("OrdersAdmin","PostAdmin","ReportStatsAdmin","CouponsAdmin","CategoryStatsAdmin"))) {?>
        <script src="design/js/jquery/datepicker/jquery.ui.datepicker-<?php echo $_smarty_tpl->tpl_vars['manager']->value->lang;?>
.js"></script>
    <?php }?>
    <script src="design/js/toastr.min.js"></script>
    <script src="design/js/Sortable.js"></script>
    <!-- Google Tag Manager -->
    <?php if ($_smarty_tpl->tpl_vars['settings']->value->gather_enabled) {?>
        
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
                    })(window,document,'script','dataLayer','GTM-P6T2LJP');
        </script>
        
    <?php }?>
    <!-- End Google Tag Manager  $manager->menu_status && -->
</head>
<body class="navbar-fixed <?php if ($_smarty_tpl->tpl_vars['is_mobile']->value===false&&$_smarty_tpl->tpl_vars['is_tablet']->value===false) {?>menu-pin<?php }?>">
    <!-- Google Tag Manager (noscript) -->
    <?php if ($_smarty_tpl->tpl_vars['settings']->value->gather_enabled) {?>
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P6T2LJP" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <?php }?>
    <!-- End Google Tag Manager (noscript) -->

    <a href="javascript:;" id="fix_logo" class="hidden-lg-down"></a>
    <nav id="admin_catalog" class="fn_left_menu">
        <div id="mob_menu"></div>
        <div class="sidebar_header">
            <a class="logo_box">
                <img src="design/images/logo_title.png" alt="OkayCMS"/>
            </a>
            <?php if ($_smarty_tpl->tpl_vars['is_mobile']->value===false&&$_smarty_tpl->tpl_vars['is_tablet']->value===false) {?>
                <span class="fn_switch_menu menu_switch fn_ajax_action <?php if ($_smarty_tpl->tpl_vars['manager']->value->menu_status) {?>fn_active_class<?php }?> hint-left-middle-t-white-s-small-mobile  hint-anim" data-module="managers" data-action="menu_status" data-id="<?php echo $_smarty_tpl->tpl_vars['manager']->value->id;?>
" data-hint="<?php echo $_smarty_tpl->tpl_vars['btr']->value->catalog_fixation;?>
">
                    <span class="menu_hamburger"></span>
                </span>
            <?php } else { ?>
                <span class="fn_switch_menu menu_switch" data-module="managers" data-action="menu_status" data-id="<?php echo $_smarty_tpl->tpl_vars['manager']->value->id;?>
">
                    <span class="menu_hamburger"></span>
                </span>
            <?php }?>
        </div>
        
        <div class="sidebar sidebar-menu">
            <div class="scrollbar-inner menu_items">
                <div>
                    <ul class="menu_items">
                        <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_smarty_tpl->tpl_vars['section'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['left_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value) {
$_smarty_tpl->tpl_vars['items']->_loop = true;
 $_smarty_tpl->tpl_vars['section']->value = $_smarty_tpl->tpl_vars['items']->key;
?>
                            <li class="<?php if (isset($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['menu_selected']->value])) {?>open active<?php }?> <?php if (count($_smarty_tpl->tpl_vars['items']->value)>1) {?> fn_item_sub_switch nav-dropdown<?php }?>">
                                <a class="nav-link <?php if (count($_smarty_tpl->tpl_vars['items']->value)>1) {?>fn_item_switch nav-dropdown-toggle<?php }?>" href="<?php if (count($_smarty_tpl->tpl_vars['items']->value)>1) {?>javascript:;<?php } else { ?>index.php?module=<?php echo reset($_smarty_tpl->tpl_vars['items']->value);?>
<?php }?>">
                                    <span class="<?php echo $_smarty_tpl->tpl_vars['section']->value;?>
 title"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['section']->value;?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['btr']->value->get_translation($_tmp1);?>
</span>
                                    <span class="icon-thumbnail">
                                       <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>$_smarty_tpl->tpl_vars['section']->value), 0);?>

                                    </span>
                                    <?php if (count($_smarty_tpl->tpl_vars['items']->value)>1) {?>
                                        <span class="arrow"></span>
                                    <?php }?>
                                </a>
                                <?php if (count($_smarty_tpl->tpl_vars['items']->value)>1) {?>
                                    <ul class="fn_submenu_toggle submenu">
                                        <?php  $_smarty_tpl->tpl_vars['mod'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mod']->_loop = false;
 $_smarty_tpl->tpl_vars['title'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mod']->key => $_smarty_tpl->tpl_vars['mod']->value) {
$_smarty_tpl->tpl_vars['mod']->_loop = true;
 $_smarty_tpl->tpl_vars['title']->value = $_smarty_tpl->tpl_vars['mod']->key;
?>
                                            <li class="<?php if ($_smarty_tpl->tpl_vars['title']->value==$_smarty_tpl->tpl_vars['menu_selected']->value) {?>active<?php }?>">
                                                <a class="nav-link" href="index.php?module=<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
">
                                                    <span class="icon-thumbnail">
                                                        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['first_letter'][0][0]->first_letter_modifier($_smarty_tpl->tpl_vars['btr']->value->get_translation($_tmp2));?>

                                                    </span>
                                                    <span class="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 title"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
<?php $_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['btr']->value->get_translation($_tmp3);?>
</span>
                                                </a>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                <?php }?>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    
    <div class="page-container">
        <a href='<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
' class='admin_bookmark'></a>
        <header class="navbar">
            <div class="container-fluid">
                <div id="mobile_menu" class="fn_mobile_menu hidden-xl-up  text_white">
                    <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'mobile_menu'), 0);?>

                </div>
                <div class="admin_switches">
                    <div class="box_adswitch">
                        <a class="btn_admin" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
">
                            <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'icon_desktop'), 0);?>

                            <span class=""><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->index_go_to_site, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        </a>
                    </div>
                </div>
                <div id="mobile_menu_right" class="fn_mobile_menu_right hidden-md-up  text_white float-xs-right">
                    <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'mobile_menu2'), 0);?>

                </div>
                <div id="quickview" class="fn_quickview">
                    <div class="sidebar_header hidden-md-up">
                        <span class="fn_switch_quickview menu_switch">
                            <span class="menu_hamburger"></span>
                        </span>
                        <a class="logo_box">
                            <img src="design/images/logo_title.png" alt="OkayCMS"/>
                        </a>
                    </div>
                    <div class="admin_exit hidden-sm-down">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
?logout">
                            <span class="hidden-lg-down"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->index_exit, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'exit'), 0);?>

                        </a>
                    </div>
                    
                    <div class="admin_techsupport">
                        <div class="techsupport_inner">
                            <a <?php if ($_smarty_tpl->tpl_vars['support_info']->value->public_key) {?> data-hint="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['balance'][0][0]->balance_modifier($_smarty_tpl->tpl_vars['support_info']->value->balance,false);?>
"<?php } else { ?> data-hint="Not active" <?php }?>  class="hint-bottom-middle-t-info-s-small-mobile  hint-anim"  href="index.php?module=SupportAdmin">
                                <span class="quickview_hidden"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->index_support, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'techsupport'), 0);?>

                                <?php if ($_smarty_tpl->tpl_vars['support_info']->value->public_key) {?>
                                    <span class="counter"><?php echo $_smarty_tpl->tpl_vars['support_info']->value->new_messages;?>
</span>
                                <?php }?>
                            </a>
                            <div class="techsupport_toggle hidden-md-up">
                                <?php if ($_smarty_tpl->tpl_vars['support_info']->value->public_key) {?>
                                    <span><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['balance'][0][0]->balance_modifier($_smarty_tpl->tpl_vars['support_info']->value->balance,false);?>
</span>
                                <?php } else { ?>
                                    <span>Not active</span>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="admin_notification">
                        <div class="notification_inner">
                            <span class="notification_title" href="">
                                <span class="quickview_hidden"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->index_notifications, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'notify'), 0);?>

                                <?php if ($_smarty_tpl->tpl_vars['all_counter']->value) {?>
                                    <span class="counter"><?php echo $_smarty_tpl->tpl_vars['all_counter']->value;?>
</span>
                                <?php }?>
                            </span>
                            <div class="notification_toggle">
                                <?php if ($_smarty_tpl->tpl_vars['new_orders_counter']->value>0) {?>
                                    <div class="notif_item">
                                        <a href="index.php?module=OrdersAdmin" class="l_notif">
                                            <span class="notif_icon boxed_notify">
                                                <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'left_orders'), 0);?>

                                            </span>
                                            <span class="notif_title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_orders, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                        </a>
                                        <span class="notif_count"><?php echo $_smarty_tpl->tpl_vars['new_orders_counter']->value;?>
</span>
                                    </div>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['new_comments_counter']->value>0) {?>
                                    <div class="notif_item">
                                        <a href="index.php?module=CommentsAdmin" class="l_notif">
                                            <span class="notif_icon boxed_warning">
                                                <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'left_comments'), 0);?>

                                            </span>
                                            <span class="notif_title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_comments, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                        </a>
                                        <span class="notif_count"><?php echo $_smarty_tpl->tpl_vars['new_comments_counter']->value;?>
</span>
                                    </div>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['new_feedbacks_counter']->value>0) {?>
                                    <div class="notif_item">
                                        <a href="index.php?module=FeedbacksAdmin" class="l_notif">
                                            <span class="notif_icon boxed_yellow">
                                                <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'email'), 0);?>

                                            </span>
                                            <span class="notif_title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_feedback, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                        </a>
                                        <span class="notif_count"><?php echo $_smarty_tpl->tpl_vars['new_feedbacks_counter']->value;?>
</span>
                                    </div>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['new_callbacks_counter']->value>0) {?>
                                    <div class="notif_item">
                                        <a href="index.php?module=CallbacksAdmin" class="l_notif">
                                            <span class="notif_icon boxed_attention">
                                                <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'phone'), 0);?>

                                            </span>
                                            <span class="notif_title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_callback, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                        </a>
                                        <span class="notif_count"><?php echo $_smarty_tpl->tpl_vars['new_callbacks_counter']->value;?>
</span>
                                    </div>
                                <?php }?>
                                <?php if (!$_smarty_tpl->tpl_vars['new_orders_counter']->value>0&&!$_smarty_tpl->tpl_vars['new_comments_counter']->value>0&&!$_smarty_tpl->tpl_vars['new_feedbacks_counter']->value>0&&!$_smarty_tpl->tpl_vars['new_callbacks_counter']->value>0) {?>
                                <div class="notif_item">
                                    <span class="notif_title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->index_no_notification, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <div class="admin_languages" >
                        <div class="languages_inner">
                            <span class="languages_title hidden-md-up"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_languages, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            <?php echo $_smarty_tpl->getSubTemplate ("include_languages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                        </div>
                    </div>
                    <div class="admin_exit hidden-md-up">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
?logout">
                            <span class=""><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->index_exit, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'exit'), 0);?>

                        </a>
                    </div>
                </div>
            </div>
        </header>
        <div class="main">
            <div class="container-fluid animated fadeIn">
                <div class="">
                    <?php if ($_smarty_tpl->tpl_vars['content']->value) {?>
                        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

                    <?php } else { ?>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 mt-1">
                                <div class="boxed boxed_warning">
                                    <div class="heading_box">
                                        <?php echo $_smarty_tpl->tpl_vars['btr']->value->general_no_permission;?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                </div>
                <footer id="footer" class="">
                    <div class="col-md-12 font_12 text_white">
                        <div class="float-md-right">
                        </div>
                    </div>
                </footer>
             </div>
            
            <div class="fn_fast_save">
                <button type="submit" class="btn btn_small btn_blue ">
                    <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'checked'), 0);?>

                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
                </button>
            </div>
        </div>

        
        <div id="fn_action_modal" class="modal fade show-1" role="document">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="card-header">
                        <div class="heading_modal"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->index_confirm, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    </div>
                    <div class="modal-body">
                        <button type="submit" class="btn btn_small btn_blue fn_submit_delete mx-h">
                            <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'checked'), 0);?>

                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->index_yes, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        </button>

                        <button type="button" class="btn btn_small btn-danger fn_dismiss_delete mx-h" data-dismiss="modal">
                            <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'delete'), 0);?>

                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->index_no, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


<script>
    $(function(){

        /* Initializing the scrollbar */
        if($('.scrollbar-inner').size()>0){
            $('.scrollbar-inner').scrollbar({
                "disableBodyScroll":true
            });
        }

        if($(window).width() < 1199 ){
            if($('.scrollbar-variant').size()>0){
                $('.scrollbar-variant').scrollbar();
            }
        }

        if($('form.fn_fast_button').size()>0){
            $('input,textarea,select, .dropdown-toggle').bind('keyup change dragover click',function(){
               $('.fn_fast_save').show();
            });
            $('.fn_fast_save').on('click', function () {
                $('body').find("form.fn_fast_button").trigger('submit');
            });
        }


        /* Check */
        if($('.fn_check_all').size()>0){
            $(document).on('change','.fn_check_all',function(){
                if($(this).is(":checked")) {
                    console.log($(this).closest("form").find('.hidden_check'))
                    $(this).closest("form").find('.hidden_check').each(function () {
                        if(!$(this).is(":checked")) {
                            $(this).trigger("click");
                        }
                    });
                } else {
                    $(this).closest("form").find('.hidden_check').each(function () {
                        if($(this).is(":checked")) {
                            $(this).trigger("click");
                        }
                    })
                }
            });
        }

        /* Catalog items toggle */
        if($('.fn_item_switch').size()>0){
            $('.fn_item_switch').on('click',function(e){
                var parent = $(this).closest("ul"),
                    li = $(this).closest(".fn_item_sub_switch"),
                    sub = li.find(".fn_submenu_toggle");

                if(li.hasClass("open active")){

                    sub.slideUp(200, function () {
                        li.removeClass("open active")
                    })

                } else {
                    parent.find("li.open").children(".fn_submenu_toggle").slideUp(200),
                    parent.find("li.open").removeClass("open active"),
                    li.children(".arrow").addClass("open active"),

                    sub.slideDown(200, function () {
                        li.addClass("open active")
                    })
                }
            });
        }

        /* Left menu toggle */
        if($('.fn_switch_menu').size()>0){
            $(document).on("click", ".fn_switch_menu", function () {
                $("body").toggleClass("menu-pin");
            });
            $(document).on("click", ".fn_mobile_menu", function () {
                $("body").toggleClass("menu-pin");
                $(".fn_quickview").removeClass("open");
            });
        }

        /* Right menu toggle */
        if($('.fn_switch_quickview').size()>0){
            $(document).on("click", ".fn_mobile_menu_right", function () {
                $(this).next().toggleClass("open");
                $("body").removeClass("menu-pin");
            });
            $(document).on("click", ".fn_switch_quickview", function () {
                $(this).closest(".fn_quickview").toggleClass("open");
            });
        }



        /* Delete images for products */
        if($('.images_list').size()>0){
            $('.fn_delete').on('click',function(){
                if($('.fn_accept_delete').size()>0){
                    $('.fn_accept_delete').val('1');
                    $(this).closest("li").fadeOut(200, function() {
                        $(this).remove();
                    });
                } else {
                    $(this).closest("li").fadeOut(200, function() {
                        $(this).remove();
                    });
                }
                return false;
            });
        }



        /* Initializing sorting */
        if($(".sortable").size()>0) {
            
            $(".sortable").each(function() {
                Sortable.create(this, {
                    handle: ".move_zone",  // Drag handle selector within list items
                    sort: true,  // sorting inside list
                    animation: 150,  // ms, animation speed moving items when sorting, `0` — without animation

                    ghostClass: "sortable-ghost",  // Class name for the drop placeholder
                    chosenClass: "sortable-chosen",  // Class name for the chosen item
                    dragClass: "sortable-drag",  // Class name for the dragging item
                    scrollSensitivity: 30, // px, how near the mouse must be to an edge to start scrolling.
                    scrollSpeed: 10, // px
                    // Changed sorting within list
                    onUpdate: function (evt) {
                        if ($(".product_images_list").size() > 0) {
                            var itemEl = evt.item;  // dragged HTMLElement
                            if ($(itemEl).closest(".fn_droplist_wrap").data("image") == "product") {
                                $(".product_images_list").find("li.first_image").removeClass("first_image");
                                $(".product_images_list").find("li:nth-child(2)").addClass("first_image");
                            }
                        }
                    }
                });
            });
            
        }

        /* Call an ajax entity update */
        if($(".fn_ajax_action").size()>0){
            $(document).on("click",".fn_ajax_action",function () {
                ajax_action($(this));
            });
        }

        if($(".fn_parent_image").size()>0 ) {
            var image_wrapper = $(".fn_new_image").clone(true);
            $(".fn_new_image").remove();

            $(document).on("click", '.fn_delete_item', function () {
                $(".fn_upload_image").removeClass("hidden");
                $(".fn_accept_delete").val(1);
                $(this).closest(".fn_image_wrapper").remove()
            });

            if(window.File && window.FileReader && window.FileList) {

                $(".fn_upload_image").on('dragover', function (e){
                    e.preventDefault();
                    $(this).css('background', '#bababa');
                });
                $(".fn_upload_image").on('dragleave', function(){
                    $(this).css('background', '#f8f8f8');
                });
                function handleFileSelect(evt){
                    var parent = $(".fn_parent_image");
                    var files = evt.target.files;
                    for (var i = 0, f; f = files[i]; i++) {
                        if (!f.type.match('image.*')) {
                            continue;
                        }
                        var reader = new FileReader();
                        reader.onload = (function(theFile) {
                            return function(e) {
                                clone_image = image_wrapper.clone(true);
                                clone_image.find("img").attr("src", e.target.result);
                                clone_image.find("img").attr("onerror", '$(this).closest(\"div\").remove()');
                                clone_image.appendTo(parent);
                                $(".fn_upload_image").addClass("hidden");
                            };
                        })(f);
                        reader.readAsDataURL(f);
                    }
                    $(".fn_upload_image").removeAttr("style");
                }
                $(document).on('change','.dropzone_image',handleFileSelect);
            }
        }
    });


    if($('.fn_remove').size() > 0) {
        // Подтверждение удаления
        /*
        * функция модального окна с подтверждением удаления
        * принимает аргумент $this - по факту сама кнопка удаления
        * функция вызывается прямо в файлах tpl
        * */
        function success_action ($this){
            $(document).on('click','.fn_submit_delete',function(){
                $('.fn_form_list input[type="checkbox"][name*="check"]').attr('checked', false);
                $this.closest(".fn_row").find('input[type="checkbox"][name*="check"]').prop('checked', true);
                $this.closest(".fn_form_list").find('select[name="action"] option[value=delete]').prop('selected', true);
                $this.closest(".fn_form_list").submit();
            });
            $(document).on('click','.fn_dismiss_delete',function(){
                $('.fn_form_list input[type="checkbox"][name*="check"]').prop('checked', false);
                $this.closest(".fn_form_list").find('select[name="action"] option[value=delete]').removeAttr('selected');
                return false;
            });
        }
    }
    
        if($(".fn_ajax_action,.fn_ajax_block").size()>0) {
            /* Функция аяксового обновления полей
            * state - состояние объекта (включен/выключен)
            * id - id обновляемой сущности
            * module - типо сущности
            * action - обновляемое поле (поле в БД)
            * класс "fn_ajax_block" у елемента - означает массовое обновление;
            * если нужно:
            * 1) добавить класс "fn_ajax_block" к блоку в котором хотите обновить несколько полей,
            * 2) добавить класс "fn_ajax_element" к елементам, в блоке("fn_ajax_block"), которые хотите обновить
            * .fn_ajax_element: аттрибут "name" - поле БД; val() - значение.
            * */
            function ajax_action($this) {
                var state, module, session_id, action, id, values = {};
                state = $this.hasClass("fn_active_class") ? 0:1;
                id = parseInt($this.data('id'));
                module = $this.data("module");
                action = $this.data("action");
                session_id = '<?php echo $_SESSION['id'];?>
';
                if (!$this.hasClass("fn_ajax_block")) {
                    values = {[action]: state};
                } else {
                    $this.find('.fn_ajax_element').each(function() {
                        var elem = $(this);
                        values[elem.attr('name')] = elem.val();
                    });
                }
                toastr.options = {
                    closeButton: true,
                    newestOnTop: true,
                    progressBar: true,
                    positionClass: 'toast-top-right',
                    preventDuplicates: false,
                    onclick: null
                };

                //alert(session_id);
                $.ajax({
                    type: "POST",
                    dataType: 'json',
                    url: "ajax/update_object.php",
                    data: {
                        object : module,
                        id : id,
                        values: values,
                        session_id : session_id
                    },
                    success: function(data){
                        var msg = "";
                        if(data){
                            toastr.success(msg, "Success");
                            if (action == "processed" && module == "callback") {
                                $this.closest(".fn_row").find(".fn_callbacks_toggle").toggleClass("hidden");
                            } else {
                                $this.toggleClass("fn_active_class");
                                if (action == "approved" || action == "processed") {
                                    $this.closest("div").find(".fn_answer_btn").show();
                                }
                            }
                        } else {
                            toastr.error(msg, "Error");
                        }
                    }
                });
                return false;
            }
        }
    

    /*
    * функции генерации мета данных
    * */
    var is_translit_alpha = $(".fn_is_translit_alpha");
    var translit_pairs = [];
    <?php  $_smarty_tpl->tpl_vars['pair'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pair']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['translit_pairs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pair']->key => $_smarty_tpl->tpl_vars['pair']->value) {
$_smarty_tpl->tpl_vars['pair']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['pair']->key;
?>
        translit_pairs[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
] = {
            from: "<?php echo $_smarty_tpl->tpl_vars['pair']->value['from'];?>
".split("-"),
            to: "<?php echo $_smarty_tpl->tpl_vars['pair']->value['to'];?>
".split("-")
        };
    <?php } ?>
    if($('input').is('.fn_meta_field')) {
        $(window).on("load", function() {

            // Автозаполнение мета-тегов
            meta_title_touched = true;
            meta_keywords_touched = true;
            meta_description_touched = true;

            if($('input[name="meta_title"]').val() == generate_meta_title() || $('input[name="meta_title"]').val() == '')
                meta_title_touched = false;
            if($('input[name="meta_keywords"]').val() == generate_meta_keywords() || $('input[name="meta_keywords"]').val() == '')
                meta_keywords_touched = false;
            if($('textarea[name="meta_description"]').val() == generate_meta_description() || $('textarea[name="meta_description"]').val() == '')
                meta_description_touched = false;

            $('input[name="meta_title"]').change(function() { meta_title_touched = true; });
            $('input[name="meta_keywords"]').change(function() { meta_keywords_touched = true; });
            $('textarea[name="meta_description"]').change(function() { meta_description_touched = true; });

            $('input[name="name"]').keyup(function() { set_meta(); });

            if($(".fn_meta_brand").size()>0) {
                $("select[name=brand_id]").on("change",function () {
                    set_meta();
                })
            }
            if($(".fn_meta_categories").size()>0) {
                $(".fn_meta_categories").on("change",function () {
                    set_meta();
                })
            }
        });



        function set_meta() {
            if(!meta_title_touched)
                $('input[name="meta_title"]').val(generate_meta_title());
            if(!meta_keywords_touched)
                $('input[name="meta_keywords"]').val(generate_meta_keywords());
            if(!meta_description_touched)
                $('textarea[name="meta_description"]').val(generate_meta_description());
            if(!$('#block_translit').is(':checked'))
                $('input[name="url"]').val(generate_url());
        }

        function generate_meta_title() {
            name = $('input[name="name"]').val();
            return name;
        }

        function generate_meta_keywords() {
            name = $('input[name="name"]').val();
            result = name;
            if($(".fn_meta_brand").size() > 0) {
                brand = $('select[name="brand_id"] option:selected').data('brand_name');
                if (typeof(brand) == 'string' && brand != '')
                    result += ', ' + brand;
            }

            if($(".fn_meta_categories").size()>0) {
                if($(".fn_product_categories_list .fn_category_item").size() == 0) {
                    c = $(".fn_meta_categories option:selected").data("category_name");
                    if (typeof(c) == 'string' && c != '')
                        result += ', ' + c;
                } else {
                    cat = $(".fn_product_categories_list .fn_category_item:first");
                    c = cat.find("input").data("cat_name");
                    if (typeof(c) == 'string' && c != '')
                        result += ', ' + c;
                }

            }
            return result;
        }

        function generate_meta_description() {
            if(typeof(tinyMCE.get("fn_editor")) =='object') {
                description = tinyMCE.get("fn_editor").getContent().replace(/(<([^>]+)>)/ig," ").replace(/(\&nbsp;)/ig," ").replace(/^\s+|\s+$/g, '').substr(0, 512);
                return description;
            } else {
                return $('.fn_editor_class').val().replace(/(<([^>]+)>)/ig," ").replace(/(\&nbsp;)/ig," ").replace(/^\s+|\s+$/g, '').substr(0, 512);
            }
        }
    }

    function generate_url() {
        url = $('input[name="name"]').val();
        url = translit(url);
        if (is_translit_alpha.size() > 0) {
            url = url.replace(/[^0-9a-z]+/gi, '').toLowerCase();
        } else {
            url = url.replace(/[\s]+/gi, '-');
            url = url.replace(/[^0-9a-z_\-]+/gi, '').toLowerCase();
        }
        return url;
    }

    function translit(str) {
        var str_tm = str;
        for (var j in translit_pairs) {
            var from = translit_pairs[j].from,
                to = translit_pairs[j].to,
                res = '';
            for(var i=0, l=str_tm.length; i<l; i++) {
                var s = str_tm.charAt(i), n = from.indexOf(s);
                if(n >= 0) { res += to[n]; }
                else { res += s; }
            }
            str_tm = res;
        }
        return str_tm;
    }
    /*функции генерации мета данных end*/

    $(window).on('load',function () {

        $("#countries_select").msDropdown({
            roundedBorder:false
        });

        /*
        * Скрипт табов
        * */
        $('.tabs').each(function(i) {
            var cur_nav = $(this).find('.tab_navigation'),
                cur_tabs = $(this).find('.tab_container');
            if(cur_nav.children('.selected').size() > 0) {
                $(cur_nav.children('.selected').attr("href")).show();
                cur_tabs.css('height', cur_tabs.children($(cur_nav.children('.selected')).attr("href")).outerHeight());
            } else {
                cur_nav.children().first().addClass('selected');
                cur_tabs.children().first().show();
                cur_tabs.css('height', cur_tabs.children().first().outerHeight());
            }
        });

        $('.tab_navigation_link').click(function(e){
            e.preventDefault();
            if($(this).hasClass('selected')){
                return true;
            }
            var cur_nav = $(this).closest('.tabs').find('.tab_navigation'),
                cur_tabs = $(this).closest('.tabs').find('.tab_container');
            cur_tabs.children().hide();
            cur_nav.children().removeClass('selected');
            $(this).addClass('selected');
            $($(this).attr("href")).fadeIn(200);
            cur_tabs.css('height', cur_tabs.children($(this).attr("href")).outerHeight());
        });
        /*Скрипт табов end*/

        /*
        * скрипт сворачивания информационных блоков
        * */
        $(document).on("click", ".fn_toggle_card", function () {
            $(this).closest(".fn_toggle_wrap").find('.fn_icon_arrow').toggleClass('rotate_180');
            $(this).closest(".fn_toggle_wrap").find(".fn_card").slideToggle(500);
        });

        /*
        * Блокировка автоформирования ссылки
        * */
        $(document).on("click", ".fn_disable_url", function () {
            if($(".fn_url").attr("readonly")){
                $(".fn_url").removeAttr("readonly");
            } else {
                $(".fn_url").attr("readonly",true);
            }
            $(this).find('i').toggleClass("fa-unlock");
            $("#block_translit").trigger("click");
        });
        /*Блокировка автоформирования ссылки end*/

        if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
            $('.selectpicker').selectpicker('mobile');
        }
    });

</script>
</html>
<?php }} ?>
