<?php /* Smarty version Smarty-3.1.18, created on 2019-05-13 18:40:39
         compiled from "/Users/ivansavchuk/Documents/Development/sportdream.loc/design/rosetta/html/wishlist_informer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9598610615cd9ba27725dc7-91891043%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e7def6fcdd3cfc50f1f33e4d8c9a3f1bc4d8e17' => 
    array (
      0 => '/Users/ivansavchuk/Documents/Development/sportdream.loc/design/rosetta/html/wishlist_informer.tpl',
      1 => 1553277900,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9598610615cd9ba27725dc7-91891043',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wished_products' => 0,
    'lang_link' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5cd9ba2788f962_91728706',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd9ba2788f962_91728706')) {function content_5cd9ba2788f962_91728706($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['wished_products']->value)>0) {?>
    <a class="wish_info" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
wishlist">
        <span data-language="wishlist_header"><?php echo $_smarty_tpl->tpl_vars['lang']->value->wishlist_header;?>
</span> <span class="wish_counter"><?php echo count($_smarty_tpl->tpl_vars['wished_products']->value);?>
</span>
    </a>
<?php } else { ?>
    <span class="wish_info">
        <span data-language="wishlist_header"><?php echo $_smarty_tpl->tpl_vars['lang']->value->wishlist_header;?>
</span>
    </span>
<?php }?>
<?php }} ?>
