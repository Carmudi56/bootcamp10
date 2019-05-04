<?php
$id = $_POST['id'];
if ($id) {
	include 'voting.php';
	$candidates = new Voting();
	$updateVote = $candidates->voteCandidate($id);
	if ($updateVote == true) {
		echo true;
	}else{
		echo false;
	}
}