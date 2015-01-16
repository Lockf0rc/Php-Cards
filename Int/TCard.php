<?
include('ITemp');
class TCard {
public $RENDER;
protect public $title;
protect public $description;
protect public $name;
protect public $category;
protect public $date;

public function __construct($t,$d,$n,$c,$da){

	$this->title=$t;
	$this->description=$d;
	$this->name=$n;
	$this->category=$c;
	$this->date=$da;
	}
}

?>