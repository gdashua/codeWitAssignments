
	var computerGuess;
	var guessLog = [];
	var lArray =guessLog.length;
	lArray++;
	
	function newGame(){
		window.location.reload();
	}
	function randomise(){
		computerGuess = Math.floor(Math.random()*50+1);
		//console.log(computerGuess);  
	}
	function permitAttempt(){
		var lArray =guessLog.length;
		lArray++;
		if (lArray>7){
			document.getElementById("verdict").innerHTML = "Game over";
			document.getElementById('guess').value = "";
		}

		else{
			compareGuess();
		}
	}

	function compareGuess(){
		var playerGuess = document.getElementById("guess").value;
			guessLog.push(playerGuess);

			document.getElementById("prelog").innerHTML=guessLog;
		if (playerGuess > computerGuess) {
			document.getElementById("verdict").innerHTML = "No! the number is smaller, try again!";
			document.getElementById('guess').value = "";
		}
		else if (playerGuess<computerGuess) {
			document.getElementById('verdict').innerHTML = "No! the number is bigger, try again!";
			document.getElementById('guess').value = "";
		}
		else {
			document.getElementById("verdict").innerHTML = "Correct!!!"
			document.getElementById('guess').value = "";
		}
	}
