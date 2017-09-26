<?php
/*
1. Добавить свойство content
2. Создать метод print(), который выводит
   заголовок и контент в консоль.

   echo $this->title;
   echo "\n"; // перенос строки
*/
class Publication {
    public $title;
    private $date;

    public function setDate($date) 
    {
        $this->date = $date;
    }
}