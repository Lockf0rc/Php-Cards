<?php

class TCard{
	public $RENDER;
	 public $title;
	 public $description;
	 public $name;
	 public $category;
	 public $rdate;

	public function __construct($t,$d,$n,$c,$da){

		$this->title=$t;
		$this->description=$d;
		$this->name=$n;
		$this->category=$c;
		$this->rdate=$da;
		}
}

?>