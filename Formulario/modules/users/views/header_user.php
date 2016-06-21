
	<title>new_user_form</title>
	
	<script src="modules/users/model/validate_users.js"></script>
   	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.js"></script>
	<script type="text/javascript">//configuracion datepicker
	$(function() {
		$('#date_birth').datepicker({
			dateFormat: 'dd/mm/yy', 
			changeMonth: true, 
			changeYear: true, 
			yearRange: '1900:2016',
			
			
		});
	});
	</script>
	<script type="text/javascript"> 
	function pregunta(){ 
		
	    if (!(confirm('¿Estas seguro de borrar el usuario seleccionado?'))){
	    	
	    	return false;
	       
	       
	    } else{
	    window.location.href="index.php?page=controller_users2.php&op=delete";
	    }
	} 
	</script> 
	