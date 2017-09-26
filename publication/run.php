<?php
require_once('Publication.php');

$p1 = new Publication;
$p1->title = 'Публикация 1';
$p1->setDate(time());
$p2 = new Publication;

var_dump($p1);
var_dump($p2);