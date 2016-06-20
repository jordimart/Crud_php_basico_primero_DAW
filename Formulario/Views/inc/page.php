<?php

                include("modules/users/views/header_user.php");
                include("utils/functions.inc.php");
                include("modules/users/model/validate_users.php");
                include("modules/users/model/DAO_user.php");
	    
            switch ($_GET['page']) {
		        
    		    case 'controller_users2.php':
                
                if($_GET['op']===null){
                 
                $_GET['op']="list";
                
                }
                
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
            
                default:
                    
               if ($_GET['page']===null) {
                    
		             include("modules/homepage/homepage.php");
		        
               }else{
                
                include("Views/inc/404_2.php");
                
               }
                break;
		    
	}	
		?>