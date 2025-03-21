<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PromptTT - Short Video Prompter</title>
	<style>
		
		@import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz@0,14..32;1,14..32&display=swap');
		
		body
		{
			font-family: Inter, sans-serif;
			background: #000;
			margin: 0px;
		}

		.container
		{
			width: 100%;
			max-width: 400px;
			height: 100vh;
			margin: 0 auto;
			padding: 20px;
			box-sizing: border-box;
/*			background: #FFF;*/
			display: flex;
			flex-direction: column;
		}

		.copy
		{
			color: #FFF;
			text-align: center;
			padding: 20px 0px;
/*			background: #0F0;*/
		}

		.timer
		{
			color: #fff;
			text-align: center;
/*			background: #00F;*/
		}

		#timeface
		{
			font-size: 6em;
			font-weight: bold;
			font-family: monospace;
			color: #4de8f4;
		}

		.text
		{
			width: 100%;
/*			background: none;*/
			height: 100%;
		}

		textarea
		{
			width: 100%;
			display: flex;
			height: 100%;
			font-size: 1.5em;
			padding: 20px;
			box-sizing: border-box;
			border-radius: 20px;
			background: none;
			color: #fff;
			border-color: #4de8f4;
		}
	</style>
	<script>
		let interval = null;

		function toggleTimer()
		{
			console.log('interval init: ',interval);
			
			if(interval == null)
			{
				const timeface = document.getElementById('timeface');
				timeface.innerHTML = '00:00';
				let sec = 1;
				interval = setInterval(function(){
					minute = Math.floor(sec / 60);
					if(minute < 10) minute = '0'+minute;

					second = sec - (minute * 60);
					if(second < 10) second = '0'+second;

					// console.log(sec+' '+minute+':'+second);
					// let str = minute+':'+second;
					timeface.innerHTML = minute+':'+second;
					sec++;
				}, 1000);
			}
			else
			{
				timeface.innerHTML = '--:--';
				clearInterval(interval);
				interval = null;
			}

			console.log('interval final: ',interval);
			// console.log('Timer state: '+timerstate);
		}
	</script>
</head>
<body>
<div class="container">
	<div class="copy">
		<b>PrompTT</b> &rarr; Simple Prompter for TT video
	</div>
	<div class="timer">
		<div id="timeface">--:--</div>
		<button onclick="toggleTimer()" style="font-size: 1.5em; padding: 10px; border-radius: 10px; margin-bottom: 20px; background: #fd3e3e;">Start / Reset</button>
	</div>
	<div class="text">
			<textarea>Hook

Points
-
-
-

CTA</textarea>
	</div>
</div>
</body>
</html>