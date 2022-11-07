@extends('layouts.app')

@section('style_css')
    <link rel="stylesheet" href="/styles/css/style.css" />
@endsection

@section('content')
    <!---------header section ends------->
    <section class="heading-link">
        <img src="images/himanitro/himanitro.png" alt="">
        <p> <a href="index.html">home</a> / Departemen </p>
    </section>

    <!-------- subject section starts------->

    <section class="subjects">
        <h1 class="heading">OUR Departemen Himanitro</h1>

        <div class="box-container">

            <div class="box">
                <img src="images/himanitro/departemen/ex-officio/logo-kabinet.png">
                <h3>Ex-officio</h3>
                <a href="{{ route('exoff') }}"><button type="button" class="btn1"> Explore <i
                            class="fa-solid fa-angles-right"></i></button></a>
            </div>

            <div class="box">
                <img src="images/himanitro/departemen/pao/logo-pao.png">
                <h3>PAO</h3>
                <a href="pao.html"><button type="button" class="btn1"> Explore <i
                            class="fa-solid fa-angles-right"></i></button></a>
            </div>

            <div class="box">
                <img src="images/himanitro/departemen/rohani/logo-kerohanian.png">
                <h3>Kerohanian</h3>
                <a href="rohani.html"><button type="button" class="btn1"> Explore <i
                            class="fa-solid fa-angles-right"></i></button></a>
            </div>

            <div class="box">
                <img src="images/himanitro/departemen/advokom/logo-advokom.png">
                <h3>advokom</h3>
                <a href="advokom.html"><button type="button" class="btn1"> Explore <i
                            class="fa-solid fa-angles-right"></i></button></a>
            </div>

        </div>

        <div class="box-container">

            <div class="box">
                <img src="images/himanitro/departemen/profjur/logo-profjur.png">
                <h3>Profjur</h3>
                <a href="profjur.html"><button type="button" class="btn1"> Explore <i
                            class="fa-solid fa-angles-right"></i></button></a>
            </div>

            <div class="box">
                <img src="images/himanitro/departemen/sosmas/logo-sosmas.png">
                <h3>Sosmas</h3>
                <a href="sosmas.html"><button type="button" class="btn1"> Explore <i
                            class="fa-solid fa-angles-right"></i></button></a>
            </div>

            <div class="box">
                <img src="images/himanitro/departemen/senior/logo-senior.png">
                <h3>Senior</h3>
                <a href="senior.html"><button type="button" class="btn1"> Explore <i
                            class="fa-solid fa-angles-right"></i></button></a>
            </div>

            <div class="box">
                <img src="images/himanitro/departemen/wirus/logo-wirus.png">
                <h3>Wirus</h3>
                <a href="wirus.html"><button type="button" class="btn1"> Explore <i
                            class="fa-solid fa-angles-right"></i></button></a>
            </div>

        </div>
    </section>

    <!-------- subjects sectiov ends---------->

    <!-------footer section starts----->
    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3><img src="images/himanitro/icon-hima.png" alt=""> Himanitro</h3>
                <p>Aula Studen Center Lt.4,UIN Sunan Gunung Djati, Jl.AH.Nasution, Bandung</p>
                <div class="share">
                    <a href="https://www.instagram.com/himanitro.uinbdg/?utm_medium=copy_link"
                        class="fa-brands fa-tiktok"></a>
                    <a href="https://www.youtube.com/channel/UCm4JuuOoK3M34jDOSte0TfQ" class="fab fa-twitter"></a>
                    <a href="https://twitter.com/himanitro_uin?s=21" class="fab fa-instagram"></a>
                    <a href="https://www.tiktok.com/@himanitro?_d=secCgYIASAHKAESPgo8j5Mr4CmnCcHNRJeArvXE5QyswVByyiU%2FPvyWiV2zhwVwudw4zO%2BvePV1XuYDGJTimPERzA1vMHw6t7XjGgA%3D&_r=1&checksum=e5842280b3065e191d06ed972c8bc0a6e26ad35a2971df9c435015f888a14950&language=en&sec_uid=MS4wLjABAAAAqAyUnnLKAZ8YcGWnXWPY1iLW4o9MrM0VszdlR1F8OZvjM0soj-6eNkwOcQuucgF4&sec_user_id=MS4wLjABAAAAXPTNHDrhC3R0eSi8ZWM5DE4gRaD-CvdYSr8NChe7f5Rm3pjLEc3QHPU-hwycrKGS&share_app_id=1180&share_author_id=7074220685404488731&share_link_id=7830079A-20EF-42CB-8A84-9CB016D31750&social_sharing=v3&source=h5_t&tt_from=copy&u_code=daldjle82jhl8k&user_id=6792202414357758978&utm_campaign=client_share&utm_medium=ios&utm_source=copy"
                        class="fa-brands fa-youtube"></a>
                </div>
            </div>

            <div class="box">
                <h3>quick link</h3>
                <a href="index.html" class="link">Home</a>
                <a href="about.html" class="link">about</a>
                <a href="courses.html" class="link">courses</a>
                <a href="contact.html" class="link">contact</a>

            </div>

            <div class="box">
                <h3>useful link</h3>
                <a href="contact.html" class="link">help center</a>
                <a href="contact.html" class="link">ask questions</a>
                <a href="contact.html" class="link">send feedback</a>
                <a href="contact.html" class="link">private policy</a>
                <a href="contact.html" class="link">terms of use</a>
            </div>

            <div class="box">
                <h3>news letter</h3>
                <p>Email : himanitro@uinsgd.ac.id</p>
                <form action="">
                    <input type="email" name="" placeholder="enter your email" id="" class="email">
                    <input type="submit" value="subcribe" class="btn1">
                </form>
            </div>

        </div>

        <div class="credit">created by <span>Profesionalisme jurusan</span> | all right reserved!</div>
    </section>
@endsection

@section('style_js')
    <script src="/styles/js/home.js"></script>
@endsection
