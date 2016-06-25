
<form  method="post" name="formulario" id="formulario" onsubmit="return validate_user();" action="index.php?page=controller_users2.php&op=modify" > 

    <left>

        <br>
        <h1> Formulario de modificar</h1>
        <hr></hr>

        <table>

            <tr><td><b> Dni:</b></td> <td><input type="text" align="LEFT" name="dni" id="dni" placeholder="dni"  value="<?php echo $res['dni']; ?>" /></td>
                <td><span id="e_dni" class="styerror"></span></td>

                <td>	<?php
                    if ($error_dni != "")
                        print ("<SPAN CLASS='styerror' ;>" . $error_dni . "</SPAN>");
                    ?></td>

            </tr>
            <tr><td><b> Name:</b></td> <td><input type="text" align="LEFT" name="name" id="name" placeholder="name" value="<?php echo $res['name']; ?>"/></td>
                <td><span id="e_name" class="styerror"></span></td>

                <td>	<?php
                    if ($error_name != "")
                        print ("<SPAN CLASS='styerror' ;>" . $error_name . "</SPAN>");
                    ?></td>

            </tr>
            <tr><td> <b>Last name:</b></td> <td><input type="text" align="LEFT" name="last_name" id="last_name" placeholder="last_name" value="<?php echo $res['last_name']; ?>"/></td>
                <td><span id="e_last_name" class="styerror"></span></td>

                <td>	<?php
                    if ($error_last_name != "")
                        print ("<SPAN CLASS='styerror' ;>" . $error_last_name . "</SPAN>");
                    ?></td>

            </tr>
            <tr><td> <b>Date Birthday:</b></td><td><input id="date_birth" type="text" name="date_birth" placeholder="date_birth" value="<?php echo $res['date_birth']; ?>"/></td>
                <td><span id="e_date_birth" class="styerror"></span></td>

                <td>	<?php
                    if ($error_date_birth != "")
                        print ("<SPAN CLASS='styerror' ;>" . $error_date_birth . "</SPAN>");
                    ?></td>

            </tr>
            <tr><td> <b>Country:</b></td> <td><input type="text" align="LEFT" name="country" id="country" placeholder="country" value="<?php echo $res['country']; ?>"/></td>
                <td><span id="e_country" class="styerror"></span></td>

                <td>	<?php
                    if ($error_country != "")
                        print ("<SPAN CLASS='styerror' ;>" . $error_country . "</SPAN>");
                    ?></td>

            </tr>
            <tr><td> <b>Address:</b></td> <td><input type="text" align="LEFT" name="address" id="address" placeholder="addrress" value="<?php echo $res['address']; ?>"/></td>
                <td><span id="e_address" class="styerror"></span></td>

                <td>	<?php
                    if ($error_address != "")
                        print ("<SPAN CLASS='styerror' ;>" . $error_address . "</SPAN>");
                    ?></td>

            </tr>
            <tr><td> <b>Email:</b></td> <td><input type="text" align="LEFT" name="email" id="email" placeholder="email" value="<?php echo $res['email']; ?>"/></td>
                <td><span id="e_email" class="styerror"></span></td>

                <td>	<?php
                    if ($error_email != "")
                        print ("<SPAN CLASS='styerror' ;>" . $error_email . "</SPAN>");
                    ?></td>

            </tr>
            <tr><td> <b>Age:</b></td> <td><input type="text" align="LEFT" name="age" id="age" placeholder="age" value="<?php echo $res['age']; ?>"/></td>
                <td><span id="e_age" class="styerror"></span></td>

                <td>	<?php
                    if ($error_age != "")
                        print ("<SPAN CLASS='styerror' ;>" . $error_age . "</SPAN>");
                    ?></td>
            </tr>
            <tr><td> <b>Nationality:</b></td> <td><input type="text" align="LEFT" name="nationality" id="nationality" placeholder="nationality" value="<?php echo $res['nationality']; ?>"/></td>
                <td><span id="e_nationality" class="styerror"></span></td>

                <td>	<?php
                    if ($error_nationality != "")
                        print ("<SPAN CLASS='styerror' ;>" . $error_nationality . "</SPAN>");
                    ?></td>
            </tr>


            <tr><td><b> Sexo: </b></td> <td><input type="radio"  name="sexo" id="sexo" value="masculino" <?php if($res['sexo']==="masculino") echo "checked=checked"; ?>>masculino
                    <input type="radio"  name="sexo" id="sexo" value="femenino" <?php if($res['sexo']==="femenino") echo "checked=checked"; ?>>femenino
                    <input type="radio"  name="sexo" id="sexo" value="otros" <?php if($res['sexo']==="otros") echo "checked=checked"; ?>>otros
                </td><td></td><td></td></tr>

            <tr><td><label><b>Elige aficion: </b></td><td></label>
                    <select name="aficion" id="aficion">
                        <option <?php if($res['aficion']==="deportes") echo "selected=selected"; ?>>deportes
                        <option <?php if($res['aficion']==="musical") echo "selected=selected"; ?>>musical
                        <option <?php if($res['aficion']==="pintura") echo "selected=selected"; ?>>pintura
                        <option <?php if($res['aficion']==="lectura") echo "selected=selected"; ?>>lectura
                        <option <?php if($res['aficion']==="informatica") echo "selected=selected"; ?>>informatica

                    </select></p>
                </td><td></td><td></td></tr>
                
                <tr>
                    <td><b>Publicidad: (debes elegir al menos 2)</b></td>
                <?php
                    $publi=explode(":", $res['publi']);
                ?>
                <td>
                    <?php
                        $busca_array=in_array("Deportes", $publi);
                        if($busca_array){
                    ?>
                        <input type="checkbox" id= "publi[]" name="publi[]" value="Deportes" checked/>Deportes
                    <?php
                        }else{
                    ?>
                        <input type="checkbox" id= "publi[]" name="publi[]" value="Deportes"/>Deportes
                    <?php
                        }
                    ?>
                    <?php
                        $busca_array=in_array("Libros", $publi);
                        if($busca_array){
                    ?>
                        <input type="checkbox" id= "publi[]" name="publi[]" value="Libros" checked/>Libros
                    <?php
                        }else{
                    ?>
                        <input type="checkbox" id= "publi[]" name="publi[]" value="Libros"/>Libros
                    <?php
                        }
                    ?>
                    <?php
                        $busca_array=in_array("Electronica", $publi);
                        if($busca_array){
                    ?>
                        <input type="checkbox" id= "publi[]" name="publi[]" value="Electronica" checked/>Electronica
                    <?php
                        }else{
                    ?>
                    <input type="checkbox" id= "publi[]" name="publi[]" value="Electronica"/>Electronica
                    <?php
                        }
                    ?>
                    
                    <?php
                        $busca_array=in_array("Ropa", $publi);
                        if($busca_array){
                    ?>
                        <input type="checkbox" id= "publi[]" name="publi[]" value="Ropa" checked/>Ropa</td>
                    <?php
                        }else{
                    ?>
                    <input type="checkbox" id= "publi[]" name="publi[]" value="Ropa"/>Ropa</td>
                    <?php
                        }
                    ?>
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
