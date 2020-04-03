
<!DOCTYPE html>
<html lang="en">
<head>
	<title>COVID-19 Checker</title>
	<style type="text/css">
	body{
		width: 90%;
		margin: 0 auto;
		text-align: center;
		background-image: url('background.jpg');
		background-repeat: no-repeat;
		background-size: 100%;
		font-family: Arial, Verdana,sans-serif;
	}
	#content {overflow: auto;}
	.column1, .column2, .column3 {
		width: 31%;
		float: left;
		margin: 1%;
		border: 1%;
		opacity: 0.8;
		color: white;
	}
	.column3{ margin-right: 0%;}
	li{
		display: inline;
		padding: 0.5em;
	}
	#nav, #footer{
		background-color: black;
		padding: 0.5em 0;
	}
	#feature, .article {
		height: 10em;
		margin-bottom: 1em;
		background-color: #4d1933;
		opacity: 0.8;
		color:  white;
		border-style: inset;
		border-color: black;
	}
	#footer{
		margin-left: -6.075%;
		margin-right: -6.1%;
		background-color: #001a33;
		color: white;
	}
	a{
		text-decoration: none;
		font-size: 1em;
		border-style: groove;
		border: 1%;
		padding: 0.5%;
		color: white;
		background-color: #996600;
		border-radius: 5%;
	}
	#header{
		margin-left: -6.075%;
		margin-right: -6.1%;
	}
	#feature{
		color: gold;
		font-size: 250%;
	}
	#form{
		color: #1a0000;
		font-size: 70%;
		background-color: #eee;
	}
	input{
		background-color: blue;
	}
	.symtomps{
		font-size: 60%;
	}
	legend{
		border: 10%;
		text-align: center;
	}
	</style>
</head>
<body>
	<div id="header">
		<div id="nav">
			<ul>
				<b><li> <a href="">Home</a> </li></b>
				<b><li> <a href="">Service</a> </li></b>
				<b><li> <a href="">About</a> </li></b>
				<b><li> <a href="">Contact</a> </li></b>
			</ul>
			
		</div>
	</div>
	<!--end of header-->
	<div id="content">
		<div id="feature">
			<p>Corona Virus Checker</p>

			
			<form id="form" action="medAdvice.php">
			<legend>
			<p>Select the symptomps you experience below please:</p>
			<p>
				<input type="checkbox" name="fever">
				<label for="fever" class="symtomps">Fever</label>
			</p>
		
				<input type="checkbox" name="cPain" >
				<label for="fever" class="symtomps">Chest pain</label>
	
				<input type="checkbox" name="cough">
				<label for="cough" class="symtomps">Cough</label>
		
				<input type="checkbox" name="dbreath">
				<label for="fever" class="symtomps">Difficulty breathing</label>
		     <p class="symtomps">Are you a returning traveller from a foreign country?
		     <input type="radio" class="travel" name="yesTravel" ><span>Yes</span>
		     <input type="radio" class="travel" name="noTravel" ><span>No</span>
		     </p>
		     <input type="submit" value="submit" > 
		     </legend>
			</form>
		</div>
		<div class="article column1">
			<u><p>Statistics</p></u>
		</div>
		<div class="article column2">
			<u><p>latest news</p></u>
		</div>
		<div class="article column3">
			<u><p>Column Three</p></u>
		</div>
	</div>
			<!--end of content-->
	<div id="footer">
		<p>&copy; GamaTech 2020</p>
	</div>
</body>
</html>