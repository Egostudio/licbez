<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache"/>
    <META HTTP-EQUIV="Expires" CONTENT="-1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>{$meta_title|escape}</title>
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


    {if in_array($smarty.get.module, array("OrdersAdmin", "PostAdmin", "ReportStatsAdmin", "CouponsAdmin", "CategoryStatsAdmin"))}
        <script src="design/js/jquery/datepicker/jquery.ui.datepicker-{$manager->lang}.js"></script>
    {/if}
    <script src="design/js/toastr.min.js"></script>
    <script src="design/js/Sortable.js"></script>
    <!-- Google Tag Manager -->
    {if $settings->gather_enabled}
        {literal}
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
                    })(window,document,'script','dataLayer','GTM-P6T2LJP');
        </script>
        {/literal}
    {/if}
    <!-- End Google Tag Manager  $manager->menu_status && -->
</head>
<body class="navbar-fixed {if $is_mobile === false && $is_tablet === false}menu-pin{/if}">
    <!-- Google Tag Manager (noscript) -->
    {if $settings->gather_enabled}
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P6T2LJP" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    {/if}
    <!-- End Google Tag Manager (noscript) -->

    <a href="javascript:;" id="fix_logo" class="hidden-lg-down"></a>
    <nav id="admin_catalog" class="fn_left_menu">
        <div id="mob_menu"></div>
        <div class="sidebar_header">
            <a class="logo_box">
                <img src="design/images/logo_title.png" alt="OkayCMS"/>
            </a>
            {if $is_mobile === false && $is_tablet === false}
                <span class="fn_switch_menu menu_switch fn_ajax_action {if $manager->menu_status}fn_active_class{/if} hint-left-middle-t-white-s-small-mobile  hint-anim" data-module="managers" data-action="menu_status" data-id="{$manager->id}" data-hint="{$btr->catalog_fixation}">
                    <span class="menu_hamburger"></span>
                </span>
            {else}
                <span class="fn_switch_menu menu_switch" data-module="managers" data-action="menu_status" data-id="{$manager->id}">
                    <span class="menu_hamburger"></span>
                </span>
            {/if}
        </div>
        {*Меню админ. панели*}
        <div class="sidebar sidebar-menu">
            <div class="scrollbar-inner menu_items">
                <div>
                    <ul class="menu_items">
                        {foreach $left_menu as $section=>$items}
                            <li class="{if isset($items.$menu_selected)}open active{/if} {if $items|count > 1} fn_item_sub_switch nav-dropdown{/if}">
                                <a class="nav-link {if $items|count > 1}fn_item_switch nav-dropdown-toggle{/if}" href="{if $items|count > 1}javascript:;{else}index.php?module={$items|reset}{/if}">
                                    <span class="{$section} title">{$btr->get_translation({$section})}</span>
                                    <span class="icon-thumbnail">
                                       {include file='svg_icon.tpl' svgId=$section}
                                    </span>
                                    {if $items|count >1}
                                        <span class="arrow"></span>
                                    {/if}
                                </a>
                                {if $items|count > 1}
                                    <ul class="fn_submenu_toggle submenu">
                                        {foreach $items as $title=>$mod}
                                            <li class="{if $title == $menu_selected}active{/if}">
                                                <a class="nav-link" href="index.php?module={$mod}">
                                                    <span class="icon-thumbnail">
                                                        {$btr->get_translation({$title})|first_letter}
                                                    </span>
                                                    <span class="{$title} title">{$btr->get_translation({$title})}</span>
                                                </a>
                                            </li>
                                        {/foreach}
                                    </ul>
                                {/if}
                            </li>
                        {/foreach}
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    {*Верхняя шапка*}
    <div class="page-container">
        <a href='{$config->root_url}/{$lang_link}' class='admin_bookmark'></a>
        <header class="navbar">
            <div class="container-fluid">
                <div id="mobile_menu" class="fn_mobile_menu hidden-xl-up  text_white">
                    {include file='svg_icon.tpl' svgId='mobile_menu'}
                </div>
                <div class="admin_switches">
                    <div class="box_adswitch">
                        <a class="btn_admin" href="{$config->root_url}/{$lang_link}">
                            {include file='svg_icon.tpl' svgId='icon_desktop'}
                            <span class="">{$btr->index_go_to_site|escape}</span>
                        </a>
                    </div>
                </div>
                <div id="mobile_menu_right" class="fn_mobile_menu_right hidden-md-up  text_white float-xs-right">
                    {include file='svg_icon.tpl' svgId='mobile_menu2'}
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
                        <a href="{$config->root_url}?logout">
                            <span class="hidden-lg-down">{$btr->index_exit|escape}</span>
                            {include file='svg_icon.tpl' svgId='exit'}
                        </a>
                    </div>
                    {*Техподдержка*}
                    <div class="admin_techsupport">
                        <div class="techsupport_inner">
                            <a {if $support_info->public_key} data-hint="{$support_info->balance|balance:false}"{else} data-hint="Not active" {/if}  class="hint-bottom-middle-t-info-s-small-mobile  hint-anim"  href="index.php?module=SupportAdmin">
                                <span class="quickview_hidden">{$btr->index_support|escape}</span>
                                {include file='svg_icon.tpl' svgId='techsupport'}
                                {if $support_info->public_key}
                                    <span class="counter">{$support_info->new_messages}</span>
                                {/if}
                            </a>
                            <div class="techsupport_toggle hidden-md-up">
                                {if $support_info->public_key}
                                    <span>{$support_info->balance|balance:false}</span>
                                {else}
                                    <span>Not active</span>
                                {/if}
                            </div>
                        </div>
                    </div>
                    {*Счетчики уведомлений*}
                    <div class="admin_notification">
                        <div class="notification_inner">
                            <span class="notification_title" href="">
                                <span class="quickview_hidden">{$btr->index_notifications|escape}</span>
                                {include file='svg_icon.tpl' svgId='notify'}
                                {if $all_counter}
                                    <span class="counter">{$all_counter}</span>
                                {/if}
                            </span>
                            <div class="notification_toggle">
                                {if $new_orders_counter > 0}
                                    <div class="notif_item">
                                        <a href="index.php?module=OrdersAdmin" class="l_notif">
                                            <span class="notif_icon boxed_notify">
                                                {include file='svg_icon.tpl' svgId='left_orders'}
                                            </span>
                                            <span class="notif_title">{$btr->general_orders|escape}</span>
                                        </a>
                                        <span class="notif_count">{$new_orders_counter}</span>
                                    </div>
                                {/if}
                                {if $new_comments_counter > 0}
                                    <div class="notif_item">
                                        <a href="index.php?module=CommentsAdmin" class="l_notif">
                                            <span class="notif_icon boxed_warning">
                                                {include file='svg_icon.tpl' svgId='left_comments'}
                                            </span>
                                            <span class="notif_title">{$btr->general_comments|escape}</span>
                                        </a>
                                        <span class="notif_count">{$new_comments_counter}</span>
                                    </div>
                                {/if}
                                {if $new_feedbacks_counter > 0}
                                    <div class="notif_item">
                                        <a href="index.php?module=FeedbacksAdmin" class="l_notif">
                                            <span class="notif_icon boxed_yellow">
                                                {include file='svg_icon.tpl' svgId='email'}
                                            </span>
                                            <span class="notif_title">{$btr->general_feedback|escape}</span>
                                        </a>
                                        <span class="notif_count">{$new_feedbacks_counter}</span>
                                    </div>
                                {/if}
                                {if $new_callbacks_counter > 0}
                                    <div class="notif_item">
                                        <a href="index.php?module=CallbacksAdmin" class="l_notif">
                                            <span class="notif_icon boxed_attention">
                                                {include file='svg_icon.tpl' svgId='phone'}
                                            </span>
                                            <span class="notif_title">{$btr->general_callback|escape}</span>
                                        </a>
                                        <span class="notif_count">{$new_callbacks_counter}</span>
                                    </div>
                                {/if}
                                {if !$new_orders_counter > 0 && !$new_comments_counter > 0 && !$new_feedbacks_counter > 0 && !$new_callbacks_counter > 0}
                                <div class="notif_item">
                                    <span class="notif_title">{$btr->index_no_notification|escape}</span>
                                </div>
                                {/if}
                            </div>
                        </div>
                    </div>
                    <div class="admin_languages" >
                        <div class="languages_inner">
                            <span class="languages_title hidden-md-up">{$btr->general_languages|escape}</span>
                            {include file="include_languages.tpl"}
                        </div>
                    </div>
                    <div class="admin_exit hidden-md-up">
                        <a href="{$config->root_url}?logout">
                            <span class="">{$btr->index_exit|escape}</span>
                            {include file='svg_icon.tpl' svgId='exit'}
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <div class="main">
            <div class="container-fluid animated fadeIn">
                <div class="">
                    {if $content}
                        {$content}
                    {else}
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 mt-1">
                                <div class="boxed boxed_warning">
                                    <div class="heading_box">
                                        {$btr->general_no_permission}
                                    </div>
                                </div>
                            </div>
                        </div>
                    {/if}
                </div>
                <footer id="footer" class="">
                    <div class="col-md-12 font_12 text_white">
                        <div class="float-md-right">
                        </div>
                    </div>
                </footer>
             </div>
            {*Быстрое сохранение*}
            <div class="fn_fast_save">
                <button type="submit" class="btn btn_small btn_blue ">
                    {include file='svg_icon.tpl' svgId='checked'}
                    <span>{$btr->general_apply|escape}</span>
                </button>
            </div>
        </div>

        {*Форма подтверждения действий*}
        <div id="fn_action_modal" class="modal fade show-1" role="document">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="card-header">
                        <div class="heading_modal">{$btr->index_confirm|escape}</div>
                    </div>
                    <div class="modal-body">
                        <button type="submit" class="btn btn_small btn_blue fn_submit_delete mx-h">
                            {include file='svg_icon.tpl' svgId='checked'}
                            <span>{$btr->index_yes|escape}</span>
                        </button>

                        <button type="button" class="btn btn_small btn-danger fn_dismiss_delete mx-h" data-dismiss="modal">
                            {include file='svg_icon.tpl' svgId='delete'}
                            <span>{$btr->index_no|escape}</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

{*main scripts*}
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
            {literal}
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
            {/literal}
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
    {literal}
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
                session_id = '{/literal}{$smarty.session.id}{literal}';
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
    {/literal}

    /*
    * функции генерации мета данных
    * */
    var is_translit_alpha = $(".fn_is_translit_alpha");
    var translit_pairs = [];
    {foreach $translit_pairs as $i=>$pair}
        translit_pairs[{$i}] = {
            from: "{$pair['from']}".split("-"),
            to: "{$pair['to']}".split("-")
        };
    {/foreach}
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
