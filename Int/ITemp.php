<?php
/*
Customize A Card.
 MVC: CONTROLLER
 */
include('TCard');
interface ITheme{


Public function format(TCard $c);


public function display();

}



?>