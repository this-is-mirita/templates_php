<?php 
require_once('arraysFromStranitsi/citatiesRandom.php');

$rand_key = array_rand($cat_quotes);
$random_cite = $cat_quotes[$rand_key];
$link_color = "link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover";
?>