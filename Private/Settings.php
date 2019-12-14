<?php
#
# ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
#
# System29 Settings
#
# @author           Taras Palasyk (https://github.com/0e29)
# @copyright        Copyright (c) 2019, Taras Palasyuk. All rights reserved.
# @licence          BSD 3-Clause License
# @version          Version 0.1
# @revision         December 14, 2019 @ 1:46 AM
# @category         Settings / Config
# @filename         Settings.php
#
# ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
#
if (!defined('APP_INC_TOKEN.S29')) {

    http_response_code(403);
    echo 'ERROR 403<br>Access not permitted!';
    exit();

} else {

    define('APP_INC_TOKEN.S29', 'false');
    define('APP_SITE_NAME', 'System29');
    define('APP_FOOTER_CR', 'System29 WCMS');

    define('APP_SITE_URL', '');
    define('APP_ROOT_DIR', realpath(__DIR__.'/..'));

    define('APP_MAINTANCE_MODE', 'false');

}
