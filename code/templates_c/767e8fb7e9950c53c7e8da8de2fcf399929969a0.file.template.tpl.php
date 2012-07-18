<?php /* Smarty version Smarty-3.1.8, created on 2012-07-10 01:01:15
         compiled from "templates/template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16403740974fef438d7a5a16-30107968%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '767e8fb7e9950c53c7e8da8de2fcf399929969a0' => 
    array (
      0 => 'templates/template.tpl',
      1 => 1341862268,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16403740974fef438d7a5a16-30107968',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fef438dd84927_00075036',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fef438dd84927_00075036')) {function content_4fef438dd84927_00075036($_smarty_tpl) {?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <link rel="shortcut icon" href="templates/image/titlelogo.jpg" type="image/x-icon">
    <!--[if IE 6]>
        <link rel="stylesheet" type="text/css" href="templates/css/style6.css" />
    <![endif]-->
    <!--[if IE 7]>
                    <link href="templates/css/style7.css" rel="stylesheet" type="text/css">
            <![endif]-->
    <!--[if IE 6]>
        <link rel="stylesheet" type="text/css" href="templates/css/style6.css" />
    <![endif]-->
    <!--[if IE 7]>
                    <link href="templates/css/style7.css" rel="stylesheet" type="text/css">
            <![endif]-->

    
    <!-- include css -->
    
    <link href="templates/css/coolMenu.css" rel="stylesheet"/>
    <link rel="stylesheet" href="templates/css/global.css">
    <link href="templates/css/style.css" rel="stylesheet" />
    <link href="templates/css/demo.css" rel="stylesheet">
    <link href="templates/css/movingboxes.css"  rel="stylesheet">
        
  
  <!--  <link href="templates/css/movingboxes.css" media="screen" rel="stylesheet">-->
   <!-- <link href="templates/css/style6.css" media="screen" rel="stylesheet" />-->
   <!-- <link href="templates/css/styleotherpages.css" media="screen" rel="stylesheet" />-->
    <!--<link href="templates/css/style7.css" media="screen" rel="stylesheet" />-->
   
   
   
    <link href="templates/css/contact.css" media="screen" rel="stylesheet" />
   
   <!-- <link href="templates/css/default.css" media="screen" rel="stylesheet" />-->
  
  
    <script src="templates/js/jquery.js" type="text/javascript"></script>
    <script src="templates/js/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script src="templates/js/jquery.simplemodal.js" type="text/javascript"></script>
    <script src="templates/js/jquerypopup.js" type="text/javascript"></script>
    <script src="templates/js/contact.js" type="text/javascript"></script>
    <script src="templates/js/jquery.min.js" type="text/javascript"></script>
    <script src="templates/js/default.js" type="text/javascript"></script>
    <script src="templates/js/slides.min.jquery.js"></script>
    <script src="templates/js/jquery.movingboxes.js" type="text/javascript"></script>
    <script src="templates/js/demo.js"  type="text/javascript"></script>
    
    <!--=============== link popup=============-->
    <link rel="stylesheet" href="templates/css/colorbox.css" />
    <script src="templates/js/jquery.colorbox.js"></script>
    <!--======================= end ===================-->
    
   <!-- <script src="templates/js/jquery.colorbox-min.js"></script>-->
    
    
   
    
    <!--========================================== read more =========================================-->
<script type="text/javascript">
$(function() {
	//slidetoggle
	$('.toggler').click(function(){
		$(this).parents(".teamMemberRight").children('.toggleMe').slideToggle('fast');
		return false; //ensures no anchor jump
	});
});

$(function() {
	//slidetoggle
	$('.toggler2').click(function(){
		$(this).parents(".teamMemberRight2").children('.toggleMe2').slideToggle('fast');
		return false; //ensures no anchor jump
	});
});
</script>
<!--========================================== read more ===========================================-->    
</head>

<body>
<div id="wrapper">
    <div id="container">
		
          <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

          
          <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	      <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['tpl_name']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
     </div>
       
      <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    	
 </div>   
 
</body>

</html>

<?php }} ?>