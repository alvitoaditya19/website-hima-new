@extends('layouts.app')

@section('style_css')
    <link rel="stylesheet" href="/styles/css/style.css" />
@endsection

@section('content')
    <!---------header section ends------->
    <section class="heading-link">
        <img src="images/himanitro/himanitro.png" alt="">
        <p> <a href="index.html">home</a> / Dosen </p>
    </section>

    <!--------- about section starts----->

    <section class="about">

        <div class="image">
            <img src="images/fakultas.jpg">
            <h3>Gedung Fakultas - Fakukltas Sains dan Teknologi</h3>
            <p><em>photo by : http://fst.uinsgd.ac.id/</em></p>
        </div>

        <div class="content">
            <h3 class="about-title">Teknik Elektro UIN SGD Bandung </h3>
            <p>Jurusan Teknik Elektro UIN Sunan Gunung Djati Bandung berdiri pada tahun 2006 dengan mulai menerima mahasiswa
                baru tahun ajaran (TA) 2008/2009. Pada tahun pertama berdiri, kurikulum jurusan teknik elektro memiliki satu
                konsentrasi yaitu elektro telekomunikasi. Pada tahun 2015, dilakukan peninjauan kurikulum yang menghasilkan
                kurikulum baru yang tidak mengarah khusus ke satu konsentrasi. Peminatan mahasiswa dibebaskan dengan memilih
                mata kuliah pilihan yang disajikan.</p>
            <div class="icons-container">
                <div class="icons">
                    <img src="images/sks.svg">
                    <h3>147+</h3>
                    <span>SkS</span>
                </div>
                <div class="icons">
                    <img src="images/matkul.svg">
                    <h3>67+</h3>
                    <span>Mata Kuliah</span>
                </div>
                <div class="icons">
                    <img src="images/dosen.svg">
                    <h3>10+</h3>
                    <span>Dosen</span>
                </div>
            </div>
        </div>

    </section>

    <!--------- about section ends------->

    <!--------- teachers section starts----->
    <section class="lecture">
        <h1 class="heading">Lecture Electrical Engineering</h1>
        <div class="blog-slider">

            <div class="blog-slider__wrp swiper-wrapper">

                <div class="blog-slider__item swiper-slide">
                    <div class="blog-slider__img">
                        <img src="images/dosen/nanang-ismail.png" alt="">
                    </div>
                    <div class="blog-slider__content">
                        <span class="blog-slider__code">Ketua Jurusan</span>
                        <div class="blog-slider__title">NANANG ISMAIL,M.T.</div>
                        <div class="blog-slider__text">Jaringan Telekomunikasi, Pengolahan Sinyal Digital, Sistem Kendali,
                            Jaringan Telekomunikasi dll</div>
                        <a href="https://forlap.kemdikbud.go.id/dosen/detail/M0E0MkNBQzUtNTMwMS00RDg3LTlBMTAtNjNEN0RFNEYyN0Ix"
                            class="blog-slider__button">READ MORE</a>
                    </div>
                </div>

                <div class="blog-slider__item swiper-slide">
                    <div class="blog-slider__img">
                        <img src="images/dosen/EKI-AHMAD.png" alt="">
                    </div>
                    <div class="blog-slider__content">
                        <span class="blog-slider__code">Sekretaris jurusan</span>
                        <div class="blog-slider__title">EKI AHMAD ZAKI HAMIDI,M.T.</div>
                        <div class="blog-slider__text">Software Defined Network, Elektronika 2, Jaringan Antrian, Rangkaian
                            Elektrik, Pengantar Analisis Rangkaian, </div>
                        <a href="https://forlap.kemdikbud.go.id/dosen/detail/Qjg1RUEyREEtM0I4MS00OEIzLTk3NUItOUMyQkVFQjg2NTlG"
                            class="blog-slider__button">READ MORE</a>
                    </div>
                </div>

                <div class="blog-slider__item swiper-slide">
                    <div class="blog-slider__img">
                        <img src="images/dosen/MUFID-RIDLO.png" alt="">
                    </div>
                    <div class="blog-slider__content">
                        <span class="blog-slider__code">Koordinator Laboratorium</span>
                        <div class="blog-slider__title">MUFID RIDLO EFFENDI,M.T.</div>
                        <div class="blog-slider__text">Sistem Instrumentasi, Rekayasa Trafik, Sistem Kendali, Sistem
                            Instrumentasi, Sistem Operasi, Sistem Multimedia</div>
                        <a href="https://forlap.kemdikbud.go.id/dosen/detail/NjZEOENGQzQtRTIwQy00MUI0LUJCNkUtQzE2Q0UxMEY2NDU2"
                            class="blog-slider__button">READ MORE</a>
                    </div>
                </div>

                <div class="blog-slider__item swiper-slide">
                    <div class="blog-slider__img">
                        <img src="images/dosen/EDI-M.png" alt="">
                    </div>
                    <div class="blog-slider__content">
                        <span class="blog-slider__code">Dosen</span>
                        <div class="blog-slider__title">EDI MULYANA,M.T.</div>
                        <div class="blog-slider__text">Praktikum Pemrograman, Pemrograman, Sistem Operasi, Teori Bahasa dan
                            Otomata, Pemrograman I, Sistem Mikroprosesor, Pemrograman 2, </div>
                        <a href="https://forlap.kemdikbud.go.id/dosen/detail/Nzc2MjJDQTUtRjhFMS00Njk4LTg2MDItOTY2NTRDRDYzRDkx"
                            class="blog-slider__button">READ MORE</a>
                    </div>
                </div>

                <div class="blog-slider__item swiper-slide">
                    <div class="blog-slider__img">
                        <img src="images/dosen/RINA_MARDIATI.png" alt="">
                    </div>
                    <div class="blog-slider__content">
                        <span class="blog-slider__code">Dosen</span>
                        <div class="blog-slider__title">RINA MARDIATI,M.T.</div>
                        <div class="blog-slider__text">Matematika Teknik II, Kalkulus II, Matematika Teknik I, Kalkulus I
                        </div>
                        <a href="https://forlap.kemdikbud.go.id/dosen/detail/OUM3REJGNEUtMDEwNi00RTk4LUI4NTEtOUE2QkM4RUUzNDUz"
                            class="blog-slider__button">READ MORE</a>
                    </div>
                </div>

                <div class="blog-slider__item swiper-slide">
                    <div class="blog-slider__img">
                        <img src="images/dosen/ADAM-F.png" alt="">
                    </div>
                    <div class="blog-slider__content">
                        <span class="blog-slider__code">Dosen</span>
                        <div class="blog-slider__title"> ADAM FAROQI,M.T.</div>
                        <div class="blog-slider__text">Metode Statistika dan Desain Eksperimen, Probabilitas dan Statistika,
                            Kewirausahaan, Probabilitas dan Statistik</div>
                        <a href="https://forlap.kemdikbud.go.id/dosen/detail/REM3NjEwQjctQTNEOC00ODY4LUExRjctOUFBRUI2N0RERjQ5"
                            class="blog-slider__button">READ MORE</a>
                    </div>
                </div>

                <div class="blog-slider__item swiper-slide">
                    <div class="blog-slider__img">
                        <img src="images/dosen/LIA-K.png" alt="">
                    </div>
                    <div class="blog-slider__content">
                        <span class="blog-slider__code">Dosen</span>
                        <div class="blog-slider__title">LIA KAMELIA,M.T.</div>
                        <div class="blog-slider__text">Sistem Kecerdasaan Buatan, Teknik Digital, Sistem Digital</div>
                        <a href="https://forlap.kemdikbud.go.id/dosen/detail/Qzc4QjYyN0EtRkVGMy00MUExLThENjItMjM4QTA1MUYzMjEw"
                            class="blog-slider__button">READ MORE</a>
                    </div>
                </div>

                <div class="blog-slider__item swiper-slide">
                    <div class="blog-slider__img">
                        <img src="images/dosen/IDING-B.png" alt="">
                    </div>
                    <div class="blog-slider__content">
                        <span class="blog-slider__code">Dosen</span>
                        <div class="blog-slider__title">Drs. MOH. IDING,M.Pd</div>
                        <div class="blog-slider__text">Ilmu Tauhid, Ulumul Hadits, Akhlaq Tasawuf, Ilmu Fiqih</div>
                        <a href="https://forlap.kemdikbud.go.id/dosen/detail/RDM2MzFBMDYtNzVCQS00NEQ0LTkwN0MtMUNDQ0E1N0UyMjdB"
                            class="blog-slider__button">READ MORE</a>
                    </div>
                </div>

                <div class="blog-slider__item swiper-slide">
                    <div class="blog-slider__img">
                        <img src="images/dosen/TEDDY.png" alt="">
                    </div>
                    <div class="blog-slider__content">
                        <span class="blog-slider__code">Dosen</span>
                        <div class="blog-slider__title">TEDDY YUSUF,S.Pd.,M.HUM.</div>
                        <div class="blog-slider__text">Bahasa Inggris, English Spesial Purpose</div>
                        <a href="https://forlap.kemdikbud.go.id/dosen/detail/NkY5MDI3MjUtNjZBQi00NTJFLUE0QzctNUVCOEVCM0FGNjhF"
                            class="blog-slider__button">READ MORE</a>
                    </div>
                </div>

                <div class="blog-slider__item swiper-slide">
                    <div class="blog-slider__img">
                        <img src="images/dosen/kosong.jpg" alt="">
                    </div>
                    <div class="blog-slider__content">
                        <span class="blog-slider__code">Dosen</span>
                        <div class="blog-slider__title">Nike Sartika,M.T.</div>
                        <div class="blog-slider__text">-</div>
                        <a href="#" class="blog-slider__button">READ MORE</a>
                    </div>
                </div>

                <div class="blog-slider__item swiper-slide">
                    <div class="blog-slider__img">
                        <img src="images/dosen/kosong.jpg" alt="">
                    </div>
                    <div class="blog-slider__content">
                        <span class="blog-slider__code">Administrasi</span>
                        <div class="blog-slider__title">Muh. Tsani Abdul Hakim, S.T.</div>
                        <div class="blog-slider__text">-</div>
                        <a href="https://forlap.kemdikbud.go.id/mahasiswa/detail/OUI0RTlGNjktM0VBOS00NDA2LUJFQzEtRDU0OTBBMzlGRDY5"
                            class="blog-slider__button">READ MORE</a>
                    </div>
                </div>

                <div class="blog-slider__item swiper-slide">
                    <div class="blog-slider__img">
                        <img src="images/dosen/kosong.jpg" alt="">
                    </div>
                    <div class="blog-slider__content">
                        <span class="blog-slider__code">Administrasi</span>
                        <div class="blog-slider__title">Firman Khaerul Ihsan, S.T.</div>
                        <div class="blog-slider__text">-</div>
                        <a href="https://forlap.kemdikbud.go.id/mahasiswa/detail/NDA3MzY0NDAtNzk1NS00RjY0LTlFOTktNzg2OTFEMTUxQkM1"
                            class="blog-slider__button">READ MORE</a>
                    </div>
                </div>

                <div class="blog-slider__item swiper-slide">
                    <div class="blog-slider__img">
                        <img src="images/dosen/kosong.jpg" alt="">
                    </div>
                    <div class="blog-slider__content">
                        <span class="blog-slider__code">Laporan</span>
                        <div class="blog-slider__title">Saepul Uyun, S.T.</div>
                        <div class="blog-slider__text">-</div>
                        <a href="https://forlap.kemdikbud.go.id/mahasiswa/detail/Q0FDRjc4MTItMDlGNy00M0U3LUE0NkEtNDEyRUY4MTFBM0E4"
                            class="blog-slider__button">READ MORE</a>
                    </div>
                </div>


            </div>
            <div class="blog-slider__pagination"></div>
        </div>
    </section>

    <!--------- teachers section ends------->

    <!--------- students reviews section starts----->

    <section class="reviews">

        <h1 class="heading"> Sambutan Kajur </h1>

        <div class="swiper reviews-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <p>“Menjadi Program Studi yang unggul dan kompetitif di ASEAN pada tahun 2025 berbasis wahyu memandu
                        ilmu dalam bingkai akhlak karimah.” Semoga dengan memanfaatkan website ini secara maksimal dapat
                        mewujudkan visi tersebut.</p>
                    <img src="images/dosen/nanang-ismail.png" alt="">
                    <h3>Nanang Ismail, M.T.</h3>
                    <h4>ketua Jurusan</h4>
                </div>


            </div>

        </div>

    </section>


    <!--------- students reviews section ends------->


    <!------------footer------->

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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>
    <script src="/styles/js/about.js"></script>
@endsection
