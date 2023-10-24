<?php
    include('control.php');
    $getdata = new data();
    if(isset($_GET['del_contact']))
                $delete=$getdata->delete_all('contact', $_GET['del_contact']);
    else if(isset($_GET['del_product']))
                $delete=$getdata->delete_all('product', $_GET['del_product']);
    else if(isset($_GET['del_register']))
                $delete=$getdata->delete_all('register', $_GET['del_register']);
    if($delete)echo "<script>alert('Bạn đã xóa thành công!') 
                window.location='list_regis.php'</script>";
    else echo "<script>alert('Bạn không xóa được!')</script>";
?>