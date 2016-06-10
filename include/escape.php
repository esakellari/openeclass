<?php
	function esc($string){
		if(!isset($string)){
			return " ";
		}
		else{
			$str1 = str_replace(array(':', '&#58','&#058','&#0058','&#00058','&#000058','&#0000058' , '&#x3A'), '' , $string); #protect from ":"
			$str2 = strip_tags($str1);
			return htmlentities($str2,ENT_QUOTES,'UTF-8');
		}
	}
?>
