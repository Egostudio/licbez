<?php /* Smarty version Smarty-3.1.18, created on 2019-05-14 13:28:28
         compiled from "/Users/ivansavchuk/Documents/Development/sportdream.loc/design/rosetta/html/callback.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16130370885cdac27c48f2c4-61774024%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84901ab00851c9f53ab8a80c301c37e311f118ea' => 
    array (
      0 => '/Users/ivansavchuk/Documents/Development/sportdream.loc/design/rosetta/html/callback.tpl',
      1 => 1553277900,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16130370885cdac27c48f2c4-61774024',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'call_error' => 0,
    'callname' => 0,
    'user' => 0,
    'callphone' => 0,
    'callmessage' => 0,
    'settings' => 0,
    'captcha_callback' => 0,
    'call_sent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5cdac27c75cd59_04823475',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cdac27c75cd59_04823475')) {function content_5cdac27c75cd59_04823475($_smarty_tpl) {?>
<div class="hidden">
    <form id="fn_callback" class="callback_form popup fn_validate_callback" method="post">

        
        <div class="popup_heading">
            <span data-language="callback_header"><?php echo $_smarty_tpl->tpl_vars['lang']->value->callback_header;?>
</span>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['call_error']->value) {?>
            <div class="message_error">
                <?php if ($_smarty_tpl->tpl_vars['call_error']->value=='captcha') {?>
                    <span data-language="form_error_captcha"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_error_captcha;?>
</span>
                <?php } elseif ($_smarty_tpl->tpl_vars['call_error']->value=='empty_name') {?>
                    <span data-language="form_enter_name"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_name;?>
</span>
                <?php } elseif ($_smarty_tpl->tpl_vars['call_error']->value=='empty_phone') {?>
                    <span data-language="form_enter_phone"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_phone;?>
</span>
                <?php } elseif ($_smarty_tpl->tpl_vars['call_error']->value=='empty_comment') {?>
                    <span data-language="form_enter_comment"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_comment;?>
</span>
                <?php } else { ?>
                    <span><?php echo $_smarty_tpl->tpl_vars['call_error']->value;?>
</span>
                <?php }?>
            </div>
        <?php }?>

        
        <div class="form_group">
            <input class="form_input" type="text" name="name" value="<?php if ($_smarty_tpl->tpl_vars['callname']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['callname']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->name, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" data-language="form_name" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_name;?>
*">
        </div>

        
        <div class="form_group">
            <input class="form_input" type="text" name="phone" value="<?php if ($_smarty_tpl->tpl_vars['callphone']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['callphone']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->phone, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" data-language="form_phone" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_phone;?>
*">
        </div>

        
        <div class="form_group">
            <textarea class="form_textarea" rows="3" name="message" data-language="form_enter_message" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_message;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['callmessage']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
        </div>

        
        <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_callback) {?>
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_captcha'][0][0]->get_captcha_plugin(array('var'=>"captcha_callback"),$_smarty_tpl);?>

            <div class="captcha form_group center">
                <div class="secret_number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captcha_callback']->value[0], ENT_QUOTES, 'UTF-8', true);?>
 + ? =  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captcha_callback']->value[1], ENT_QUOTES, 'UTF-8', true);?>
</div>
                <input class="form_input input_captcha" type="text" name="captcha_code" value="" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_captcha;?>
*">
            </div>
        <?php }?>

        
        <div class="center">
            <input class="button" type="submit" name="callback" data-language="callback_order" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->callback_order;?>
">
        </div>

    </form>
</div>


<?php if ($_smarty_tpl->tpl_vars['call_sent']->value) {?>
    <div class="hidden">
        <div id="fn_callback_sent" class="popup">
            <div class="popup_heading">
                <span data-language="callback_sent_header"><?php echo $_smarty_tpl->tpl_vars['lang']->value->callback_sent_header;?>
</span>
            </div>

            <div class="center" data-language="callback_sent_text"><?php echo $_smarty_tpl->tpl_vars['lang']->value->callback_sent_text;?>
</div>
        </div>
    </div>
<?php }?>
<?php }} ?>
