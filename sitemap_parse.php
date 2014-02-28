<?php 

$putHere = $_POST['url'];

$xml=simplexml_load_file($putHere);

 $ns = $xml->getNamespaces(true);
foreach ($xml as $key) {
	echo $key->loc . "<br>";
}
 ?>


<h1><a href="http://localhost/sitemaps">BALIK!!!</a></h1>