<?php

// xml file path
$path = "https://api.flickr.com/services/feeds/photos_public.gne?tags=chamonix,ski,snow";


// read file into string
$xmlFile = file_get_contents($path);

// parse from string
$xmlFile = str_replace(array("\n", "\r", "\t"), '', $xmlFile);
$xmlFile = trim(str_replace('"', "'", $xmlFile));

// convert xml into object
$xml = simplexml_load_string($xmlFile);

// convert into JSON
$json = json_encode ($xml);

echo $json;
// echo $json["entry"][0][author][name];
// echo "<br>";
// echo $json["entry"][0][title];
// var_dump($json["entry"][0]);

// print_r($json["entry"][0][title]);

?>
