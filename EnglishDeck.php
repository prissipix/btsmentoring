<?php
include_once "Deck.php"; 
include_once "Card.php"; 

class EnglishDeck extends Deck
{   
	
 private $suits = array('Clubs', 'Diamonds', 'Hearts', 'Spades');
	private $cards = array('Ace', 2, 3, 4, 5, 6, 7, 8, 9, 10, 'Jack', 'Queen', 'King');

	public function dealCard() {
		return array_pop($this->arrCards);
	}

	public function __construct() {
		$Cards = $this->initEnglishDeck();
		parent::__construct($Cards);
	}

	function initEnglishDeck() {
		$arrCards = array();
		
		foreach($this->suits as $Suit) {
			foreach ($this->cards as $Card) {
				$arrCards[] = new Card($Suit, $Card);
			}
			
		}
		return $arrCards;
	}

}

//$oBaraja = new EnglishDeck();
//$oBaraja->shuffleCards();
//$oBaraja->listCards();

//$oCarta  = $oBaraja->dealCard();
//echo("La carta: " . $oCarta);
