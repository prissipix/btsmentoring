<?php //can't make objects out of abstract classes, but it's children can
abstract class Deck
{
	protected $arrCards; 
	protected $listOfCards;

	/* abstract methods force classes that extends this class to implement them */
	abstract public function dealCard(); //all classes that will inherit will inherit this method


	/* already implemented methods */
	public function __construct($Cards) {
		$this->arrCards = $Cards;
	}

	public function shuffleCards() {
		shuffle($this->arrCards);
	}

	public function listCards() {
		foreach($this->arrCards as $Card) {
			echo $Card . '<br />';
		}
	}

}

?>