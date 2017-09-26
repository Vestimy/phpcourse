<?php
class Publication {
    public $title;
    private $date;

    public function setDate($date) 
    {
        $this->date = $date;
    }
}