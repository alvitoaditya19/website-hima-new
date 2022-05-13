@extends('layouts.e-commerce.app')

@section('style_css')
    <link rel="stylesheet" href="/styles/css/e-commerce/style.css" />
@endsection

@section('content')
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src="images/e-commerce/Edm.png" width="125px">
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="products.html">products</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="account.html">Account</a></li>
                    </ul>
                </nav>
                <a href="cart.html"><img src="images/e-commerce/chart.png" width="30px" height="30px"></a>
                <img src="images/e-commerce/menu.png" width="30px" height="30px" class="menu-icon" onclick="menutoggle()">
            </div>
            <div class="row">
                <div class="col-2">
                    <h1><strong>
                            <font color="orange">NOW OPEN !</font>
                        </strong><br>
                        <font color="#787D69">ELEKTRO DIGITAL MARKETING</font><br>
                        <font face="century gothic" color="">COME AND JOIN</font>
                    </h1>
                    <p>punya Barang dagangan atau barang sewaan ? atau punya bakat dan talenta ingin kami promosikan
                        ?<br>Kami siap bantu promosikan !!</p>
                    <a href="https://bit.ly/DaftarEDM" class="btn">AYO DAFTARKAN SEGERA &#10141;</a>
                    <a href="info.html" class="btn">More Info <i class="fa fa-book" aria-hidden="true"></i></a>
                </div>
                <div class="col-2">
                    <img src="images/e-commerce/orang.png">
                </div>
            </div>
        </div>
    </div>

    <!------------ features categories ----------->

    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <a href="raka.html">
                        <img src="images/e-commerce/raka.jpg">
                    </a>
                </div>
                <div class="col-3">
                    <a href="portofolio.html">
                        <img src="images/e-commerce/portofolio.jpg">
                    </a>
                </div>
                <div class="col-3">
                    <a href="photography.html">
                        <img src="images/e-commerce/fotografer.jpg">
                    </a>
                </div>
            </div>
        </div>

    </div>

    <!---------- feature prouducts ------------->

    <div class="small-container">
        <h2 class="title">Featured Products</h2>
        <div class="row">
            <div class="col-4">
                <a href="products-detail.html">
                    <img src="images/e-commerce/kasku.jpg">
                    <h4>Jeans Selvege Kasku</h4>
                    <div class="rating">
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star-half-alt" style="color: gold;"></i>
                </a>
            </div>
            <p>Rp.50.000</p>
        </div>
        <div class="col-4">
            <a href="soundpalu.html">
                <img src="images/e-commerce/sound.jpg">
                <h4>Sound system & Palu sidang</h4>
                <div class="rating">
                    <i class="fa fa-star" style="color: gold;"></i>
                    <i class="fa fa-star" style="color: gold;"></i>
                    <i class="fa fa-star" style="color: gold;"></i>
                    <i class="fa fa-star" style="color: gold;"></i>
                    <i class="fa fa-star-half-alt" style="color: gold;"></i>
                </div>
            </a>
            <p>Rp.25.000 - Rp.50.000</p>
        </div>
        <div class="col-4">
            <a href="lampusorot.html">
                <img src="images/e-commerce/lampu.jpg">
                <h4>Lampu sorot 200W</h4>
                <div class="rating">
                    <i class="fa fa-star" style="color: gold;"></i>
                    <i class="fa fa-star" style="color: gold;"></i>
                    <i class="fa fa-star" style="color: gold;"></i>
                    <i class="fa fa-star" style="color: gold;"></i>
                    <i class="fa fa-star-half-alt" style="color: gold;"></i>
                </div>
            </a>
            <p>Rp.30.000</p>
        </div>
        <div class="col-4">
            <a href="asese.html">
                <img src="images/e-commerce/asese-2.jpg">
                <h4>Sling Phone & Asese Short</h4>
                <div class="rating">
                    <i class="fa fa-star" style="color: gold;"></i>
                    <i class="fa fa-star" style="color: gold;"></i>
                    <i class="fa fa-star" style="color: gold;"></i>
                    <i class="fa fa-star" style="color: gold;"></i>
                    <i class="fa fa-star-half-alt" style="color: gold;"></i>
                </div>
            </a>
            <p>Rp.75.900</p>
        </div>
    </div>

    <!----------latest products-------->

    <h2 class="title">latest Products</h2>
    <div class="row">
        <div class="col-4">
            <a href="footwear.html">
                <img src="images/e-commerce/sepatu.jpg">
                <h4>Nove seven footwear</h4>
                <div class="rating">
                    <i class="fa fa-star" style="color: gold;"></i>
                    <i class="fa fa-star" style="color: gold;"></i>
                    <i class="fa fa-star" style="color: gold;"></i>
                    <i class="fa fa-star" style="color: gold;"></i>
                    <i class="fa fa-star-half-alt" style="color: gold;"></i>
                </div>
            </a>
            <p>Rp.100.000 - Rp.200.000</p>
        </div>
        <div class="col-4">
            <a href="asese.html">
                <img src="images/e-commerce/asese.jpg">
                <h4>Asese Sling Phone</h4>
                <div class="rating">
                    <i class="fa fa-star" style="color: gold;"></i>
                    <i class="fa fa-star" style="color: gold;"></i>
                    <i class="fa fa-star" style="color: gold;"></i>
                    <i class="fa fa-star" style="color: gold;"></i>
                    <i class="fa fa-star-half-alt" style="color: gold;"></i>
                </div>
            </a>
            <p>Rp.75.900</p>
        </div>
        <div class="col-4">
            <a href="asese.html">
                <img src="images/e-commerce/asese-4.jpg">
                <h4>Asese Short Pants</h4>
                <div class="rating">
                    <i class="fa fa-star" style="color: gold;"></i>
                    <i class="fa fa-star" style="color: gold;"></i>
                    <i class="fa fa-star" style="color: gold;"></i>
                    <i class="fa fa-star" style="color: gold;"></i>
                    <i class="fa fa-star-half-alt" style="color: gold;"></i>
                </div>
            </a>
            <p>Rp.75.900</p>
        </div>
        <div class="col-4">
            <a href="portofolio.html">
                <img src="images/e-commerce/portofolio-1.jpg">
                <h4>Desain feed ig, poster, pamflet.</h4>
                <div class="rating">
                    <i class="fa fa-star" style="color: gold;"></i>
                    <i class="fa fa-star" style="color: gold;"></i>
                    <i class="fa fa-star" style="color: gold;"></i>
                    <i class="fa fa-star" style="color: gold;"></i>
                    <i class="fa fa-star-half-alt" style="color: gold;"></i>
                </div>
            </a>
            <p>Rp.71.000 - Rp.121.000</p>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <a href="baso.html">
                <img src="images/e-commerce/baso.jpg">
                <h4>Hight Quality of Baso Aci</h4>
                <div class="rating">
                    <i class="fa fa-star" style="color: gold;"></i>
                    <i class="fa fa-star" style="color: gold;"></i>
                    <i class="fa fa-star" style="color: gold;"></i>
                    <i class="fa fa-star" style="color: gold;"></i>
                    <i class="fa fa-star-half-alt" style="color: gold;"></i>
                </div>
            </a>
            <p>Rp.12.000</p>
        </div>
        <div class="col-4">
            <a href="tauyam.html">
                <img src="images/e-commerce/tauyam.jpg">
                <h4>FROZENFOOD TAUYAM</h4>
                <div class="rating">
                    <i class="fa fa-star" style="color: gold;"></i>
                    <i class="fa fa-star" style="color: gold;"></i>
                    <i class="fa fa-star" style="color: gold;"></i>
                    <i class="fa fa-star" style="color: gold;"></i>
                    <i class="fa fa-star-half-alt" style="color: gold;"></i>
                </div>
            </a>
            <p>Rp.10.000 - Rp.50.000</p>
        </div>
        <div class="col-4">
            <a href="skincare.html">
                <img src="images/e-commerce/skincare.jpg">
                <h4>Skin care</h4>
                <div class="rating">
                    <i class="fa fa-star" style="color: gold;"></i>
                    <i class="fa fa-star" style="color: gold;"></i>
                    <i class="fa fa-star" style="color: gold;"></i>
                    <i class="fa fa-star" style="color: gold;"></i>
                    <i class="fa fa-star-half-alt" style="color: gold;"></i>
                </div>
            </a>
            <p>Rp.50.000</p>
        </div>
        <div class="col-4">
            <a href="drink.html">
                <img src="images/e-commerce/drink.jpg">
                <h4>Hayu Drink</h4>
                <div class="rating">
                    <i class="fa fa-star" style="color: gold;"></i>
                    <i class="fa fa-star" style="color: gold;"></i>
                    <i class="fa fa-star" style="color: gold;"></i>
                    <i class="fa fa-star" style="color: gold;"></i>
                    <i class="fa fa-star-half-alt" style="color: gold;"></i>
                </div>
            </a>
            <p>Rp.6.000</p>
        </div>
    </div>
    </div>
    <!--------- offer ------------->
    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="images/e-commerce/merch/merch.png" class="offer-img">
                </div>
                <div class="col-2">
                    <p>
                        <font color="#86340A"><strong>Exclusively Available on Edm.merch</strong></font>
                    </p>
                    <h1>
                        <font color="#787D69">Himanitro <br>Merchandise</font>
                    </h1>
                    <small>here we provide merchandise from himanitro which is of course very high quality and guaranteed to
                        be cheap, but not cheap</small>
                    <br><a href="merchendase.html" class="btn">Buy Now &#10141;</a>
                </div>
            </div>
        </div>
    </div>

    <!---------------style-------------->

    <div class="small-container">
        <h2 class="title">Stylish Products</h2>
        <div class="row">
            <div class="col-4">
                <a href="aero.html">
                    <img src="images/e-commerce/style/aero.png">
                    <h4>Aero Jacket</h4>
                    <div class="rating">
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star-half-alt" style="color: gold;"></i>
                    </div>
                </a>
                <p>Rp.190.000</p>
            </div>
            <div class="col-4">
                <a href="coach.html">
                    <img src="images/e-commerce/style/coach.png">
                    <h4>Coach Jacket</h4>
                    <div class="rating">
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star-half-alt" style="color: gold;"></i>
                    </div>
                </a>
                <p>Rp.160.000</p>
            </div>
            <div class="col-4">
                <a href="crewneck.html">
                    <img src="images/e-commerce/style/crewneck.png">
                    <h4>Crewneck</h4>
                    <div class="rating">
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star-half-alt" style="color: gold;"></i>
                    </div>
                </a>
                <p>Rp.160.000</p>
            </div>
            <div class="col-4">
                <a href="denim.html">
                    <img src="images/e-commerce/style/denim.png">
                    <h4>Denim Pants </h4>
                    <div class="rating">
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star-half-alt" style="color: gold;"></i>
                    </div>
                </a>
                <p>Rp.180.000</p>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <a href="flannel.html">
                    <img src="images/e-commerce/style/flanel.png">
                    <h4>Flannel shirt</h4>
                    <div class="rating">
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star-half-alt" style="color: gold;"></i>
                    </div>
                </a>
                <p>Rp.135.000</p>
            </div>
            <div class="col-4">
                <a href="hoodie.html">
                    <img src="images/e-commerce/style/hoodie.png">
                    <h4>Sweater Hoodie</h4>
                    <div class="rating">
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star-half-alt" style="color: gold;"></i>
                    </div>
                </a>
                <p>Rp.170.000</p>
            </div>
            <div class="col-4">
                <a href="jacket.html">
                    <img src="images/e-commerce/style/jacket.png">
                    <h4>Denim Jacket</h4>
                    <div class="rating">
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star-half-alt" style="color: gold;"></i>
                    </div>
                </a>
                <p>Rp.170.000</p>
            </div>
            <div class="col-4">
                <a href="pullover.html">
                    <img src="images/e-commerce/style/pullover.png">
                    <h4>Pullover Jacket</h4>
                    <div class="rating">
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star-half-alt" style="color: gold;"></i>
                    </div>
                </a>
                <p>Rp.190.000</p>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <a href="stripe.html">
                    <img src="images/e-commerce/style/stripe.png">
                    <h4>T-Shirt Stripe</h4>
                    <div class="rating">
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star-half-alt" style="color: gold;"></i>
                    </div>
                </a>
                <p>Rp.80.000</p>
            </div>
            <div class="col-4">
                <a href="trucker.html">
                    <img src="images/e-commerce/style/trucker.png">
                    <h4>Trucker Jacket</h4>
                    <div class="rating">
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star-half-alt" style="color: gold;"></i>
                    </div>
                </a>
                <p>Rp.170.000</p>
            </div>
            <div class="col-4">
                <a href="work.html">
                    <img src="images/e-commerce/style/work.png">
                    <h4>Work Jacket</h4>
                    <div class="rating">
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star-half-alt" style="color: gold;"></i>
                    </div>
                </a>
                <p>Rp.190.000</p>
            </div>
            <div class="col-4">
                <a href="cargo.html">
                    <img src="images/e-commerce/style/cargo.png">
                    <h4>Cargo Pants</h4>
                    <div class="rating">
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star-half-alt" style="color: gold;"></i>
                    </div>
                </a>
                <p>Rp.190.000</p>
            </div>
        </div>
    </div>


    <!----------- testimonial -------->
    <h2 class="title">Testimonial</h2>
    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Ut enim ad</p>
                    <div class="rating">
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star-half-alt" style="color: gold;"></i>
                    </div>
                    <img src="images/e-commerce/ridwan.jpg">
                    <h3>Ridwan Kamil</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Ut enim ad</p>
                    <div class="rating">
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star-half-alt" style="color: gold;"></i>
                    </div>
                    <img src="images/e-commerce/rektor.jpg">
                    <h3>Prof.Dr.H.Mahmud,M.Si.</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Ut enim ad</p>
                    <div class="rating">
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star" style="color: gold;"></i>
                        <i class="fa fa-star-half-alt" style="color: gold;"></i>
                    </div>
                    <img src="images/e-commerce/dedi.jpg">
                    <h3>Dedi Mizwar</h3>
                </div>
            </div>
        </div>
    </div>


    <!---------------- brands ---------------->

    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src="images/e-commerce/logo-1.png">
                </div>
                <div class="col-5">
                    <img src="images/e-commerce/logo-2.png">
                </div>
                <div class="col-5">
                    <img src="images/e-commerce/logo-3.png">
                </div>
                <div class="col-5">
                    <img src="images/e-commerce/logo-4.png">
                </div>
                <div class="col-5">
                    <img src="images/e-commerce/logo-5.png">
                </div>
            </div>
        </div>
    </div>

    <!-------------- footer ------------->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download our App</h3>
                    <p>Download App for Android and ios moile phone.</p>
                    <div class="app-logo">
                        <img src="images/e-commerce/p.png">
                        <img src="images/e-commerce/a.png">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="images/e-commerce/logo.png">
                    <p>Our purpose Is To Sustainably Make the Pleasure and Benefits of Sport Accessible to the Many.</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful links</h3>
                    <ul>
                        <li>coupons</li>
                        <li>Blog post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow Us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>YouTube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">copyright 2021 - Profesionalisme Jurusan</p>
        </div>
    </div>
@endsection

@section('style_js')
    <script>
        var MenuItems = document.getElementById("MenuItems");

        MenuItems.style.maxHeight = "0px";

        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px";
            } else {
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>
@endsection
