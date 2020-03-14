<?php

class NightsWatch implements IFighter{
    public $fighters = array();
    public function recruit($var){
        $this->fighters[] = $var; 
    }
    public function fight(){
        foreach($this->fighters as $figther)
        {
            if ($figther instanceof IFighter)
                $figther->fight();
        }
    }
}
?>