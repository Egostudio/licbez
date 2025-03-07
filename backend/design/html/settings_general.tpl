{$meta_title = $btr->settings_general_sites scope=parent}

{*Название страницы*}
<div class="row">
    <div class="col-lg-7 col-md-7">
        <div class="heading_page">{$btr->settings_general_sites|escape}</div>
    </div>
    <div class="col-lg-5 col-md-5 text-xs-right float-xs-right"></div>
</div>

{*Вывод успешных сообщений*}
{if $message_success}
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="boxed boxed_success">
                <div class="heading_box">
                    {if $message_success == 'saved'}
                        {$btr->general_settings_saved|escape}
                    {/if}
                    {if $smarty.get.return}
                        <a class="btn btn_return float-xs-right" href="{$smarty.get.return}">
                            {include file='svg_icon.tpl' svgId='return'}
                            <span>{$btr->general_back|escape}</span>
                        </a>
                    {/if}
                </div>
            </div>
        </div>
    </div>
{/if}

{*Главная форма страницы*}
<form method="post" enctype="multipart/form-data">
    <input type=hidden name="session_id" value="{$smarty.session.id}">

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="boxed fn_toggle_wrap min_height_335px">
                <div class="heading_box">
                    {$btr->settings_general_options|escape}
                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                {*Параметры элемента*}
                <div class="toggle_body_wrap on fn_card">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="heading_label">{$btr->settings_general_sitename|escape}</div>
                            <div class="mb-1">
                                <input name="site_name" class="form-control" type="text" value="{$settings->site_name|escape}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="heading_label">{$btr->settings_general_date|escape}</div>
                            <div class="mb-1">
                                <input name="date_format" class="form-control" type="text" value="{$settings->date_format|escape}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="heading_label">{$btr->settings_general_email|escape}</div>
                            <div class="mb-1">
                                <input name="admin_email" class="form-control" type="text" value="{$settings->admin_email|escape}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="heading_label">{$btr->settings_general_shutdown|escape}</div>
                            <div class="mb-1">
                                <select name="site_work" class="selectpicker">
                                    <option value="on" {if $settings->site_work == "on"}selected{/if}>{$btr->settings_general_turn_on|escape}</option>
                                    <option value="off" {if $settings->site_work == "off"}selected{/if}>{$btr->settings_general_turn_off|escape}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="heading_label">{$btr->settings_general_tech_message|escape}</div>
                            <div class="">
                                <textarea name="site_annotation" class="form-control okay_textarea">{$settings->site_annotation|escape}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {*Логотип сайта*}
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="boxed fn_toggle_wrap ">
                <div class="heading_box">
                    {$btr->settings_general_site_logo|escape}
                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                <div>
                    {$btr->settings_general_allow_ext|escape}
                    {if $allow_ext}
                        {foreach $allow_ext as $img_ext}
                            <span class="tag tag-info">{$img_ext|escape}</span>
                        {/foreach}
                    {/if}
                </div>
                <div class="toggle_body_wrap on fn_card">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="boxed">
                                {if $settings->site_logo}
                                    <div class="fn_parent_image txt_center">
                                        <div class="banner_image fn_image_wrapper text-xs-center">
                                            <a href="javascript:;" class="fn_delete_item remove_image"></a>
                                            <input type="hidden" name="site_logo" value="{$settings->site_logo|escape}">
                                            <img class="watermark_image" src="{$config->root_url}/design/{$settings->theme}/images/{$settings->site_logo}" alt="" />
                                        </div>
                                    </div>
                                {else}
                                    <div class="fn_parent_image"></div>
                                {/if}

                                <div class="fn_upload_image dropzone_block_image text-xs-center {if $settings->site_logo} hidden{/if}">
                                    <i class="fa fa-plus font-5xl" aria-hidden="true"></i>
                                    <input class="dropzone_image" name="site_logo" type="file" />
                                </div>
                                <div class="image_wrapper fn_image_wrapper fn_new_image text-xs-center">
                                    <a href="javascript:;" class="fn_delete_item delete_image remove_image"></a>
                                    <input type="hidden" name="site_logo" value="{$settings->site_logo|escape}">
                                    <img src="" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {*Параметры элемента*}
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="boxed fn_toggle_wrap min_height_210px">
                <div class="heading_box">
                    {$btr->settings_general_capcha|escape}
                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card">
                    <div class="permission_block">
                        <div class="permission_boxes row">
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="permission_box">
                                    <span>{$btr->settings_general_product|escape}</span>
                                    <label class="switch switch-default">
                                        <input class="switch-input" name="captcha_product" value='1' type="checkbox" {if $settings->captcha_product}checked=""{/if}/>
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="permission_box">
                                    <span>{$btr->settings_general_blog|escape}</span>
                                    <label class="switch switch-default">
                                        <input class="switch-input" name="captcha_post" value='1' type="checkbox" {if $settings->captcha_post}checked=""{/if}/>
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="permission_box">
                                    <span>{$btr->settings_general_cart|escape}</span>
                                    <label class="switch switch-default">
                                        <input class="switch-input" name="captcha_cart" value='1' type="checkbox" {if $settings->captcha_cart}checked=""{/if}/>
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                 </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="permission_box">
                                    <span>{$btr->settings_general_register|escape}</span>
                                    <label class="switch switch-default">
                                        <input class="switch-input" name="captcha_register" value='1' type="checkbox" {if $settings->captcha_register}checked=""{/if}/>
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="permission_box">
                                    <span>{$btr->settings_general_contact_form|escape}</span>
                                    <label class="switch switch-default">
                                        <input class="switch-input" name="captcha_feedback" value='1' type="checkbox" {if $settings->captcha_feedback}checked=""{/if}/>
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="permission_box">
                                    <span>{$btr->settings_general_callback|escape}</span>
                                    <label class="switch switch-default">
                                        <input class="switch-input" name="captcha_callback" value='1' type="checkbox" {if $settings->captcha_callback}checked=""{/if}/>
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
        <div class="col-lg-12 col-md-12">
            <div class="boxed fn_toggle_wrap min_height_210px">
                <div class="heading_box">
                    {$btr->settings_general_gathering_data}
                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card">
                    <div class="permission_block">
                        <div class="permission_boxes row">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="permission_box">
                                    <span>{$btr->settings_general_gather_enabled}</span>
                                    <label class="switch switch-default">
                                        <input class="switch-input" name="gather_enabled" value='1' type="checkbox" {if $settings->gather_enabled}checked=""{/if}/>
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 clearfix"></div>
                </div>
                {*novaposhta_ttn*}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="boxed min_height_230px">
                <div class="heading_box">{$btr->general_novaposhta|escape}</div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="heading_label">{$btr->general_novaposhta_api_key|escape}</div>
                        <div class="mb-1">
                            <input name="newpost_key" class="form-control" type="text" value="{$settings->newpost_key|escape}" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="heading_label">{$btr->general_novaposhta_sender_phone|escape}</div>
                        <div class="mb-1">
                            <input name="np_sender_phone" class="form-control" type="text" value="{$settings->np_sender_phone|escape}" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="heading_label">{$btr->general_novaposhta_sender_city|escape}</div>
                        <div class="mb-1">
                            <select name="np_sender_city" data-placeholder="{$btr->general_novaposhta_change_city|escape}" style="width:350px;" tabindex="1" class="npcity"></select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="heading_label">{$btr->general_sender_warehouse|escape}</div>
                        <div class="mb-1">
                            <select name="np_sender_warehouse" data-placeholder="{$btr->general_novaposhta_change_warehouse|escape}" class="npware" style=""></select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="heading_label">{$btr->general_novaposhta_who_pays|escape}</div>
                        <div class="mb-1">
                            <div class="permission_block">
                                <div class="permission_boxes row">
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="permission_box">
                                            <span>{$btr->general_novaposhta_sender|escape}</span>
                                            <label class="switch switch-default">
                                                <input id="np_payer_type_1" class="switch-input" name="np_payer_type" value="Sender" type="radio" {if $settings->np_payer_type == 'Sender'}checked=""{/if}/>
                                                <span class="switch-label"></span>
                                                <span class="switch-handle"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="permission_box">
                                            <span>{$btr->general_novaposhta_receipt|escape}</span>
                                            <label class="switch switch-default">
                                                <input id="np_payer_type_2" class="switch-input" name="np_payer_type" value="Recipient" type="radio" {if $settings->np_payer_type == 'Recipient'}checked=""{/if}/>
                                                <span class="switch-label"></span>
                                                <span class="switch-handle"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="heading_label">{$btr->general_novaposhta_who_pays_back|escape}</div>
                        <div class="mb-1">
                            <div class="permission_block">
                                <div class="permission_boxes row">
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="permission_box">
                                            <span>{$btr->general_novaposhta_sender|escape}</span>
                                            <label class="switch switch-default">
                                                <input id="np_back_payer_type_1" class="switch-input" name="np_back_payer_type" value="Sender" type="radio" {if $settings->np_back_payer_type == 'Sender'}checked=""{/if}/>
                                                <span class="switch-label"></span>
                                                <span class="switch-handle"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="permission_box">
                                            <span>{$btr->general_novaposhta_receipt|escape}</span>
                                            <label class="switch switch-default">
                                                <input id="np_back_payer_type_2" class="switch-input" name="np_back_payer_type" value="Recipient" type="radio" {if $settings->np_back_payer_type == 'Recipient'}checked=""{/if}/>
                                                <span class="switch-label"></span>
                                                <span class="switch-handle"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="heading_label">{$btr->general_novaposhta_payment_method|escape}</div>
                        <div class="mb-1">
                            <div class="permission_block">
                                <div class="permission_boxes row">
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="permission_box">
                                            <span>{$btr->general_novaposhta_payment_cash|escape}</span>
                                            <label class="switch switch-default">
                                                <input id="np_payment_method_1" class="switch-input" name="np_payment_method" value="Cash" type="radio" {if $settings->np_payment_method == 'Cash'}checked=""{/if}/>
                                                <span class="switch-label"></span>
                                                <span class="switch-handle"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="permission_box">
                                            <span>{$btr->general_novaposhta_payment_noncash|escape}</span>
                                            <label class="switch switch-default">
                                                <input id="np_payment_method_2" class="switch-input" name="np_payment_method" value="NonCash" type="radio" {if $settings->np_payment_method == 'NonCash'}checked=""{/if}/>
                                                <span class="switch-label"></span>
                                                <span class="switch-handle"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="heading_label">{$btr->general_novaposhta_tommorow_sender|escape}</div>
                        <div class="mb-1">
                            <input name="np_time_today_date" class="form-control" type="text" value="{$settings->np_time_today_date|escape}" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="heading_label">{$btr->general_novaposhta_general_value|escape}</div>
                        <div class="mb-1">
                            <input name="np_volume_general" class="form-control" type="text" value="{$settings->np_volume_general|escape}" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="heading_label">{$btr->general_novaposhta_default_weight|escape}</div>
                        <div class="mb-1">
                            <input name="np_weight" class="form-control" type="text" value="{$settings->np_weight|escape}" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="heading_label">{$btr->general_novaposhta_value_one_space|escape}</div>
                        <div class="mb-1">
                            <input name="np_volumetric_volume" class="form-control" type="text" value="{$settings->np_volumetric_volume|escape}" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="heading_label">{$btr->general_novaposhta_width_one_space|escape}</div>
                        <div class="mb-1">
                            <input name="np_volumetric_width" class="form-control" type="text" value="{$settings->np_volumetric_width|escape}" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="heading_label">{$btr->general_novaposhta_length_one_space|escape}</div>
                        <div class="mb-1">
                            <input name="np_volumetric_length" class="form-control" type="text" value="{$settings->np_volumetric_length|escape}" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="heading_label">{$btr->general_novaposhta_height_one_space|escape}</div>
                        <div class="mb-1">
                            <input name="np_volumetric_height" class="form-control" type="text" value="{$settings->np_volumetric_height|escape}" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="heading_label">{$btr->general_novaposhta_related_weight|escape}</div>
                        <div class="mb-1">
                            <input name="np_volumetric_weight" class="form-control" type="text" value="{$settings->np_volumetric_weight|escape}" />
                        </div>
                    </div>
                </div>
                {*/novaposhta_ttn*}
                <div class="row">
                    <div class="col-lg-12 col-md-12 ">
                        <button type="submit" class="btn btn_small btn_blue float-md-right">
                            {include file='svg_icon.tpl' svgId='checked'}
                            <span>{$btr->general_apply|escape}</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
{*novaposhta*}
{literal}
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.0/chosen.jquery.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.0/chosen.min.css"/>
<script src="design/js/datetimepicker/jquery.datetimepicker.js"></script>
<link rel="stylesheet" href="design/js/datetimepicker/jquery.datetimepicker.css"/>

