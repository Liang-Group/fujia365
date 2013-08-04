<?php require_once("include/common.php");?>
<?php include(ROOT_DIR."/include/db.inc");?>
<?php 
	$product = null;
	if(isset($_GET['id'])) {
		$product = (object) $db->get_one("select * from products where id = '".$_GET['id']."'");
	}
?>
<?php
	$title = $product->title." ".$product->brand." 上海复佳办公设备有限公司";
	$keywords = $product->title." ".$product->brand;
	$description = $product->title." ".$product->brand;
?>
<?php include(ROOT_DIR."/include/header.inc")?>
<?php require_once(ROOT_DIR."/include/product.php")?>

<div class="row">
	<div class="span1">
		
	</div>
	<div class="span3">
		<?php
			echo show_product($product);
		?>
	</div>
    <div class="span8">
    	<?=$product->description ?>

    </div>
</div>

<?php include(ROOT_DIR."/include/footer.inc")?>