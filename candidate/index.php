<?php
include 'assets/voting.php';
$candidates = new Voting();
$showCandidates = $candidates->showCandidates();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 4, from LayoutIt!</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-center text-primary">
				Quick Count
			</h3>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-12">
			<?php foreach ($showCandidates as $rows) : ?>
			<div class="list-group">
				 <a href="#" class="list-group-item list-group-item-action active">Candidate <?= $rows->id; ?></a>
				<div class="list-group-item">
					<h4 class="list-group-item-heading">
						<?= $rows->name; ?>
					</h4>
				</div>
				<div class="list-group-item justify-content-between">
					<button class="btn btn-warning" value="<?= $rows->id; ?>">Vote</button>
				</div> <a href="#" class="list-group-item list-group-item-action active justify-content-between">Perolehan Suara <span class="badge badge-light badge-pill"><?= $rows->earned_vote; ?></span></a>
			</div>
			<hr>
			<?php endforeach; ?>
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <script>
    	$(document).ready(function() {
    		$('.btn-warning').click(function(e) {
    			e.preventDefault();
    			var id = $(this).attr('value');
    			$.ajax({
    				url: 'assets/vote.php',
    				data: {
    					id: id
    				},
    				type: 'POST',
    				success: function(data) {
						if (data == true) {
							window.location = '';
						}
    				}
    			});
    		});
    	});
    </script>
  </body>
</html>