<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Lucky Star</title>
    <link rel="stylesheet" href="style.css">
   
</head>
<body>
  <div class="phongchu">
    <header> 
      <div class="logo">
        <a href="about.php"><img src="IMG/logo.jpg" height="200px"></a>
      </div>
      <div id="search">
        <input class="timkiem" type="search" placeholder="Nhập sản phẩm muốn tìm" size="50"><button class="search1">SEARCH</button>
        </div>
        <div class="giohang1"><button class="cart">
            <p><i class="fa fa-shopping-basket" aria-hidden="true"></i><span>8.740.000</span><sup>đ</sup></p>
        </button></div>
    </header>
    <nav id="top">
        <div class="menu"><ul class="menu2">
            <li><a href="about.php">PAGE HOME</a></li>
            <li><a href="pagesale.php">SALE</a></li>
            <li><a href="">BRAND</a>
            <ul class="menu1">
                <li><a href="adidas.php">ADIDAS</a></li>
                <li><a href="nike.php">NIKE</a></li>
                <li><a href="jordan.php">JORDAN</a></li>
            </ul></li>
            <li><a href="">APPAREL</a>
            <ul class="menu1">
                <li><a href="">T-SHIRTS</a></li>
                <li><a href="">SHORT</a></li>
                <li><a href="">HOODIES</a></li>
                <li><a href="">SWEATER</a></li>
            </ul></li>
            <li><a href="">SERVICE</a>
            <ul class="menu1">
                <li><a href="">CONSGM</a></li>
                <li><a href="">ORDER</a></li>
                <li><a href="">SHOES CARE</a></li>
            </ul></li>
        </ul>
       </div>
       <div id="menu4">
        <ul class="menu2">
            <li><a>LOGIN</a>
            <ul class="menu1">
                <li><a href="https://www.facebook.com/login.php">Facebook</a></li>
                <li><a href="https://accounts.google.com/v3/signin/identifier?dsh=S-486311302%3A1688886226683433&ifkv=AeDOFXgvxuICSUZ8pvoiMqmq6dSMEItHQSKQOmEwwGADWK7HYmeSvTL6WgvtjcXzvPHvxJ007WlFxw&flowName=GlifWebSignIn&flowEntry=ServiceLogin">Google</a></li>
                <li><a href="register.php">Sign Up</a></li>
            </ul></li>
        </ul>
       </div>
    </nav>
    <article id="1">
    <div id="banner">
        <div class="slideshow-container">

            <div class="mySlides fade">
              <img src="IMG/g1.jpg" style="width: 800px;" height="370px">
            </div>
          
            <div class="mySlides fade">
              <img src="IMG/g4.jpg" style="width: 800px;" height="370px">
            </div>
          
            <div class="mySlides fade">
              <img src="IMG/g2.jpg" style="width:800px" height="370px">
            </div>
            <div class="mySlides fade">
                <img src="IMG/g3.jpg" style="width:800px" height="370px">
            </div>
            <div class="mySlides fade">
                <img src="IMG/g5.jpg" style="width:800px" height="370px">
            </div>
          
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
          </div>
          <br>
          
          <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
          </div>
          <script>
            let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
          </script>
    </div>
    <div id="left">
      <div class="left3"><b> REMARKABLE</b><br><br>
       <a><img src="IMG/hh.jpg" width="250px" height="250px"></a>
      </div>
      <div class="left1"><b>PRICE (VNĐ)</b><br><br>
      <table align="left">
        <tr><td><a href=""><input class="checkbox" type="checkbox" name="c1"> 500.000 VNĐ - 2.000.000 VNĐ</a></td></tr>
        <tr><td><a href=""><input type="checkbox" name="c1"> 2.000.000 VNĐ - 4.000.000 VNĐ</a></td></tr>
        <tr><td><a href=""><input type="checkbox" name="c1"> 4.000.000 VNĐ - 6.000.000 VNĐ</a></td></tr>
        <tr><td><a href=""><input type="checkbox" name="c1"> Lớn hơn 6.000.000 VNĐ</a></td></tr>
      </table>
      </div><br>
      <div class="left2"><b>COLLECTION</b><br><br>
        <table align="left"  >
          <tr>
          <td><a href="#"><input type="radio" name="c1" checked=""> SPRING</a></td></tr>
          <tr>
          <td><a href="#"><input type="radio" name="c1" checked=""> SUMMER</a></td></tr>
          <tr>
          <td><a href="#"><input type="radio" name="c1" checked=""> AUTUMN</a></td></tr>
          <tr>
          <td><a href="#"><input type="radio" name="c1" checked=""> WINTER</a></td></tr>
          <tr>
        </table>
      </div>
    </div>
          <div id="right"><br><br><br><br>
            <div class="product" align="center">
              <div class="container">
                  <div class="product-Items">
                      <div class="product-Item" >
                          <img src="IMG/sp10.jpg" width="250px" height="250px">
                          <p class="test2">Nike Zoom Cortez</b><br>
                              <p class="tien"><span>6.500.000</span> <sup>vnđ</sup></p>
                              <button class="giohang">THÊM VÀO GIỎ HÀNG</button>
                      </div>
                      <div class="product-Item">
                        <a href="jd1.php"><img src="IMG/jd1 orange.jpg" width="250px" height="250px"></a>
                          <p class="test2">Jordan 1 Mid SE-Turf Orange</b><br>
                              <p class="tien"><span>3.950.000</span> <sup>vnđ</sup></p>
                              <button class="giohang">THÊM VÀO GIỎ HÀNG</button>
                      </div>
                      <div class="product-Item" >
                          <img src="IMG/sp5.jpg" width="250px" height="250px">
                          <p class="test2">Nike Cosmic - Unity Ghost</b><br>
                              <p class="tien"><span>3.990.000</span><sup>vnđ</sup></p>
                              <button class="giohang">THÊM VÀO GIỎ HÀNG</button>
                      </div>
                      <div class="product-Item">
                          <img src="IMG/sp12.jpg" width="250px" height="250px">
                          <p class="test2">Jordan 1 Mid-Barely (Women's)</b><br>
                              <p class="tien"><span>4.650.000</span> <sup>vnđ</sup></p>
                              <button class="giohang">THÊM VÀO GIỎ HÀNG</button>
                      </div>
                      <div class="product-Item">
                          <img src="IMG/sp13.jpg" width="250px" height="250px" >
                          <p class="test2">Jordan 1 Mid Barely Orange</b><br>
                              <p class="tien"><span>4.900.000</span> <sup>vnđ</sup></p>
                              <button class="giohang">THÊM VÀO GIỎ HÀNG</button>
                      </div>
                  </div>
              </div>
              <div class="product">
                <div class="container">
                    <div class="product-Items">
                        <div class="product-Item" >
                            <img src="IMG/sp1.jpg" width="250px" height="250px" >
                            <p class="test2">Asics Gel Spotlyte</b><br>
                                <p class="tien"><span>1.190.000</span> <sup>vnđ</sup></p>
                                <button class="giohang">THÊM VÀO GIỎ HÀNG</button>
                        </div>
                        <div class="product-Item">
                            <img src="IMG/sp2.jpg" width="250px" height="250px" >
                            <p class="test2">Jordan 1 Retro High-Zoom Court</b><br>
                                <p class="tien"><span>2.750.000</span> <sup>vnđ</sup></p>
                                <button class="giohang">THÊM VÀO GIỎ HÀNG</button>
                        </div>
                        <div class="product-Item" >
                            <img src="IMG/sp16.jpg" width="250px" height="250px" >
                            <p class="test2">Nike Kobe 9 Elite What the Kobe</b><br>
                                <p class="tien"><span>15.500.000</span> <sup>vnđ</sup></p>
                                <button class="giohang">THÊM VÀO GIỎ HÀNG</button>
                        </div>
                        <div class="product-Item">
                            <img src="IMG/sp6.jpg" width="250px" height="250px" >
                            <p class="test2">Jordan 1 High Zoom Air CMFT-Aleali May Califia</b><br>
                                <p class="tien"><span>2.740.000</span> <sup>vnđ</sup></p>
                                <button class="giohang">THÊM VÀO GIỎ HÀNG</button>
                        </div>
                        <div class="product-Item">
                            <img src="IMG/sp18.jpg" width="250px" height="250px">
                            <p class="test2">Jordan 2 Retro SP-Maison Chateau Rouge</b><br>
                                <p class="tien"><span>3.300.000</span> <sup>vnđ</sup></p>
                                <button class="giohang">THÊM VÀO GIỎ HÀNG</button>
                        </div>
                        <div class="product-Item">
                            <img src="IMG/sp19.jpg" width="250px" height="250px">
                            <p class="test2">Jordan 1 Retro Low OG SP-Travis Scott Olive</b><br>
                                <p class="tien"><span>20.000.000</span> <sup>vnđ</sup></p>
                                <button class="giohang">THÊM VÀO GIỎ HÀNG</button>
                        </div>
                        <div class="product-Item">
                          <img src="IMG/sp11.jpg" width="250px" height="250px">
                          <p class="test2">Nike Air Max 1-Crepe Soft</b><br>
                              <p class="tien"><span>3.490.000</span> <sup>vnđ</sup></p>
                              <button class="giohang">THÊM VÀO GIỎ HÀNG</button>
                      </div>
                    </div>
                </div>
              </div>
          </div>
        </article>
        <section class="cart1">
          <button class="d" style="margin-right: 80%;">Thoát</button>
          <h2>Giỏ Hàng</h2>
          <form accept="">
              <table>
                  <thead>
                      <tr>
                          <th>Sản phẩm</th>
                          <th>Giá</th>
                          <th>SL</th> 
                          <th>Chọn</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td style="display: flex;align-items: center;"><img style="width: 100px;" src="IMG/sp10.jpg" alt=""><p class="test2">Nike Zoom Cortez</td>
                          <td><p class="tien"><span>6.500.000</span><sup>đ</sup></p></td>
                          <td><input style="width: 30px;outline: none;" type="number" value="1" min="1"></td>
                          <td style="cursor: pointer;">Xóa</td>
                      </tr>
                      <tr>
                          <td style="display: flex;align-items: center;"><img style="width: 100px;" src="IMG/sp17.jpg" alt=""><p class="test2">Jordan 1 High Zoom Air CMFT-Aleali May Califia</td>
                          <td><p class="tien"><span>2.240.000</span><sup>đ</sup></p></td>
                          <td><input style="width: 30px;outline: none;" type="number" value="1" min="1"></td>
                          <td style="cursor: pointer;">Xóa</td>
                      </tr>
                  </tbody>
              </table>
              <div style="text-align: right;" class="price-total">
                  <p style="font-weight: bold;">Tổng tiền: <span>8.740.000</span><sup>đ</sup></p>
              </div>
              <button onclick="guidiachi()">Thanh toán khi nhận hàng</button>
            <button class="Thanhtoanonline"><a href="thanhtoan.php">Thanh toán trực tuyến</a></button>
        </form>
        </section>
        <script src="style.js"></script>
    <footer>
        <div id="f1"><pre>
        Facebook : The Lucky Star<br>
        Địa chỉ      : 447 P. Bạch Mai, Bạch Mai, Hai Bà Trưng, Hà Nội <br>
        Hotline      : 19001234 <br>
        Email        : theluckystarvn@gmail.com
          </pre>
          </div>
          <div id="f2">
            <pre>
            Hỗ trợ khách hàng<br>
            Khách hàng thân thiết<br>
            Chính sách bảo hành<br></pre>
    </footer>
  </div>
</body>
</html>