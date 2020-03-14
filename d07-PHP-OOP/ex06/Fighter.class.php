<?php
abstract class Fighter{
    public $typef;
    public function __construct($type)
    {
        $this->typef = $type;
    }   
    abstract public function fight($target);
}
?>