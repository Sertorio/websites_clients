<?php

// define smarty variables
define('SMARTY_DIR', 'Smarty/libs/');
define('CONFIG_DIR', SMARTY_DIR . "config");
define('IS_COMPILE_CHECK', true);
define('IS_DEBUG', false);
define('TEMPLATE_DIR', "templates");
define('COMPILE_DIR', "templates_c");
define('CACHE_DIR', "cache");


// init smarty object
require(SMARTY_DIR . 'Smarty.class.php');
$smarty = new Smarty();
$smarty->compile_check = IS_COMPILE_CHECK;
$smarty->debugging = IS_DEBUG;
$smarty->template_dir = TEMPLATE_DIR;
$smarty->compile_dir = COMPILE_DIR;
$smarty->cache_dir = CACHE_DIR; 
$smarty->config_dir = CONFIG_DIR;


// include common scripts 
require ('common/functions.php');

/* ----------------- variables declared below needs to be customised for each app ------------------- */
// main template file
define('TEMPLATE_FILE', 'template.tpl');
// index page from modules folder
define('INDEX_PAGE', "home.php");


?>
