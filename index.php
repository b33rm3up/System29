<?php
#
# ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
#
# System29 Page
#
# @author           Taras Palasyk (https://github.com/0e29)
# @copyright        Copyright (c) 2019, Taras Palasyuk. All rights reserved.
# @licence          BSD 3-Clause License
# @version          Version 0.1
# @revision         December 14, 2019 @ 1:46 AM
# @category         Page
# @filename         index.php
#
# ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
#
define('APP_INC_TOKEN.S29', 'true');
require_once ('Private/Bootstrap.php');

# file configuration values relating to META and HEAD only.
$page = new PageEngine;
$page->page_title('Homepage'); 
$page->page_desc('');
$page->html_body_start(); 

# particular view we will be loading
$page_view = "Private/View/LayoutMaster.php";

# lets check if the file exists, if not lets trow a 404 template file instead
if (file_exists($page_view)) {
     include_once $page_view;
} else {
     include_once "Private/View/Errors/404.php";
}

# lets execute the html body end code and have Page class render the page
$page->html_body_end();
echo $page->render_page('Private/TemplateMaster.php');
