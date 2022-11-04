<?php


require 'index.view.php';
class Task{
	public $description;
	protected $completed=false;

	public function __construct($description)
	{
		$this->description=$description;
	}


	public function complete()
	{
		$this->completed=true;
	}

	public function isComplete()
	{

		return $this->completed;

	}
}

$tasks =[

     new Task("go to the store"),
     new Task("Finish my screencast"),
     new Task("Clean my room")

];






?>

