
<?php

$link = "https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png";

$content = file_get_contents($link);

$parse = parse_url($link);

/*
array(3) {
  ["scheme"]=>
  string(5) "https"
  ["host"]=>
  string(14) "www.google.com"
  ["path"]=>
  string(60) "/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png"
}
*/

$basename = basename($parse["path"]);

//$file = fopen($basename, "w+");
$file = fopen("_google.png", "w+");

fwrite($file, $content);

fclose($file);


?>

<img src="<?=$basename?>">
