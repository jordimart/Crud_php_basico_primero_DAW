<br>
<p><h1>CRUD LIST</h1></p>

<hr></hr>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="index.php?page=controller_users2.php&op=create" class="create">Create</a>

<table border=1>
    <thead>
        <tr>
            <th>Dni</th>
            <th>Name</th>
            <th>Last name</th>
            <th>Date birthday</th>
            <th>aficion</th>
            <th>sexo</th>
            <!--<th>Action</th>-->
        </tr>
    </thead>
    <tbody>

        <?php
        foreach ($res as $row) {
            echo '<tr>';
            echo '<td width=100>' . $row['dni'] . '</td>';
            echo '<td width=100>' . $row['name'] . '</td>';
            echo '<td width=100>' . $row['last_name'] . '</td>';
            echo '<td width=100>' . $row['date_birth'] . '</td>';
            echo '<td width=100>' . $row['aficion'] . '</td>';
            echo '<td width=100>' . $row['sexo'] . '</td>';
            echo '<div id="table-button">';
            echo '<td>';
           
            
            echo '<a href="index.php?page=controller_users2.php&op=show&dni=' . $row['dni'] . '" class="create">Read</a></td>';
            echo '&nbsp;';
            echo '<td>';
            echo '<a href="index.php?page=controller_users2.php&op=modify&dni=' . $row['dni'] . '"class="modify">Modify</a></td>';
            echo '&nbsp;';
            echo '<td>';
            echo '<a  href="index.php?page=controller_users2.php&op=delete&dni=' . $row['dni'] . '"class="delete" onclick="pregunta()";>Delete</a>';
            echo '</td>';
            echo '</div>';
            echo '</tr>';
            
        }
        ?>

    </tbody>
</table>
