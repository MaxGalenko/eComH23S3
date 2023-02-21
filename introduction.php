This file contains quick-and-dirty introduction code to get up and running with PHP fast.
We will use the MVC programming pattern to properly organize code in real projects.
<?php

//don't close the PHP unless you have to ?>

<?= 'these are the echo tags <?= ... ?><br>' ?>
<?php echo 'these are the echo tags <?= ... ?><br>'; ?>

<?php
//variables start with underscore or letters
$_variableNameInCamelCase = null;
$x = 4;//int
$y = 4.5;//float
$txt = 'Tarzan love Jane $x times more than Cheeta<br>';//string literal
echo $txt;
$txt = "Tarzan love Jane $x times more than Cheeta<br>";//string that gets parsed
echo $txt;
$values = array(4, 5, 4.5, $x, $y, $txt);

//great for debugging
echo '<pre>';
var_dump($values);
echo '</pre>';

$values2 = ['some content', 4, $values];

echo '<pre>';
print_r($values2);
echo '</pre>';

//if elseif else
$score = 90;

if($score < 60){
	$score= 'F';
}elseif($score < 70){
	$score= 'D';
}elseif($score < 80){
	$score= 'C';
}elseif($score < 90){
	$score= 'B';
}else
	$score= 'A';

echo "$score<br>";

switch ($score) {
	case 'A':
	case 'B':
		echo 'you pass!<br>';
		break;
	case 'C':
	case 'D':
		echo 'you pass but you can do better!<br>';
		break;
	
	default:
		echo 'you fail!<br>';
		break;
}

//looping - repetition
$i = 0;
while($i < count($values)){
	echo $i, '=>', $values[$i], '<br>';
	$i++;
}

for ($i=0; $i < count($values) ; $i++) { 
	echo $i, '=>', $values[$i], '<br>';
}

foreach ($values as $i => $value) {
	echo $i, '=>', $value, '<br>';
}

//associative arrays are dictionaries in PHP
$associativeArray = ['key1'=>'value1', 'key2'=>'value2', 'score'=>$score, 'valuesArray'=>$values];

foreach ($associativeArray as $key => $value) {
	if(is_array($value))
	{
		echo $key, '=>';
		var_dump($value);
		echo '<br>';
	}
	else
	{
		echo $key, '=>', $value, '<br>';
	}
}

//functions
function recursiveEcho($stuff)
{
	if(!is_array($stuff)){
		echo $stuff;
		return;
	}
	echo '[';
	foreach($stuff as $key => $value)
	{
		if(is_array($value))
		{
			echo $key, '=>';
			recursiveEcho($value);
		}
		else
		{
			echo $key, '=>', $value, '<br>';
		}
	}
	echo ']';
}

echo '<br><br>***************<br>';

recursiveEcho($associativeArray);
recursiveEcho($score);

?>