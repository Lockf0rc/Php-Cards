<?
// MODEL:Controller
include('TCard');
 class View {
private $object;
function __constuct(TCard $C,ITheme $T){

$T->format($C);
$this->object= $T->RENDER;
}
	

/*
Handel displaying Card
 */
public function display(){}
echo $this->object;
} 
?>