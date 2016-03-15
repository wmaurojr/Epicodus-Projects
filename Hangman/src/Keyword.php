<?php 

class Keyword {

	private $keyword;
	//private $keys;

	function __construct($keyword) {
		$this->keyword = $keyword;
	}

	function save() {
		array_push($_SESSION['keys'], $this);
	}

	function getKeyword() {
		return $this->keyword;
	}

	function splitIntoKeys() {
		return str_split($this->keyword);
	}

	function getKey() {
		return $this;
	}

	static function getKeys() {
		return $_SESSION['keys'];
	}

	function hasLetter($guess) {

		return array_keys($_SESSION['keys'], $guess);

	}
}

?>