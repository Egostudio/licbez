<?php /* Smarty version Smarty-3.1.18, created on 2019-04-20 08:33:06
         compiled from "backend/design/html/auth.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6555622705cbabd22b03166-36776720%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d5c8d3931f641c313e19fb4257fab10ac64684a' => 
    array (
      0 => 'backend/design/html/auth.tpl',
      1 => 1553277840,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6555622705cbabd22b03166-36776720',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error_message' => 0,
    'limit_cnt' => 0,
    'recovery_mod' => 0,
    'login' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5cbabd22c25ff0_15843219',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cbabd22c25ff0_15843219')) {function content_5cbabd22c25ff0_15843219($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['wrapper'] = new Smarty_variable('', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['wrapper'] = clone $_smarty_tpl->tpl_vars['wrapper'];?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
    <META HTTP-EQUIV="Expires" CONTENT="-1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Административная панель</title>

    <link href="design/css/okay.css" rel="stylesheet" type="text/css" />
    <link rel="icon" href="design/images/favicon.png" type="image/x-icon">
    <script src="design/js/jquery/jquery.js"></script>
</head>
<body>
<div class="container d-table">
    <div class="d-100vh-va-middle">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card-group">
                    <div class="card p-2">
                        <div class="card-block">
                            <?php if ($_smarty_tpl->tpl_vars['error_message']->value) {?>
                                <div class="text-danger">
                                    <?php if ($_smarty_tpl->tpl_vars['error_message']->value=='auth_wrong') {?>
                                        Неверно введены логин или пароль.
                                        <?php if ($_smarty_tpl->tpl_vars['limit_cnt']->value) {?><br>Осталось <?php echo $_smarty_tpl->tpl_vars['limit_cnt']->value;?>
 попыт<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['plural'][0][0]->plural_modifier($_smarty_tpl->tpl_vars['limit_cnt']->value,'ка','ок','ки');?>
<?php }?>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['error_message']->value=='limit_try') {?>
                                        Вы исчерпали количество попыток на сегодня.
                                    <?php }?>
                                </div>
                            <?php }?>
                            
                            <form method="post">
                                <input type=hidden name="session_id" value="<?php echo $_SESSION['id'];?>
">
                                <?php if ($_smarty_tpl->tpl_vars['recovery_mod']->value) {?>
                                    <h1>Восстановление пароля</h1>
                                    <p class="text-muted">на сайте <?php echo $_SERVER['HTTP_HOST'];?>
</p>
                                    <div class="input-group mb-1">
                                        <span class="input-group-addon"><i class="icon-user"></i></span>
                                        <input name="new_login" value="" type="text" class="form-control" autofocus="" tabindex="1" placeholder="Username">
                                    </div>
                                    <div class="input-group mb-2">
                                        <span class="input-group-addon"><i class="icon-lock"></i></span>
                                        <input type="password" name="new_password" value="" tabindex="2" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="input-group mb-2">
                                        <span class="input-group-addon"><i class="icon-lock"></i></span>
                                        <input type="password" name="new_password_check" value="" tabindex="3" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col-xs-6 float-xs-right text-xs-right">
                                            <button type="submit" value="login" class="btn btn-primary px-2" tabindex="3">Вход</button>
                                        </div>
                                    </div>
                                <?php } else { ?>
                                    <h1>Вход</h1>
                                    <p class="text-muted">В панель управления <?php echo $_SERVER['HTTP_HOST'];?>
</p>
                                    <div class="input-group mb-1">
                                        <span class="input-group-addon"><i class="icon-user"></i></span>
                                        <input name="login" value="<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
" type="text" class="form-control" autofocus="" tabindex="1" placeholder="Username">
                                    </div>
                                    <div class="input-group mb-2">
                                        <span class="input-group-addon"><i class="icon-lock"></i></span>
                                        <input type="password" name="password" value="" tabindex="2" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col-xs-6 text-xs-left">
                                            <a class="btn btn-link px-0 fn_recovery" href="">Напомнить пароль</a>
                                        </div>
                                        <div class="col-xs-6 float-xs-right text-xs-right">
                                            <button type="submit" value="login" class="btn btn-primary px-2" tabindex="3">Вход</button>
                                        </div>
                                    </div>
                                <?php }?>
                            </form>
                            <div class="col-xs-12 p-h fn_recovery_wrap hidden px-0">
                                <div class="fn_success" style="display: none;margin-bottom:15px;">Сообщение отправлено на емейл администратору</div>
                                <label class="fn_recovery_label">Введите email администратора для восстановления пароля</label>
                                <input type="email" class="form-control mb-h fn_email" value="" name="recovery_email">
                                <button type="button" value="recovery" class="btn btn-primary px-2 fn_ajax_recover">Напомнить</button>
                            </div>
                        </div>
                    </div>
                    <div class="card card-inverse okay_bg py-3 hidden-md-down" style="width:50%">
                        <div class="card-block text-xs-center">
                            <div>
                                <p>
                                    <img src="design/images/system_logo.png" alt="OkayCMS" />
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {
        $(document).on("click", ".fn_recovery", function (e) {
            e.preventDefault();
            $(".fn_recovery_wrap").toggleClass("hidden");
            return false;
        });
        $(document).on("click", ".fn_ajax_recover", function () {
            link = window.location.href;
            email = $(".fn_email").val();
            $(this).attr('disabled',true);
                $.ajax( {
                    url: link,
                    data: {
                        ajax_recovery : true,
                        recovery_email : email
                    },
                    method : 'get',
                    dataType: 'json',
                    success: function(data) {
                        if(data.send){
                            $(".fn_success").show();
                            $(".fn_recovery_label").remove();
                            $(".fn_email").remove();
                        }
                    }
                })
        });
    })
</script>
</body>
</html>
<?php }} ?>
