<?php require_once("../include/common.php");?>
<?php
	$title = "上海复佳办公设备有限公司 - 联系我们";
	$headerItem = "products";
?>
<?php include(ROOT_DIR."/include/db.inc");?>
<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		@ $id = $_POST['id'];
		if(!$_POST['id']) {
			$db->insert("products", $_POST);
			$id = $db->insert_id();
		} else {
			// do update
			$db->update("products", $_POST, "id = '".$_POST['id']."'");
		}
		
		
		#header("Location: /admin/product.php?id=$_POST['id']");
		#header("Location: product.php?id=$id");
		echo "<script>window.location =\"product.php?id=$id\";</script>";
		return;
	} else {
		$categories = $db->get_all("select * from categories");
		if(@$_GET['id']) {
			$product = (object) $db->get_one("select * from products where id = '".$_GET['id']."';");
		}
	}
?>

<?php include(ROOT_DIR."/include/header_admin.inc")?>

<div class="row">
	<form action="product.php" method="POST">
		<input type="hidden" name="id" value="<?=@ $product->id ?>">
		<legend><?php if(@!$product) { echo '新建'; } else { echo '编辑';} ?>产品</legend>
		<label>基础信息</label>
		<input name="title" type="text" value="<?=@ $product->title ?>" placeholder="*产品名称">
		<input name="brand" type="text" value="<?=@ $product->brand ?>" placeholder="*产品品牌">
		<input name="image" type="text" value="<?=@ $product->image ?>" placeholder="图片链接" id="imageInput">
		<a href="upload.php" target="upload">上传图片</a>

		<label class="checkbox inline">
			<input type="radio" name="color" id="optionsRadios1" value="黑白" <?php if(@ $product && $product->color == '黑白') { echo 'checked'; } ?>>
						黑白
			</label>
			<label class="checkbox inline">
			<input type="radio" name="color" id="optionsRadios2" value="彩色" <?php if(@ $product && $product->color == '彩色') { echo 'checked'; } ?>>
						彩色 (耗材无须填写)
		</label>
		
		<label>产品分类</label>
		<select name="category">
			<?php
				foreach ($categories as $cate) {
					$cate = (object) $cate;
			?>
				<option value="<?= @$cate->name?>" <?php if(@$product && $product->category == $cate->name) echo "selected" ?> >
					<?= @$cate->name?>
				</option>
			<?php
				}
			?>
		</select>
		<label>价格</label>
		<input name="price" type="text" value="<?=@ $product->price ?>" placeholder="*价格">
		<input name="list_price" type="text" value="<?=@ $product->list_price ?>" placeholder="标价">
		<br/><br/><button type="submit" class="btn btn-primary">确认</button><button type="submit" class="btn btn-danger">删除</button><br/><br/>
		<label>产品简介</label>
		<textarea id="editor" name="description" style="width:440px;height:100px;"><?=@$product->description?></textarea>
		<br/>
	</form>
</div>

<?php include("../include/footer.inc")?>

<script type="text/javascript">
	<!--
		window.UEDITOR_HOME_URL = location.pathname.substr(0, location.pathname.lastIndexOf('/')) + '/';
		window.UEDITOR_HOME_URL = '/js/ueditor/';
	//-->
</script>

<script type="text/javascript" src="/js/ueditor/editor_config.js"></script>
<script type="text/javascript" src="/js/ueditor/editor.js"></script>
<link rel="stylesheet" href="/js/ueditor/themes/default/ueditor.css" />
<script type="text/javascript">
    var editor = new UE.ui.Editor();
    editor.render('editor');
</script>

<style>
	footer {
		margin-top: 40px;
	}
</style>
