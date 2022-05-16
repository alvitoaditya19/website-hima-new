@extends('layouts.app')

@section('style_css')
  <link rel="stylesheet" href="{{ asset('/styles/css/style.css') }}" />
@endsection

@section('content')
  <!---------header section ends------->
  <section class="heading-link">
    <img src="/images/himanitro/himanitro.png" alt="" />
  </section>

  <!------- home section starts------>

  <section class="home">
    <div class="swiper home-slider">
      <div class="swiper-wrapper">
        <section
          class="swiper-slide slide"
          style="background: url(/images/latar/raker.png) no-repeat"
        >
          <div class="content">
            <h3>
              Rapat Kerja <font style="color: #ffffff">Himanitro</font> 2021 -
              2022
            </h3>
            <p>
              Penguatan Inovasi, Sinergi dan Optimalisasi Rancangan Program
              Kerja Organisasi Demi Terwujudnya Perkembangan Dan Kemajuan
              Himanitro
            </p>
            <a href="#" class="btn2">get started</a>
          </div>
        </section>

        <section
          class="swiper-slide slide"
          style="background: url(/images/latar/ipk-tertinggi.png) no-repeat"
        >
          <div class="content">
            <h3>
              Peraih IPK <font style="color: #ffffff">Tertinggi</font> Wisuda
              ke-82
            </h3>
            <p>
              Ririn Herawati Peraih IPK Tertinggi pada Wisuda Ke-82 UIN Sunan
              Gunung Djati Bandung
            </p>
            <a
              href="Himanitro News/berita/berita9.html"
              target="_blank"
              class="btn2"
              >get started</a
            >
          </div>
        </section>

        <section
          class="swiper-slide slide"
          style="background: url(/images/latar/gemtek-8.png) no-repeat"
        >
          <div class="content">
            <h3>
              Tulus & Fiersa Besari
              <font style="color: #ffffff">Memeriahkan</font> gemtek-8
            </h3>
            <p>
              Kegiatan Tekno Musik ini telah berhasil menutup acara GEMA TEKNO
              8 dengan meriah dan romantis dengan kehadiran dari Fiersa Besari
              dan Tulus
            </p>
            <a
              href="Himanitro News/berita/berita13.html"
              target="_blank"
              class="btn2"
              >get started</a
            >
          </div>
        </section>
      </div>

      <div class="swiper-pagination"></div>
    </div>
  </section>

  <!------- home section ends-------->

  <!-------- subject section starts------->

  <section class="subjects">
    <h1 class="heading">OUR Popular subject</h1>

    <div class="box-container">
      <div class="box">
        <img src="/images/subject/bank-soal.svg" />
        <p>
          Perpustakaan (kumpulan) data digital yang ada di Teknik Elektro.
        </p>
        <a href="{{ route('bank-soal') }}"
          ><button type="button" class="btn1">Bank Soal</button></a
        >
      </div>

      <div class="box">
        <img src="/images/subject/album.svg" />
        <p>
          Kumpulan foto kegiatan-kegiatan Himanitro dan Kegiatan Jurusan
          Teknik Elektro.
        </p>
        <a href="Himanitro News/Arsip/photo.html" target="_blank"
          ><button type="button" class="btn1">Album foto</button></a
        >
      </div>

      <div class="box">
        <img src="/images/subject/aspirasi.svg" />
        <p>Tempat Untuk menyampaikan Aspirasi Mahasiswa Teknik Elektro.</p>
        <br />
        <a href="#"><button type="button" class="btn1">Aspirasi</button></a>
      </div>

      <div class="box">
        <img src="/images/subject/maba-tekno.svg" />
        <p>Portal informasi Mahasiswa Baru Teknik Elektro UIN SGD Bandung.</p>
        <br />
        <a href="#"><button type="button" class="btn1">Maba Tekno</button></a>
      </div>
    </div>
    <div class="box-container">
      <div class="box">
        <img src="/images/subject/web-jurusan.svg" />
        <p>
          Portal informasi Jurusan Teknik Elektro UIN Sunan Gunung Djati
          Bandung.
        </p>
        <br />
        <a href="http://ee.uinsgd.ac.id/" target="_blank"
          ><button type="button" class="btn1">Web Jurusan</button></a
        >
      </div>

      <div class="box">
        <img src="/images/subject/oprec.svg" />
        <p>
          Portal Informasi Pendaftaran Kepengurusan Himanitro UIN SGD Bandung.
        </p>
        <a href="#" target="_blank"
          ><button type="button" class="btn1">Oprec</button></a
        >
      </div>

      <div class="box">
        <img src="/images/subject/courses.svg" />
        <p>Tempat pengumpulan arsip Himpunan mahasaswa Teknik Elektro</p>
        <a href="#" target="_blank"
          ><button type="button" class="btn1">Arsip</button></a
        >
      </div>

      <div class="box">
        <img src="/images/subject/e-commerce.svg" />
        <p>
          aktivitas jual beli yang dilakukan melalui media elektronik
          Himanitro.
        </p>
        <br />
        <a href="Edm/index.html" target="_blank"
          ><button type="button" class="btn1">E-commerce</button></a
        >
      </div>
    </div>
  </section>

  <!-------- subjects sectiov ends---------->

  <!-------- home courses slider section starts-->

  <section class="home-courses">
    <h1 class="heading">our popular News</h1>

    <div class="swiper home-courses-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide slide">
          <div class="image">
            <img src="/images/popular/popular12.jpg" alt="" />
            <h3>March Edition</h3>
          </div>
          <div class="content">
            <h3>March Edition</h3>
            <p>APPRECIATIONS ORGANIZING COMMITTEE OF THE MONTH</p>
            <a
              href="https://www.instagram.com/p/CcJyT2gJ-V5/?utm_source=ig_web_copy_link"
              target="_blank"
              class="btn2"
              >read more</a
            >
          </div>
        </div>

        <div class="swiper-slide slide">
          <div class="image">
            <img src="/images/popular/popular11.jpg" alt="" />
            <h3>March Edition</h3>
          </div>
          <div class="content">
            <h3>March Edition</h3>
            <p>APPRECIATIONS BEST DEPARTEMEN OF THE MONTH</p>
            <a
              href="https://www.instagram.com/p/CcJyH_hpkCu/?utm_source=ig_web_copy_link"
              target="_blank"
              class="btn2"
              >read more</a
            >
          </div>
        </div>

        <div class="swiper-slide slide">
          <div class="image">
            <img src="/images/popular/popular10.jpg" alt="" />
            <h3>March Edition</h3>
          </div>
          <div class="content">
            <h3>March Edition</h3>
            <p>APPRECIATIONS BEST STAFF OF THE MONTH</p>
            <a
              href="https://www.instagram.com/p/CcJx6CVpI1D/?utm_source=ig_web_copy_link"
              target="_blank"
              class="btn2"
              >read more</a
            >
          </div>
        </div>

        <div class="swiper-slide slide">
          <div class="image">
            <img src="/images/popular/popular9.jpg" alt="" />
            <h3>KELAS ELEKTRO</h3>
          </div>
          <div class="content">
            <h3>KELAS ELEKTRO</h3>
            <p>
              "Simulation of home automation project using arduino and android
              app in proteus"
            </p>
            <a
              href="https://www.instagram.com/p/CcIcM_OJFMp/?utm_source=ig_web_copy_link"
              target="_blank"
              class="btn2"
              >read more</a
            >
          </div>
        </div>

        <div class="swiper-slide slide">
          <div class="image">
            <img src="/images/popular/popular8.webp" alt="" />
            <h3>DIES NATALIS</h3>
          </div>
          <div class="content">
            <h3>DIES NATALIS</h3>
            <p>
              DIES NATALIS UIN SUNAN GUNUNG DJATI BANDUNG KE-54: 8 APRIL 1968
            </p>
            <a
              href="https://www.instagram.com/p/CcEvvZ5JqCU/?utm_source=ig_web_copy_link"
              target="_blank"
              class="btn2"
              >read more</a
            >
          </div>
        </div>

        <div class="swiper-slide slide">
          <div class="image">
            <img src="/images/popular/popular7.webp" alt="" />
            <h3>DISKUSI HUKUM</h3>
          </div>
          <div class="content">
            <h3>DISKUSI HUKUM</h3>
            <p>
              Mengingat pentingnya Pengantar Ilmu Hukum dan dasar ilmu Hukum
              untuk diketahui seluruh civitas
            </p>
            <a
              href="https://www.instagram.com/p/CcEro27Jpt-/?utm_source=ig_web_copy_link"
              target="_blank"
              class="btn2"
              >read more</a
            >
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-------- home courses slider section ends-->

  <!-------footer section starts----->

  <section class="footer">
    <div class="box-container">
      <div class="box">
        <h3><img src="/images/himanitro/icon-hima.png" alt="" /> Himanitro</h3>
        <p>
          Aula Studen Center Lt.4,UIN Sunan Gunung Djati, Jl.AH.Nasution,
          Bandung
        </p>
        <div class="share">
          <a
            href="https://www.instagram.com/himanitro.uinbdg/?utm_medium=copy_link"
            class="fa-brands fa-tiktok"
          ></a>
          <a
            href="https://www.youtube.com/channel/UCm4JuuOoK3M34jDOSte0TfQ"
            class="fab fa-twitter"
          ></a>
          <a
            href="https://twitter.com/himanitro_uin?s=21"
            class="fab fa-instagram"
          ></a>
          <a
            href="https://www.tiktok.com/@himanitro?_d=secCgYIASAHKAESPgo8j5Mr4CmnCcHNRJeArvXE5QyswVByyiU%2FPvyWiV2zhwVwudw4zO%2BvePV1XuYDGJTimPERzA1vMHw6t7XjGgA%3D&_r=1&checksum=e5842280b3065e191d06ed972c8bc0a6e26ad35a2971df9c435015f888a14950&language=en&sec_uid=MS4wLjABAAAAqAyUnnLKAZ8YcGWnXWPY1iLW4o9MrM0VszdlR1F8OZvjM0soj-6eNkwOcQuucgF4&sec_user_id=MS4wLjABAAAAXPTNHDrhC3R0eSi8ZWM5DE4gRaD-CvdYSr8NChe7f5Rm3pjLEc3QHPU-hwycrKGS&share_app_id=1180&share_author_id=7074220685404488731&share_link_id=7830079A-20EF-42CB-8A84-9CB016D31750&social_sharing=v3&source=h5_t&tt_from=copy&u_code=daldjle82jhl8k&user_id=6792202414357758978&utm_campaign=client_share&utm_medium=ios&utm_source=copy"
            class="fa-brands fa-youtube"
          ></a>
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
          <input
            type="email"
            name=""
            placeholder="enter your email"
            id=""
            class="email"
          />
          <input type="submit" value="subcribe" class="btn1" />
        </form>
      </div>
    </div>

    <div class="credit">
      created by <span>Profesionalisme jurusan</span> | all right reserved!
    </div>
  </section>
@endsection

@section('style_js')
  <script src="/styles/js/home.js"></script>
@endsection