<?php /* Smarty version Smarty-3.1.8, created on 2012-07-09 23:57:44
         compiled from "templates/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16777488244fef438de093e3-82776227%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6da4162c469d98c5e879f8e0b21e18d44108090' => 
    array (
      0 => 'templates/menu.tpl',
      1 => 1341858453,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16777488244fef438de093e3-82776227',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fef438de43464_55778350',
  'variables' => 
  array (
    'selected' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fef438de43464_55778350')) {function content_4fef438de43464_55778350($_smarty_tpl) {?><!--================================  menu  ==================================-->
    <div id="css_horizontal_menu">
        <a href="home"     <?php if ($_smarty_tpl->tpl_vars['selected']->value=='home'){?> class="first" <?php }?>      >Home</a>
        <a href="ourteam"  <?php if ($_smarty_tpl->tpl_vars['selected']->value=='ourteam'){?> class="first" <?php }?>      >Our Team</a>
        <a href="products" <?php if ($_smarty_tpl->tpl_vars['selected']->value=='products'){?> class="first" <?php }?>      >Products</a>
        <a href="services" <?php if ($_smarty_tpl->tpl_vars['selected']->value=='services'){?> class="first" <?php }?>      >Services</a>
        <a href="careers"  <?php if ($_smarty_tpl->tpl_vars['selected']->value=='careers'){?> class="first" <?php }?>      >Careers</a>
        <a href="about"    <?php if ($_smarty_tpl->tpl_vars['selected']->value=='about'){?> class="first" <?php }?>      >About</a>
        <a href="contact"  <?php if ($_smarty_tpl->tpl_vars['selected']->value=='contact'){?> class="first" <?php }?>      style="padding-right:55px;">Contact</a>
 	</div> 
 <!--================================  menu end  ==================================-->
<?php }} ?>