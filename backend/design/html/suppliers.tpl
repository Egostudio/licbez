{* Title *}
{$meta_title=$btr->suppliers_suppliers scope=parent}

{*Название страницы*}
<div class="row">
    <div class="col-lg-7 col-md-7">
        <div class="wrap_heading">
            <div class="box_heading heading_page">
                {$btr->suppliers_suppliers|escape} - {$suppliers_count}
            </div>
            <div class="box_btn_heading">
                <a class="btn btn_small btn-info" href="{url module=SupplierAdmin return=$smarty.server.REQUEST_URI}">
                    {include file='svg_icon.tpl' svgId='plus'}
                    <span>{$btr->suppliers_add_supplier|escape}</span>
                </a>
            </div>
        </div>
    </div>
</div>

{*Главная форма страницы*}
<div class="boxed fn_toggle_wrap">
    {if $suppliers}

        <div class="row">
            <div class="col-lg-12 col-md-12 ">
                <div class="boxed_sorting">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm 12">
                            <select onchange="location = this.value;" class="selectpicker">
                                <option value="{url limit=5}" {if $current_limit == 5}selected{/if}>{$btr->general_show_by|escape} 5</option>
                                <option value="{url limit=10}" {if $current_limit == 10}selected{/if}>{$btr->general_show_by|escape} 10</option>
                                <option value="{url limit=25}" {if $current_limit == 25}selected{/if}>{$btr->general_show_by|escape} 25</option>
                                <option value="{url limit=50}" {if $current_limit == 50}selected{/if}>{$btr->general_show_by|escape} 50</option>
                                <option value="{url limit=100}" {if $current_limit == 100}selected=""{/if}>{$btr->general_show_by|escape} 100</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <form method="post" class="fn_form_list">
            <input type="hidden" name="session_id" value="{$smarty.session.id}" />

            <div class="okay_list products_list fn_sort_list">
                {*Шапка таблицы*}
                <div class="okay_list_head">
                    <div class="okay_list_boding okay_list_drag"></div>
                    <div class="okay_list_heading okay_list_check">
                        <input class="hidden_check fn_check_all" type="checkbox" id="check_all_1" name="" value="" />
                        <label class="okay_ckeckbox" for="check_all_1"></label>
                    </div>
                    <div class="okay_list_heading okay_list_photo">{$btr->general_photo|escape}</div>
                    <div class="okay_list_heading okay_list_suppliers_name">{$btr->general_name|escape}</div>
                    <div class="okay_list_heading okay_list_status">{$btr->general_enable|escape}</div>
                    <div class="okay_list_heading okay_list_setting">{$btr->general_activities|escape}</div>
                    <div class="okay_list_heading okay_list_close"></div>
                </div>

                {*Параметры элемента*}
                <div class="okay_list_body sortable">
                    {foreach $suppliers as $supplier}
                        <div class="fn_row okay_list_body_item fn_sort_item">
                            <div class="okay_list_row ">
                                <input type="hidden" name="positions[{$supplier->id}]" value="{$supplier->position}" />

                                <div class="okay_list_boding okay_list_drag move_zone">
                                    {include file='svg_icon.tpl' svgId='drag_vertical'}
                                </div>

                                <div class="okay_list_boding okay_list_check">
                                    <input class="hidden_check" type="checkbox" id="id_{$supplier->id}" name="check[]" value="{$supplier->id}" />
                                    <label class="okay_ckeckbox" for="id_{$supplier->id}"></label>
                                </div>


                                <div class="okay_list_boding okay_list_suppliers_name" style="width:200px;text-align:left;">
                                    <a href="{url module=SupplierAdmin id=$supplier->id return=$smarty.server.REQUEST_URI}">
                                        {$supplier->name|escape}
                                    </a>
                                </div>

                                <div class="okay_list_boding okay_list_suppliers_name" style="width:150px;">
                                	<button type="button" class="btn btn-info " data-toggle="modal" data-target="#exampleModal" data-id="{$supplier->id}" id="exampleModalOpen-{$supplier->id}" {if $supplier->filename}disabled{/if}>Загрузить</button>

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

                                <div class="okay_list_boding okay_list_suppliers_name" style="width:150px; " id="loaderDiv-{$supplier->id}">
					{$supplier->filename}
                                </div>


                                <div class="okay_list_boding okay_list_status">
                                    {*visible*}
                                     <label class="switch switch-default ">
                                        <input class="switch-input fn_ajax_action {if $supplier->visible}fn_active_class{/if}" data-module="suppliers" data-action="visible" data-id="{$supplier->id}" name="visible" value="1" type="checkbox"  {if $supplier->visible}checked=""{/if}/>
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                </div>

                                <div class="okay_list_setting">
                                    <a href="../{$lang_link}suppliers/{$supplier->url|escape}" target="_blank" data-hint="{$btr->general_view|escape}" class="setting_icon setting_icon_open hint-bottom-middle-t-info-s-small-mobile  hint-anim">
                                        {include file='svg_icon.tpl' svgId='icon_desktop'}
                                    </a>
                                </div>

                                <div class="okay_list_boding okay_list_close">
                                    {*delete*}
                                    <button data-hint="{$btr->suppliers_delete_supplier|escape}" type="button" class="btn_close fn_remove hint-bottom-right-t-info-s-small-mobile  hint-anim" data-toggle="modal" data-target="#fn_action_modal" onclick="success_action($(this));">
                                        {include file='svg_icon.tpl' svgId='delete'}
                                    </button>
                                </div>
                            </div>
                        </div>
                    {/foreach}
                </div>

                {*Блок массовых действий*}
                <div class="okay_list_footer fn_action_block">
                    <div class="okay_list_foot_left">
                        <div class="okay_list_boding okay_list_drag"></div>
                        <div class="okay_list_heading okay_list_check">
                            <input class="hidden_check fn_check_all" type="checkbox" id="check_all_2" name="" value=""/>
                            <label class="okay_ckeckbox" for="check_all_2"></label>
                        </div>
                        <div class="okay_list_option">
                            <select name="action" class="selectpicker">
                                <option value="in_feed">{$btr->suppliers_in_xml|escape}</option>
                                <option value="out_feed">{$btr->suppliers_out_xml|escape}</option>
                                <option value="delete">{$btr->general_delete|escape}</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn_small btn_blue">
                        {include file='svg_icon.tpl' svgId='checked'}
                        <span>{$btr->general_apply|escape}</span>
                    </button>
                </div>
            </div>
        </form>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm 12 txt_center">
                {include file='pagination.tpl'}
            </div>
        </div>
    {else}
        <div class="heading_box mt-1">
            <div class="text_grey">{$btr->suppliers_no|escape}</div>
        </div>
    {/if}
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

{foreach $suppliers as $supplier}
    $("#exampleModalOpen-{$supplier->id}").click(function(){
        global.id = $(this).data('id');
        $('#supplierId').val($(this).data('id'));
    });
{/foreach}  

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

