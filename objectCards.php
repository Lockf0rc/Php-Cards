<?
foreach (glob("Int/*.php") as $filename)
{
    include $filename;
}


//$t,$d,$n,$c,$da
$ccard= new TCard(
"sampleTitle",
,"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta porro repellat voluptas iure facilis vero minus deserunt sint aspernatur. 
Labore ullam dolorum temporibus. Expedita delectus iusto totam nostrum temporibus voluptatum?",
"testing","2015-Jan-16"

	);
$them= new myt();
$vcard= new View($ccard,$them);
?>
