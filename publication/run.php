<?php
require_once('News.php');

$p3 = new News("Media");

$p3->content="Content";
$p3->author="Author.";

$p3->print();

$p3->importance = true;
$p3->print();

echo "\n";