<?php require_once("../include/common.php");?>
<?php include(ROOT_DIR."/include/db.inc");?>
<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST') {

		if(!$_POST['name'] || !$_POST['email'] || !$_POST['comment']) {
			echo "false";
			return;
		}
		$db->insert("visitor_messages", $_POST);
		echo "true";
	} else {
		echo "false";
	}
?>