<?php


class Fruit 
{
	//properties
	public $name;
	public $color;


	 function __construct($name,$color)
	{
		$this->name= $name;
		$this->color= $color;

	}
	
	
	/*function set_name($name)
	{
		$this->name=$name;
	}

	function get_name()
	{
		return $this->name;
	}*/
}


$apple=new Fruit('Apple','yellow');
$banana=new Fruit('Banana','pink');
echo "name:" .$apple->name . "<br>"  .$banana->name;
echo "<br>";
echo "color: " .$apple->color ."<br>" .$banana->color

/*$apple->set_name("Apple");
$banana->set_name("Banana");

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
echo "<br>";*/


//var_dump($apple instanceof Fruit);

?>