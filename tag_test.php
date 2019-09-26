<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="css/at_cage.css" rel="stylesheet" type="text/css" />
	<link href="css/basic_test.css" rel="stylesheet" type="text/css" />
	<!-- <link rel="stylesheet" type="text/css" href="css/basic_.css"> -->
	<style type="text/css" media="screen">
		body, div, ul, li, h2, p{margin: 0; padding: 0; color:#fff;}
		.tagBlock{width:50%; height:300px; position:relative; margin:auto;}
		.tagPad {width:100%; height:240px;}
		.tagItem{width:100%; height:100%; position:absolute; bottom:0; padding: 2%; box-sizing: border-box; background:#aaa; border:1px solid #fff;}
		.tagItem.action {background: #666;}

		.tagCtrlPad{height:20%;}
		.tagCtrlList{height:100%; position: relative;}
		.tagCtrlList .pgLi{width:calc(100% / 3); text-align: center; background:#aaa; border:1px solid #fff; border-bottom: none; box-sizing: border-box; line-height: calc(300px * 0.2 / 2); cursor: pointer; border-radius:7px 7px 0 0; float: left;}
		.tagCtrlList .pgLi.top {z-index: 0; height: 100%;}
		.tagCtrlList .pgLi.bot {margin-top: -30px; z-index: 2; position: relative;}
		.tagCtrlList .pgLi:hover, .tagCtrlList .pgLi.action {background: #666; color: #fff;}
		.tagCtrlList .pgLi.action{height:52%; z-index:3;}
	</style>
</head>
<body>
	<div id="topBtnPad"><?php include_once("at_include/basic_btn.html"); ?></div>
	<div id="main">
		<div class="content">
			<div class="tagBlock">
				<div class="tagCtrlPad">
					<ul class="tagCtrlList">
						<li class="pgLi pg1 top">Title1</li>
						<li class="pgLi pg2 top">Title2</li>
						<li class="pgLi pg3 top">Title3</li>
						<li class="pgLi pg4 bot">Title4</li>
						<li class="pgLi pg5 bot">Title5</li>
						<li class="pgLi pg6 bot action">Title6</li>
					</ul>
				</div>
				<div class="tagPad">
					<dl>
						<dd id="pg1" class="tagItem">
							<h2>Title1</h2>
							<p>11111</p>
							<p>2</p>
							<p>546874</p>
							<p>4544</p>
							<p>555</p>
						</dd>
						<dd id="pg2" class="tagItem">
							<h2>Title2</h2>
							<p>2222222</p>
							<p>2</p>
							<p>546874</p>
							<p>4544</p>
							<p>555</p>
						</dd>
						<dd id="pg3" class="tagItem">
							<h2>Title3</h2>
							<p>33333333</p>
							<p>2</p>
							<p>546874</p>
							<p>4544</p>
							<p>555</p>
						</dd>
						<dd id="pg4" class="tagItem">
							<h2>Title4</h2>
							<p>4444444</p>
							<p>2</p>
							<p>546874</p>
							<p>4544</p>
							<p>555</p>
						</dd>
						<dd id="pg5" class="tagItem">
							<h2>Title5</h2>
							<p>5555555</p>
							<p>2</p>
							<p>546874</p>
							<p>4544</p>
							<p>555</p>
						</dd>
						<dd id="pg6" class="tagItem action">
							<h2>Title6</h2>
							<p>6666666666</p>
							<p>2</p>
							<p>546874</p>
							<p>4544</p>
							<p>555</p>
						</dd>
					</dl>
				</div>
			</div>
		</div>
	</div>
	<?php include_once("at_include/footer.php"); ?>
    <script>
		$(document).ready(function() {
			var pageTitle = $('.leftMenu').find('.pageTitle').text(),
				pageSubTitle = $('.leftMenu').find('.leftMenuList').find('a.action').text();
			$('#bread_ii').html('<i>&#62;</i>' + pageTitle);
			$('#bread_iii').html('<i>&#62;</i>' + pageSubTitle);


			/* tagPad */
			var $tagCtrlLi = $('.tagCtrlList').find('li'),
				$tagPad = $('.tagPad'),
				$tagItem = $tagPad.find('.tagItem');

			$tagCtrlLi.mouseover(function(event) {
				var ind = $(this).index();
				$tagCtrlLi.eq(ind).css({background: '#666', color: '#fff'});
			});
			$tagCtrlLi.mouseout(function(event) {
				var ind = $(this).index();
				$tagCtrlLi.eq(ind).css({background: '#aaa', color: '#000'});
			});

			$tagCtrlLi.click(function() {
				var ind = $(this).index();
				$tagCtrlLi.eq(ind).addClass('action').siblings().removeClass('action');

			});
		})
		// Yep, that's it!
	</script>
</body>
</html>