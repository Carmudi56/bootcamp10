<?php
class Connection {
	private $host = 'mysql:host=localhost;dbname=candidates',
			$user = 'root',
			$password = '',
			$options = array(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	protected $db;

	public function openCon() {
		try {
			$db = new PDO($this->host, $this->user, $this->password, $this->options);
			return $db;
		}
		catch(PDOException $e) {
			echo "Connection Failed: ".$e->getMessage();
		}
	}

	public function closeCon() {
		$db = null;
	}
}