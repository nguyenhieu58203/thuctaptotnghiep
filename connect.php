<?php
 $Sever="localhost";
 $User="root";
 $Pass="";
 $Database="ltmt";
 $Conn= mysqli_connect($Sever,$User,$Pass,$Database);
 mysqli_query($Conn, 'set names "utf8"');
?>