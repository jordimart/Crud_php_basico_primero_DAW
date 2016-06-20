<?php

include ("model/connect.php");

class DAO_user {

    function nuevo_user($user) {

        $conexion = connect::con();


        $sql = "INSERT INTO client(dni,name,last_name,date_birth,country,address,email,age,nationality,sexo,aficion)"
                . "VALUES ('$user[dni]','$user[name]','$user[last_name]','$user[date_birth]','$user[country]','$user[address]','$user[email]','$user[age]','$user[nationality]','$user[sexo]','$user[aficion]')";
        $res = mysqli_query($conexion, $sql);


        connect::close($conexion);
        return $res;
    }

    function list_users() {

        $conexion = connect::con();


        $sql = "select * from client order by name asc";
        $res = mysqli_query($conexion, $sql);


        connect::close($conexion);
        return $res;
    }

    function show_user($dni) {

        $conexion = connect::con();


        $sql = "select * from client where dni like '$dni'"; //definimos la consulta
        $res = mysqli_query($conexion, $sql); //realizamos la consulta
        $rslt = mysqli_fetch_array($res); //pasamos el resultado a un array


        connect::close($conexion);
        return $rslt; //retornamos un array de campos
    }

    function modify_user($dni, $user) {

        $conexion = connect::con();


        $sql = "update client set name='$user[name]', last_name='$user[last_name]', date_birth='$user[date_birth]'"
                . ", country='$user[country]', address='$user[address]', email='$user[email]', age='$user[age]'"
                . ", nationality='$user[nationality]', sexo='$user[sexo]', aficion='$user[aficion]' where dni like '$dni' ";
        $res = mysqli_query($conexion, $sql);


        connect::close($conexion);
        return $res;
    }

    function delete_user($dni) {

        $conexion = connect::con();


        $sql = "delete from client  where dni like '$dni' ";
        $res = mysqli_query($conexion, $sql);


        connect::close($conexion);
        return $rslt;
    }

}
