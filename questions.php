<?php
	include('connect.php');

	$sql = $conn->prepare("SELECT * FROM question_tests  ORDER BY RAND() LIMIT 20");
	$sql->execute();
	echo json_encode($sql->fetchAll(PDO::FETCH_ASSOC),JSON_UNESCAPED_UNICODE);
?>
