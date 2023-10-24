<?php
include('../../connect.php');
class data
{
    function se_all($table)
    {
        global $Conn;
        $sql="select * from $table";
        $run=mysqli_query($Conn,$sql);
        return $run;
    }
    function delete_all($table, $id)
    {
        global $Conn;
        $sql="delete from $table where id='$id'";
        $run=mysqli_query($Conn,$sql);
        return $run;
    }
    function se_all_id($table,$id)
    {
        global $Conn;
        $sql="select * from $table where id='$id'";
        $run=mysqli_query($Conn,$sql);
        return $run;
    }
    function in_product ($name, $number, $price, $date, $picture, $category, $s_description, $f_description)
    {
        global $Conn;
        $sql="insert into product(name, number, price, date, picture, category, s_description, f_description)
        values ('$name', '$number', '$price', '$date', '$picture', '$category', '$s_description', '$f_description')"; echo $sql;
        $run=mysqli_query($Conn, $sql);
        return $run;
    }
    function up_product ($name, $number, $price, $date, $picture, $category, $s_description, $f_description, $id)
    {
        global $Conn;
        $sql="update product set name = '$name', number = '$number', price = '$price', date = '$date', picture = '$picture', 
                                 category = '$category', s_description = '$s_description',f_description = '$f_description'
                                 where id = '$id'"; echo $sql;
        $run=mysqli_query($Conn, $sql);
        return $run;
    }
    function up_regis ($fullname, $username, $password, $repassword, $birth, $email, $address, $id)
    {
        global $Conn;
        $sql="update register set fullname = '$fullname', username = '$username', password = '$password', birth = '$birth', email = '$email', 
                                 address = '$address'
                                 where id = '$id'"; echo $sql;
        $run=mysqli_query($Conn, $sql);
        return $run;
    }
}
?>