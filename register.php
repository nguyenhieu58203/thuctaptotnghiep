<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Ninom</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Dosis:400,600,700|Poppins:400,600,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <div class="brand_box">
      <a class="navbar-brand" href="#">
        <span>
          THE LUCKY STAR
        </span>
      </a>
    </div>
    <!-- end header section -->
  </div>

  <!-- nav section -->

  <section class="nav_section">
    <div class="container">
      <div class="custom_nav2">
        <nav class="navbar navbar-expand custom_nav-container ">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
           
          </div>
        </nav>
      </div>
    </div>
  </section>

  <!-- end nav section -->


  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container-fluid">
      <div class="row">
        <div class="offset-lg-2 col-md-10 offset-md-1">
          <div class="heading_container">
            <hr>
            <h2>
              SIGN UP
            </h2>
          </div>
        </div>
      </div>

      <div class="layout_padding2-top">
        <div class="row">
          <div class="col-lg-4 offset-lg-2 col-md-5 offset-md-1">
            <form method="POST">
              <div class="contact_form-container">
                <div>
                  <div>
                    <input type="text" placeholder="Full Name" name="txtfullname"/>
                  </div>
                  <div>
                    <input type="text" placeholder="User Name" name="txtusername"/>
                  </div>
                  <div>
                    <input type="password" placeholder="Password" name="txtpassword"/>
                  </div>
                  <div>
                    <input type="password" placeholder="Repassword"  name="txtrepassword"/>
                  </div>
                  <div>
                    <input type="date" placeholder="Date"  name="txtbirth"/>
                  </div>
                  <div>
                    <input type="email" placeholder="Email" name="txtemail" />
                  </div>
                  <div>
                    <input type="text" placeholder="Address"  name="txtaddress"/>
                  </div>
                  <div>
                    <button><a href="about.php">GO BACK</a>
                    </button>
                    <button type="submit" name="txtsub">SIGN UP
                    </button>
                  </div>
                </div>
              </div>
            </form>
            <?php
            include('control.php');
            $getdata=new data();
            if(isset($_POST['txtsub']))
            {
              if(empty($_POST['txtfullname'])
               ||empty($_POST['txtusername'])
               ||empty($_POST['txtpassword'])
               ||empty($_POST['txtrepassword'])
               ||empty($_POST['txtbirth'])
               ||empty($_POST['txtemail'])
               ||empty($_POST['txtaddress']))
              echo "<script>alert('Bạn chưa điền đủ thông tin! ') </script>";
              else
              {
                $register=$getdata->insert_user($_POST['txtfullname'],
                                              $_POST['txtusername'],
                                              $_POST['txtpassword'],
                                              $_POST['txtrepassword'],
                                              $_POST['txtbirth'],
                                              $_POST['txtemail'],
                                              $_POST['txtaddress']
             );
                $name=$_POST['txtfullname'];
                if($register) 
            echo "<script>alert('Cảm ơn bạn $name đã đăng ký thành công!') 
                              window.location='about.php';</script> ";
      
            else
            echo "<script>alert('Tài khoản đã tồn tại')</script>";
              }

            }
            ?>
          </div>
          <div class="col-md-6 px-0">
            <div class="map_container">
              <div class="map-responsive">
                <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->


  <!-- info section -->

  <section class="info_section layout_padding">
    <div class="container">
      <div class="info_logo">
        <h2>
          THE LUCKY STAR
        </h2>
      </div>
      <div class="info_contact">
        <div class="row">
          <div class="col-md-4">
            <a href="https://www.facebook.com/theluckystar.vn/">
              <img src="images/location.png" alt="">
              <span>
                Facebook: The Lucky Star
              </span>
            </a>
          </div>
          <div class="col-md-4">
            <a href="">
              <img src="images/call.png" alt="">
              <span>
                Hotline : 19001234 
              </span>
            </a>
          </div>
          <div class="col-md-4">
            <a href="">
              <img src="images/mail.png" alt="">
              <span>
                Email: theluckystarvn@gmail.com
              </span>
            </a>
          </div>
  </section>
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>

</body>

</html>