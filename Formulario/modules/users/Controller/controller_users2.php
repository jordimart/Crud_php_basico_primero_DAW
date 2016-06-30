<?php

                include("modules/users/views/header_user.php");
                include("utils/functions.inc.php");
                include("modules/users/model/validate_users.php");
                include("modules/users/model/DAO_user.php");
                session_start();

if ($_GET['page'] === "controller_users2.php") {
    
   
    switch ($_GET['op']) {

        case 'create':

            if (isset($_POST['validar'])) {

                $error=validate_all();

                if (!$error) {

                    try {

                        $user = $_POST;
                        $daouser = new DAO_user();
                        $res = $daouser->nuevo_user($user);
                    } catch (Exception $e) {
                        
                        die('<script>window.location.href="index.php?page=503";</script>');
                    }
                    if ($res) {
                        
                    } else {
                        
                        die('<script>window.location.href="index.php?page=503";</script>');
                    }
                    die('<script>top.location.href="index.php?page=controller_users2.php&op=list";</script>');
                }
            }

            include ('modules/users/views/new_user_view.php');

            break;

        case 'modify':


            if (isset($_POST['validar'])) {
                
                $error=validate_all();

                if (!$error) {

                    try {

                        $daouser = new DAO_user();
                        $resm = $daouser->modify_user($_POST['dni'], $_POST);
                        
                    } catch (Exception $e) {
                
                     die('<script>window.location.href="index.php?page=503";</script>');
                    }
        
                        if ($resm) {
            
                            die('<script>window.location.href="index.php?page=controller_users2.php&op=list";</script>');
                        } else {
                            echo "estoy en la 503 numero 2";
                            exit();
                            die('<script>window.location.href="index.php?page=503";</script>');
                        }
                }
                
                include ('modules/users/views/modify_user_view.php');
            }

            try {
                $daouser = new DAO_user();
                $res = $daouser->show_user($_GET['dni']);
                $_POST=$res;
            } catch (Exception $e) {
                
                die('<script>window.location.href="index.php?page=503";</script>');
            }
            
                if (!$res) {
                   
                    die('<script>window.location.href="index.php?page=503";</script>');
                } 
            
            include ('modules/users/views/modify_user_view.php');


            break;

        case 'delete':

            if(isset($_POST['delete'])){
                
                    try {
                        $daouser = new DAO_user();
                        $res = $daouser->delete_user($_GET['dni']);
                        
                    } catch (Exception $e) {
                        
                        die('<script>window.location.href="index.php?page=503";</script>');
                    }
        
                    if (!$res) {
        
                        die('<script>window.location.href="index.php?page=controller_users2.php&op=list";</script>');
                    } else {
        
                        die('<script>window.location.href="index.php?page=503";</script>');
                    }
            
            }
                 include("modules/users/views/delete_user_view.php");
            
            
            break;

        case 'show':

            try {

                $daouser = new DAO_user();
                $res = $daouser->show_user($_GET['dni']);
            } catch (Exception $e) {
                
                die('<script>window.location.href="index.php?page=503";</script>');
            }
            
                if (!$res) {
                    die('<script>window.location.href="index.php?page=503";</script>');
                } 

            include ('modules/users/views/show_user_view.php');

            break;

           case 'list':

            try {

                $object = new DAO_user();
                $res = $object->list_users();
            } catch (Exception $e) {
                
                die('<script>window.location.href="index.php?page=503";</script>');
            }
            
                if (!$res) {
                    die('<script>window.location.href="index.php?page=503";</script>');
                } 
    
            include("modules/users/views/list_users_view.php");

            break;
            
            default:
                
                include("Views/inc/404.php");
                
            break;
            
    }
}


