<?php
require_once('config.php');
require_once(__ROOT__.'/phpcrawl/libs/PHPCrawler.class.php'); 
require_once(__ROOT__.'/simplehtmldom_1_5/simple_html_dom.php');

class TrangCrawler extends PHPCrawler {
    
    function innertext($url) {
        $html = file_get_html($url);
        
        if (is_object($html)) {
            $class = $html->find(".midashi", 0);
            if($class){
              $text = $class->innertext;
            }

            $html->clear(); 
            unset($html);
            return $text;
        }

        return FALSE;
    }
}