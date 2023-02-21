<!DOCTYPE html>
<html>
<!-- don't ever do this again: never mix Model, View, and Controller code -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	This file contains quick-and-dirty introduction code to get up and running with PHP fast.
	We will use the MVC programming pattern to properly organize code in real projects.
	<form action="" method="post">
		<label>First name</label>
		<input type="text" name="firstName"><br>
		<label>Last name</label>
		<input type="text" name="lastName"><br>
		<label>Newsletter</label>
		<input type="checkbox" name="newsletter">Yes! I want to receive the newsletter!<br>
		<input type="submit" name="action" value="Send">
	</form>
</body>
</html>

<?php
//get input data from the HTTP request
//data sent through the GET method (the data in the URL)
if(isset($_GET['name']))
	echo $_GET['name'];

echo '<pre>';
echo $_GET['name'] ?? '';

foreach($_GET as $key => $value){
	echo "$key=>$value<br>";
}

var_dump($_GET);

//get to the POST data with $_POST
//POST data is sent in the HTTP headers
echo 'POST DATA:<br>';
var_dump($_POST);

echo "REQUEST_METHOD:", $_SERVER['REQUEST_METHOD'];

if($_SERVER['REQUEST_METHOD'] == "POST"){
	echo "THIS WAS SENT THROUGH THE HTTP HEADERS!";
}

