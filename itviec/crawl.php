<?php
ini_set('max_execution_time', 3000);
require_once('../simplehtmldom_1_5/simple_html_dom.php');

$companies = file_get_contents('https://itviec.com/api/v1/tags/populars/companies');
$companies = json_decode($companies);
echo '<pre>';
// var_dump(count($companies));
// var_dump($companies);

$employers = file_get_contents('https://itviec.com/api/v1/employers.json');
$employers = json_decode($employers);
// var_dump(count($employers));
// var_dump($employers);
// https://itviec.com/companies/chu-ky-so-vina-vinaca

$detail_url = 'https://itviec.com/companies/';
// $url = 'systemgear-vietnam';
foreach ($employers as $key => $value) {
	$url = $value[0];
	// $name = $value[1];
	$html = file_get_html($detail_url . $url);
	if (is_object($html)) {
		// span.group-icon
		//a.ion-android-open
		foreach($html->find('a.ion-android-open') as $element) {
	       // echo preg_replace( "/\r|\n/", " ", $element->plaintext ) . '<br>';
			echo $element->href . '<br>';
		}
	} else {
		echo '<br>';
	}
}