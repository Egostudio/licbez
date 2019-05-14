<?php /* Smarty version Smarty-3.1.18, created on 2019-05-13 18:40:36
         compiled from "/Users/ivansavchuk/Documents/Development/sportdream.loc/design/rosetta/html/categories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11059302135cd9ba248275c0-93086740%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb97599aa81937dbab9a3eb79143168357f68119' => 
    array (
      0 => '/Users/ivansavchuk/Documents/Development/sportdream.loc/design/rosetta/html/categories.tpl',
      1 => 1553277900,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11059302135cd9ba248275c0-93086740',
  'function' => 
  array (
    'categories_tree' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'lang' => 0,
    'categories' => 0,
    'level' => 0,
    'c' => 0,
    'category' => 0,
    'lang_link' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5cd9ba24ab06f0_49456620',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd9ba24ab06f0_49456620')) {function content_5cd9ba24ab06f0_49456620($_smarty_tpl) {?><div class="categories">
    <div class="categories_heading">
        <span data-language="index_categories" class="cathead_text"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_categories;?>
</span>
        <span class="fn_subswitch cathead_switch"></span>
    </div>
    <nav class="categories_nav tablet-hidden">
        <?php if (!function_exists('smarty_template_function_categories_tree')) {
    function smarty_template_function_categories_tree($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['categories_tree']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
            <?php if ($_smarty_tpl->tpl_vars['categories']->value) {?>
                <ul class="level_<?php echo $_smarty_tpl->tpl_vars['level']->value;?>
<?php if ($_smarty_tpl->tpl_vars['level']->value>1) {?> subcategory<?php }?>">
                    <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['c']->value->visible) {?>
                            <?php if ($_smarty_tpl->tpl_vars['c']->value->subcategories&&$_smarty_tpl->tpl_vars['c']->value->has_children_visible) {?>
                                <li class="category_item parent">
                                    <a class="category_link<?php if ($_smarty_tpl->tpl_vars['category']->value->id==$_smarty_tpl->tpl_vars['c']->value->id) {?> selected<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
category/<?php echo $_smarty_tpl->tpl_vars['c']->value->url;?>
" data-category="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
">
                                        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                        <svg class="arrow_right" xmlns="http://www.w3.org/2000/svg" width="8px" height="15px" viewBox="-1 -1 9 16">
                                          <path fill="currentColor" d="M.04 1.1l5.543 5.8L0 13l.37 1L7 6.9.33 0z"/>
                                        </svg>
                                    </a>
                                    <i class="fn_switch cat_switch"></i>
                                    <?php smarty_template_function_categories_tree($_smarty_tpl,array('categories'=>$_smarty_tpl->tpl_vars['c']->value->subcategories,'level'=>$_smarty_tpl->tpl_vars['level']->value+1));?>

                                </li>
                            <?php } else { ?>
                                <li class="category_item">
                                    <a class="category_link<?php if ($_smarty_tpl->tpl_vars['category']->value->id==$_smarty_tpl->tpl_vars['c']->value->id) {?> selected<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
category/<?php echo $_smarty_tpl->tpl_vars['c']->value->url;?>
" data-category="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                </li>
                            <?php }?>
                        <?php }?>
                    <?php } ?>
                </ul>
            <?php }?>
        <?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

        <?php smarty_template_function_categories_tree($_smarty_tpl,array('categories'=>$_smarty_tpl->tpl_vars['categories']->value,'level'=>1));?>

    </nav>
</div>
<?php }} ?>
