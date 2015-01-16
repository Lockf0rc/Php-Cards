<?php
/*
implement format function 
 */
class myt extends ITheme{
/*
public $RENDER;
protect public $description;
protect public $name;
protect public $date;
protect public $title;
protect public $category;
 */
public function format(TCard $c){
$html=<<<html

  <dl class="tabs" data-tab> 
  <dd class="active"><a href="#panel1">$c->category</a></dd>
  
   </dl>
  <div class="tabs-content"> 
    <div class="content active" id="panel1">
    	<h2>$c->title</h2>
       <p>$c->description</p>
    </div> 
    <hr/>
    <span>$c->date</span>
  </div> 


html;
$render=$html;
return $render;
	}
	
}

?>
