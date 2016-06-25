	<?php
	
	function string_empty($text) {
	
	    if ($text === "")
	        return true;
	    else
	        return false;
	}
	
	function valida_dni($text) {
	    $reg = "/^\d{8}[a-zA-Z]{1}$/i";
	    return preg_match($reg, $text);
	}
	
	function valida_word($text) {
	
	    $reg = "/^[a-zA-Z]{4,28}$/i";
	    return preg_match($reg, $text);
	}
	
	function valida_date_birth($text) {
	    $reg = "/^\d{2}.\d{2}.\d{4}$/i";
	    return preg_match($reg, $text);
	}
	
	function valida_email($text) {
	    $reg = "/^[A-Z0-9._%+-]+@(?:[A-Z0-9-]+.)+[A-Z]{2,4}$/i";
	    return preg_match($reg, $text);
	}
	
	function valida_age($text) {
	    $reg = "/^\d{1,2}$/i";
	    return preg_match($reg, $text);
	}
	
	