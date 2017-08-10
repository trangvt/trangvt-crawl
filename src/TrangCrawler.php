<?php
require_once('config.php');

class TrangCrawler{
    /**
     * Get innertext with class = midashi
     * @param  [string] $url [description]
     * @return [string]      [description]
     */
    public function innertext($url) {
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