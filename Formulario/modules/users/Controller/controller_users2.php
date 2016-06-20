<?php

session_start();

if ($_GET['page'] === "controller_users2.php") {
    
   

    switch ($_GET['op']) {

        case 'create':

            if (isset($_POST['validar'])) {

                //guardo los datos en variables
                $error = false;
                $error_dni_empty = false;
                $error_dni = false;
                $error_name_empty = false;
                $error_name = false;
                $error_last_name_empty = false;
                $error_last_name = false;
                $error_date_birth_empty = false;
                $error_date_birth = false;
                $error_country_empty = false;
                $error_country = false;
                $error_address_empty = false;
                $error_address = false;
                $error_email_empty = false;
                $error_email = false;
                $error_age_empty = false;
                $error_age = false;
                $error_nationality_empty = false;
                $error_nationality = false;


                $error_dni_empty = string_empty($_POST['dni']);
                $error_dni = valida_dni($_POST['dni']);
                $error_name_empty = string_empty($_POST['name']);
                $error_name = valida_word($_POST['name']);
                $error_last_name_empty = string_empty($_POST['last_name']);
                $error_last_name = valida_word($_POST['last_name']);
                $error_date_birth_empty = string_empty($_POST['date_birth']);
                $error_date_birth = valida_date_birth($_POST['date_birth']);
                $error_country_empty = string_empty($_POST['country']);
                $error_country = valida_word($_POST['country']);
                $error_address_empty = string_empty($_POST['address']);
                $error_address = valida_word($_POST['address']);
                $error_email_empty = string_empty($_POST['email']);
                $error_email = valida_email($_POST['email']);
                $error_age_empty = string_empty($_POST['age']);
                $error_age = valida_age($_POST['age']);
                $error_nationality_empty = string_empty($_POST['nationality']);
                $error_nationality = valida_word($_POST['nationality']);



                if ($error_dni_empty) {
                    $error_dni = "El dni no puede estar en blanco";
                    $error = true;
                } else if ($error_dni !== 1) {
                    $error_dni = "El dni no es correcto";
                    $error = true;
                } else {
                    $error_dni = " ";
                }


                if ($error_name_empty) {
                    $error_name = "El nombre no puede estar en blanco";
                    $error = true;
                } else if ($error_name !== 1) {
                    $error_name = "El nombre es incorrecto";
                    $error = true;
                } else {
                    $error_name = " ";
                }

                if ($error_last_name_empty) {
                    $error_last_name = "El apellido no puede estar en blanco";
                    $error = true;
                } else if ($error_last_name !== 1) {
                    $error_last_name = "El apellido es incorrecto";
                    $error = true;
                } else {
                    $error_last_name = " ";
                }

                if ($error_date_birth_empty) {
                    $error_date_birth = "La fecha de nacimiento no puede estar en blanco";
                    $error = true;
                } else if ($error_date_birth !== 1) {
                    $error_date_birth = "La fecha de nacimiento es incorrecta";
                    $error = true;
                } else {
                    $error_date_birth = " ";
                }


                if ($error_country_empty) {
                    $error_country = "La poblacion no puede estar en blanco";
                    $error = true;
                } else if ($error_country !== 1) {
                    $error_country = "La poblacion es incorrecto";
                    $error = true;
                } else {
                    $error_country = " ";
                }

                if ($error_address_empty) {
                    $error_address = "La direccion no puede estar en blanco";
                    $error = true;
                } else if ($error_address !== 1) {
                    $error_address = "La direccion es incorrecta";
                    $error = true;
                } else {
                    $error_address = " ";
                }

                if ($error_email_empty) {
                    $error_email = "El email no puede estar en blanco";
                    $error = true;
                } else if ($error_email !== 1) {
                    $error_email = "El email es incorrecto";
                    $error = true;
                } else {
                    $error_email = " ";
                }

                if ($error_age_empty) {
                    $error_age = "La edad no puede estar en blanco";
                    $error = true;
                } else if ($error_age !== 1) {
                    $error_age = "La edad es incorrecta";
                    $error = true;
                } else {
                    $error_age = " ";
                }

                if ($error_nationality_empty) {
                    $error_nationality = "La nacionalidad no puede estar en blanco";
                    $error = true;
                } else if ($error_nationality !== 1) {
                    $error_nationality = "La nacionalidad es incorrecta";
                    $error = true;
                } else {
                    $error_nationality = " ";
                }


                if (!$error) {


                    try {

                        $user = $_POST;
                        $daouser = new DAO_user();
                        $res = $daouser->nuevo_user($user);
                    } catch (Exception $e) {
                        echo('<script>alert("503 internal server error<br>Error al crear un usuario");</script>');
                        die('<script>window.location.href="index.php?page=controller_users2.php&op=list";</script>');
                    }
                    if ($res) {
                        
                    } else {
                        echo('<script>alert("503 internal server error<br>Error al crear un usuario");</script>');
                    }
                    die('<script>top.location.href="index.php?page=controller_users2.php&op=list";</script>');
                }
            }

            include ('modules/users/views/new_user_view.php');

            break;

        case 'modify':


            if (isset($_POST['validar'])) {

                //guardo los datos en variables
                $error = false;
                $error_dni_empty = false;
                $error_dni = false;
                $error_name_empty = false;
                $error_name = false;
                $error_last_name_empty = false;
                $error_last_name = false;
                $error_date_birth_empty = false;
                $error_date_birth = false;
                $error_country_empty = false;
                $error_country = false;
                $error_address_empty = false;
                $error_address = false;
                $error_email_empty = false;
                $error_email = false;
                $error_age_empty = false;
                $error_age = false;
                $error_nationality_empty = false;
                $error_nationality = false;


                $error_dni_empty = string_empty($_POST['dni']);
                $error_dni = valida_dni($_POST['dni']);
                $error_name_empty = string_empty($_POST['name']);
                $error_name = valida_word($_POST['name']);
                $error_last_name_empty = string_empty($_POST['last_name']);
                $error_last_name = valida_word($_POST['last_name']);
                $error_date_birth_empty = string_empty($_POST['date_birth']);
                $error_date_birth = valida_date_birth($_POST['date_birth']);
                $error_country_empty = string_empty($_POST['country']);
                $error_country = valida_word($_POST['country']);
                $error_address_empty = string_empty($_POST['address']);
                $error_address = valida_word($_POST['address']);
                $error_email_empty = string_empty($_POST['email']);
                $error_email = valida_email($_POST['email']);
                $error_age_empty = string_empty($_POST['age']);
                $error_age = valida_age($_POST['age']);
                $error_nationality_empty = string_empty($_POST['nationality']);
                $error_nationality = valida_word($_POST['nationality']);



                if ($error_dni_empty) {
                    $error_dni = "El dni no puede estar en blanco";
                    $error = true;
                } else if ($error_dni !== 1) {
                    $error_dni = "El dni no es correcto";
                    $error = true;
                } else {
                    $error_dni = " ";
                }


                if ($error_name_empty) {
                    $error_name = "El nombre no puede estar en blanco";
                    $error = true;
                } else if ($error_name !== 1) {
                    $error_name = "El nombre es incorrecto";
                    $error = true;
                } else {
                    $error_name = " ";
                }

                if ($error_last_name_empty) {
                    $error_last_name = "El apellido no puede estar en blanco";
                    $error = true;
                } else if ($error_last_name !== 1) {
                    $error_last_name = "El apellido es incorrecto";
                    $error = true;
                } else {
                    $error_last_name = " ";
                }

                if ($error_date_birth_empty) {
                    $error_date_birth = "La fecha de nacimiento no puede estar en blanco";
                    $error = true;
                } else if ($error_date_birth !== 1) {
                    $error_date_birth = "La fecha de nacimiento es incorrecta";
                    $error = true;
                } else {
                    $error_date_birth = " ";
                }


                if ($error_country_empty) {
                    $error_country = "La poblacion no puede estar en blanco";
                    $error = true;
                } else if ($error_country !== 1) {
                    $error_country = "La poblacion es incorrecto";
                    $error = true;
                } else {
                    $error_country = " ";
                }

                if ($error_address_empty) {
                    $error_address = "La direccion no puede estar en blanco";
                    $error = true;
                } else if ($error_address !== 1) {
                    $error_address = "La direccion es incorrecta";
                    $error = true;
                } else {
                    $error_address = " ";
                }

                if ($error_email_empty) {
                    $error_email = "El email no puede estar en blanco";
                    $error = true;
                } else if ($error_email !== 1) {
                    $error_email = "El email es incorrecto";
                    $error = true;
                } else {
                    $error_email = " ";
                }

                if ($error_age_empty) {
                    $error_age = "La edad no puede estar en blanco";
                    $error = true;
                } else if ($error_age !== 1) {
                    $error_age = "La edad es incorrecta";
                    $error = true;
                } else {
                    $error_age = " ";
                }

                if ($error_nationality_empty) {
                    $error_nationality = "La nacionalidad no puede estar en blanco";
                    $error = true;
                } else if ($error_nationality !== 1) {
                    $error_nationality = "La nacionalidad es incorrecta";
                    $error = true;
                } else {
                    $error_nationality = " ";
                }


                if (!$error) {

                    try {

                        $daouser = new DAO_user();
                        $resm = $daouser->modify_user($_POST['dni'], $_POST);
                        
                    } catch (Exception $e) {
                
                echo('<script>alert("503 internal server error Error al modificar el usuario");</script>');
                die('<script>window.location.href="index.php?page=controller_users2.php&op=list";</script>');
                    }
        
                    if ($resm) {
        
                        die('<script>window.location.href="index.php?page=controller_users2.php&op=list";</script>');
                    } else {
        
                        echo('<script>alert("error alintroducir datos, el dni esta repetido");</script>');
                        die('<script>top.location.href="index.php?page=controller_users2.php&op=list";</script>');
                    }
                }
            }

            try {
                $daouser = new DAO_user();
                $res = $daouser->show_user($_GET['dni']);
            } catch (Exception $e) {
                echo('<script>alert("503 internal server error<br>Error al consultar el usuario");</script>');
                die('<script>window.location.href="index.php?page=controller_users2.php&op=list";</script>');
            }
            if ($res) {
                
            } else {
                echo('<script>alert("503 internal server error<br>Error al consultar el usuario");</script>');
                die('<script>window.location.href="index.php?page=controller_users2.php&op=list";</script>');
            }

            
            include ('modules/users/views/modify_user_view.php');


            break;

        case 'delete':

            try {

           
                $daouser = new DAO_user();
                $res = $daouser->delete_user($_GET['dni']);
                
            } catch (Exception $e) {
                
                echo('<script>alert("503 internal server error<br>Error al consultar el usuario");</script>');
                die('<script>window.location.href="index.php?page=controller_users2.php&op=list";</script>');
            }

            if (!$res) {

                die('<script>window.location.href="index.php?page=controller_users2.php&op=list";</script>');
            } else {

                echo('<script>alert("Error al borrar el usuario");</script>');
                die('<script>top.location.href="index.php?page=controller_users2.php&op=list";</script>');
            }

            break;

        case 'show':

            try {

                $daouser = new DAO_user();
                $res = $daouser->show_user($_GET['dni']);
            } catch (Exception $e) {
                echo('<script>alert("503 internal server error<br>Error al consultar el usuario");</script>');
                die('<script>window.location.href="index.php?page=controller_users2.php&op=list";</script>');
            }
            if ($res) {
                
            } else {
                echo('<script>alert("503 internal server error<br>Error al consultar el usuario");</script>');
            }

            include ('modules/users/views/show_user_view.php');

            break;

           case 'list':

            try {

                $object = new DAO_user();
                $res = $object->list_users();
            } catch (Exception $e) {
                echo('<script>alert("503 internal server error<br>Error al consultar el usuario");</script>');
                die('<script>window.location.href="index.php?page=controller_users2.php&op=list";</script>');
            }
            if ($res) {
                
            } else {
                echo('<script>alert("503 internal server error<br>Error al consultar el usuario");</script>');
            }


            include("modules/users/views/list_users_view.php");

            break;
            
            default:
                
                
                
                include("Views/inc/404_2.php");
                
            break;
            
    }
}


