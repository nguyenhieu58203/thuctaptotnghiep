<?php
include("connect.php");
class data{
    function select_product($table)
    {
        global $Conn;
        $sql="select * from $table ";
        $run=mysqli_query($Conn, $sql);
        return $run;
    }
    function se_cate($table, $cate)
    {
        global $Conn;
        $sql="select * from $table where category = '$cate' order by contact DESC limit 0,1";
        $run=mysqli_query($Conn, $sql);
        return $run;
    }
    function select_pro_number($table)
    {
        global $Conn;
        $sql="select * from $table order by contact DESC limit 0,1";
        $run=mysqli_query($Conn, $sql);
        return $run;
}
function insert_user($fullname, $username, $password, $repassword, $birth, $email, $address)
 {
    global $Conn;
    $sql = "insert into register(fullname, username, password, repassword, birth, email, address)
    values('$fullname', '$username', '$password', '$repassword', '$birth', '$email', '$address')";
    $run = mysqli_query($Conn, $sql);
    return $run;
 }
 function select_user()
 {
    global $conn;
    $sql = "select * from register";
    $run = mysqli_query($conn,$sql);
   return $run;
 }
 function select_user_id($ID_user)
 {
   global $conn;
   $sql = "select *from register where ID_user = '$ID_user'";
   $run = mysqli_query($conn, $sql);
   return $run;
 }
 
}
?>