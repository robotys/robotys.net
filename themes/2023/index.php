<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Izwan Wahab @ robotys</title>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap');

		body
		{
			font-family: Inter, sans-serif;
/*			font-size: 16px;*/
			color: #444;
/*			line-height: 1.4em;*/
			background: rgba(240,245,256, 1);
/*			background: #0058BA;*/
		}

		a
		{
			text-decoration: none;
			color: #0058BA;
		}

		a:hover
		{
			text-decoration: underline;
		}

		.top
		{
			border-bottom: 1px solid #444;
			padding: 30px;
			float: left;
			width: 100%;
			box-sizing: border-box;
		}

		.left, .right
		{
			width: 50%;
			float: left;
			box-sizing: border-box;
			padding: 30px;
		}

		.right
		{
			border-left: 1px solid #444;
		}

		.container
		{
			width: 100%;
			min-height: 100vh;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.box
		{
			width: 100%;
			max-width: 900px;
/*			padding: 30px;*/
			border: 1px solid #444;
			box-shadow: 0 0 0 0px white, 5px 5px 0px 0px #444;
			background: #FFF;
/*			border-radius: 6px;*/
/*			border: 1px #ddd solid;*/
/*			box-shadow: 0px 5px 5px rgba(0,0,100,0.3);*/
/*			margin: 15px 15px;*/
		}

		.content
		{
			display: flex;
			width: 100%;
			align-items: left;
			justify-content: center;
		}

		.menu a{
			display: block;
			margin-bottom: 5px;
		}

		a, a:visited{
			color: #00F;
		}

		.top b
		{
			font-size: 2.5em;
		}

		@media only screen and (max-width: 768px) {
		  /* For mobile phones: */
		  .left,
		  .right
		  {
		    width: 100%;
		  }

		  .right
		  {
		  	border-left: none;
		  	border-top: 1px solid #444;
		  }

		  body
		  {
		  	font-size: 20px;
		  }

		  .top b
		  {
		  	font-size: 1.8em;
		  }
		}
	</style>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-1CJP2KHHH7"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-1CJP2KHHH7');
	</script>
</head>
<body>
<div class="container">
	<div class="box">
		<div class="top" style="display: flex">
			<img src="/assets/dp.jpeg" style="width: 50px; border-radius: 50%; margin-right: 20px;">
			
			<div><b>Robotys.net</b></div>
		</div>
		<div class="content">
			<div class="left">
				
				<p>Robotys adalah persona online <u>Izwan Wahab</u> sejak tahun 2000 lagi.</p>

				<p>Bekerja sebagai programmer di <a href="https://myparcelasia.com">myparcelasia.com</a>: membantu seller dan ecommerce menguruskan penghantaran barang kepada pelanggan melalui POSLaju, J&T, Ninjavan dan lain-lain pada harga yang lebih murah.</p> 

				<p>Aktif selama berbelas tahun dalam 3 bidang kunci dunia internet: Programming, Copywriting dan Digital Marketing.</p>


				<p>Dalam masa yang sama membantu usahawan dan anak muda dengan tulisan, khidmat nasihat dan latihan hands on sekitar topik sistem website, digital marketing, kewangan dan kerjaya.</p> 

				<p>Berkongsi penulisan di <a href="https://twitter.com/robotys">twitter @robotys</a> dan juga dalam newsletter tertutup "Nota Robotys". Yang subscribe ja yang akan dapat baca.</p>

				<p>Kawan-kawan gelar 'Mr Simplifier' dek kerana mudahnya memahami perkara yang beliau kongsi.</p>
			</div>
			<div class="right">
				<p>Pautan:</p>
				<ul class="menu" style="margin: 0; padding: 0px 15px;">
					<li>
						<a href="https://notabisnes.com"><strong>Nota Bisnes</strong>: Buku, eBook dan Panduan Video Tentang hal teknikal menjalankan bisnes &rarr;</a>
					</li>
					<li>
						<a href="https://yescron.com"><strong>YesCron</strong>: Schedule your HTTP Get &rarr;</a>
					</li>
					<li>
						<a href="/nameck"><strong>Nameck</strong>: Generate Domain Name Ideas &rarr;</a>
					</li>
					<li>
						<a href="/freeqrcode"><strong>Free QR Code</strong>: Generate QR Code secara percuma &rarr;</a>
					</li>
					<li>
						<a href="/freeqrcode"><strong>Free QR Code</strong>: Generate QR Code secara percuma &rarr;</a>
					</li>
					<li>
						<a href="/prompttt"><strong>PromptTT</strong>: Simple Prompter to help shoot TikTok video &rarr;</a>
					</li>
				</ul>

				<!-- <p>Jemput join <strong>Newsletter Nota Robotys</strong>&rarr;</p> -->

				<?php //include('subscribe_form.php');?>
			</div>
		</div>
	</div>
</div>
</body>
</html>