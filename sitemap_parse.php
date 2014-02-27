<?php 


$xml=simplexml_load_file("http://www.become.co.uk/sitemapindex/");

 $ns = $xml->getNamespaces(true);
foreach ($xml as $key) {
	echo $key->loc . "<br>";
}
 ?>


