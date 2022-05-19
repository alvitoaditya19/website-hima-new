@extends('layouts.app')

@section('style_css')
    <link rel="stylesheet" href="/styles/css/style.css" />
@endsection

@section('content')
    <!------- header section ends -->
    <section class="heading-link">
        <img src="images/himanitro/himanitro.png" alt="">
        <p> <a href="index.html">home</a> / Courses </p>
    </section>

    <section class="courses">

        <h1 class="heading"> our famous courses </h1>
     
        <div class="box-container">

            @php $incrementCategory = 0 @endphp
            @forelse ($courses as $course)
                <div class="box" data-aos-delay="{{ $incrementCategory += 100 }}">
                    <div class="image">
                    <img src="{{ Storage::url($course->photos) }}" alt="">
                    <h3>{{ $course->name_dosen }}</h3>
                    </div>
                    <div class="content">
                    <h3>{{ $course->name_course }}</h3>
                    <a href="{{ $course->link }}" target="_blank" class="btn1">read more</a>
                    <div class="icons">
                        <span> <i class="fas fa-book"></i> UIN SGD </span>
                        <span> <i class="fas fa-clock"></i> {{ $course->jumlah_video }} video </span>
                    </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-5" data-aos="fade-up" data-aos-delay="100">
                    No Course Found
                </div>
            @endforelse
     
           <div class="box">
              <div class="image">
                 <img src="images/courses/sistem control.png" alt="">
                 <h3>Rina mardiati</h3>
              </div>
              <div class="content">
                 <h3>Dasar Sistem control</h3>
                 <a href="https://www.youtube.com/watch?v=KXI5B4q8ji8&list=PLq_m9H_T9eDSHYJ1K9BiMLQEC9XiLK1ZQ" target="_blank" class="btn1">read more</a>
                 <div class="icons">
                    <span> <i class="fas fa-book"></i> UIN SGD </span>
                    <span> <i class="fas fa-clock"></i> 2 video </span>
                 </div>
              </div>
           </div>
     
           <div class="box">
              <div class="image">
                 <img src="images/courses/kalkulus 1.png" alt="">
                 <h3>Rina Mardiati</h3>
              </div>
              <div class="content">
                 <h3>Kalkulus 1</h3>
                 <a href="https://www.youtube.com/watch?v=Zm55-I_nHAQ&list=PLq_m9H_T9eDRvKmX2EF9njRaDgeD2MTn3" target="_blank" class="btn1">read more</a>
                 <div class="icons">
                    <span> <i class="fas fa-book"></i> Uin SGD </span>
                    <span> <i class="fas fa-clock"></i> 19 video </span>
                 </div>
              </div>
           </div>
     
           <div class="box">
              <div class="image">
                 <img src="images/courses/kalukulus 2.png" alt="">
                 <h3>Kalkulus 2</h3>
              </div>
              <div class="content">
                 <h3>Kalkulus 2</h3>
                 <a href="https://www.youtube.com/watch?v=lBXcTfuiHYo&list=PLq_m9H_T9eDRQbbgqWsDaV4Z-iV7OlpwZ" target="_blank" class="btn1">read more</a>
                 <div class="icons">
                    <span> <i class="fas fa-book"></i> UIN SGD </span>
                    <span> <i class="fas fa-clock"></i> 18 video </span>
                 </div>
              </div>
           </div>
     
           <div class="box">
              <div class="image">
                 <img src="images/courses/matek 1.png" alt="">
                 <h3>Rina mardiati</h3>
              </div>
              <div class="content">
                 <h3>Matematika Teknik 1</h3>
                 <a href="https://www.youtube.com/watch?v=8gmSJOtMgrc&list=PLq_m9H_T9eDRwAL-CZbqJmVVs9x3bv5Nc" target="_blank" class="btn1">read more</a>
                 <div class="icons">
                    <span> <i class="fas fa-book"></i> UIN SGD </span>
                    <span> <i class="fas fa-clock"></i> 16 Video </span>
                 </div>
              </div>
           </div>
     
           <div class="box">
              <div class="image">
                 <img src="images/courses/matek 2.png" alt="">
                 <h3>Rina Mardiati</h3>
              </div>
              <div class="content">
                 <h3>Matematika teknik 2</h3>
                 <a href="https://www.youtube.com/watch?v=8gmSJOtMgrc&list=PLq_m9H_T9eDRwAL-CZbqJmVVs9x3bv5Nc" target="_blank" class="btn1">read more</a>
                 <div class="icons">
                    <span> <i class="fas fa-book"></i> UIN SGD </span>
                    <span> <i class="fas fa-clock"></i> 16 Video </span>
                 </div>
              </div>
           </div>
     
           <div class="box">
              <div class="image">
                 <img src="images/courses/sistem kendali cerdas.png" alt="">
                 <h3>Rina Mardiati</h3>
              </div>
              <div class="content">
                 <h3>Sistem Kendali Cerdas</h3>
                 <a href="https://www.youtube.com/watch?v=XAHP_9oCexk&list=PLq_m9H_T9eDSFhQERfwZMh2AzjzJyagxu" target="_blank" class="btn1">read more</a>
                 <div class="icons">
                    <span> <i class="fas fa-book"></i> UIN SGD </span>
                    <span> <i class="fas fa-clock"></i> 2 Video </span>
                 </div>
              </div>
           </div>
     
           <div class="box">
              <div class="image">
                 <img src="images/courses/teknik digital.png" alt="">
                 <h3>Lia kamelia</h3>
              </div>
              <div class="content">
                 <h3>Teknik Digital</h3>
                 <a href="https://www.youtube.com/watch?v=RDaOj7dsp5Q&list=PLqqSZiJxF5ws8rO0rZP5K9yDYK1-3hLg-" target="_blank" class="btn1">read more</a>
                 <div class="icons">
                    <span> <i class="fas fa-book"></i> UIN SGD </span>
                    <span> <i class="fas fa-clock"></i> 9 Video </span>
                 </div>
              </div>
           </div>
     
           <div class="box">
              <div class="image">
                 <img src="images/courses/kecerdasan buatan.png" alt="">
                 <h3>Lia kamelia</h3>
              </div>
              <div class="content">
                 <h3>Kecerdasan Buatan</h3>
                 <a href="https://www.youtube.com/watch?v=jEM5dTZQDIU&list=PLqqSZiJxF5wsmG1rgX9W5awxL1u97ipP-" target="_blank" class="btn1">read more</a>
                 <div class="icons">
                    <span> <i class="fas fa-book"></i> UIN SGD </span>
                    <span> <i class="fas fa-clock"></i> 6 Video </span>
                 </div>
              </div>
           </div>
     
           <div class="box">
              <div class="image">
                 <img src="images/courses/digitalisasi citra.png" alt="">
                 <h3>Lia kamelia</h3>
              </div>
              <div class="content">
                 <h3>PCB</h3>
                 <a href="https://www.youtube.com/watch?v=r9BC1Disiw8&list=PLqqSZiJxF5wtg-m7smtANWNm3xhHD6fn7" target="_blank" class="btn1">read more</a>
                 <div class="icons">
                    <span> <i class="fas fa-book"></i> UIN SGD </span>
                    <span> <i class="fas fa-clock"></i> 1 Video </span>
                 </div>
              </div>
           </div>
     
           <!---->
     
           <div class="box">
              <div class="image">
                 <img src="images/courses/system tenaga listrik.png" alt="">
                 <h3>Nike Sartika</h3>
              </div>
              <div class="content">
                 <h3>System Tenaga listrik</h3>
                 <a href="https://www.youtube.com/watch?v=LIY_tXYUc1Y&list=PLmRvBWbaJy4-QKPsA-OuAN6WokZMXz--1" target="_blank" class="btn1">read more</a>
                 <div class="icons">
                    <span> <i class="fas fa-book"></i> UIN SGD </span>
                    <span> <i class="fas fa-clock"></i> 9 Video </span>
                 </div>
              </div>
           </div>
     
           <div class="box">
              <div class="image">
                 <img src="images/courses/elektronika daya.png" alt="">
                 <h3>Nike Sartika</h3>
              </div>
              <div class="content">
                 <h3>Elektronika Daya</h3>
                 <a href="https://www.youtube.com/watch?v=6JYznk4XtKA&list=PLmRvBWbaJy49MhPYOAFHrZNc-PDBDrVbI" target="_blank" class="btn1">read more</a>
                 <div class="icons">
                    <span> <i class="fas fa-book"></i> UIN SGD </span>
                    <span> <i class="fas fa-clock"></i> 1 Video </span>
                 </div>
              </div>
           </div>
     
           <div class="box">
              <div class="image">
                 <img src="images/courses/teknik proteksi.png" alt="">
                 <h3>Nike Sartika</h3>
              </div>
              <div class="content">
                 <h3>Teknik Proteksi</h3>
                 <a href="https://www.youtube.com/watch?v=-MCTFN_YGXI&list=PLmRvBWbaJy4_OCK-qJDMaYKbYGkWZHCRg" target="_blank" class="btn1">read more</a>
                 <div class="icons">
                    <span> <i class="fas fa-book"></i> UIN SGD </span>
                    <span> <i class="fas fa-clock"></i> 13 Video </span>
                 </div>
              </div>
           </div>
     
           <div class="box">
              <div class="image">
                 <img src="images/courses/mesin listrik.png" alt="">
                 <h3>Nike Sartika</h3>
              </div>
              <div class="content">
                 <h3>Mesin Listrik</h3>
                 <a href="https://www.youtube.com/watch?v=LIY_tXYUc1Y&list=PLmRvBWbaJy4-QKPsA-OuAN6WokZMXz--1" target="_blank" class="btn1">read more</a>
                 <div class="icons">
                    <span> <i class="fas fa-book"></i> UIN SGD </span>
                    <span> <i class="fas fa-clock"></i> 9 Video </span>
                 </div>
              </div>
           </div>
     
           <div class="box">
              <div class="image">
                 <img src="images/courses/teorema thevenin.png" alt="">
                 <h3>Rifki Fauzan</h3>
              </div>
              <div class="content">
                 <h3>Teorema Thevenin</h3>
                 <a href="https://www.youtube.com/watch?v=5FnxRr7mbfk&t=573s" target="_blank" class="btn1">read more</a>
                 <div class="icons">
                    <span> <i class="fas fa-book"></i> UIN SGD </span>
                    <span> <i class="fas fa-clock"></i> 1 Video </span>
                 </div>
              </div>
           </div>
     
           <div class="box">
              <div class="image">
                 <img src="images/courses/simulasi robot thinkercad.png" alt="">
                 <h3>Fadli Afdalash</h3>
              </div>
              <div class="content">
                 <h3>Simulasi Robot thinkercad</h3>
                 <a href="https://www.youtube.com/watch?v=xUa9oyHASSI&list=PL45f_LnADpbsRFlYXhDuHFf1id6V0MP6D" target="_blank" class="btn1">read more</a>
                 <div class="icons">
                    <span> <i class="fas fa-book"></i> UIN SGD </span>
                    <span> <i class="fas fa-clock"></i> 5 Video </span>
                 </div>
              </div>
           </div>
     
           <div class="box">
              <div class="image">
                 <img src="images/courses/praktikum elektronika.png" alt="">
                 <h3>Muhammad Alvito</h3>
              </div>
              <div class="content">
                 <h3>Praktikum Elektronika</h3>
                 <a href="https://www.youtube.com/channel/UCY1ZK6uM35FdHJrqcNxY1kg/videos" target="_blank" class="btn1">read more</a>
                 <div class="icons">
                    <span> <i class="fas fa-book"></i> UIN SGD </span>
                    <span> <i class="fas fa-clock"></i> 5 Video </span>
                 </div>
              </div>
           </div>
     
           <div class="box">
              <div class="image">
                 <img src="images/courses/slicing landing page.png" alt="">
                 <h3>Heru Ramdani</h3>
              </div>
              <div class="content">
                 <h3>Slicing Landing Page</h3>
                 <a href="https://www.youtube.com/watch?v=45mNiwW2VxE" target="_blank" class="btn1">read more</a>
                 <div class="icons">
                    <span> <i class="fas fa-book"></i> UIN SGD </span>
                    <span> <i class="fas fa-clock"></i> 1 Video </span>
                 </div>
              </div>
           </div>
     
        </div>
     
        <div><a href="#" id="loadMore" class="btn1">Load More</a></div>
     
     </section>




    <!-------footer   -->
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
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="/styles/js/courses.js"></script>
    <script>

    </script>

@endsection
