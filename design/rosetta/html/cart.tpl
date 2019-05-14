{* The cart page template *}

{* The page title *}
{$meta_title = $lang->cart_title scope=parent}
{*novaposhta_ttn*}
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.0/chosen.jquery.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.0/chosen.min.css"/>
<script src ="design/{$settings->theme}/js/maskeditinput/jquery.maskedinput.js" type="text/javascript"></script>
{*/novaposhta_ttn*}
{* The page heading *}
<h1 class="h1"><span data-language="cart_header">{$lang->cart_header}</span></h1>

{if $cart->purchases}
    {* Cart form *}
    <form method="post" name="cart" class="fn_validate_cart">
        {* The list of products in the cart *}
        <div id="fn_purchases">
            {include file='cart_purchases.tpl'}
        </div>

        {* Delivery and Payment *}
        <div id="fn_ajax_deliveries">
            {include file='cart_deliveries.tpl'}
        </div>

        {* The form heading *}
        <h2 class="h2" data-language="cart_form_header">{$lang->cart_form_header}</h2>

        <div class="shadowbox cart_contacts">
            {* Form error messages *}
            {if $error}
                <div class="message_error">
                    {if $error == 'empty_name'}
                        <span data-language="form_enter_name">{$lang->form_enter_name}</span>
                    {/if}
                    {if $error == 'empty_email'}
                        <span data-language="form_enter_email">{$lang->form_enter_email}</span>
                    {/if}
                    {if $error == 'captcha'}
                        <span data-language="form_error_captcha">{$lang->form_error_captcha}</span>
                    {/if}
                    {if $error == 'empty_phone'}
                        <span data-language="form_error_phone">{$lang->form_error_phone}</span>
                    {/if}
                </div>
            {/if}

            <div class="row">
                {* User's name *}
                <div class="form_group col-sm-6">
                    <label class="label_block required" data-language="form_name">{$lang->form_name}</label>
                    <input class="form_input" name="name" type="text" value="{$name|escape}">
                </div>
                {*novaposta_ttn*}
                <div class="form_group col-sm-6">
                    <label class="label_block required" data-language="form_name">{$lang->form_lastname}</label>
                    <input class="form_input" name="lastname" type="text" value="{$lastname|escape}" data-language="form_lastname" >
                </div>
            </div>
            <div class="row">
                {*/novaposta_ttn*}
                {* User's phone *}
                <div class="form_group col-sm-6">
                    <label class="label_block" data-language="form_phone">{$lang->form_phone}</label>
                    <input class="form_input" name="phone" type="text" value="{$phone|escape}">
                </div>
                {*novaposta_ttn*}
                <div class="form_group col-sm-6">
                    <label class="label_block" data-language="form_phone">{$lang->form_adrchoise}</label>
                    <input class="form_input" name="address" id="adrchoise" type="text" value="{$address|escape}" data-language="form_address" >
                </div>
            </div>
            {*/novaposta_ttn*}


            <div class="row">
                {* User's email *}
                <div class="form_group col-sm-6">
                    <label class="label_block required" data-language="form_email">{$lang->form_email}</label>
                    <input class="form_input" name="email" type="text" value="{$email|escape}">
                </div>

                {* User's address
                <div class="form_group col-sm-6">
                    <label class="label_block" data-language="form_address">{$lang->form_address}</label>
                    <input class="form_input" name="address" type="text" value="{$address|escape}">
                </div>*}
            </div>

            {* User's message *}
            <div class="form_group">
                <label class="label_block" data-language="cart_order_comment">{$lang->cart_order_comment}</label>
                <textarea class="form_textarea" rows="5" name="comment">{$comment|escape}</textarea>
            </div>

            {* Captcha *}
            {if $settings->captcha_cart}
                {get_captcha var="captcha_cart"}
                <div class="captcha">
                    <div class="secret_number">{$captcha_cart[0]|escape} + ? =  {$captcha_cart[1]|escape}</div>
                    <input class="form_input input_captcha" type="text" name="captcha_code" value="" data-language="form_enter_captcha" placeholder="{$lang->form_enter_captcha}*">
                </div>
            {/if}

            {* Submit button *}
            <input class="button" type="submit" name="checkout" data-language="cart_checkout" value="{$lang->cart_checkout}">
        </div>




    </form>

{else}
    <p class="mb" data-language="cart_empty">{$lang->cart_empty}</p>
{/if}
{*novaposhta_ttn*}
{literal}
    <script>
        $(document).ready(function($){
//        $(document).ready(function() {
            $('input[name="phone1"]').mask("0999999999");
            $('input[name="delivery_id"]:checked').trigger('change');
            var its = $("input[name=delivery_id]");
            var city = $(".npcity");
            var cname = $(".labelcity");
            $.ajax({
                url: "ajax/np.php",
                dataType: 'json',
                success: function(data) {
                    city.html(data.cities);
                    city.show();
                    cname.parent().show();
                }
            });
        });


        $("select.npcity").change(function() {
            var npware = $(".npware");
            var wname = $(".labelware");
            var city_ref = $(this).val();
            $("#adrchoise").val("");
            if(city_ref == '' || !city_ref) {
                wname.hide();
                npware.hide();
                npware.html("");
            } else {
                $.ajax({
                    url: "ajax/npware.php",
                    data: {city: city_ref},
                    dataType: 'json',
                    success: function(data) {
                        npware.html(data.warehouses);
                        wname.show();
                        npware.show();
                    }
                });
            }
        });

        $("select.npware").change(function() {
            var citytogo = $(".npcity").find('option:selected').text();
            var adrtogo = $(this).find('option:selected').text();
            if (adrtogo != '') {
                $("#adrchoise").val(citytogo + ', ' + adrtogo);
            } else {
                $("#adrchoise").val("");
            }
        });
        setInterval(function() {
            if ($('.npcity').children('option').length>1) {
                $('.npcity').chosen({width: "25%",no_results_text: "Вашего города нет в списке"});
            };
        }, 100);

        $('input[name=delivery_id]').change(function(){
            if($(this).parent().parent().find("#delivery_new_post").length > 0) {
                $(".seldiv").show();
            } else {
                $(".seldiv").hide();
            }
        });
    </script>
{/literal}
{*/novaposhta_ttn*}