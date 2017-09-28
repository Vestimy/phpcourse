<?php
require_once('Publication.php');
class News extends Publication 
{
    public $importance = false;

    public function print()
    {
        if ($this->importance) {
            echo '!!!!! ';
        }
        parent::print();
    }
}