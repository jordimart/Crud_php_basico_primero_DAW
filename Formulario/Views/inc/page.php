<?php

            switch ($_GET['page']) {
		        
    		         case 'controller_users2.php':
                     
                     include("modules/users/Controller/controller_users2.php");
                
                break;
            
                case 'services':
               
                    include("modules/services/services.php");
                
                break;
                
                case 'about':
               
                    include("modules/about/about.php");
                
                break;
                
                case 'contact':
               
                    include("modules/contact/contact.php");
                
                break;
                case 'homepage':
               
                    include("modules/homepage/homepage.php");
                
                break;
                case '503':
                 
                	include("Views/inc/503.php");
                				
                			  break;
            
                default:
                    
                    /**Esta opcion es para cuando se entra la primera vez, normalmente
                     * la opcion sera null entonces entra en homepage
                     * a partir de ahi si la direccion url tiene algun error
                     * entrara la vista de error 404
                     */
                     
                      if ($_GET['page']===null) {
                           
       		             include("modules/homepage/homepage.php");
       		        
                      }else{
                       
                       include("Views/inc/404.php");
                       
                      }
                break;
		    
	}	
		?>