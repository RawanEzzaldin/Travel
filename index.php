<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/all.css">
        <!-- <script src="javascript/js2.js"></script> -->
        <script src="javascript/js.js"></script>
        <script src="javascript/jquery.js"></script>
        <script>
            var counter=1;
            setInterval (function(){
                document.getElementById('radio' + counter).checked=true;
                counter ++;
                if(counter>4){
                    counter=1;
                }
            },3000);
        </script>
    </head>
    <body>
        <?php require_once("header.php"); ?>
        <div class="main">

            <div class="main-container">
                <div class="main-img-slider">
                    <div class="main-img-slides">
                        <input type="radio" name="radio-btn" id="radio1">
                        <input type="radio" name="radio-btn" id="radio2">
                        <input type="radio" name="radio-btn" id="radio3">
                        <input type="radio" name="radio-btn" id="radio4">
        
                        <div class="slide first">
                            <img src="img/cover.jpg" alt="">
                        </div> <!-- /slide -->
                        <div class="slide">
                            <img src="img/beach.jpg" alt="">
                        </div> <!-- slide -->
                        <div class="slide">
                            <img src="img/couples.jpg" alt="">
                        </div>  <!-- /slide -->
                        <div class="slide ">
                            <img src="img/beach.jpg" alt="">
                        </div> <!-- /slide -->
        
                        <div class="navigation-auto">
                            <div class="auto-btn1"></div>
                            <div class="auto-btn2"></div>
                            <div class="auto-btn3"></div>
                            <div class="auto-btn4"></div>
                        </div> <!-- /navigation-auto -->
                    </div> <!-- /main-img-slides -->
                </div> <!-- /main-img-slider -->
            </div> <!-- /main-container -->

            <div class="main-container1">   
                <div class="insideEgypt-title">
                    <h3>السياحة الداخلية</h3>
                </div> <!-- /insideEgypt-title -->
                <div class="insideEgypt">
                    
                    <div class="insideEgypt-img wrapper">
                        <i class="fas fa-arrow-left" id="left" onclick="move('.carousel' , '.wrapper i' , '.img1')"></i>
                        <div class="insideEgypt-img-item carousel">
                            <a href="insideTourism.php">
                                <div  class="beach">
                                    <img class="img1" src="img/beach.jpg" draggable="false">
                                        <div class="beach-overlay">
                                            <span>حجز رحلات سياحية</span>
                                        </div>  <!-- /beach-overlay -->
                                </div> <!-- /beach -->
                            </a>
                            <a href="insideTourism.php">
                                <div class="hotel">
                                    <img class="img1 " src="img/hotels.jpg" draggable="false">
                                    <div class="hotel-overlay">
                                        <span>حجز فنادق</span>
                                    </div>  <!-- /hotel-overlay -->
                                </div> <!-- /hotel -->
                            </a>
                            <a href="insideTourism.php">
                                <div class="couples">
                                    <img  class="img1" src="img/couples.jpg" draggable="false">
                                    <div class="couples-overlay">
                                        <span>حجز رحلات شهر العسل</span>
                                    </div>  <!-- /couples-overlay -->
                                </div> <!-- /couples -->
                            </a>
                            <a href="insideTourism.php">
                                <div class="flights">
                                    <img  class="img1" src="img/airplane.jpg" draggable="false">
                                    <div class="flights-overlay">
                                        <span>حجز تذاكر الطيران</span>
                                    </div>  <!-- /flights-overlay -->
                                </div> <!-- /flights -->
                            </a>
                           <a href="insideTourism.php">
                            <div class="flights">
                                    <img  class="img1" src="img/airplane.jpg" draggable="false">
                                    <div class="flights-overlay">
                                        <span>حجز تذاكر الطيران</span>
                                    </div>  <!-- /flights-overlay -->
                                </div> <!-- /flights -->
                           </a>
                        </div> <!-- /insideEgypt-img-item -->
                        <i class="fas fa-arrow-right" id="right" onclick="move('.carousel' , '.wrapper i' , '.img1')"></i>
                    </div> <!-- /insideEgypt-img -->
                </div> <!-- /insideEgypt -->

            </div> <!-- /main-container1 -->

            <div class="main-container2">
                <div class="outsideEgypt-title">
                    <h3>السياحة الخارجية</h3>
                </div> <!-- /outsideEgypt-title -->
                 <div class="outsideEgypt">
                    <div class="outsideEgypt-img wrapper2">
                        <i class="fas fa-arrow-left" id="left" onclick="move('.carousel2' , '.wrapper2 i' , '.img2')"></i>
                        <div class="outsideEgypt-img-item carousel2">
                            <a href="outsideTourism.php">
                                <div class="europe">
                                    <img class="img2" src="img/europe.jpg" draggable="false">
                                    <div class="europe-overlay">
                                        <span>حجز رحلات في أوروبا</span>
                                    </div>  <!-- /europe-overlay -->
                                </div> <!-- /europe -->
                            </a>
                           <a href="outsideTourism.php">
                                <div class="turkey">
                                    <img class="img2" src="img/turky.jpg" draggable="false">
                                    <div class="turkey-overlay">
                                        <span>حجز رحلات في تركيا</span>
                                    </div>  <!-- /turkey-overlay -->
                                </div> <!-- /turkey -->
                           </a>
                           <a href="outsideTourism.php">
                                <div class="visa">
                                    <img  class="img2" src="img/visa.jpg" draggable="false">
                                    <div class="visa-overlay">
                                        <span>حجز التأشيرات</span>
                                    </div>  <!-- /visa-overlay -->
                                </div> <!-- /visa -->
                           </a>
                            <a href="outsideTourism.php">
                                <div class="flights">
                                    <img  class="img2" src="img/airplane.jpg" draggable="false">
                                    <div class="flights-overlay">
                                        <span>حجز تذاكر الطيران</span>
                                    </div>  <!-- /flights-overlay -->
                                </div> <!-- /flights -->
                            </a>
                            <a href="outsideTourism.php">
                                <div class="flights">
                                    <img  class="img2" src="img/airplane.jpg" draggable="false">
                                    <div class="flights-overlay">
                                        <span>حجز تذاكر الطيران</span>
                                    </div>  <!-- /flights-overlay -->
                                </div> <!-- /flights -->
                            </a>
                        </div> <!-- /outsideEgypt-img-item -->
                        <i class="fas fa-arrow-right" id="right" onclick="move('.carousel2' , '.wrapper2 i' , '.img2')"></i>
                    </div> <!-- /outsideEgypt-img -->
                </div> <!-- /outsideEgypt -->
                
            </div> <!-- /main-container2 -->

            <div class="main-container3">
                <div class="hajj-title">
                    <h3>السياحة الدينية</h3>
                </div> <!-- /hajj-title -->
                 <div class="hajj">
                    <div class="hajj-img wrapper3">
                        <i class="fas fa-arrow-left" id="left" onclick="move('.carousel3' , '.wrapper3 i' , '.img3')"></i>
                        <div class="hajj-img-item carousel3">
                            <a href="islamicTourism.php">
                                <div class="hajj-flights">
                                    <img class="img3" src="img/hajj.jpg" draggable="false">
                                    <div class="hajj-flights-overlay">
                                        <span>رحلات حج وعمرة</span>
                                    </div>  <!-- /hajj-flights-overlay -->
                                </div> <!-- /hajj-flights -->
                            </a>
                            <a href="islamicTourism.php">
                                <div class="hajj-hotels">
                                    <img class="img3" src="img/hajjhotels.jpg" draggable="false">
                                    <div class="hajj-hotels-overlay">
                                        <span>حجز فنادق</span>
                                    </div>  <!-- /hajj-hotels-overlay -->
                                </div> <!-- /hajj-hotels -->
                            </a>
                            <a href="islamicTourism.php">
                                <div class="flights">
                                    <img  class="img3" src="img/airplane.jpg" draggable="false">
                                    <div class="flights-overlay">
                                        <span>حجز تذاكر الطيران</span>
                                    </div>  <!-- /flights-overlay -->
                                </div> <!-- /flights -->
                            </a>
                            <a href="islamicTourism.php">
                                <div class="visa">
                                    <img  class="img3" src="img/visa.jpg" draggable="false">
                                    <div class="visa-overlay">
                                        <span>حجز التأشيرات</span>
                                    </div>  <!-- /visa-overlay -->
                                </div> <!-- /visa -->
                            </a>
                            <a href="islamicTourism.php">
                                <div class="flights">
                                    <img  class="img3" src="img/airplane.jpg" draggable="false">
                                    <div class="flights-overlay">
                                        <span>حجز تذاكر الطيران</span>
                                    </div>  <!-- /flights-overlay -->
                                </div> <!-- /flights -->
                            </a>
                        </div> <!-- /hajj-img-item -->
                        <i class="fas fa-arrow-right" id="right" onclick="move('.carousel3' , '.wrapper3 i' , '.img3')"></i>
                    </div> <!-- /hajj-img -->
                </div> <!-- /hajj -->
            </div> <!-- /main-container3 -->

            <div class="main-container1-mobile">
                <div class="mobile-tourism">
                    <div class="mobile-tourism-title">
                        <button onclick="show('insideEgypt-mobile' ,'outsideEgypt-mobile' , 'hajj-mobile')" >السياحة الداخلية</button>
                        <div class="mobile-tourism-title-line"></div> <!-- /mobile-tourism-title-line -->
                        <button onclick="show('outsideEgypt-mobile' , 'hajj-mobile' , 'insideEgypt-mobile' )">السياحة الخارجية</button>
                        <div class="mobile-tourism-title-line"></div> <!-- /mobile-tourism-title-line -->
                        <button onclick="show('hajj-mobile' , 'outsideEgypt-mobile' ,  'insideEgypt-mobile' )">السياحة الدينية</button>
                    </div> <!-- /mobile-tourism-title -->
                    <div class="mobile-tourism-content">                
                        <div class="insideEgypt-mobile" id="insideEgypt-mobile">
                            
                            <div class="insideEgypt-img-mobile wrapper4">
                                <i class="fas fa-arrow-left" id="left" onclick="move('.carousel4' , '.wrapper 4' , '.img4')"></i>
                                <div class="insideEgypt-img-item-mobile carousel4">
                                    <a href="insideTourism.php">
                                        <div  class="beach-mobile">
                                            <img class="img4" src="img/beach.jpg" draggable="false">
                                                <div class="beach-overlay-mobile">
                                                    <span>حجز رحلات سياحية</span>
                                                </div>  <!-- /beach-overlay-mobile -->
                                        </div> <!-- /beach-mobile -->
                                    </a>
                                    <a href="insideTourism.php">
                                        <div class="hotel-mobile">
                                            <img class="img4 " src="img/hotels.jpg" draggable="false">
                                            <div class="hotel-overlay-mobile">
                                                <span>حجز فنادق</span>
                                            </div>  <!-- /hotel-overlay-mobile -->
                                        </div> <!-- /hotel-mobile -->
                                    </a>
                                    <a href="insideTourism.php">
                                        <div class="couples-mobile">
                                            <img  class="img4" src="img/couples.jpg" draggable="false">
                                            <div class="couples-overlay-mobile">
                                                <span>حجز رحلات شهر العسل</span>
                                            </div>  <!-- /couples-overlay-mobile -->
                                        </div> <!-- /couples-mobile -->
                                    </a>
                                    <a href="insideTourism.php">
                                        <div class="flights-mobile">
                                            <img  class="img4" src="img/airplane.jpg" draggable="false">
                                            <div class="flights-overlay-mobile">
                                                <span>حجز تذاكر الطيران</span>
                                            </div>  <!-- /flights-overlay-mobile -->
                                        </div> <!-- /flights-mobile -->
                                    </a>
                                <a href="insideTourism.php">
                                    <div class="flights-mobile">
                                            <img  class="img4" src="img/airplane.jpg" draggable="false">
                                            <div class="flights-overlay-mobile">
                                                <span>حجز تذاكر الطيران</span>
                                            </div>  <!-- /flights-overlay-mobile -->
                                        </div> <!-- /flights-mobile -->
                                </a>
                                </div> <!-- /insideEgypt-img-item-mobile -->
                                <i class="fas fa-arrow-right" id="right" onclick="move('.carousel4' , '.wrapper4 i' , '.img4')"></i>
                            </div> <!-- /insideEgypt-img-mobile -->
                        </div> <!-- /insideEgypt-mobile -->

                        <div class="outsideEgypt-mobile" id="outsideEgypt-mobile">
                            <div class="outsideEgypt-img-mobile wrapper5">
                                <i class="fas fa-arrow-left" id="left" onclick="move('.carousel5' , '.wrapper5 i' , '.img5')"></i>
                                <div class="outsideEgypt-img-item-mobile carousel5">
                                    <a href="outsideTourism.php">
                                        <div class="europe-mobile">
                                            <img class="img5" src="img/europe.jpg" draggable="false">
                                            <div class="europe-overlay-mobile">
                                                <span>حجز رحلات في أوروبا</span>
                                            </div>  <!-- /europe-overlay-mobile -->
                                        </div> <!-- /europe-mobile -->
                                    </a>
                                <a href="outsideTourism.php">
                                        <div class="turkey-mobile">
                                            <img class="img5" src="img/turky.jpg" draggable="false">
                                            <div class="turkey-overlay-mobile">
                                                <span>حجز رحلات في تركيا</span>
                                            </div>  <!-- /turkey-overlay-mobile -->
                                        </div> <!-- /turkey-mobile -->
                                </a>
                                <a href="outsideTourism.php">
                                        <div class="visa-mobile">
                                            <img  class="img5" src="img/visa.jpg" draggable="false">
                                            <div class="visa-overlay-mobile">
                                                <span>حجز التأشيرات</span>
                                            </div>  <!-- /visa-overlay-mobile -->
                                        </div> <!-- /visa-mobile -->
                                </a>
                                    <a href="outsideTourism.php">
                                        <div class="flights-mobile">
                                            <img  class="img5" src="img/airplane.jpg" draggable="false">
                                            <div class="flights-overlay-mobile">
                                                <span>حجز تذاكر الطيران</span>
                                            </div>  <!-- /flights-overlay-mobile -->
                                        </div> <!-- /flights-mobile -->
                                    </a>
                                    <a href="outsideTourism.php">
                                        <div class="flights-mobile">
                                            <img  class="img5" src="img/airplane.jpg" draggable="false">
                                            <div class="flights-overlay-mobile">
                                                <span>حجز تذاكر الطيران</span>
                                            </div>  <!-- /flights-overlay-mobile -->
                                        </div> <!-- /flights-mobile -->
                                    </a>
                                </div> <!-- /outsideEgypt-img-item -->
                                <i class="fas fa-arrow-right" id="right" onclick="move('.carousel5' , '.wrapper5 i' , '.img5')"></i>
                            </div> <!-- /outsideEgypt-img -->
                        </div> <!-- /outsideEgypt-mobile -->

                        <div class="hajj-mobile" id="hajj-mobile">
                            <div class="hajj-img-mobile wrapper6">
                                <i class="fas fa-arrow-left" id="left" onclick="move('.carousel6' , '.wrapper6 i' , '.img6')"></i>
                                <div class="hajj-img-item-mobile carousel6">
                                    <a href="islamicTourism.php">
                                        <div class="hajj-flights-mobile">
                                            <img class="img6" src="img/hajj.jpg" draggable="false">
                                            <div class="hajj-flights-overlay-mobile">
                                                <span>رحلات حج وعمرة</span>
                                            </div>  <!-- /hajj-flights-overlay-mobile -->
                                        </div> <!-- /hajj-flights-mobile -->
                                    </a>
                                    <a href="islamicTourism.php">
                                        <div class="hajj-hotels-mobile">
                                            <img class="img6" src="img/hajjhotels.jpg" draggable="false">
                                            <div class="hajj-hotels-overlay-mobile">
                                                <span>حجز فنادق</span>
                                            </div>  <!-- /hajj-hotels-overlay-mobile -->
                                        </div> <!-- /hajj-hotels-mobile -->
                                    </a>
                                    <a href="islamicTourism.php">
                                        <div class="flights-mobile">
                                            <img  class="img6" src="img/airplane.jpg" draggable="false">
                                            <div class="flights-overlay-mobile">
                                                <span>حجز تذاكر الطيران</span>
                                            </div>  <!-- /flights-overlay-mobile -->
                                        </div> <!-- /flights-mobile -->
                                    </a>
                                    <a href="islamicTourism.php">
                                        <div class="visa-mobile">
                                            <img  class="img6" src="img/visa.jpg" draggable="false">
                                            <div class="visa-overlay-mobile">
                                                <span>حجز التأشيرات</span>
                                            </div>  <!-- /visa-overlay-mobile -->
                                        </div> <!-- /visa-mobile -->
                                    </a>
                                    <a href="islamicTourism.php">
                                        <div class="flights-mobile">
                                            <img  class="img6" src="img/airplane.jpg" draggable="false">
                                            <div class="flights-overlay-mobile">
                                                <span>حجز تذاكر الطيران</span>
                                            </div>  <!-- /flights-overlay-mobile -->
                                        </div> <!-- /flights-mobile -->
                                    </a>
                                </div> <!-- /hajj-img-item-mobile -->
                                <i class="fas fa-arrow-right" id="right" onclick="move('.carousel6' , '.wrapper6 i' , '.img6')"></i>
                            </div> <!-- /hajj-img-mobile -->
                        </div> <!-- /hajj-mobile -->
                    </div> <!-- /mobile-tourism-content -->
                </div> <!-- /mobile-tourism -->
            </div> <!-- /main-container1-mobile -->

            <div class="main-container5">
                <div class="counter">
                    <div class="counter-overlay">

                    </div> <!-- /counter-overlay -->
                    <div class="counter-content">
                        <div class="counter-content-item">
                            <i class="fas fa-user-friends"></i>
                            <h3>451k</h3>
                            <span>happy clients</span>
                        </div> <!-- /counter-content-item -->
                        <div class="counter-content-item">
                            <i class="fas fa-trophy"></i>
                            <h3>12</h3>
                            <span>awards won</span>
                        </div> <!-- /counter-content-item -->
                        <div class="counter-content-item">
                            <i class="fas fa-mug-hot"></i>
                            <h3>154k</h3>
                            <span>cups of coffee</span>
                        </div> <!-- /counter-content-item -->
                        <div class="counter-content-item">
                            <i class="fas fa-file"></i>
                            <h3>45</h3>
                            <span>projects completed</span>
                        </div> <!-- /counter-content-item -->
                    </div> <!-- /counter-content -->
                </div> <!-- /counter -->
            </div> <!-- /main-container5 -->`

            <div class="main-container4">
                <div class="diploma">
                    <div class="diploma-content">
                        <div class="diploma-content-img">
                            <img src="img/diploma.jpg" draggable="false">
                        </div> <!-- /diploma-content-img -->
                        <div class="diploma-content-details">
                            <h2>دبلومة السياحة والسفر</h2>
                            <br><br>
                            <p>
                            دراسة متخصصة لجميع مجالات السياحة والسفر وحجز تذاكر الطيران الإلكترونى والفنادق بالتعاون مع شركة M2N Travel بنظام متكامل مسلسل يشمل الآتى/ 
                            1- أساسيات السياحة والسفر. 
                            2- المنظمات العالمية للطيران والسياحة. 
                            3- أنواع رحلات الطيران. 
                            4- أنواع وفئات شركات السياحة والسفر. 
                            5- كيفية عمل وتأسيس وتشغيل شركات الخدمات السياحية. 
                            6- التسويق العام والسياحى.
                            7- فنون مهارات البيع والتفاوض بخطوط الطيران. 
                            8- نظام أماديوس الإلكتروني لحجز تذاكر الطيران (أساسى - متقدم).
                            9- النقل السياحي والليموزين. 
                            </p>
                            <a href="diploma.php"> <button>المزيد من الدبلومات</button> </a>
                        </div> <!-- /diploma-content-details -->
                    </div> <!-- /diploma-content -->
                    
                </div> <!-- /diploma -->
            </div> <!-- /main-container4 -->

            <div class="main-container6">
                <div class="services"> 
                    <div class="services-title">
                        <h3>خدماتنا</h3> <hr>
                    </div> <!-- /services-title -->
                    <div class="services-item">
                        <img src="img/s1.png" draggable="false">
                        <h4>خدمة 1</h4>
                        <span>
                             أفضل خدمة على الإطلاق أفضل خدمة على الإطلاق أفضل خدمة على الإطلاق
                        </span>
                    </div> <!-- /services-item -->
                    <div class="services-item">
                        <img src="img/s2.png" draggable="false">
                        <h4>خدمة 2</h4>
                        <span>
                             أفضل خدمة على الإطلاق أفضل خدمة على الإطلاق أفضل خدمة على الإطلاق
                        </span>
                    </div> <!-- /services-item -->
                    <div class="services-item">
                        <img src="img/s3.png" draggable="false">
                        <h4>خدمة 3</h4>
                        <span>
                             أفضل خدمة على الإطلاق أفضل خدمة على الإطلاق أفضل خدمة على الإطلاق
                        </span>
                    </div> <!-- /services-item -->
                </div> <!-- /services -->
                <div class="feedback">
                    <div class="feedback-title">
                        <h3>رأي العملاء</h3>
                    </div> <!-- /feedback-title -->
                    <div class="feedback-item">
                        <i class="fas fa-user"></i>
                        <div class="feedback-item-title">
                            <h4>رائع</h4>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div> <!-- /feedback-item-title -->
                        <div class="feedback-item-content">
                            <span>رائع رائع رائع رائع رائع رائع رائع رائع رائع رائع رائع رائع رائع رائع رائع رائع رائع رائع رائع</span>
                        </div> <!-- /feedback-item-content -->
                    </div> <!-- /feedback-item -->
                    <div class="feedback-item">
                        <i class="fas fa-user"></i>
                        <div class="feedback-item-title">
                            <h4>رائع</h4>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div> <!-- /feedback-item-title -->
                        <div class="feedback-item-content">
                            <span>رائع رائع رائع رائع رائع رائع رائع رائع رائع رائع رائع رائع رائع رائع رائع رائع رائع رائع رائع</span>
                        </div> <!-- /feedback-item-content -->
                    </div> <!-- /feedback-item -->
                </div> <!-- /feedback -->
            </div> <!-- /main-container6 -->

            <?php require_once("footer.php"); ?>
        </div><!-- /main -->
        <!-- <script src="javascript/js.js"></script> -->

    </body>
</html>