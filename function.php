<?php
function get_price($find){
	$books=array( 
	"java"=>299,
	"Ruby"=>300,
	"php"=>280,
	"c"=>200);
	
	foreach($books as $book=>$price){
		if($book == $find)
		{
			return $price;
			break;
		}
	}
}
?>