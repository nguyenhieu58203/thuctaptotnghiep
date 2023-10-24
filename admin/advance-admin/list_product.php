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
                <a class="navbar-brand" href="index.html">THE LUCKY STAR</a>
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
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">List Products</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
            <div class="row">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Product
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>name</th>
                                            <th>number</th>
                                            <th>price</th>
                                            <th>date</th>
                                            <th>picture</th>
                                            <th>category</th>
                                            <th>s_description</th>
                                            <th>f_description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include('control.php');
                                        $getdata=new data();
                                        $select_all = $getdata->se_all('product');
                                        foreach ($select_all as $se_contact)
                                            {
                                        ?>
                                        <tr>
                                            <td><?php echo $se_contact['id']?></td>
                                            <td><?php echo $se_contact['name']?></td>
                                            <td><?php echo $se_contact['number']?></td>
                                            <td><?php echo $se_contact['price']?></td>
                                            <td><?php echo $se_contact['date']?></td>
                                            <td><img src="img.jpg/<?php echo $se_contact['picture']?>" class="img-thumbnail" /></td>
                                            <td><?php echo $se_contact['category']?></td>
                                            <td><?php echo $se_contact['s_description']?></td>
                                            <td><?php echo $se_contact['f_description']?></td>
                                            <td><a href="delete_all.php?del_product=<?php echo $se_contact['id'] ?>"
                                                                        onclick="return(confirm('Bạn chắc chắn muốn xóa'))">
                                            <span class="glyphicon glyphicon-remove"></span></a></td>
                                            <td><a href="up_product.php?up_product=<?php echo $se_contact['id'] ?>"
                                                                        onclick="return(confirm('Bạn chắc chắn muốn sửa'))">
                                            <span class="glyphicon glyphicon-edit"></span></a></td>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                                            </div>
                                            </div>
                                            
                <!-- /. ROW  -->
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
