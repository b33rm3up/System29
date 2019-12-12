<?php
#
# ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
#
# System29 PDO
#
# @author           Taras Palasyk (https://github.com/0e29)
# @copyright        Copyright (c) 2019, Taras Palasyuk. All rights reserved.
# @licence          BSD 3-Clause License
# @version          Version 0.1
# @revision         December 12, 2019 @ 2:55 PM
# @category         Database
# @filename         PDO.php
#
# ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
#
if (!defined('INC_TOKEN')) {

     http_response_code(403);
     echo 'ERROR 403<br>Access not permitted!';
     exit();

} else {

     if (!isset($_SESSION)) { session_start(); } else { session_regenerate_id(); }

          #database parameters
          $db_host = 'localhost';
          $db_name = '';
          $db_user = '';
          $db_pass = '';
          $db_char = 'utf8mb4';
     
                  $db_options = [
                      \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
                      \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
                      \PDO::ATTR_EMULATE_PREPARES   => false,
                  ];
     
          $dsn = "mysql:host=$db_host;dbname=$db_name;charset=$db_char";
     
          set_error_handler(function ($level, $message, $file = '', $line = 0){
                  throw new ErrorException($message, 0, $level, $file, $line);
          });
     
          try {
              $pdo = new \PDO($dsn, $db_user, $db_pass, $db_options);
          } catch (Throwable $e) {
              set_exception_handler(function ($e) {
                  error_log($e);
                  http_response_code(500);
                  if (ini_get('display_errors')) {
                      echo $e;
                  } else {
                      echo 'ERROR 500<br>Something broke!';
                  }
              });
          }
     
}
