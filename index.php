<?php
spl_autoload_register(function ($className) {
    include_once  'Model/' . $className . '.php';
	});
	
	
class Index
{
	
    public function play() {

        $firstHand = rand(0,4);
        $secondHand = rand(0,4);

        $gamer = new Game($firstHand, $secondHand);
        
        echo('1º Hand: ' . $gamer->getFirstHand() . '<br/>');
        echo('2º Hand: ' . $gamer->getSecondHand() . '<br/>');
        
        $result = $gamer->play();
        
        echo('Game: ' . $result['Game'] . '<br/>');
        echo('Win : ' . $result['Win'] . '<br/>');
    }

}


$handler = new Index();
$handler->play();

