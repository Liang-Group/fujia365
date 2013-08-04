<?php require_once("../include/common.php");?>
<?php
	$title = "上海复佳办公设备有限公司 - 联系我们";
	$headerItem = "products";
?>
<?php include(ROOT_DIR."/include/db.inc");?>
<?php include(ROOT_DIR."/include/header_admin.inc")?>
<?php require(ROOT_DIR."/include/product.php")?>

<div class="navbar-fixed-top" style="margin-top:70px;">
	<button class="btn-primary" style=" margin-right:20px;float:right" onclick="window.href=window.open('product.php', 'product')">新建产品</button>
</div>


<?php


$categories = $db->get_all("select * from categories");
foreach($categories as $category) { 
	$category = (object) $category;
	$products = $db->get_all("select * from products where category = '$category->name'")	;
	if (!empty($products)) {
?>

	
	<table class="table table-striped">
		<caption><legend><?=$category->name ?></legend></caption>
		<thead>
			<tr>
				<td>ID</td>
				<td>名称</td>
				<td>图片</td>
				<td>分类</td>
				<td>价格</td>
				<td>展示价格</td>
				<td>描述</td>
				<td>操作</td>
			</tr>
		</thead>
		<tbody>
	<?php 
		foreach($products as $product) {
			$product = (object) $product;
	?>

			<tr>
				<td><?=@$product->id?></td>
				<td><?=@$product->title?></td>
				<td><img src="<?=@$product->image?>" width="50"></td>
				<td><?=@$product->category?></td>
				<td><?=@$product->price?></td>
				<td><?=@$product->list_price?></td>
				<td>
					<?php
						if($product->category == '设备租赁' || $product->category == '二手租赁') {
							echo '';
						} else {
							echo $product->description;
						}
					?>
				</td>
				<td><button class="btn btn-info" onclick="window.open('product.php?id=<?=@$product->id?>','product')">编辑</button></td>
			</tr>
	<?php
		}
	?>
		</tbody>
	</table>
<?php
	} 
}
?>



<?php include("../include/footer.inc")?>