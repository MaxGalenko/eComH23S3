<?php
// we are not organizing code in this example
//we will do better in our project framework

class Person{
	public $firstName;
	public $lastName;
	protected $age;
	protected $weight;
	protected static $count = 0;

	function __construct($firstName, $lastName, $age, $weight){
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->age = $age;
		$this->weight = $weight;
		self::$count++;
	}

	function __toString(){
		return "$this->firstName $this->lastName is $this->age years old and weighs in at $this->weight pounds.<br>";
	}

	public static function count()
	{
		return self::$count;
	}
}

echo "There are ", Person::count(), " people in the program.<br>";

$person = new Person('John','Clayton',26,200);

$person2 = new Person('Jane','Porter',27,125);

echo $person;

echo "There are ", Person::count(), (Person::count()==1?" person":" people"), " in the program.<br>";


class Pugilist extends Person{
	public function fight($other)
	{
		return ($this->weight > $other->weight?$this:$other);
	}
}

$pugilist1 = new Pugilist('Andre','The Giant',30,300);
$pugilist2 = new Pugilist('Conan','The Barbarian',30,250);

$winner = $pugilist1->fight($pugilist2);

echo "The winner is $winner";
