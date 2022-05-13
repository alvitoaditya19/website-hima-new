<!-- SIDEBAR  -->
<div class="sidebar">
    <div class="logo-details">
        <img src="images/himanitro/icon-hima.png" class="icon" />
        <div class="logo_name">Himanitro</div>
        <i class="bx bx-menu" id="btn"></i>
    </div>
    <li>
        <i class="bx bx-search"></i>
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search..." />
        <span class="tooltip">Search</span>
    </li>
    <ul class="nav-list" id="myTable">
        <li>
            <a href="{{ route('home') }}">
                <i class="fa-solid fa-house"></i>
                <span class="links_name">Dashboard</span>
            </a>
            <span class="tooltip">Dashboard</span>
        </li>
        <li>
            <a href="{{ route('profile') }}">
                <i class="bx bxs-user-detail"></i>
                <span class="links_name">Profil Jurusan</span>
            </a>
            <span class="tooltip">Profil</span>
        </li>
        <li>
            <a href="{{ route('departemen') }}">
                <i class="bx bxs-bank"></i>
                <span class="links_name">Departemen</span>
            </a>
            <span class="tooltip">Departemen</span>
        </li>
        <li>
            <a href="{{ route('about') }}">
                <i class="fa-solid fa-graduation-cap"></i>
                <span class="links_name">Dosen</span>
            </a>
            <span class="tooltip">Dosen</span>
        </li>
        <li>
            <a href="{{ route('course') }}">
                <i class="fa-solid fa-laptop-code"></i>
                <span class="links_name">Courses</span>
            </a>
            <span class="tooltip">courses</span>
        </li>
        <li>
            <a href="{{ route('bank-soal') }}">
                <i class="fa-solid fa-folder-open"></i>
                <span class="links_name">Bank soal</span>
            </a>
            <span class="tooltip">Bank soal</span>
        </li>
        <li>
            <a href="{{ route('news') }}">
                <i class="fa-solid fa-video"></i>
                <span class="links_name">Berita</span>
            </a>
            <span class="tooltip">Berita</span>
        </li>
        <li>
            <a href="{{ route('e-commerce') }}">
                <i class="fa-solid fa-cart-shopping"></i>
                <span class="links_name">E-commerce</span>
            </a>
            <span class="tooltip">E-commerce</span>
        </li>
        <li>
            <a href="{{ route('contact') }}">
                <i class="fa-solid fa-id-card"></i>
                <span class="links_name">Contact</span>
            </a>
            <span class="tooltip">Contact</span>
        </li>
        <h1 class="text-light hover mt-3 mt-lg-4" id="noneText"></h1>
        <li class="profile">
            <div class="profile-details">
                <img src="images/himanitro/departemen/profjur/profjur.png" alt="profileImg" />
                <div class="name_job">
                    <div class="name">Profjur</div>
                    <div class="job">Admin website</div>
                </div>
            </div>
            <a href="login.html"><i class="bx bx-log-out" id="log_out"></i></a>
        </li>
    </ul>
</div>
