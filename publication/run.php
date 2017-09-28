<?php
require_once('Publication.php');

/*
$p3 = new Publication();
$p3->title="Media";
$p3->content="Content";
$p3->author="Author";

$p3->save();
*/

$p = Publication::get('Media');
var_dump($p);

echo "\n";