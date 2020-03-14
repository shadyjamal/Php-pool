<?php
class UnholyFactory{
    public $absorbed = array();
    public function absorb($figther){
        if ($figther instanceof Fighter)
        {
            foreach($this->absorbed as $value)
            {
                if ($figther->typef == $value->typef)
                {
                    print('(Factory already absorbed a fighter of type '. $figther->typef .")".PHP_EOL);
                    return;
                }
            }
            print('(Factory absorbed a fighter of type '. $figther->typef .")".PHP_EOL);
            $this->absorbed[] = $figther;
        }
        else
            print("(Factory can't absorb this, it's not a fighter)".PHP_EOL);
    }
    public function fabricate($fighter)
    {
        foreach($this->absorbed as $var)
        {
            if ($var->typef == $fighter)
            {
                print("(Factory fabricates a fighter of type ".$fighter.')'.PHP_EOL);
                return $var;
            }
        }
        print("(Factory hasn't absorbed any fighter of type ".$fighter.')'.PHP_EOL);
        return NULL;
    }    
}

?>