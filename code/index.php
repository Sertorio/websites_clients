<?php
error_reporting(E_ALL);

include ('config.php');

$page = $_REQUEST['uri'];
if(empty($page))
    $page = INDEX_PAGE;  // default index page

if(endsWith($page, '/')) {
    $page = substr($page, 0, strlen($page)-1);
    die('Invalid URL, URL should not end with a slash, or else you may loose css, so blocked page loading.');
}

if(!endsWith($page, '.php')) {
    $page = $page . '.php';
}


include ("modules/$page");

// display template file
try {
    $smarty->display(TEMPLATE_FILE);
} catch(SmartyException $e) {
    die($e);
    // die('Looks like you are loading a page that does not exists!');
}

?> 
