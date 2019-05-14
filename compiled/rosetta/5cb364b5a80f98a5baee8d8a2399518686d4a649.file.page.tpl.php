<?php /* Smarty version Smarty-3.1.18, created on 2019-05-14 13:28:24
         compiled from "/Users/ivansavchuk/Documents/Development/sportdream.loc/design/rosetta/html/page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2510941285cdac278b38a97-34659875%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5cb364b5a80f98a5baee8d8a2399518686d4a649' => 
    array (
      0 => '/Users/ivansavchuk/Documents/Development/sportdream.loc/design/rosetta/html/page.tpl',
      1 => 1553277900,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2510941285cdac278b38a97-34659875',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5cdac278d1ea20_29579221',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cdac278d1ea20_29579221')) {function content_5cdac278d1ea20_29579221($_smarty_tpl) {?>


<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/".((string)$_smarty_tpl->tpl_vars['page']->value->url), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>

<?php if ($_smarty_tpl->tpl_vars['page']->value->url=='404') {?>
    <?php echo $_smarty_tpl->getSubTemplate ('page_404.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>

    
    <h1 class="h1">
        <span data-page="<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
    </h1>

    
    <div class="mb">
        <?php echo $_smarty_tpl->tpl_vars['page']->value->description;?>

    </div>

<?php }?>
<?php }} ?>
