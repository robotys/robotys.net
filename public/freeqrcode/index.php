<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Free QR Code</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

	<style>
 		@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap');

 		body
 		{
 			background: #eee;
 		}
	</style>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

	<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
	<script>
		$(document).ready(function(){
			$('.btn-submit').on('click', function(){
				let msg = $('[name=link]').val();

				url = 'https://chart.apis.google.com/chart?cht=qr&chs=300x300&chl='+msg+'&chld=H|0';

				html = '<br/><img src="'+url+'" class="img-fluid" /> <br/><br/><small>(Right-click + save as to download)</small>';

				$('.qrcode').html(html);
			});
		});
	</script>

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
<div class="container vh-100 d-flex justify-content-center align-items-center">
	<div class="col-md-4">
		<div class="card card-body p-4">
			<h1>Free QR Code</h1>
			<p>Paste your link below and hit submit. A QR Code will be generated below and you can download it to use it later. 100% Free of charge!</p>

			<label>Your link</label>
			<input type="text" name="link" class="form-control mb-3" value="http://yourlink.com?can_track=yes">

			<button class="btn btn-dark w-100 btn-submit">Submit</button>

			<hr/>

			<label>Your Free QR Code:</label>
			<div class="qrcode text-center">
				<div class="alert alert-info py-2 px-3">Please submit your link first.</div>
			</div>

		</div>
		<p class="text-center mt-2">by <a href="https://robotys.net">robotys.net</a></p>
	</div>
</div>
</body>
</html>