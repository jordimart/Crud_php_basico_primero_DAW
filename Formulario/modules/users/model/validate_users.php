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
	
	function validate_all(){
		
		$error=false;
		
                $error = false;
                $error_dni = false;
                $error_name = false;
                $error_last_name = false;
                $error_date_birth = false;
                $error_country = false;
                $error_address = false;
                $error_email = false;
                $error_age = false;
                $error_nationality = false;
                
                $error_dni = valida_dni($_POST['dni']);
                $error_name = valida_word($_POST['name']);
                $error_last_name = valida_word($_POST['last_name']);
                $error_date_birth = valida_date_birth($_POST['date_birth']);
                $error_country = valida_word($_POST['country']);
                $error_address = valida_word($_POST['address']);
                $error_email = valida_email($_POST['email']);
                $error_age = valida_age($_POST['age']);
                $error_nationality = valida_word($_POST['nationality']);

                if ($error_dni !== 1) {
                    $error_dni = "El dni no es correcto";
                    $error = true;
                } else {
                    $error_dni = " ";
                }

                 if ($error_name !== 1) {
                    $error_name = "El nombre es incorrecto";
                    $error = true;
                } else {
                    $error_name = " ";
                }

                 if ($error_last_name !== 1) {
                    $error_last_name = "El apellido es incorrecto";
                    $error = true;
                } else {
                    $error_last_name = " ";
                }

                 if ($error_date_birth !== 1) {
                    $error_date_birth = "La fecha de nacimiento es incorrecta";
                    $error = true;
                } else {
                    $error_date_birth = " ";
                }

                 if ($error_country !== 1) {
                    $error_country = "La poblacion es incorrecto";
                    $error = true;
                } else {
                    $error_country = " ";
                }

                if ($error_address !== 1) {
                    $error_address = "La direccion es incorrecta";
                    $error = true;
                } else {
                    $error_address = " ";
                }

                 if ($error_email !== 1) {
                    $error_email = "El email es incorrecto";
                    $error = true;
                } else {
                    $error_email = " ";
                }

                 if ($error_age !== 1) {
                    $error_age = "La edad es incorrecta";
                    $error = true;
                } else {
                    $error_age = " ";
                }

                 if ($error_nationality !== 1) {
                    $error_nationality = "La nacionalidad es incorrecta";
                    $error = true;
                } else {
                    $error_nationality = " ";
                }
                
                 $_POST['e_dni']=$error_dni;
				 $_POST['e_name']=$error_name;
				 $_POST['e_last_name']=$error_last_name;
				 $_POST['e_date_birth']=$error_date_birth;
				 $_POST['e_country']=$error_country;
				 $_POST['e_address']=$error_address;
				 $_POST['e_email']=$error_email;
				 $_POST['e_age']=$error_age;
				 $_POST['e_nationality']=$error_nationality;


		
		return $error;
	}