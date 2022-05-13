@extends('layouts.app')

@section('style_css')
  <link rel="stylesheet" href="/styles/css/style.css" />
@endsection

@section('content')
  
<!-------- header section ends ---->

<section class="heading-link">
  <img src="images/himanitro/himanitro.png" alt="">
  <p> <a href="index.html">home</a> / Courses </p>
</section>

<!------- contact section starts---->

<section class="contact">

  <h1 class="heading"> get in touch </h1>

  <div class="icons-container">

     <div class="icons">
        <i class="fas fa-clock"></i>
        <h3>opening hours : </h3>
        <p>00:07am to 00:06pm</p>
     </div>

     <div class="icons">
        <i class="fas fa-phone"></i>
        <h3>phone : </h3>
        <p>08524262810</p>
     </div>

     <div class="icons">
        <i class="fas fa-envelope"></i>
        <h3>email : </h3>
        <p>himanitro@gmail.com</p>
     </div>

     <div class="icons">
        <i class="fas fa-map"></i>
        <h3>address : </h3>
        <p>kota bandung, jawa barat</p>
     </div>

  </div>

  <div class="row">

     <div class="image">
        <img src="images/contact.svg" alt="">
     </div>
     <form action="">
        <h3>send us a message</h3>
        <input type="text" placeholder="name" class="box">
        <input type="email" placeholder="email" class="box">
        <input type="number" placeholder="phone" class="box">
        <textarea name="" class="box" placeholder="message" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="send message" class="btn1">
     </form>

  </div>

</section>

<!-------- contact section ends---->

<!-------- faq section starts----->
<section class="faq">

  <h1 class="heading">frequently asked questions</h1>

     <div class="accordion-container">

        <div class="accordion active">
           <div class="accordion-heading">
              <h3>how to contact for help ?</h3>
              <i class="fas fa-angle-down"></i>
           </div>
           <p class="accordion-content">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit libero magni totam iure delectus aliquid, nemo ipsam itaque laboriosam molestias, expedita voluptate quisquam ipsa exercitationem. Atque officia cum quia doloribus?
           </p>
        </div>

        <div class="accordion">
           <div class="accordion-heading">
              <h3>what is the best career in 2022?</h3>
              <i class="fas fa-angle-down"></i>
           </div>
           <p class="accordion-content">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit libero magni totam iure delectus aliquid, nemo ipsam itaque laboriosam molestias, expedita voluptate quisquam ipsa exercitationem. Atque officia cum quia doloribus?
           </p>
        </div>

        <div class="accordion">
           <div class="accordion-heading">
              <h3>how much fees for web deveplopment ?</h3>
              <i class="fas fa-angle-down"></i>
           </div>
           <p class="accordion-content">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit libero magni totam iure delectus aliquid, nemo ipsam itaque laboriosam molestias, expedita voluptate quisquam ipsa exercitationem. Atque officia cum quia doloribus?
           </p>
        </div>

        <div class="accordion">
           <div class="accordion-heading">
              <h3>can i choose my own tutor ?</h3>
              <i class="fas fa-angle-down"></i>
           </div>
           <p class="accordion-content">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit libero magni totam iure delectus aliquid, nemo ipsam itaque laboriosam molestias, expedita voluptate quisquam ipsa exercitationem. Atque officia cum quia doloribus?
           </p>
        </div>

        <div class="accordion">
           <div class="accordion-heading">
              <h3>what payment methods are available?</h3>
              <i class="fas fa-angle-down"></i>
           </div>
           <p class="accordion-content">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit libero magni totam iure delectus aliquid, nemo ipsam itaque laboriosam molestias, expedita voluptate quisquam ipsa exercitationem. Atque officia cum quia doloribus?
           </p>
        </div>

        <div class="accordion">
           <div class="accordion-heading">
              <h3>how to contact for help ?</h3>
              <i class="fas fa-angle-down"></i>
           </div>
           <p class="accordion-content">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit libero magni totam iure delectus aliquid, nemo ipsam itaque laboriosam molestias, expedita voluptate quisquam ipsa exercitationem. Atque officia cum quia doloribus?
           </p>
        </div>

        <div class="accordion">
           <div class="accordion-heading">
              <h3>can i have free trial for a month ?</h3>
              <i class="fas fa-angle-down"></i>
           </div>
           <p class="accordion-content">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit libero magni totam iure delectus aliquid, nemo ipsam itaque laboriosam molestias, expedita voluptate quisquam ipsa exercitationem. Atque officia cum quia doloribus?
           </p>
        </div>

     </div>


</section>
<!-------- faq section ends----->

<!-------- logo slider starts--->

<section class="logo-container">
  <div class="swiper logo-slider">
     <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="images/himanitro/departemen/ex-officio/logo-kabinet.png" alt=""></div>
        <div class="swiper-slide"><img src="images/himanitro/departemen/pao/logo-pao.png" alt=""></div>
        <div class="swiper-slide"><img src="images/himanitro/departemen/profjur/logo-profjur.png" alt=""></div>
        <div class="swiper-slide"><img src="images/himanitro/departemen/wirus/logo-wirus.png" alt=""></div>
        <div class="swiper-slide"><img src="images/himanitro/departemen/sosmas/logo-sosmas.png" alt=""></div>
        <div class="swiper-slide"><img src="images/himanitro/departemen/advokom/logo-advokom.png" alt=""></div>
        <div class="swiper-slide"><img src="images/himanitro/departemen/rohani/logo-kerohanian.png" alt=""></div>
        <div class="swiper-slide"><img src="images/himanitro/departemen/senior/logo-senior.png" alt=""></div>
     </div>
  </div>
</section>

<!-------footer   -->
<section class="footer">

  <div class="box-container">

     <div class="box">
        <h3><img src="images/himanitro/icon-hima.png" alt=""> Himanitro</h3>
        <p>Aula Studen Center Lt.4,UIN Sunan Gunung Djati, Jl.AH.Nasution, Bandung</p>
        <div class="share">
           <a href="https://www.instagram.com/himanitro.uinbdg/?utm_medium=copy_link" class="fa-brands fa-tiktok"></a>
           <a href="https://www.youtube.com/channel/UCm4JuuOoK3M34jDOSte0TfQ" class="fab fa-twitter"></a>
           <a href="https://twitter.com/himanitro_uin?s=21" class="fab fa-instagram"></a>
           <a href="https://www.tiktok.com/@himanitro?_d=secCgYIASAHKAESPgo8j5Mr4CmnCcHNRJeArvXE5QyswVByyiU%2FPvyWiV2zhwVwudw4zO%2BvePV1XuYDGJTimPERzA1vMHw6t7XjGgA%3D&_r=1&checksum=e5842280b3065e191d06ed972c8bc0a6e26ad35a2971df9c435015f888a14950&language=en&sec_uid=MS4wLjABAAAAqAyUnnLKAZ8YcGWnXWPY1iLW4o9MrM0VszdlR1F8OZvjM0soj-6eNkwOcQuucgF4&sec_user_id=MS4wLjABAAAAXPTNHDrhC3R0eSi8ZWM5DE4gRaD-CvdYSr8NChe7f5Rm3pjLEc3QHPU-hwycrKGS&share_app_id=1180&share_author_id=7074220685404488731&share_link_id=7830079A-20EF-42CB-8A84-9CB016D31750&social_sharing=v3&source=h5_t&tt_from=copy&u_code=daldjle82jhl8k&user_id=6792202414357758978&utm_campaign=client_share&utm_medium=ios&utm_source=copy" class="fa-brands fa-youtube"></a>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="/styles/js/contact.js"></script>
@endsection