<!DOCTYPE>
<!DOCTYPE html>
<html>
<head>
<meta charset= "utf-8">
	<meta name= "viewport" content= "width = device-width, initial-scale = 1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>result</title>
	<style type="text/css">
body{
	text-align: center;
	background-color: silver;
	font-size: 130%;
	}
h2{
	display: inline;
}
a{
	text-decoration: none;
	color: blue;
}
a:hover{
		text-decoration: none;
	color: green;
}
#footer{
		margin-left: -6.075%;
		margin-right: -6.1%;
		background-color: #001a33;
		color: white;
		margin-top: 27%;
		padding-top: 1%;
		padding-bottom: 1%;
		}

	</style>

</head>
<body>

<?php
 function curPageURL(){
 	$pageURL ='http';
 	if (isset($_SERVER["HTTPS"]) == "on") {$pageURL .= "s";}
 	$pageURL.= "://";
 	if ($_SERVER["SERVER_PORT"] != "80") {
 		$pageURL.= $_SERVER["SERVER_NAME"] . ":". $_SERVER["SERVER_PORT"]. $_SERVER["REQUEST_URI"];
 	}
 	else {
 		$pageURL.= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 	}
 	return $pageURL;
 }
$url= curPageURL();
$url_components = parse_url($url);

parse_str($url_components['query'], $params);

 echo "<br>";
 $probability =sizeof($params);
 if($probability==1){
 	echo "<h2>Hello </h2>". $params['name']."!"."<br>";
 	echo "<p> Congratulations, you dont have any symptoms of COVID-19. </p><br>";
 	echo "<p>Wash your hands regularly and maintain a clean environment to stay free from infection. </p>";
 }
  else if($probability==2){
 	echo "<h2> Hello </h2>". $params['name']."!"."<br>";
 	echo "<p> Your symptoms are mild and its quite unlikely that you have been infected. <br></p>" ;	
 	echo "<p>Wash your hands regularly and maintain a clean environment to stay free from infection.<p>";
 }
 else if($probability==3){
 	echo "<h2>Hello </h2>". $params['name']."!"."<br>";
 	echo "<p>Your have some symptoms of COVID-19 you are advised go into isolation and see a Doctor as soon as possible, your chances of being infected is low though. <br></p>";
 	echo "<p>Wash your hands regularly and maintain a clean environment to stay free from infection.</p>";
 }
else if($probability==4){
 	echo "<h2>Hello </h2>". $params['name']."!"."<br>";
 	echo "<p>You are strongly advised to go into isolation andsee a Doctor as soon as possible as your symptoms suggest a good chance of being infected by Corona Virus. <br></p>";
 	echo "Wash your hands regularly and maintain a clean environment to stay free from infection.";
 }
 else if($probability==5){
 	echo "<h2>Hello </h2>". $params['name']."!"."<br>";
 	echo "<p>You are strongly advised to go into isolation and see a Doctor immediately as you have a high chance of being infected. <br></p>";
 	echo "<p>Wash your hands regularly and maintain a clean environment to stay free from infection. </p>";
 }

?>
<a href="index.html">Go back to homepage</a>

</body>
	<div id="footer">
		<p>&copy; Gamey Technologies 2020</p>
	</div>
</html>
