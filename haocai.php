<?php require_once("include/common.php");?>
<?php
	$title = "办公耗材 上海复佳办公设备有限公司";
	$headerItem = "haocai";
?>
<?php include(ROOT_DIR."/include/header.inc")?>
<?php include(ROOT_DIR."/include/db.inc");?>
<?php require_once(ROOT_DIR."/include/product.php")?>

<div class="navbar">
  <div class="navbar-inner">
    <a class="brand" href="#">选择品牌</a>
    <ul class="nav">
    	<li <?=(!isset($_GET['brand']) || $_GET['brand'] == "") ? "class='active'" : ""?>><a href="haocai.php">所有</a></li>
    	<?php
    		$brands = $db->get_all("select distinct brand from products where category = '耗材';");
    		$curBrand = isset($_GET['brand']) ? $_GET['brand'] : "";
    		foreach ($brands as $brand) {
    			$active = "";
    			if($brand['brand'] == $curBrand) {
    				$active = "class='active'";
    			}
    			
    			echo "<li  $active><a href='haocai.php?brand=$brand[brand]'>$brand[brand]</a></li>";
    		}
    	?>
    </ul>
  </div>
</div>

<div id="products">
	<div class="row">
		<?php
			$brandCond = "";
			if($curBrand) {
				$brandCond = " and brand = '$curBrand'";
			}
			$products = $db->get_all("select * from products where category = '耗材' and is_deleted = 0 $brandCond order by price");
			foreach ($products as $product) {

		?>
			
			<div class="span3">

		<?php
			echo show_product($product);
		?>
			</div>
		<?php
			}
		?>

  </div>
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