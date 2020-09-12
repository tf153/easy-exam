<?php
	$title="Create Questions";
	$style="../styles/create_questions.css";
	require_once "../default/header.php";
?>
		<div id='main'>
			<form method="post" action="view.php">
				<div id='section-question'>
					<!-- Section for insertion of questions -->
				</div>
				<button type="submit">GO</button>
			</form>
			<div id='add-question'>
				<button id="btn-add-question">Add Question</button>
				<div id="tot-ques"></div>
			</div>
		</div>
<?php
	$script="../scripts/create_questions.js";
	require_once '../default/footer.php';
?>
