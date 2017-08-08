<?php
require_once('config.php');
require_once(__ROOT__.'/src/MyCrawler.php'); 

if(!isset($_REQUEST['url']) || empty($_REQUEST['url'])) {
    echo "Input URL";
    echo '<br>';
    echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
    exit;
}

$url = $_REQUEST['url'];
set_time_limit(10000);

$crawler = new MyCrawler();
$crawler->setURL($url);

// Store and send cookie-data like a browser does
$crawler->enableCookieHandling(true);
 
// Set the traffic-limit to 1 MB (in bytes,
// for testing we dont want to "suck" the whole site)
$crawler->setTrafficLimit(1000 * 1024);
 
$crawler->go();
 
// At the end, after the process is finished, we print a short
// report (see method getProcessReport() for more information) 
$report = $crawler->getProcessReport();
 
if (PHP_SAPI == "cli") 
    $lb = "\n";
else 
    $lb = "<br />";
    
echo "Summary:".$lb;
echo "Links followed: ".$report->links_followed.$lb;
echo "Documents received: ".$report->files_received.$lb;
echo "Bytes received: ".$report->bytes_received." bytes".$lb;
echo "Process runtime: ".$report->process_runtime." sec".$lb; 