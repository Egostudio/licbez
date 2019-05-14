{* Feedback page *}
{* The canonical address of the page *}
{$canonical="/{$page->url}" scope=parent}

<div class="row">
    {* Page body *}
    {if $page->description}
        <div class="col-lg-6">
            {* The page heading *}
            <h1 class="h1">{$page->name|escape}</h1>

            <div class="mb">
                {$page->description}
            </div>
        </div>
    {/if}

    <div class="col-lg-6">
        {if $message_sent}
            <div class="message_success">
                <b>{$name|escape},</b> <span data-language="feedback_message_sent">{$lang->feedback_message_sent}.</span>
            </div>
        {else}
            {* Form heading *}
            <div class="h1" data-language="feedback_feedback">{$lang->feedback_feedback}</div>

            {* Feedback form *}
            <form method="post" class="fn_validate_feedback shadowbox">
                {* Form error messages *}
                {if $error}
                    <div class="message_error">
                        {if $error=='captcha'}
                            <span data-language="form_error_captcha">{$lang->form_error_captcha}</span>
                        {elseif $error=='empty_name'}
                            <span data-language="form_enter_name">{$lang->form_enter_name}</span>
                        {elseif $error=='empty_email'}
                            <span data-language="form_enter_email">{$lang->form_enter_email}</span>
                        {elseif $error=='empty_text'}
                            <span data-language="form_enter_message">{$lang->form_enter_message}</span>
                        {/if}
                    </div>
                {/if}

                {* User's name *}
                <div class="form_group">
                    <label class="label_block required" data-language="form_name">{$lang->form_name}</label>
                    <input class="form_input" value="{if $user->name}{$user->name|escape}{else}{$name|escape}{/if}" name="name" type="text" />
                </div>

                {* User's email *}
                <div class="form_group">
                    <label class="label_block required" data-language="form_email">{$lang->form_email}</label>
                    <input class="form_input" value="{if $user->email}{$user->email|escape}{else}{$email|escape}{/if}" name="email" type="text"/>
                </div>

                {* User's message *}
                <div class="form_group">
                    <label class="label_block required" data-language="form_enter_message">{$lang->form_enter_message}</label>
                    <textarea class="form_textarea" rows="3" name="message">{$message|escape}</textarea>
                </div>

                {* Captcha *}
                {if $settings->captcha_feedback}
                    {get_captcha var="captcha_feedback"}
                    <div class="captcha form_group">
                        <div class="secret_number">{$captcha_feedback[0]|escape} + ? =  {$captcha_feedback[1]|escape}</div>
                        <input class="form_input input_captcha" type="text" name="captcha_code" value="" data-language="form_enter_captcha" placeholder="{$lang->form_enter_captcha}*"/>
                    </div>
                {/if}

                {* Submit button *}
                <input class="button" type="submit" name="feedback" data-language="form_send" value="{$lang->form_send}"/>
            </form>
        {/if}
    </div>
</div>

