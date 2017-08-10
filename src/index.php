<!DOCTYPE html>
<html>
<head>
<title>Web scraping</title>
</head>
<body>

<div>
	<p>Scrape innertext at class=midashi from "http://www.kanxashi.co.jp/skillcheck/" with simple_html_dom</p>
	<form action="midashi.php">
		URL: <input type="text" name="midashi" value="http://www.kanxashi.co.jp/skillcheck/">
		</br>
		</br>
		<input type="submit" value="Crawl">
	</form>
</div>
<div>
	<p>Which page do you want to crawl?</p>
	<form action="crawl.php">
		URL: <input type="text" name="url" placeholder="Input URL">
		<!-- https://japanhotel.airtrip.jp/ -->
		</br>
		</br>
		<input type="submit" value="Crawl">
	</form>
</div>

</body>
</html>