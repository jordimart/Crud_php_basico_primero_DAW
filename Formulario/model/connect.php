<?php
	class connect{
	    
		public static function con(){
		    
			$host = '127.0.0.1';  
    		$user = "jordimart";                     
    		$pass = "";                             
    		$db = "users";                      
    		$port = 3306;                           
    		$tabla="client";
    		
    		$_POST['db']=$db;
    		
    		$conexion = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
			return $conexion;
		}
		
		public static function close($conexion){
			mysqli_close($conexion);
		}
	}