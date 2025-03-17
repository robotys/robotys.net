<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Grid Study</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

	<style>
		body
		{
			font-family: Inter;
			font-size: 15px;
/*			line-height: 1.8em;*/
		}

		p
		{
			margin-top: 1em;
			line-height: 1.25em;
		}

		h1{
			font-size: 2em;
			line-height: 1.25em;
		}
		
		.gridlock
		{
/*			background: #efefef;*/
			background-image:linear-gradient(to right, #eee 1px, transparent 1px), linear-gradient(#eee 1px, transparent 1px);
  			background-size: 1em 1em;
		}
	</style>
</head>
<body>
<div class="gridlock container vh-100 d-flex align-items-center">
	<div class="row">
		<div class="col-md-6">
			<h1>Grid Study That Expands Into The Second Line To Check Its Spacing</h1>
			<p>To study grid design system ala Swiss Design as presented by the referenced youtube video. To be made only in CSS with focus on single class call to help align everything into proper font-size, line height, margin and padding by simple changing the body font-size.</p>
			<p>To study grid design system ala Swiss Design as presented by the referenced youtube video. To be made only in CSS with focus on single class call to help align everything into proper font-size, line height, margin and padding by simple changing the body font-size.</p>
		</div>
		<div class="col-md-6">
			<h2>Hey ya!</h2>
		</div>
	</div>

</div>
</body>
</html>