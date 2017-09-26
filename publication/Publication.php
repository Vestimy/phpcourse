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
    public $content;
    public $author;


    public function setDate($date) 
    {
       $this->date = $date;

    }
    public function myPrint(){
        echo "<h1>".$this->title."</h1>\n";
        echo "<p>".$this->content."</p>\n";
        echo "<h3>".$this->author.$this->date."</h3>";
        
        
    }
}