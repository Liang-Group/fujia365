<?php
	$title = "上海复佳办公设备有限 &middot; 我们每天都在努力，只为您感到更满意";
	$keywords = "上海，复佳办公设备，销售，租赁，维修，佳能，惠普，兄弟，施乐，EPSON，东芝，理光，打印机，复印机，一体机";
	$description = "上海，复佳办公设备，销售，租赁，维修，佳能，惠普，兄弟，施乐，EPSON，东芝，理光，打印机，复印机，一体机";
?>
<?php include("web_header.inc")?>

<style>
	.categories ul {
	    /*background-color: #FFFFFF;*/
	    //border-radius: 6px 6px 6px 6px;
	    //box-shadow: 0 1px 4px rgba(0, 0, 0, 0.067);
	    margin: 10px 0 0;
	    padding: 0;
	    width: 228px;
	    margin-left: 15px;
	}

	.categories ul li {
		// list-style: none outside none;
	}

	.categories ul li a {
	    // border: 1px solid #E5E5E5;
	    display: block;
	    margin: 0 0 -1px;
	    padding: 8px 14px;
	}

	.categories ul li:hover{
	    background-color: #FFDE95;
	}

	.categories ul li a:hover {
	    color: #A39E7E;
	}

	.contact-us {
		font-size: 1.2em;
		margin-top:30px;
	}

	.contact-us .contacts {
		line-height: 20px;
	}

	div#query .queryBtn {
		margin-right: 40px;
	}


</style>

<div id="main">
	<div class="outer">
		<div class="inner">
			<h1 id="logo"><a href="./" accesskey="h">复佳办公</a></h1>
			<p id="baloon">我们每天都在努力，只为您感到更满意</p>
			<div id="content">
				<div class="primary">
					<div id="about">
						<h2>上海复佳办公设备有限公司</h2>
						<p>我们是专业的办公设备解决方案供应商。为您量身订制最合适的方案。我们提供复印机、单机打印、网络打印、传真、扫描等单一功能或者组合功能的数码复合型复印机。最高可以让您节省超过 <strong style="font-size:2.2em">46%</strong> 的办公费用。
							浏览<a href="/info.php" style="font-size:2.2em">服务内容</a>了解更多详情。
						</p>
						<p>
							专业<a href="/info.php" style="font-size:2.2em">维修</a>
							佳能，惠普，兄弟，施乐，EPSON等<a href="/info.php" >打印机</a>,
							佳能，夏普，东芝，施乐，理光等<a href="/info.php" >复印机</a>,
							佳能，夏普，东芝，施乐，理光等<a href="/info.php" >打印、复印机一体机</a>
						</p>
						<ul>
							<li>报修呼叫后3小时响应，现场服务</li>
							<li>中环线内免费上门查勘机器故障</li>
							<li>维修设备同故障享受3个月的免费保修</li>
						</ul>
					</div>

					<div id="contact">
						<h3>在线留言</h3>
						<p>您可以邮件<a href="mailto:fujia_canon@163.com" class="email">fujia_canon@163.com</a>，或者在此处留言。</p>
						<form action="/cgi/message.php" method="post" id="messageForm">
							<p class="offset"><label for="f-url">Leave empty</label></p>
							<p class="message"><textarea rows="5" cols="30" name="comment" id="f-message" placeholder="请在这里给我们留言"></textarea></p>
							<div class="details">
								<p class="name"><input type="text" name="name" id="f-name" placeholder="姓名/公司"/></p>
								<p class="email"><input type="text" name="email" id="f-email" placeholder="邮箱/电话"/></p>
								<p class="submit"><button type="button" id="messageBtn">发送留言</button></p>
							</div>
						</form>
						<p class="alternative"></p>
					</div>					
				</div>
				<div class="secondary">
					<div id="samples">
						<h3>我们提供的产品</h3>
						<div id="query">
							<form class="navbar-search pull-left" method="get" action="/search.php">
				            	<input type="text" class="keyword" name="q" placeholder="搜索型号">
				            	<button type="submit" class="queryBtn">搜索</button>
				            </form>
						</div>
						<div class="categories">
							<ul>
								<li><a href="/rent.php">新设备租赁 -></a></li>
								<li><a href="/rent-old.php">旧设备租赁 -></a></li>
								<li><a href="/copier.php">复印机销售 -></a></li>
								<li><a href="/printer.php">打印机销售 -></a></li>
								<li><a href="/haocai.php">办公耗材配送 -></a></li>
							</ul>
						</div>
						<div class="contact-us">
						<h3>与我们联系</h3>
							<div class="contacts">
								联系人：朱经理 苏小姐<br/>
								电话：021-62386667<br/>
								传真：021-62381083<br/>
								移动电话：15000594630<br/>
								QQ联系方式：1976204899<br/>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include("web_footer.inc")?>

<script>
var PlaceHolder = {
    _support: (function() {
        return 'placeholder' in document.createElement('input');
    })(),
 
    //提示文字的样式，需要在页面中其他位置定义
    className: 'abc',
 
    init: function() {
        if (!PlaceHolder._support) {
            //未对textarea处理，需要的自己加上
            var inputs = document.getElementsByTagName('input');
            PlaceHolder.create(inputs);
        }
    },
 
    create: function(inputs) {
        var input;
        if (!inputs.length) {
            inputs = [inputs];
        }
        for (var i = 0, length = inputs.length; i <length; i++) {
            input = inputs[i];
            if (!PlaceHolder._support && input.attributes && input.attributes.placeholder) {
                PlaceHolder._setValue(input);
                input.addEventListener('focus', function(e) {
                    if (this.value === this.attributes.placeholder.nodeValue) {
                        this.value = '';
                        this.className = '';
                    }
                }, false);
                input.addEventListener('blur', function(e) {
                    if (this.value === '') {
                        PlaceHolder._setValue(this);
                    }
                }, false);
            }
        }
    },
 
    _setValue: function(input) {
        input.value = input.attributes.placeholder.nodeValue;
        input.className = PlaceHolder.className;
    }
};
 
//页面初始化时对所有input做初始化
PlaceHolder.init();
//或者单独设置某个元素
//PlaceHolder.create(document.getElementById('t1'));

    $('#messageBtn').click(function(){
    	var messageForm = $('#messageForm');
    	$.ajax({
		  type: 'POST',
		  url: messageForm.attr("action"),
		  data: messageForm.serialize(),
		  dataType: 'json',
		  success: function(data) {
		  	data = jQuery.trim(data);
		  	if(data == 'true') {
		  		alert('留言成功');
		  	} else {
				alert('留言失败，请填写完整的信息');
		  	}
		  }
		});
    });
</script>