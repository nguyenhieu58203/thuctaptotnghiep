<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Lucky Star</title>
    <link rel="stylesheet" href="thanhtoan.css">

</head> 
<body>
  <!-- main -->
  <div class="main-w3layouts wrapper">
    <h1>Thanh Toán Online</h1>
    <div class="main-agileinfo">
      <div class="agileits-top">
        <form action="" method="post">
          <input class="text" type="text" name="Username" placeholder="Nhập tên khách hàng" required="">
          <input class="text" type="text" name="Username" placeholder="Nhập tên ngân hàng" required="">
          <input class="text" type="text" name="Username" placeholder="Nhập số tài khoản" required="">
          <input class="text email" type="text" name="sodienthoai" placeholder="Nhập số tiền thanh toán" required="">
          <input class="text" type="password" name="password" placeholder="Nhập mã pin" required="">
          <input class="text w3lpass" type="password" name="password" placeholder="Nhập lại mã pin" required="">
          <div class="wthree-text">
            <label class="anim">
              <input type="checkbox" class="checkbox" required="">
              <span>Quý khách đồng ý thanh toán trực tuyến</span>
            </label>
            <div class="clear"> </div>
          </div>
          
         <input type="submit" value="Thanh Toán" onclick="hello()">
        </form>
        <p><a href="about.php"> Quay lại</a></p>
      </div>
    </div>
    <script>
      function hello(){
      alert("Cảm ơn quý khách hàng đã ghé thăm và mua hàng! Hẹn gặp lại quý khách hàng lần ghé thăm sau! Chúc quý khách hàng sức khỏe!")}
    </script>
    <!-- copyright -->
    <!-- //copyright -->
    <ul class="colorlib-bubbles">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
  </div>
  <!-- //main -->
</body>
</html>