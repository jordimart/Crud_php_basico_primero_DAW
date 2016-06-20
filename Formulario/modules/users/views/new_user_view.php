
<form  method="post" name="formulario" id="formulario" onsubmit="return validate_user();" action="index.php?page=controller_users2.php&op=create" > 

    <left>

        <br>
        <h1> Formulario de alta</h1>
        <hr></hr>

        <table >

            <tr><td><b> Dni:</b></td> <td><input type="text" align="LEFT" name="dni" id="dni" placeholder="dni" value=""/></td>
                <td><span id="e_dni" class="styerror"></span></td>

                <td>	<?php
                    if ($error_dni != "")
                        print ("<SPAN CLASS='styerror' ;>" . $error_dni . "</SPAN>");
                    ?>
                    </td>

            </tr>
            <tr><td><b> Nombre:</b></td> <td><input type="text" align="LEFT" name="name" id="name" placeholder="name" value=""/></td>
                <td><span id="e_name" class="styerror"></span></td>

                <td>	<?php
                    if ($error_name != "")
                        print ("<SPAN CLASS='styerror' >" . $error_name . "</SPAN>");
                    ?></td>

            </tr>
            <tr><td> <b>Primer apellido:</b></td> <td><input type="text" align="LEFT" name="last_name" id="last_name" placeholder="last_name" value=""/></td>
                <td><span id="e_last_name" class="styerror"></span></td>

                <td>	<?php
                    if ($error_last_name != "")
                        print ("<SPAN CLASS='styerror';>" . $error_last_name . "</SPAN>");
                    ?></td>

            </tr>
            <tr><td> <b>Selecciona fecha:</b></td><td><input id="date_birth" type="text" name="date_birth" placeholder="date_birth" value=""/></td>
                <td><span id="e_date_birth" class="styerror"></span></td>

                <td>	<?php
                    if ($error_date_birth != "")
                        print ("<SPAN CLASS='styerror' ;>" . $error_date_birth . "</SPAN>");
                    ?></td>

            </tr>
            <tr><td> <b>Poblacion:</b></td> <td><input type="text" align="LEFT" name="country" id="country" placeholder="country" value=""/></td>
                <td><span id="e_country" class="styerror"></span></td>

                <td>	<?php
                    if ($error_country != "")
                        print ("<SPAN CLASS='styerror';>" . $error_country . "</SPAN>");
                    ?></td>

            </tr>
            <tr><td> <b>Direccion:</b></td> <td><input type="text" align="LEFT" name="address" id="address" placeholder="addrress" value=""/></td>
                <td><span id="e_address" class="styerror"></span></td>

                <td>	<?php
                    if ($error_address != "")
                        print ("<SPAN CLASS='styerror';>" . $error_address . "</SPAN>");
                    ?></td>

            </tr>
            <tr><td> <b>Email:</b></td> <td><input type="text" align="LEFT" name="email" id="email" placeholder="email" value=""/></td>
                <td><span id="e_email" class="styerror"></span></td>

                <td>	<?php
                    if ($error_email != "")
                        print ("<SPAN CLASS='styerror' ;>" . $error_email . "</SPAN>");
                    ?></td>

            </tr>
            <tr><td> <b>Edad:</b></td> <td><input type="text" align="LEFT" name="age" id="age" placeholder="age" value=""/></td>
                <td><span id="e_age" class="styerror"></span></td>

                <td>	<?php
                    if ($error_age != "")
                        print ("<SPAN CLASS='styerror' ;>" . $error_age . "</SPAN>");
                    ?></td>
            </tr>
            <tr><td> <b>Nacionalidad:</b></td> <td><input type="text" align="LEFT" name="nationality" id="nationality" placeholder="nationality" value=""/></td>
                <td><span id="e_nationality" class="styerror"></span></td>

                <td>	<?php
                    if ($error_nationality != "")
                        print ("<SPAN CLASS='styerror' ;>" . $error_nationality . "</SPAN>");
                    ?></td>
            </tr>



            <tr><td><b> Sexo: </b></td> <td><input type="radio"  name="sexo" id="sexo" value="masculino" checked>masculino
                    <input type="radio"  name="sexo" id="sexo" value="femenino" >femenino
                    <input type="radio"  name="sexo" id="sexo" value="otros" >otros
                </td><td></td><td></td></tr>

            <tr><td><label><b>Elige aficion: </b></td><td></label>
                    <select name="aficion" id="aficion">
                        <option selected>deportes
                        <option>musical
                        <option>pintura
                        <option>lectura
                        <option>informatica

                    </select></p>
                </td><td></td><td></td></tr>
        </table>
        
        <div id="table-button">
        <table>
            <tr>
        <td><input type="submit" class="create" name="validar" id="validar" value="Validar" /></td>
        <td><a class="myButton" href="index.php?page=controller_users2.php">Back</a><td>
           </tr>
        </table>
        </div>
        <hr></hr>

    </left>
</form>
