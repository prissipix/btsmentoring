<?php

class Card
{
        private $suit;
        private $figure;


        public function __construct($Suit, $Fig) {
                $this->suit   = $Suit;
                $this->figure = $Fig;
        }

        public function __toString() {
                return $this->figure . ' of ' . $this->suit;
        }

        public function getFigure() {
                return $this->figure;
        }

        public function getCard() {
                echo $this->figure . " of " . $this->suit . ".<br />";
        }


}

?>