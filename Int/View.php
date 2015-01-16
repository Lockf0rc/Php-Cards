
<?
// MODEL:Controller


class View {
public $robject;
public function __construct( TCard $C, myt $T){

$T->format($C);

$this->display($T);
}
	

/*
Handel displaying Card
 */
	public function display($T)
	{
	echo $T->RENDER;
	}

} 
?>