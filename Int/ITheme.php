<?php
/*
Customize A Card.
 MVC: view handels change.
 */
include('TCard');

abstract class ITheme{
public $RENDER;



abstract Public function format(TCard $c);


}



?>