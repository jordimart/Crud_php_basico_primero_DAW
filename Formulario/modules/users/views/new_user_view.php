
<!-- <form  method="post" name="formulario" id="formulario" onsubmit="return validate_user();" action="index.php?page=controller_users2.php&op=create" > -->
<form  autocomplete="on" method="post" name="formulario" id="formulario"  action="index.php?page=controller_users2.php&op=create" > 
    <left>

        <br>
        <h1> Formulario de alta</h1>
        <hr></hr>

        <table >

            <tr><td><b> Dni:</b></td> <td><input type="text" align="LEFT" name="dni" id="dni" placeholder="dni" value="<?php echo !empty($_POST['dni'])?$_POST['dni']:'';?>"/></td>
                <td><span id="e_dni" class="styerror"></span></td>

                <td>	<?php
                        print ("<SPAN CLASS='styerror' ;>" . $_POST['e_dni']. "</SPAN>");
                        ?>
                    </td>

            </tr>
            <tr><td><b> Nombre:</b></td> <td><input type="text" align="LEFT" name="name" id="name" placeholder="name" value="<?php echo !empty($_POST['name'])?$_POST['name']:'';?>"/></td>
                <td><span id="e_name" class="styerror"></span></td>

                <td>	<?php
                        print ("<SPAN CLASS='styerror' >" . $_POST['e_name'] . "</SPAN>");
                    ?></td>

            </tr>
            <tr><td> <b>Primer apellido:</b></td> <td><input type="text" align="LEFT" name="last_name" id="last_name" placeholder="last_name" value="<?php echo !empty($_POST['last_name'])?$_POST['last_name']:'';?>"/></td>
                <td><span id="e_last_name" class="styerror"></span></td>

                <td>	<?php
                        print ("<SPAN CLASS='styerror';>" . $_POST['e_last_name'] . "</SPAN>");
                    ?></td>

            </tr>
            <tr><td> <b>Selecciona fecha:</b></td><td><input id="date_birth" type="text" name="date_birth" placeholder="date_birth" value="<?php echo !empty($_POST['date_birth'])?$_POST['date_birth']:'';?>"/></td>
                <td><span id="e_date_birth" class="styerror"></span></td>

                <td>	<?php
                        print ("<SPAN CLASS='styerror' ;>" . $_POST['e_date_birth'] . "</SPAN>");
                    ?></td>

            </tr>
            <tr><td> <b>Poblacion:</b></td> <td><input type="text" align="LEFT" name="country" id="country" placeholder="country" value="<?php echo !empty($_POST['country'])?$_POST['country']:'';?>"/></td>
                <td><span id="e_country" class="styerror"></span></td>

                <td>	<?php
                        print ("<SPAN CLASS='styerror';>" . $_POST['e_country'] . "</SPAN>");
                    ?></td>

            </tr>
            <tr><td> <b>Direccion:</b></td> <td><input type="text" align="LEFT" name="address" id="address" placeholder="address" value="<?php echo !empty($_POST['address'])?$_POST['address']:'';?>"/></td>
                <td><span id="e_address" class="styerror"></span></td>

                <td>	<?php
                        print ("<SPAN CLASS='styerror';>" . $_POST['e_address'] . "</SPAN>");
                    ?></td>

            </tr>
            <tr><td> <b>Email:</b></td> <td><input type="text" align="LEFT" name="email" id="email" placeholder="email" value="<?php echo !empty($_POST['email'])?$_POST['email']:'';?>"/></td>
                <td><span id="e_email" class="styerror"></span></td>

                <td>	<?php
                        print ("<SPAN CLASS='styerror' ;>" . $_POST['e_email'] . "</SPAN>");
                    ?></td>

            </tr>
            <tr><td> <b>Edad:</b></td> <td><input type="text" align="LEFT" name="age" id="age" placeholder="age" value="<?php echo !empty($_POST['age'])?$_POST['age']:'';?>"/></td>
                <td><span id="e_age" class="styerror"></span></td>

                <td>	<?php
                        print ("<SPAN CLASS='styerror' ;>" . $_POST['e_age'] . "</SPAN>");
                    ?></td>
            </tr>
            <tr><td> <b>Nacionalidad:</b></td> <td><input type="text" align="LEFT" name="nationality" id="nationality" placeholder="nationality" value="<?php echo !empty($_POST['nationality'])?$_POST['nationality']:'';?>"/></td>
                <td><span id="e_nationality" class="styerror"></span></td>

                <td>	<?php
                        print ("<SPAN CLASS='styerror' ;>" . $_POST['e_nationality'] . "</SPAN>");
                    ?></td>
            </tr>



            <tr><td><b> Sexo: </b></td> <td><input type="radio"  name="sexo" id="sexo" value="masculino" checked>masculino
                    <input type="radio"  name="sexo" id="sexo" value="femenino" >femenino
                    <input type="radio"  name="sexo" id="sexo" value="otros" >otros
                </td><td></td><td></td></tr>

            <tr><td><b>Elige aficion: </b></td>
            <td>
                    <select name="aficion" id="aficion">
                        <option selected>deportes
                        <option>musical
                        <option>pintura
                        <option>lectura
                        <option>informatica

                    </select></p>
                    
            
                </td><td></td><td></td></tr>
                
                <tr>
                <td><b>Publicidad: (debes elegir al menos 2)</b></td>
                <td><input type="checkbox" id= "publi[]" name="publi[]"  value="Deportes"/>deportes
                    <input type="checkbox" id= "publi[]" name="publi[]"  value="Libros"/>libros
                    <input type="checkbox" id= "publi[]" name="publi[]"  value="Electronica"/>electronica
                    <input type="checkbox" id= "publi[]" name="publi[]"  value="Ropa"/>ropa
                    </td>
                    
                 <td></td>   
                <td>
                    
                </td>
            </tr>
        </table>
        
        <div id="table-button">
        <table>
            <tr>
        <td><input type="submit" class="create" name="validar" id="validar" value="Validar" /></td>
        <td><a class="myButton" href="index.php?page=controller_users2.php&op=list">Back</a><td>
           </tr>
        </table>
        </div>
        <hr></hr>

    </left>
</form>
