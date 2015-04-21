<h2>Sanook News</h2>
 <?php

foreach($data as $temp_item) {
	echo "<div style='border:1px solid #a1a1a1;
 padding:10px 40px;
 background:#eee;
 width:800px;
 border-radius:5px;'>";
	echo "<h3><a href='" . $temp_item['link'] . "'>" . $temp_item['title'] . "</a>
 </h3>" . $temp_item['pubDate'] . "<p>" . $temp_item['description'] . "</p>";
	echo "</div><br/>";
}

?>
