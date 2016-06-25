/**
 * Validacion por javascript.
 * Valida datos introducidos mediante expresiones regulares con javascript.
 * 
 * 
 */
 
 /**
  * Valida un dni que no este vacio el campo y pasa la expresion regular.
  */
 function validate_dni(dni){
      if (dni.length > 0){
          var regexp=/(\d{8})([a-zA-Z]{1})/;
          return regexp.test(dni);
      }
      
      return false;
      
  }
 
 
  function validate_word(word){
      if (word.length > 0){
          var regexp=/^[a-zA-Z]*$/;
          return regexp.test(word);
      }
      
      return false;
      
  }
  
  /**
   * Valida un formato de fecha con barras dd/mm/yyyy
   */ 
  function validate_date_birth(date_birth) {
    if (date_birth.length > 0) {
        var regexp = /\d{2}.\d{2}.\d{4}$/;
        return regexp.test(date_birth);
    }
    return false;
}
 
 /**
  * Valida un email que no este vacio el campo y que valide el formato de email..
  */
 function validate_email(email) {
    if (email.length > 0) {
        var regexp = /^[A-Z0-9._%+-]+@(?:[A-Z0-9-]+.)+[A-Z]{2,4}$/i;
        return regexp.test(email);
    }
    return false;
}

/**
  * Valida un email que no este vacio el campo y que valide el formato de email..
  */
 function validate_age(age) {
    if (age.length > 0) {
        var regexp = /\d{2}/;
        return regexp.test(age);
    }
    return false;
}

function validate_publi(options) {
    
    if(options[0].checked==false && options[1].checked==false && options[2].checked==false && options[3].checked==false) {
            //alert('Please check at least one of the options.');
            return true;
        
    }
    return false;
}


/**
 * Funcion que validara las introducciones con java script, solo por expresion regular.
 */ 
function validate_user() {
    
    var result = true;

        var dni= document.getElementById('dni').value;//cogemos la variable
        //
    	var name = document.getElementById('name').value;
    	var last_name = document.getElementById('last_name').value;
    	var date_birth = document.getElementById('date_birth').value;
    	var country = document.getElementById('country').value;
    	var address = document.getElementById('address').value;
    	var email = document.getElementById('email').value;
    	var age = document.getElementById('age').value;
    	var nationality = document.getElementById('nationality').value;
    	
    	
    	 var v_dni = validate_dni(dni);//le pasamos la funcion para validar dni js
         var v_name = validate_word(name);//le pasamos la funcion para validar word js
         var v_last_name = validate_word(last_name);//le pasamos la funcion para validar word js
         var v_date_birth = validate_date_birth(date_birth);
         var v_country = validate_word(country);
         var v_address = validate_word(address);
         var v_email = validate_email(email);
         var v_age = validate_age(age);
         var v_nationality = validate_word(nationality);
       
    	
    	
    	if (!v_dni) {//si es diferente a true pinta error
            document.getElementById('e_dni').innerHTML = "El dni introducido no es valido";
            result = false;
        } else {
            document.getElementById('e_dni').innerHTML = "";
        }
    
       
    	if (!v_name) {//si es diferente a true pinta error
            document.getElementById('e_name').innerHTML = "El nombre introducido no es valido";
            result = false;
        } else {
            document.getElementById('e_name').innerHTML = "";
        }
    	
    	if (!v_last_name) {//si es diferente a true pinta error
            document.getElementById('e_last_name').innerHTML = "El apellido introducido no es valido";
            result = false;
        } else {
            document.getElementById('e_last_name').innerHTML = "";
        }
        
        if (!v_date_birth) {//si es diferente a true pinta error
            document.getElementById('e_date_birth').innerHTML = "El formato de fehca introducido no es valido";
            result = false;
        } else {
            document.getElementById('e_date_birth').innerHTML = "";
        }
        
         if (!v_country) {//si es diferente a true pinta error
            document.getElementById('e_country').innerHTML = "La poblacion introducida no es valida";
            result = false;
        } else {
            document.getElementById('e_country').innerHTML = "";
        }
        
        if (!v_address) {//si es diferente a true pinta error
            document.getElementById('e_address').innerHTML = "La direccion introducida no es valida";
            result = false;
        } else {
            document.getElementById('e_address').innerHTML = "";
        }
        
        if (!v_email) {//si es diferente a true pinta error
            document.getElementById('e_email').innerHTML = "El email introducido no es valido";
            result = false;
        } else {
            document.getElementById('e_email').innerHTML = "";
        }
        
        if (!v_age) {//si es diferente a true pinta error
            document.getElementById('e_age').innerHTML = "La edad introducida no es valida";
            result = false;
        } else {
            document.getElementById('e_age').innerHTML = "";
        }
        
         if (!v_nationality) {//si es diferente a true pinta error
            document.getElementById('e_nationality').innerHTML = "La nacionalidad introducida no es valida";
            result = false;
        } else {
            document.getElementById('e_nationality').innerHTML = "";
        }
        
    	return result;
}