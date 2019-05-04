<?php
include 'config.php';

class Voting {

	public function __construct() {
		$this->db = new Connection();
	}

	public function showCandidates() {
		try {
			$db = $this->db->openCon();
			$stmt = $db->prepare("SELECT * FROM candidates");
			$stmt->execute();
			$result = $stmt->fetchAll(PDO::FETCH_OBJ);
			return $result;
		}
		catch(PDOException $e) {
			echo $e->getMessage();
		}
	}

	public function voteCandidate($id) {
		try {
			$data = array($id);
			$db = $this->db->openCon();
			$stmt = $db->prepare("UPDATE candidates SET earned_vote = earned_vote + 1 WHERE id = ?");
			if ($stmt->execute($data)) {
				return true;
			}else{
				return false;
			}
		}
		catch(PDOException $e) {
			echo $e->getMessage();
		}
	}
}