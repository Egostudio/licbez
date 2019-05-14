<?php /* Smarty version Smarty-3.1.18, created on 2019-05-14 13:28:24
         compiled from "/Users/ivansavchuk/Documents/Development/sportdream.loc/design/rosetta/html/page_404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15522561795cdac278d338a9-58924906%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '030ec7db6fd9cb5b86b5fef9cc3b2ed4ae882526' => 
    array (
      0 => '/Users/ivansavchuk/Documents/Development/sportdream.loc/design/rosetta/html/page_404.tpl',
      1 => 1553277900,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15522561795cdac278d338a9-58924906',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5cdac278d7dcc5_46452964',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cdac278d7dcc5_46452964')) {function content_5cdac278d7dcc5_46452964($_smarty_tpl) {?>


<h1 class="h1"><span data-page="<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span></h1>


<div class="mb">
    <?php echo $_smarty_tpl->tpl_vars['page']->value->description;?>

</div>
<?php }} ?>
