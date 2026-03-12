<!DOCTYPE html>
	<head>
		<title>Clouds & Babies - Companion Website</title>
		<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet"> 
		<style type="text/css">
			main {
				margin: auto;
				max-width: 1280px;
				font-family: 'Cookie', cursive;
			}

			#mainTimer {
				font-size: 328px;
				margin: 0px;
				margin-top: 64px;
				text-align: center;
			}

			button {
				font-size: 128px;
				font-family: 'Cookie', cursive;
				width: 100%;
				border: none;
				cursor: pointer;
				background-color: rgba(255, 255, 255, 0.5);
				color: black;

				padding: 100px;
				box-sizing: border-box;

				transition: background-color 0.2s, color 0.2s;
			}

			button:hover {
				background-color: rgba(0,0,0,0.5);
				color: white;
			}

		</style>
	</head>

	<body>
		<main>
			<p id="mainTimer"></p>
			<button id="refreshClickOff">Stop Alarm</button>
			<button id="startGameBtn">Start Game</button>

			<audio muted="true" loop="true" id="alarmSound" src="gamesites/clouds-and-babies/alarmSound.mp3" preload="auto"></audio>
		</main>

		<script>
			var startTime = 5*60;
			var alarmSound = document.getElementById('alarmSound');
			var clickoffBtn = document.getElementById('refreshClickOff');
			var refreshEvent = false;

			var animDur = 500
			var animInterval = null;
			var screenColors = ['#ade1f1', '#ff84b8'];
			var curScreenFlashState = 0;

			function flashScreen() {
				curScreenFlashState = (curScreenFlashState + 1) % 2;
				document.body.style.backgroundColor = screenColors[curScreenFlashState];
		    } 

			function convertTimeToString(time) {
				time = Math.floor(time)

				var seconds = time % 60
				if(seconds < 10) { seconds = "0" + seconds; }

				var minutes = Math.floor(time / 60)
				if(minutes < 10) { minutes = "0" + minutes; }

				return minutes + ":" + seconds;
			}

			document.getElementById('refreshClickOff').addEventListener("click", function(ev) {
				if(!refreshEvent) { return; }

				// register current game state
				refreshEvent = false;

				// button should not be clickable (when refresh event is not happening)
				clickoffBtn.disabled = true;
				clickoffBtn.style.display = 'none';

				// stop alarm sound
				alarmSound.muted = true;
				alarmSound.pause();
				alarmSound.currentTime = 0;

				// stop flashing the screen + reset to default state
				clearInterval(animInterval);
				curScreenFlashState = 0;
				document.body.style.backgroundColor = screenColors[0];
			})

			function performRefreshEvent() {
				// we are already in refresh event? Don't do anything (although it's bad news for the players ...)
				if(refreshEvent) { return; }

				// button should be clickable from now on
				clickoffBtn.disabled = false;
				clickoffBtn.style.display = 'block';

				// start alarm sound
				alarmSound.muted = false;
				alarmSound.play();

				// register current game state
				refreshEvent = true;

				// start flashing the screen PINK-BLUE
				flashScreen();
			    animInterval = setInterval(function() { flashScreen(); }, animDur);
			}

			function performGameFinish() {
				clearInterval(countdownInterval);

				// TO DO: Play a sound
				// TO DO: Change screen state + display some text?
				// TO DO: Display button to reset?
			}

			function countDown() {
				startTime -= 1;
				mainTimer.innerHTML = convertTimeToString(startTime);
				if(startTime % 30 == 0) {
					performRefreshEvent();
				} else if(startTime <= 0) {
					performGameFinish();
				}
			}

			function init() {
				clickoffBtn.style.display = 'none';
				clickoffBtn.disabled = true;

				document.body.style.backgroundColor = screenColors[0];
				mainTimer.innerHTML = convertTimeToString(startTime);
			}

			init();

			document.getElementById('startGameBtn').addEventListener("click", function(ev) {
				document.getElementById('startGameBtn').style.display = 'none';
				countdownInterval = setInterval(function() { countDown(); }, 1000);
			});
		</script>
	</body>
</html>