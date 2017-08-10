<?php
require_once('config.php');
require_once(__ROOT__.'/src/TrangCrawler.php'); 

if (!isset($_REQUEST['midashi']) || empty($_REQUEST['midashi'])) {
	echo "Input URL";
    echo '<br>';
    echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
    exit;
}
set_time_limit(10000);

$url = $_REQUEST['midashi'];

$crawler = new TrangCrawler();
$text = $crawler->innertext($url);

echo '<p>Scrape innertext at class=midashi from "http://www.kanxashi.co.jp/skillcheck/" with simple_html_dom</p>';
echo $text;