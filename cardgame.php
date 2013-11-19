<?php

include_once "Card.php";
include_once "EnglishDeck.php";


echo "Simple Blanckjack<br>";
 
$oBaraja = new EnglishDeck(); 
$oBaraja->shuffleCards();


function countHand($oCard1, $oCard2) {
	return cardValue($oCard1) + cardValue($oCard2);

}

function cardValue($oCard1) {
	$count = 0;
	if ($oCard1->getFigure() == 'Jack' || 
		$oCard1->getFigure() == 'Queen' ||
		$oCard1->getFigure() == 'King') {
			$count += 10;
	} elseif ($oCard1->getFigure() == 'Ace') {
		$count += 11;
	} else{
		$count += $oCard1->getFigure();
	}

	return $count;
}


//PLAYER 1
$oP1card1  = $oBaraja->dealCard();
echo("Player one has " . $oP1card1);

$oP1card2  = $oBaraja->dealCard();
echo(" and a " . $oP1card2 );

echo "<br>";

//PLAYER 2
$oP2card1  = $oBaraja->dealCard();
echo("Player two has " . $oP2card1);

$oP2card2  = $oBaraja->dealCard();
echo(" and a " . $oP2card2);


$oPlayer1 = countHand($oP1card1, $oP1card2);
$oPlayer2 = countHand($oP2card1, $oP2card2);

echo "<br> La cuenta de la mano del player1 es: " . $oPlayer1;
echo "<br> La cuenta de la mano del player2 es: " . $oPlayer2;

//Player Variables when cards are added together
//$oPlayer1 = (string)$oP1card1 + (string)$oP1card2;
//$oPlayer2 = (string)$oP2card1 + (string)$oP2card2;


//echo "<br>Pris " . $oPlayer1;
//echo "<br>Isma " . $oPlayer2;


/*$oBaraja->compare($oPlayer1, $oPlayer2) {
	if($oPlayer1 > $oPlayer2){
		echo "Player 1 wins";
	} else if ($oPlayer1 < $oPlayer2) {
		echo "Player 2 wins";
	} else {
		echo "it's a tie";
	}
}*/

//validation 
/*
/if ($oPlayer1 == $array[$Ace] + $array[$Ace]) {
	$oPlayer1 - 10;
}*/

echo "<br />";



if($oPlayer1 > $oPlayer2){
    echo "Player 1 wins";
} else if ($oPlayer1 < $oPlayer2) {
    echo "Player 2 wins";
} else if ($oPlayer1 >= 22) {
	echo "Player 1 is over 21 and looses";
}else if ($oPlayer2 >= 22) {
	echo "Player 2 is over 21 and looses";
}else{
    echo "it's a tie";
}


print_r($oPlayer1);

//$oBaraja->foobar($oPlayer1, $oPlayer2);

//echo "bar";


?>