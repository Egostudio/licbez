{* Password remind page *}

{* The canonical address of the page *}
{$canonical="/user/password_remind" scope=parent}

{* The page title *}
{$meta_title = $lang->password_remind_title scope=parent}


{* The page heading *}
<h1 class="h1">
    <span data-language="password_remind_header">{$lang->password_remind_header}</span>
</h1>

<div class="mb">
    {if $email_sent}
        <div>
            <span data-language="password_remind_on">{$lang->password_remind_on}</span> <b>{$email|escape}</b> <span data-language="password_remind_letter_sent">{$lang->password_remind_letter_sent}.</span>
        </div>
    {else}
        <div class="row">
            <form method="post" class="col-md-7">
                {* Form error messages *}
                {if $error}
                    <div class="message_error">
                        {if $error == 'user_not_found'}
                            <span data-language="password_remind_user_not_found">{$lang->password_remind_user_not_found}</span>
                        {else}
                            {$error|escape}
                        {/if}
                    </div>
                {/if}

                <div class="form_group">
                    {* User's e-mail *}
                    <label for="password_remind" class="label_block">
                        <span data-language="password_remind_enter_your_email">{$lang->password_remind_enter_your_email}</span>
                    </label>
                    <input id="password_remind" class="form_input" type="text" name="email" value="{$email|escape}" data-language="form_email" placeholder="{$lang->form_email}*">
                </div>

                {* Submit button *}
                <input type="submit" class="button" data-language="password_remind_remember" value="{$lang->password_remind_remember}">
            </form>
        </div>
    {/if}
</div>
