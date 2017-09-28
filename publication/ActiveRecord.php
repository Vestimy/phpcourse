<?php
class ActiveRecord 
{
    private $properties = [];
    private $isNew = true;

    function __construct($properties = [])
    {
        $this->properties = $properties;
    }
    public function __get($name)
    {
        if (!isset($properties[$name])) return null;
        return $this->properties[$name];
    }

    public function __set($name, $value)
    {
        $this->properties[$name] = $value;
    }

    public static function get($title) 
    {
        $data = json_decode(file_get_contents($title . '.json'), true);        
        return new ActiveRecord($data);
    }
    public function save()
    {
        file_put_contents(
            $this->properties['title'] . '.json', 
            json_encode($this->properties)
        );
    }
}