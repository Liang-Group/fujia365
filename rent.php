<?php require_once("include/common.php");?>
<?php
	$title = "新机租赁 上海复佳办公设备有限公司";
	$headerItem = "rent";
?>
<?php include(ROOT_DIR."/include/header.inc")?>
<?php include(ROOT_DIR."/include/db.inc");?>
<?php require_once(ROOT_DIR."/include/product.php")?>

<div class="navbar">
  <div class="navbar-inner">
    <a class="brand" href="#">选择机型</a>
    <ul class="nav">
    	<li <?=(!isset($_GET['color']) || $_GET['color'] == "") ? "class='active'" : ""?>><a href="rent.php">所有</a></li>
    	<?php
    		$colors = $db->get_all("select distinct color from products where category = '设备租赁' order by color;");
    		$curColor = isset($_GET['color']) ? $_GET['color'] : "";
    		foreach ($colors as $color) {
    			$active = "";
    			if($color['color'] && $color['color'] == $curColor) {
    				$active = "class='active'";
    			}
    			
    			echo "<li  $active><a href='rent.php?color=$color[color]'>$color[color]</a></li>";
    		}
    	?>
    </ul>
  </div>
</div>



<div id="products">
	<div class="row">
		<?php
			$colorCond = "";
			if($curColor) {
				$colorCond = " and color = '$curColor'";
			}
			$products = $db->get_all("select * from products where category = '设备租赁' and is_deleted = 0 $colorCond order by price");
			
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