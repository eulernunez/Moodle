<?php
class Rule
{
    
    public static $rock = 0;
    public static $paper = 1;
    public static $scissors = 2;
    public static $spock = 3;
    public static $lizard = 4;	
	
    public static $elements = array("Rock", "Paper", "Scissors", "Spock", "Lizard");
	
    public static function getElements() {
        
        return self::$elements;
        
    }	
    
    /*
     * Implementa la lógica del juego es decir las reglas.
     * La solución del desafío consta de 10 combinaciones C n,k = n!/(k!(n!-k!))
     * Donde:
     * n - Número de elementos para combinar 5
     * k - Número de elementos del subgrupo (pareja de 2)
     *  C n,k = n!/(k!(n!-k!)) = 10, es decir el juego tendra 10 reglas.
     * 
     * @return array
     */	
    public static function getRules() {
	
        $rules = array();

        $rules[self::$rock][self::$scissors] = 'crushes';	
        $rules[self::$rock][self::$lizard] = 'crushes';
        $rules[self::$paper][self::$rock] = 'covers';
        $rules[self::$paper][self::$spock] = 'disproves';
        $rules[self::$scissors][self::$paper] = 'cuts';
        $rules[self::$scissors][self::$lizard] = 'decapitates';
        $rules[self::$spock][self::$rock] = 'vaporizes';
        $rules[self::$spock][self::$scissors] = 'smashes';
        $rules[self::$lizard][self::$paper] = 'eats';
        $rules[self::$lizard][self::$spock] = 'poisons';

        return $rules;

    }

}
