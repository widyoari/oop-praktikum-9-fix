<?php 

namespace App\Core;
use PDO;

class Model {

	protected object $db;

	public function __construct() {

		try {

			$this->db = new PDO ("mysql:host=localhost;dbname=dbpraktikum10", "root", "solo1234");
		} catch (Exception $e) {
			die ("error! " . $e->getMessage());
		}
	}
}