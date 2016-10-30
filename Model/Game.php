<?php
class Game
{
    protected $elements = array();
    protected $rules = array();
    protected $firstHand;
    protected $secondHand;
    
    public function __construct($firstHand, $secondHand) {
        
        $this->elements = Rule::getElements();
        $this->rules = Rule::getRules();
        
        $this->firstHand = $firstHand;
        $this->secondHand = $secondHand;

    }
    
    public function getFirstHand() {
        
        return $this->elements[$this->firstHand];
        
    }

    public function getSecondHand() {
        
        return $this->elements[$this->secondHand];
        
    }
    
    
    public function play() {
        
        if($this->firstHand === $this->secondHand) {
            return array(
                    'Game' =>  'Try again.',
                    'Win' => 'Tie');
        }
        
        if(isset($this->rules[$this->firstHand][$this->secondHand])) { 
            return  array(
                         'Game' => $this->elements[$this->firstHand] . ' ' 
                                   . $this->rules[$this->firstHand][$this->secondHand] 
                                   . ' ' . $this->elements[$this->secondHand],
                         'Win' =>  $this->elements[$this->firstHand]);
                    
        }	

        if(isset($this->rules[$this->secondHand][$this->firstHand])) {
            return array(
                         'Game' => $this->elements[$this->secondHand] . ' ' 
                                   . $this->rules[$this->secondHand][$this->firstHand] 
                                   . ' ' . $this->elements[$this->firstHand],
                          'Win' => $this->elements[$this->secondHand]);
        }
	
    }

}