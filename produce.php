<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản phẩm</title>
</head>
<body>
    <aside class="notificationBar notificationBar--shop"></aside>
    <header class="header_container">
        <div class="container">
            <div class="grid">
                <img href="#" src="icon\logo1.png" alt="">
                <nav id="nav">
                    <div class="nav_menu">
                        <ul>
                            <li id="nav_0"><a class="tab" href="index.php">Home</a></li>
                            <li id="nav_1"><a class="tab" style="color:#f18121;" href="#">Sản Phẩm</a></li>
                            <li id="nav_2"><a class="tab" href="service.php">Dịch Vụ</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="map-icon">
                <button id="button-lhn" >
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone-call" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2"></path>
                        <path d="M15 7a2 2 0 0 1 2 2"></path>
                        <path d="M15 3a6 6 0 0 1 6 6"></path>
                    </svg>Liên hệ ngay
                </button>
            </div>
        </div>
    </header>
    <main class="main" id="main">
                <?php
                    include("connect.php");
                    if(isset($_POST['submit'])){
                        $tenSP = $_POST['tenSP'];
                        $soLuong =$_POST['soLuong'];
                        $tenKH = $_POST['tenKH'];
                        $sdt = $_POST['sdt'];
                        $dChi = $_POST['dChi'];
                        $gia = $_POST['gia'];

                        $sql = "INSERT INTO ttsp(tenSP,soLuong,tenKH,sdt,dChi,gia)
                        VALUES('$tenSP', '$soLuong','$tenKH','$sdt','$dChi','$gia')";
                        $result = $conn->query($sql);   
                        if(!$result){
                            die("Loi Ket noi: " .$conn->connect_errno);

                        }
                        header("location: ../index.php");
                        exit;
                    }
                ?>
        <aside style="background-color:#f18121; height: 3px;
        "></aside>
        <div class="shop">
            <div id="div1" class="produce">
                <div class="produce-img">
                    <img src="icon/matcha.jpg" alt="">
                </div>
                <div>
                    <h2 id="h2Content1">Green tea Cream</h2>
                    <p>Thức uống này với nguyên liệu chính là bột trà xanh và kem với hương vị thơm ngon</p>
                </div>
                <div class="inf-produce">
                    <h2>100.000đ-1200.000đ</h2>
                </div>
                <button class="show-form" onclick="changeInputValue()">Đặt hàng ngay</button>
            
            </div>
            <div id="div2" class="produce">
                <div class="produce-img">
                    <img src="icon/caramel.jpg" alt="">
                </div>
                <div>
                    <h2 id="h2Content2">Caramel Frappuccino</h2>
                    <p>Thức uống này có vị béo béo của kem, chút đắng nhẹ của cà phê, mát lạnh của đá xay</p>
                </div>
                <div class="inf-produce">
                    <h2>100.000đ-1200.000đ</h2>
                </div>
                <button class="show-form" onclick="changeInputValue()">Đặt hàng ngay</button>
            </div>
            <div id="div3" class="produce" >
                <div class="produce-img">
                    <img src="icon/vanillasweetcream.jpg" alt="">
                </div>
                <div>
                    <h2 id="h2Content3">Vanilla Sweet Cream Cold</h2>
                    <p>Thức uống này được pha theo phương pháp hoàn toàn mới giúp giữ được hương vị cà phê lâu hơn</p>
                </div>
                <div class="inf-produce">
                    <h2>100.000đ-1200.000đ</h2>
                </div>
                <button class="show-form" onclick="changeInputValue()">Đặt hàng ngay</button>
            </div>
            <div id="div4" class="produce" >
                <div class="produce-img">
                    <img src="icon/cappuccino.jpg" alt="">
                </div>
                <div>
                    <h2 id="h2Content4">Cappuccino</h2>
                    <p>Cappuccino cho bạn tỉnh táo làm việc và có thêm nguồn năng lượng tích cực để hoạt động suốt cả ngày</p>
                </div>
                <div class="inf-produce">
                    <h2>100.000đ-1200.000đ</h2>
                </div>
                <button class="show-form" onclick="changeInputValue()">Đặt hàng ngay</button>
            </div>
            <div id="div5" class="produce" >
                <div class="produce-img">
                    <img src="icon/soymilk.jpg" alt="">
                </div>
                <div>
                    <h2 id="h2Content5">Green tea Latte </h2>
                    <p>Green tea Latte với sự kết hợp của sữa đậu nành và bột trà xanh, thơm ngon</p>
                </div>
                <div class="inf-produce">
                    <h2>100.000đ-1200.000đ</h2>
                </div>
                <button class ="show-form" onclick="changeInputValue()">Đặt hàng ngay</button>
            </div>
            <div id="div6" class="produce" >
                <div class="produce-img">
                    <img src="icon/caramelmacchiato.jpg" alt="">
                </div>
                <div>
                    <h2 id="h2Content6">Chocolate Chip Cream</h2>
                    <p>Chocolate chip cream với vị béo của kem quyện cùng vị đắng nhẹ của chocolate</p>
                </div>
                <div class="inf-produce">
                    <h2>100.000đ-1200.000đ</h2>
                </div>
                <button class="show-form" onclick="changeInputValue()">Đặt hàng ngay</button>
            </div>
            <div id="div7" class="produce" >
                <div class="produce-img">
                    <img src="icon/chaitealatte.jpg" alt="">
                </div>
                <div>
                    <h2 id="h2Content7">Chai Tea Latte</h2>
                    <p>Chai Tea Latte là sự kết hợp của trà Teavana Chai, thêm chút sữa pha cùng với nước nóng</p>
                </div>
                <div class="inf-produce">
                    <h2>100.000đ-1200.000đ</h2>
                </div>
                <button class ="show-form" onclick="changeInputValue()">Đặt hàng ngay</button>
            </div>
            <div id="div8" class="produce" >
                <div class="produce-img">
                    <img src="icon/chocolateChipCream.jpg" alt="">
                </div>
                <div>
                    <h2 id="h2Content8">Caramel Macchiato</h2>
                    <p> Thức uống truyền thống nổi tiếng với cà phê và sữa nóng phủ lên trên một lớp kem tươi và và sốt caramel</p>
                </div>
                <div class="inf-produce">
                    <h2>100.000đ-1200.000đ</h2>
                </div>
                <button class ="show-form" onclick="changeInputValue()">Đặt hàng ngay</button>
            </div>
            <div id="div9" class="produce">
                <div class="produce-img">
                    <img src="icon/mangopassion.jpg" alt="">
                </div>
                <div>
                    <h2 id="h2Content9">Mango Passion Fruit</h2>
                    <p>Thức uống này với nguyên liệu chính là sinh tố xoài và kem với hương vị thơm ngon</p>
                </div>
                <div class="inf-produce">
                    <h2>100.000đ-1200.000đ</h2>
                </div>
                <button class ="show-form" onclick="changeInputValue()">Đặt hàng ngay</button>
            </div>
            <div id="div10" class="produce" >
                <div class="produce-img">
                    <img src="icon/soymilk.jpg" alt="">
                </div>
                <div>
                    <h2 id="h2Content10">Tea Matcha</h2>
                    <p>Hương vị trà xanh thơm ngát, quyện cùng đá mát lạnh thêm sữa tươi và đường</p>
                </div>
                <div class="inf-produce">
                    <h2>100.000đ-1200.000đ</h2>
                </div>
                <button class ="show-form" onclick="changeInputValue()">Đặt hàng ngay</button>
            </div>
            <div id="div11" class="produce" >
                <div class="produce-img">
                    <img src="icon/tealatte.jpg" alt="">
                </div>
                <div>
                    <h2 id="h21Content11">Tea Latte</h2>
                    <p>Thức uống này với nguyên liệu chính là bột trà xanh và kem với hương vị thơm ngon</p>
                </div>
                <div class="inf-produce">
                    <h2>100.000đ-1200.000đ</h2>
                </div>
                <button class ="show-form" onclick="changeInputValue('div11')">Đặt hàng ngay</button>
            </div>
            <div id="div12" class="produce">
                <div class="produce-img">
                    <img src="icon/qualuuniem.jpg" alt="">
                </div>
                <div>
                    <h2 id="h2Content12">Quà Lưu Niệm</h2>
                    <p>Tặng quà lưu niệm khi bạn mua đồ uống của chúng tôi, nhìn nó thôi là nhớ đế Starbucks </p>
                </div>
                <div class="inf-produce">
                    <h2 id="h2Coin12">0đ-50.000đ</h2>
                </div>
                <button class ="show-form" onclick="changeInputValue('div12')">Đặt hàng ngay</button>
            </div>
        </div>
        <div class="overlay">
            <div class="form-container">
              <form method="post">
                <div class="form_tt">

                    <label for="" style="font-size: 30px;">Thông tin sản phẩm:</label>
                    <br><br>
                    <label for="" style="font-size: 20px;">Tên sản phẩm: </label> 
                    <label style="font-size: 20px;" id="labelContent">Green tea cream</label>
                    <input type="text" name="tenSP" id="inputValue" value="Greent tea cream" style="display:none;" >
                    <br><br>
                    <label for="" style="font-size: 20px;">Số lượng:</label> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="number" id="" name="soLuong" step="1" id="myNumberInput" min="1" value="1">
                    <br><br>
                    <label for=""style="font-size: 20px;">Họ và tên:</label> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="text" id="name" name="tenKH" placeholder="">
                    <br><br>
                    <label for=""style="font-size: 20px;">Số điện thoại:</label> &nbsp&nbsp&nbsp
                    <input type="tel" name="sdt" id="" placeholder="">
                    <br><br>
                    <label for=""style="font-size: 20px;">Địa chỉ:</label><br><br>&nbsp
                    <textarea name="dChi" id="" cols="50" rows="5" style="border-radius: 5px; border: 1px solid #858383;"></textarea>
                    <br><br>
                    <label for="gia" style="font-size: 20px;">Giá:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="text" id="gia" name="gia" value="100đ">
                    <br><br>
                    <div class="submit-form">

                        <button>Hủy bỏ</button>
                        <input type="submit" name="submit" value="Đặt hàng" style="width: 120px; height: 40px;font-size: 15px;">
                    </div>
                    <script src="action.js"></script>
                </div>
                <!-- Thêm các trường và các yêu cầu thông tin bạn cần -->
                <div class="img_QC">
                    <img src="icon\pro-1657099762.jpg" alt="">
                </div>
              </form>
            </div>
          </div>

          <script>  
          function changeInputValue(){
          const input = document.getElementById("inputValue");
          const hea = document.getElementById(divID).querySelector("h2");
          const label = document.getElementById("labelContent");

          input.value = hea.innerText;
          label.innerHTML = input.value;
          
            
        }


        </script>
    <footer class="endPage">
        <div class="footer-top">
            <div class="container">
                <div class="gird">
                    <div class="nav_menu">
                        <ul>
                            <li class="facebook">
                                <a href="" title="Facebook">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3"></path>
                                    </svg>
                                </a>
                            </li>
                            <li class="youtube">
                                <a href="" title="Youtube">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-youtube" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M2 8a4 4 0 0 1 4 -4h12a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-12a4 4 0 0 1 -4 -4v-8z"></path>
                                        <path d="M10 9l5 3l-5 3z"></path>
                                    </svg>
                                </a>
                            </li><li class="zalo">
                                <a href="" title="Zalo">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 50 50">
                                        <path d="M 9 4 C 6.2504839 4 4 6.2504839 4 9 L 4 41 C 4 43.749516 6.2504839 46 9 46 L 41 46 C 43.749516 46 46 43.749516 46 41 L 46 9 C 46 6.2504839 43.749516 4 41 4 L 9 4 z M 9 6 L 15.576172 6 C 12.118043 9.5981082 10 14.323627 10 19.5 C 10 24.861353 12.268148 29.748596 15.949219 33.388672 C 15.815412 33.261195 15.988635 33.48288 16.005859 33.875 C 16.023639 34.279773 15.962689 34.835916 15.798828 35.386719 C 15.471108 36.488324 14.785653 37.503741 13.683594 37.871094 A 1.0001 1.0001 0 0 0 13.804688 39.800781 C 16.564391 40.352722 18.51646 39.521812 19.955078 38.861328 C 21.393696 38.200845 22.171033 37.756375 23.625 38.34375 A 1.0001 1.0001 0 0 0 23.636719 38.347656 C 26.359037 39.41176 29.356235 40 32.5 40 C 36.69732 40 40.631169 38.95117 44 37.123047 L 44 41 C 44 42.668484 42.668484 44 41 44 L 9 44 C 7.3315161 44 6 42.668484 6 41 L 6 9 C 6 7.3315161 7.3315161 6 9 6 z M 18.496094 6 L 41 6 C 42.668484 6 44 7.3315161 44 9 L 44 34.804688 C 40.72689 36.812719 36.774644 38 32.5 38 C 29.610147 38 26.863646 37.459407 24.375 36.488281 C 22.261967 35.634656 20.540725 36.391201 19.121094 37.042969 C 18.352251 37.395952 17.593707 37.689389 16.736328 37.851562 C 17.160501 37.246758 17.523335 36.600775 17.714844 35.957031 C 17.941109 35.196459 18.033096 34.45168 18.003906 33.787109 C 17.974816 33.12484 17.916946 32.518297 17.357422 31.96875 L 17.355469 31.966797 C 14.016928 28.665356 12 24.298743 12 19.5 C 12 14.177406 14.48618 9.3876296 18.496094 6 z M 32.984375 14.986328 A 1.0001 1.0001 0 0 0 32 16 L 32 25 A 1.0001 1.0001 0 1 0 34 25 L 34 16 A 1.0001 1.0001 0 0 0 32.984375 14.986328 z M 18 16 A 1.0001 1.0001 0 1 0 18 18 L 21.197266 18 L 17.152344 24.470703 A 1.0001 1.0001 0 0 0 18 26 L 23 26 A 1.0001 1.0001 0 1 0 23 24 L 19.802734 24 L 23.847656 17.529297 A 1.0001 1.0001 0 0 0 23 16 L 18 16 z M 29.984375 18.986328 A 1.0001 1.0001 0 0 0 29.162109 19.443359 C 28.664523 19.170123 28.103459 19 27.5 19 C 25.578848 19 24 20.578848 24 22.5 C 24 24.421152 25.578848 26 27.5 26 C 28.10285 26 28.662926 25.829365 29.160156 25.556641 A 1.0001 1.0001 0 0 0 31 25 L 31 22.5 L 31 20 A 1.0001 1.0001 0 0 0 29.984375 18.986328 z M 38.5 19 C 36.578848 19 35 20.578848 35 22.5 C 35 24.421152 36.578848 26 38.5 26 C 40.421152 26 42 24.421152 42 22.5 C 42 20.578848 40.421152 19 38.5 19 z M 27.5 21 C 28.340272 21 29 21.659728 29 22.5 C 29 23.340272 28.340272 24 27.5 24 C 26.659728 24 26 23.340272 26 22.5 C 26 21.659728 26.659728 21 27.5 21 z M 38.5 21 C 39.340272 21 40 21.659728 40 22.5 C 40 23.340272 39.340272 24 38.5 24 C 37.659728 24 37 23.340272 37 22.5 C 37 21.659728 37.659728 21 38.5 21 z"></path>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-main">
            <div class="container2">
                <div class="gird2">
                    <div class="content2">
                        <div class="content_footer_1">
                            <h1>VỀ CHÚNG TÔI</h1>
                            <ul>
                                <li class="choose">Công ty</li>
                                <li class="choose">Cơ hội nghề nghiệp</li>
                            </ul>
                        </div>
                        <div class="content_footer_2">
                            <h1>DỊCH VỤ KHÁCH HÀNG</h1>
                            <ul>
                                <li class="choose">Câu hỏi thường gặp</li>
                                
                            </ul>
                        </div>
                        <div class="content_footer_3">
                            <h1>LIÊN HỆ NHANH</h1>
                            <ul>
                                <li class="choose">Bộ định vị cửa hàng</li>
                                <li class="choose">Dành cho đối tác</li>
                            </ul>
                        </div>                       
                    </div>
                </div>               
            </div>
        </div>
        <div id="footer", class="footer_end">
            <div class="container3">
                <div class="gird3">
                    <div class="content3">
                        <div class="content_footer">
                            <h1>LIÊN HỆ NGAY</h1>
                            <ul>
                                <li class="choose">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M18.364 4.636a9 9 0 0 1 .203 12.519l-.203 .21l-4.243 4.242a3 3 0 0 1 -4.097 .135l-.144 -.135l-4.244 -4.243a9 9 0 0 1 12.728 -12.728zm-6.364 3.364a3 3 0 1 0 0 6a3 3 0 0 0 0 -6z" stroke-width="0" fill="currentColor"></path>
                                     </svg>
                                     <a href="">Địa chỉ:....</a>
                                </li>
                                <li class="choose"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M9 3a1 1 0 0 1 .877 .519l.051 .11l2 5a1 1 0 0 1 -.313 1.16l-.1 .068l-1.674 1.004l.063 .103a10 10 0 0 0 3.132 3.132l.102 .062l1.005 -1.672a1 1 0 0 1 1.113 -.453l.115 .039l5 2a1 1 0 0 1 .622 .807l.007 .121v4c0 1.657 -1.343 3 -3.06 2.998c-8.579 -.521 -15.418 -7.36 -15.94 -15.998a3 3 0 0 1 2.824 -2.995l.176 -.005h4z" stroke-width="0" fill="currentColor"></path>
                                 </svg>
                                <a href="">Số điện thoại: 097*217487</a></li>
                            </ul>
                        </div>                  
                    </div>
                </div>               
            </div>
        </div>
        <aside class="notificationBar notificationBar--shop"></aside>
    </footer>
    <script src="action.js"></script>

</body> 


</html>