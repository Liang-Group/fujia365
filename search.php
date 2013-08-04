<?php require_once("include/common.php");?>
<?php
	$title = "搜索 上海复佳办公设备有限公司";
	$headerItem = "index";
?>
<?php include(ROOT_DIR."/include/header.inc")?>
<?php include(ROOT_DIR."/include/db.inc");?>
<?php require_once(ROOT_DIR."/include/product.php")?>



<div id="products">
<?php
	if($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['q']) {
		$q = $_GET['q'];
		
		$products = $db->get_all("select * from products where title like '%$q%' or brand = '$q'");
		
		foreach ($products as $product) {
			echo show_product($product);
		}
	}
?>	
</div>

<?php include(ROOT_DIR."/include/footer.inc")?>

<script>
	$(function(){
	  $('#products').masonry({
	    // options
	    itemSelector : '.item',
	  });
	});
</script>