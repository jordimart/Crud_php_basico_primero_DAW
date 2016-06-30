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
            
               case '404':
                 
                	include("Views/inc/404.php");
                				
                			  break;
                default:
                    
       		             include("modules/homepage/homepage.php");
       		        
                break;
		    
	}	
		?>