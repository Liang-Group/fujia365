
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?php echo @($title)?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
      	padding-top: 60px;
      }
      
      .navbar-search input.search-query {
      	background: #D0D6DB url('/img/search.png') no-repeat 4px 4px;
				padding: 8px 5px 4px 25px;
      }
			.navbar-inverse .navbar-search .search-query:focus, .navbar-inverse .navbar-search .search-query.focused {
			    padding: 8px 5px 4px 25px;
			}
      
      .product {
      	text-align: center;
        float:left;
        width: 265px;
      }
      .p-name {
		    height: 3em;
		    word-wrap: break-word;
			}
			.p-img, .p-name, .p-price, .p-market, .p-detail {
			    overflow: hidden;
			}
			.p-price {
				font-size: 14px;
				font-family: verdana;
				color:#C00;
			}
      .p-img a img {
        height: 160px;
        width: 160px;
      }
       
    </style>
    <link href="/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">

  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container" style="width:100%;min-width:1100px;">
          <a class="brand" href="/index.php">上海复佳办公设备有限公司</a>
          <div class="">
            <?php $active = "class='active'";?>
            <ul class="nav">
              <li <?=@$headerItem == "index" ? $active : "" ?> ><a href="/index.php">首页</a></li>
              <li <?=@$headerItem == "info" ? $active : "" ?> ><a href="/info.php">服务内容</a></li>
              <li <?=@$headerItem == "rent" ? $active : "" ?> ><a href="/rent.php">新设备租赁</a></li>
              <li <?=@$headerItem == "rent-old" ? $active : "" ?> ><a href="/rent-old.php">旧设备租赁</a></li>
              <li <?=@$headerItem == "copier" ? $active : "" ?> ><a href="/copier.php">复印机销售</a></li>
              <li <?=@$headerItem == "printer" ? $active : "" ?> ><a href="/printer.php">打印机销售</a></li>
              <li <?=@$headerItem == "haocai" ? $active : "" ?> ><a href="/haocai.php">办公耗材配送</a></li>
            </ul>
            <form action="/search.php" method="get" class="navbar-search pull-left">
            	<input type="text" value="<?=@$_GET['q'] ?>" placeholder="搜索型号" name="q" class="search-query span3">
            </form>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">