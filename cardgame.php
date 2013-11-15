<?php

include_once "Card.php";
include_once "EnglishDeck.php";

 
$oBaraja = new EnglishDeck(); 
$oBaraja->shuffleCards();


//PLAYER 1
$oP1card1  = $oBaraja->dealCard();
echo("Player one has " . $oP1card1);

$oP1card2  = $oBaraja->dealCard();
echo(" and a " . $oP1card2 );

$oPlayer1 = $oP1card1 + $oP1card2;

echo "<br>";

//PLAYER 2
$oP2card1  = $oBaraja->dealCard();
echo("Player two has " . $oP2card1);

$oP2card2  = $oBaraja->dealCard();
echo(" and a " . $oP2card2);

//Player Variables when cards are added together
$oPlayer1 = (string)$oP1card1 + (string)$oP1card2;
$oPlayer2 = (string)$oP2card1 + (string)$oP2card2;


/*$oBaraja->compare($oPlayer1, $oPlayer2) {
	if($oPlayer1 > $oPlayer2){
		echo "Player 1 wins";
	} else if ($oPlayer1 < $oPlayer2) {
		echo "Player 2 wins";
	} else {
		echo "it's a tie";
	}
}*/

echo "<br />";

if($oPlayer1 > $oPlayer2){
    echo "Player 1 wins";
} else if ($oPlayer1 < $oPlayer2) {
    echo "Player 2 wins";
} else {
    echo "it's a tie";
}


//$oBaraja->foobar($oPlayer1, $oPlayer2);

//echo "bar";


?>