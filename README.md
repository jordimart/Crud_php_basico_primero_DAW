La finalidad de este proyecto php es terminar los requisitos y ampliaciones del proyecto que empezamos en clase.
Ademas se subira a git mediante comandos y se ira actualizando de la misma forma realizando un manual.
En este fichero intentare describir algunos pasos, por ejemplo ya hemos añadido este archivo Readme, 
el fichero gitignore y un manual aun no terminado en formato odt.
********************
Ací teniu les millores que vos comentava anteriorment al projecte d'Àngel. Reviseu-les al codi.

- createuser view -> pintar totes les dades al form quan ja s'ha enviat, per a que l'us no les torne a introduir si comet un error: 
value="<?php echo !empty($_POST['dni'])?$_POST['dni']:'';?>"
Esta millora no està, l'afegeix jo.

- updateuser view -> pintar totes les dades al form per a que l'us no les torne a introduir si comet un error: 
value="<?php echo !empty($user['dni'])?$user['dni']:'';?>"

- deleteuser view -> action="index.php?page=controller_user&op=delete&id=<?php echo $_GET['id']; ?>">

- updateuser view -> control dels radiobutton, checkbox, select
- Funcion validate -> validar en php en una única funció

- En controller_users:
	default:
            include("view/inc/error404.php");
            break;

- En pages:
	case "404";
			include("view/inc/error".$_GET['page'].".php");
			break;
		case "503";
			include("view/inc/error".$_GET['page'].".php");
			break;
		default;
			include("module/inicio/view/inicio.php");
			break;
