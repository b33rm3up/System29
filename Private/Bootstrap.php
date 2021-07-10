<?php
#
# ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
#
# System29 Bootstrap
#
# @author           Taras Palasyk (https://github.com/b33rm3up)
# @copyright        Copyright (c) 2019, Taras Palasyuk. All rights reserved.
# @licence          BSD 3-Clause License
# @version          Version 0.1
# @revision         December 12, 2019 @ 3:34 PM
# @category         Bootstrap
# @filename         Bootstrap.php
#
# ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
#
if (!defined('APP_INC_TOKEN.S29')) {

     http_response_code(403);
     echo 'ERROR 403<br>Access not permitted!';
     exit();

} else {

     require_once ('PDO.php');
     require_once ('Settings.php');

     class PageEngine {
        private $title, $desc, $key, $slug, $date, $img, $css=array(), $js=array(), $js_def=array(), $body;
        
        public function __construct()
        {
            $this->object_css('');
            $this->object_js('');
            $this->object_js_def('');
        }
        
        function page_title($title)
        {
            $this->title = $title;
        }
        
        function page_desc($desc)
        {
            $this->desc = $desc;
        }
        
        function page_key($key)
        {
            $this->key = $key;
        }
    
        function og_url($slug)
        {
            $this->slug = $slug;
        }
    
        function og_date($date) 
        {
            $this->date = $date;
        }
    
        function og_img($img) 
        {
            $this->img = $img;
        }
        
        function object_css($path)
        {
            $this->css[] = $path;
        }
        
        function object_js($path)
        {
            $this->js[] = $path;
        }
         
        function object_js_def($path)
        {
            $this->js_def[] = $path;
        } 
        
        function html_body_start()
        {
            ob_start();
        }
        
        function html_body_end()
        {
            $this->body = ob_get_clean();
        }
        
        function render_page($path)
        {
            ob_start();
            include($path);
            return ob_get_clean();
        }
    }

}
