<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">THE LUCKY STAR</a>
            </div>

            <div class="header-right">

              <a href="message-task.html" class="btn btn-info" title="New Message"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>
                <a href="message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a>
                <a href="login.html" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>


            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                    <div class="user-img-div">
                            <img src="assets/img/hieu.jpg" class="img-thumbnail" />

                            <div class="inner-text">
                            Hieu 8
                            <br />
                                <small>Last Login : Onlive </small>
                            </div>
                            <button type="submit" class="btn btn-info" name="txtsub">Log out </button>
                        </div>

                    </li>
                    <li>
                        <a href="#"><i class="fa fa-dashboard  "></i>Register <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="list_regis.php"><i class="fa fa-coffee"></i>List_register</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-desktop "></i>ListContact <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="list_contact.php"><i class="fa fa-toggle-on"></i>Contact</a>
                            </li>

                        </ul>
                    </li>
                     <li>
                     <a href="#"><i class="fa fa-yelp "></i>Product <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="product.php"><i class="fa fa-coffee"></i>Add_Product</a>
                            </li>
                            <li>
                                <a href="list_product.php"><i class="fa fa-flash "></i>List_Product</a>
                            </li> 
                        </ul>
                    </li>  
                        </ul>
                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Products</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
            <div class="col-md-12 col-sm-6 col-xs-24">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           ADD PRODUCT
                        </div>
                        <div class="panel-body">
                            <form role="form" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" type="text" name="txtname">
                                    
                                        </div>
                                 <div class="form-group">
                                            <label>Number</label>
                                            <input class="form-control" type="number" name="txtnumber">
                                     <p class="help-block">Đơn vị tính.</p>
                                </div>
                                <div class="form-group">
                                            <label>Price</label>
                                            <input class="form-control" type="number" name="txtprice">
                                     <p class="help-block">Đơn vị tính.</p>
                                </div>
                                <div class="form-group">
                                            <label>Date</label>
                                            <input class="form-control" type="date" name="txtdate">
                                </div>
                                <div class="form-group">
                                            <label>Picture</label>
                                            <input class="form-control" type="file" name="txtpicture">
                                </div>
                                <div class="form-group">
                                            <label>Category</label>
                                            <select class="form-control" name="txtcategory">
                                                <option>NIKE</option>
                                                <option>ADIDAS</option>
                                                <option>JORDAN</option>
                                            </select>              
                                </div>
                                <div class="form-group">
                                            <label>Short_Description</label>
                                            <textarea class="form-control" rows="3" name="txts_description"></textarea>              
                                </div>
                                <div class="form-group">
                                            <label>Full_Description</label>
                                            <textarea class="form-control" rows="3" name="txtf_description"></textarea>              
                                </div>


                                        <button type="submit" class="btn btn-info" name="txtsub">Add new </button>

                                    </form>
            <?php
            include('control.php');
            $getdata=new data();
            if(isset($_POST['txtsub']))
            {
              if(empty($_POST['txtnumber'])||empty($_POST['txtprice'])||empty($_POST['txtdate'])||empty($_POST['txts_description'])||empty($_POST['txtf_description']))
              echo "<script>alert('Bạn chưa điền đủ thông tin! ') </script>";
              else
              {
                
                move_uploaded_file($_FILES['txtpicture']['tmp_name'],'img.jpg/'.$_FILES['txtpicture']['name']);
                $product=$getdata->in_product($_POST['txtname'],$_POST['txtnumber'],$_POST['txtprice'],$_POST['txtdate'],$_FILES['txtpicture']['name'],
                                              $_POST['txtcategory'],$_POST['txts_description'],$_POST['txtf_description']);
                $name=$_POST['txtname'];
                if($product) 
            echo "<script>alert(' Cảm ơn bạn $name đã gửi thông tin đến hệ thống')</script>";
      
                else echo "<script>alert('Thông tin chưa gửi được!')</script>"; 
              }
            }
            ?>
                            </div>
                        </div>
                            </div>

             <!--/.ROW-->
        </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <div id="footer-sec">
        &copy; 2014 YourCompany | Design By : <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
    </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
