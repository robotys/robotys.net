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
			font-size: 14px;
			background: #EEF;
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
			padding: 30px;
			background: #FFF;
			border-radius: 6px;
			border: 1px #ddd solid;
			box-shadow: 0px 5px 5px rgba(0,0,100,0.3);
			margin: 15px 15px;
		}

		.col
		{
			width: calc((100% - 40px)/2);
			float: left;
			box-sizing: border-box;
			margin-right: 40px;
		}

		.col:last-child
		{
			margin-right: 0px;
		}

		.menu a{
			display: block;
			margin-bottom: 5px;
		}

		a, a:visited{
			color: #00F;
		}

		@media only screen and (max-width: 768px) {
		  /* For mobile phones: */
		  .col,
		  [class*="col-"]
		  {
		    width: 100%;
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
		<div class="col">
			<img src="/assets/dp.jpeg" style="width: 100px; border-radius: 50%">
			
			<h1>Robotys.net</h1>
			
			<p>Robotys adalah persona online Izwan Wahab sejak tahun 2000 lagi.</p>

			<p>Aktif selama berbelas tahun dalam 3 bidang kunci dunia internet: Programming, Copywriting dan Digital Marketing.</p>

			<p>Bekerja sebagai Chief Technology Officer di <a href="https://myparcelasia.com">MyParcel Asia SDN BHD</a>; membantu seller dan ecommerce menguruskan penghantaran barang kepada pelanggan melalui POSLaju, J&T, Ninjavan dan lain-lain pada harga yang lebih murah.</p> 

			<p>Dalam masa yang sama membantu usahawan dan anak muda dengan tulisan, khidmat nasihat dan latihan hands on sekitar topik sistem website, digital marketing, kewangan dan kerjaya.</p>

			<p>Kawan-kawan gelar 'Mr Simplifier' dek kerana mudahnya memahami perkara yang beliau kongsi.</p>
		</div>
		<div class="col">
			<p>Choose your adventure:</p>

			<ul class="menu">
				<li>
					<a href="https://twitter.com/robotys">Baca content Bisnes dan Coding di Twitter &rarr;</a>
				</li>
				<li>
					<a href="https://www.facebook.com/robotys">Baca content Bisnes di Facebook &rarr;</a>
				</li>
			</ul>

			<p>Projek:</p>

			<ul class="menu">
				<li>
					<a href="https://notabisnes.com"><strong>Nota Bisnes</strong>: Buku, eBook dan Panduan Video Tentang hal teknikal menjalankan bisnes &rarr;</a>
				</li>
				<li>
					<a href="/nameck"><strong>Nameck</strong>: Generate Domain Name Ideas &rarr;</a>
				</li>
				<li>
					<a href="/freeqrcode"><strong>Free QR Code</strong>: Generate QR Code secara percuma &rarr;</a>
				</li>
			</ul>

			<p>Newsletter:</p>

			<p>Jemput join newsletter mingguan sekitar topik buat duit, bisnes dan kerjaya. Lengkapkan maklumat dan tekan butang [SUBSCRIBE] &rarr;</p>

			<?php include('subscribe_form.php');?>
		</div>
	</div>
</div>
</body>
</html>