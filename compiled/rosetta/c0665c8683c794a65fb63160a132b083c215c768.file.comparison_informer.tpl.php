<?php /* Smarty version Smarty-3.1.18, created on 2019-05-13 18:40:39
         compiled from "/Users/ivansavchuk/Documents/Development/sportdream.loc/design/rosetta/html/comparison_informer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19355482575cd9ba278dafe2-74334210%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0665c8683c794a65fb63160a132b083c215c768' => 
    array (
      0 => '/Users/ivansavchuk/Documents/Development/sportdream.loc/design/rosetta/html/comparison_informer.tpl',
      1 => 1553277900,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19355482575cd9ba278dafe2-74334210',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'comparison' => 0,
    'lang_link' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5cd9ba27a8fbc2_09657777',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd9ba27a8fbc2_09657777')) {function content_5cd9ba27a8fbc2_09657777($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['comparison']->value->products)>0) {?>
    <a class="compare_info" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
comparison">
        <span data-language="index_comparison"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_comparison;?>
</span>
        <span class="compare_counter"><?php echo count($_smarty_tpl->tpl_vars['comparison']->value->products);?>
</span>
    </a>
<?php } else { ?>
    <div class="compare_info">
        <span data-language="index_comparison"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_comparison;?>
</span>
    </div>
<?php }?>
<?php }} ?>
