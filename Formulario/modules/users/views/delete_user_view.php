
    <form autocomplete="on" method="post" name="delete_user" id="delete_user" action="index.php?page=controller_users2.php&op=delete&dni=<?php echo $_GET['dni']; ?> ">
        <div id="table-button">
        <table>
            <tr>
                <td align="center"  colspan="2"><h3>Va a borrar al usuario <?php echo $_GET['dni']; ?> ¿Esta seguro ?</h3></td>
                
            </tr>
            <tr>
                <td align="center"><button type="submit" class="myButton" name="delete" id="delete">Si</button></td>
                <td><a class="myButton" href="index.php?page=controller_users2.php&op=list">No</a><td>
            </tr>
        </table>
        </div>
    </form>
