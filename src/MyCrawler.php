<?php
require_once('config.php');
require_once(__ROOT__.'/phpcrawl/libs/PHPCrawler.class.php'); 
require_once(__ROOT__.'/simplehtmldom_1_5/simple_html_dom.php');

class MyCrawler extends PHPCrawler {
    
    function handleDocumentInfo(PHPCrawlerDocumentInfo $DocInfo) {
        // Get all urls of website
        echo "Page requested: ".$DocInfo->url."</br>";

        $html = file_get_html($DocInfo->url);

        if(is_object($html)){

        $t = $html->find("title", 0);
        if($t){
          $title = $t->innertext;
        }

        echo "Title: ".$title."</br></br></br>";
        $html->clear(); 
        unset($html);
    }

    flush();
    } 
}