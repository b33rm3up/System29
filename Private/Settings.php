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
# @revision         December 13, 2019 @ 2:07 PM
# @category         Settings / Config
# @filename         Settings.php
#
# ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
#
if (!defined('INC_TOKEN')) {

    http_response_code(403);
    echo 'ERROR 403<br>Access not permitted!';
    exit();

} else {

    define('ROOT_DIR', realpath(__DIR__.'/..'));

}
