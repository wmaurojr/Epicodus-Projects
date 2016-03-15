<?php 

class Guess {

	private $guess;

	function __construct($guess) {
		$this->guess = $guess;
	}

	function save() {
		array_push($_SESSION['guesses'], $this);
	}

	function splitIntoKeys() {
		return str_split($this->guess);
	}

	function getGuess() {
		return $this->guess;
	}

	static function getAll() {
		return $_SESSION['guesses'];
	}

	static function deleteAll() {
		$_SESSION['guesses'] = array();
	}

}

?>