<?php /* Smarty version Smarty-3.1.8, created on 2012-07-09 23:12:43
         compiled from "templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:760479784fef438dd90b39-72630085%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be439f82a4dbec61746f62a0df07c19a7eecd966' => 
    array (
      0 => 'templates/header.tpl',
      1 => 1341855755,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '760479784fef438dd90b39-72630085',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fef438de06250_76846273',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fef438de06250_76846273')) {function content_4fef438de06250_76846273($_smarty_tpl) {?>

<!--=============================================  LOGIN POPUP ========================================================-->
         <div  
         id="headerlogin">
       	
             <a 
                 href="#login-box" 
                 class="login-window" 
                 style="color:#fff;font-family:Verdana, Geneva, sans-serif;font-size:12px;text-decoration:none;margin-right:-5px;"
                 onmouseover="this.style.textDecoration ='underline';"
                 onmouseout="this.style.textDecoration='none';">
                 Client Login
             </a>
		
        </div>

		<div id="login-box" class="login-popup" style="width:260px;">
        <a href="#" class="close"><img src="templates/image/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
          <form method="post" class="signin" action="#">
                <fieldset class="textbox">
            	<label class="username">
                <span>Username or email</span>
                <input id="username" name="username" value="" type="text" autocomplete="on" placeholder="Username">
                </label>
                <label class="password">
                <span>Password</span>
                <input id="password" name="password" value="" type="password" placeholder="Password">
                </label>
                <button class="submit button" type="button">Sign in</button>
                <p>
                <a class="forgot" href="#">Forgot your password?</a>
                </p>        
                </fieldset>
          </form>
</div>
<!--=============================================  LOGIN POPUP ends ========================================================-->



 <div style="text-align:right;padding-top:-10px;margin-left:0px;margin-top:20px;">
        <table cellpadding="5" style="line-height:25px;">
       <tr>
       <td style="padding-right:180px;">
        <img src="templates/image/newlogo.jpg">
       </td>
        <td style="padding-top:45px;">
        <label style="font-size: 16px;">Call us Today!</label><br />
        <label style="color:#FF9F00;font-weight:bold;font-size:16px;">Tel:</label> 
        <label style="color:#3A9DBA;font-weight:bold;font-size:16px;">+44 (0) 118 9269906</label><br />
        <label style="color:#FF9F00;font-weight:bold;font-size:16px;">Mob:</label> 
        <label style="color:#3A9DBA;font-weight:bold;font-size:16px;">+44(0) 7427624448</label>
        </td>
        <td style="padding-left:10px;padding-top:40px;"><br /><img src="templates/image/contact.gif" /></td>
        </tr>
        </table>
 </div>
 
<?php }} ?>