<?php require_once("../include/common.php");?>
<?php
	$title = "上海复佳办公设备有限公司 - 联系我们";
	$headerItem = "message";
?>
<?php include(ROOT_DIR."/include/db.inc");?>
<?php include(ROOT_DIR."/include/header.inc")?>

<div class="row">
	<?php
		
		$result = $db->get_all("select * from visitor_messages order by create_date desc;");

		if($result === null) {
			echo '没有用户留言。<br/>';
		} else {
			echo "共收到 ".sizeof($result)." 条用户留言";
			echo '<table class="table table-striped">';
			echo '<tr><th>日期</th><th>姓名</th><th>电话/邮件</th><th>留言</th></tr>';

			foreach ($result as $message) {
				$message = (object) $message;
				$cd = date("Y-m-d H:i:s", strtotime($message->create_date));
	?>
			<tr>
				<td><?=$cd?></td>
				<td><pre><?=@$message->name ?></pre></td>
				<td><pre><?=@$message->email ?></pre></td>
				<td><pre><?=@$message->comment ?></pre></td>
			</tr>
	<?php
			}	
			echo '</table>';
		}

	?>
</div>

<?php include("../include/footer.inc")?>