<?php /* Smarty version Smarty-3.1.18, created on 2019-05-13 18:40:39
         compiled from "/Users/ivansavchuk/Documents/Development/sportdream.loc/design/rosetta/html/cart_informer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14167409355cd9ba2757ad78-22650204%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcbbd84a0169d291c58f7cdfb39f166eb79671ae' => 
    array (
      0 => '/Users/ivansavchuk/Documents/Development/sportdream.loc/design/rosetta/html/cart_informer.tpl',
      1 => 1553277900,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14167409355cd9ba2757ad78-22650204',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 0,
    'lang_link' => 0,
    'is_mobile' => 0,
    'is_tablet' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5cd9ba27718d32_56521367',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd9ba27718d32_56521367')) {function content_5cd9ba27718d32_56521367($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['cart']->value->total_products>0) {?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
cart" class="cart_info">
        <span class="cart_counter"><?php echo $_smarty_tpl->tpl_vars['cart']->value->total_products;?>
</span>
        <?php if ($_smarty_tpl->tpl_vars['is_mobile']->value===false&&$_smarty_tpl->tpl_vars['is_tablet']->value===false) {?>
            <span class="cart_title tablet-hidden" data-language="index_cart"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_cart;?>
</span>
        <?php }?>
    </a>
<?php } else { ?>
    <div class="cart_info">
        <span class="cart_counter"><?php echo $_smarty_tpl->tpl_vars['cart']->value->total_products;?>
</span>
        <?php if ($_smarty_tpl->tpl_vars['is_mobile']->value===false&&$_smarty_tpl->tpl_vars['is_tablet']->value===false) {?>
            <span class="cart_title tablet-hidden" data-language="index_cart"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_cart;?>
</span>
        <?php }?>
    </div>
<?php }?>
<?php }} ?>
