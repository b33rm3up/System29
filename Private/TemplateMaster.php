<?php
#
# ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
#
# System29 TemplateMaster
#
# @author           Taras Palasyk (https://github.com/0e29)
# @copyright        Copyright (c) 2019, Taras Palasyuk. All rights reserved.
# @licence          BSD 3-Clause License
# @version          Version 0.1
# @revision         December 14, 2019 @ 1:46 AM
# @category         Template / Layout
# @filename         TemplateMaster.php
#
# ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
#
if (!defined('APP_INC_TOKEN.S29')) {

    http_response_code(403);
    echo 'ERROR 403<br>Access not permitted!';
    exit();

} else {

    global $pdo;

    # temp disabled in pre-build
    # $getMenuData = $pdo->query("SELECT * FROM `Menu` ORDER BY menu_order ASC")->fetchAll(PDO::FETCH_OBJ);

    include ROOT_DIR.'/Model/TemplateMaster.php';

}
