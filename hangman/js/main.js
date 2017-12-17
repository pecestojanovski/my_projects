Main = {};
Main.WordArray = [];
Main.WordUArray = [];

Main.Lives = 7;
Main.NumInWordLibrary = Words.Length;

Main.Word = "test";
Main.WordU = "";

Main.PullWord = function() {
	Main.Word = Words.List[(Math.floor(Math.random()*Main.NumInWordLibrary))];
}

Main.SetUnderline = function() {
	Main.PullWord();
	for(i = 0; i < Main.Word.length; i++) {
		Main.WordArray[i] = Main.Word.charAt(i);
		Main.WordUArray[i] = "_";
	}
	Main.WordU = Main.WordUArray.join("");
	document.getElementById("WORD").innerHTML = Main.WordU;
	document.getElementById("numLetters").innerHTML = Main.Word.length;
}

Main.UpdateLetter = function(letter) {
	Main.Changes = 0;
	for(i = 0; i < Main.Word.length; i++) {
		Main.WordArray[i] = Main.Word.charAt(i);
		if(Main.Word.charAt(i) == letter) {
			Main.WordUArray[i] = letter;
			Main.Changes += 1;
		}
	}
	if(Main.Changes < 1) {
		Main.Lives -= 1;
		document.getElementById("lives").innerHTML = Main.Lives;
		document.getElementById("hangHead").style.visibility = "visible";
	}
	
	if(Main.Lives == 5) {
		document.getElementById("lives").innerHTML = Main.Lives;
		document.getElementById("hangBody").style.visibility = "visible";
	}
	
	if(Main.Lives == 4) {
		document.getElementById("lives").innerHTML = Main.Lives;
		document.getElementById("hangArmR").style.visibility = "visible";
	}
	
	if(Main.Lives == 3) {
		document.getElementById("lives").innerHTML = Main.Lives;
		document.getElementById("hangArmL").style.visibility = "visible";
	}
	
	if(Main.Lives == 2) {
		document.getElementById("lives").innerHTML = Main.Lives;
		document.getElementById("hangLegR").style.visibility = "visible";
	}
	
	if(Main.Lives == 1) {
		document.getElementById("lives").innerHTML = Main.Lives;
		document.getElementById("hangLegL").style.visibility = "visible";
	}
	
	Main.WordU = Main.WordUArray.join("");
	document.getElementById("WORD").innerHTML = Main.WordU;
	
	Main.Word1 = Main.WordArray.join("");
	Main.Word2 = Main.WordUArray.join("");
	
	if(Main.Word1 == Main.Word2) {
		document.getElementById("WORD").innerHTML = Main.Word2;
		alert("Correct! The word is " + Main.Word);
		window.location.reload();
	}
	
	if(Main.Lives < 1) {
		alert("You have run out of lives! The word was " + Main.Word);
		window.location.reload();
	}
}
	Main.PullWord();
	Main.SetUnderline();