<script>
    $(function() {
        /*novaposhta*/
        $('input[name="np_time_today_date"]').datetimepicker({
            datepicker:false,
            format:'H:i',
            step:10
        });

        $.ajax({
            url: "ajax/np.php",
            dataType: 'json',
            success: function(data) {
                $(".npcity").html(data.cities);
                $(".npcity").show();
                $('select.npcity option[value="' + {/literal}'{$settings->np_sender_city|escape}'{literal} + '"]').attr('selected', true).trigger('change');
            }
        });

        $("select.npcity").change(function() {
            var npware = $(".npware");
            var city_ref = $(this).val();
            if(city_ref != '' && city_ref) {
                $.ajax({
                    url: "ajax/npware.php",
                    data: {city: city_ref},
                    dataType: 'json',
                    async: false,
                    success: function(data) {
                        npware.html(data.warehouses);
                    }
                });
                $('select.npware option[value="' + {/literal}'{$settings->np_sender_warehouse|escape}'{literal} + '"]').attr('selected', true).trigger('change');
            }
        });

        setInterval(function() {
            if ($('.npcity').children('option').length>1) {
                $('.npcity').chosen({width: "50%",no_results_text: "Вашего города нет в списке"});
            };
        }, 100);
        /*/novaposhta*/

    });
</script>
{/literal}
{*/novaposhta*}