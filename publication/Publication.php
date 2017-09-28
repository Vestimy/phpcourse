<?php
class Publication {
    public $title;
    private $date;
    // private $importance;
    public $content;
    public $author;

    function __construct($title, $date = null)
    {
        echo "construct\n";
        $this->title = $title;
        if (!is_null($date))
            $this->setDate($date);
        else
            $this->setDate(time());
    }

    public function __get($name) {
        if ($name == 'date') return $this->getDate();
    }

    /*
    public function __set($name, $value)
    {
        if ($name == 'importance')
            $this->importance = $value;
    }*/

    public function getDate()
    {
        return date('d-m-Y H:i:s', $this->date);
    }
    public function setDate($date) 
    {
       $this->date = $date;
    }
    public function print(){
        echo "<h1>{$this->title}</h1>\n";
        echo "<p>".$this->content."</p>\n";
        echo "<h3>" . $this->author . $this->getDate() . "</h3>";
        echo "\n";
    }
}