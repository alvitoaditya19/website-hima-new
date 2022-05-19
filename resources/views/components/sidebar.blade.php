<!-- SIDEBAR  -->
<div class="sidebar">
    <div>
        @auth
            <div class="logo-details">
                <div class="dropdown">
                    <button class="btn btn-primary-outline" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown">
                        <img src="https://ui-avatars.com/api/?name={{Str::limit(Auth::user()->name, 12)  }}" class="icon" alt="" style="border-radius: 50%">
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li>
                        <a class="dropdown-item bg-transparent" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <h3 class="text-light">Logout</h3>
                            </a>
                        </li>
                    </ul>
                </div>
                
                <div class="logo_name">{{Str::limit(Auth::user()->name, 7)  }}</div>
                <i class="bx bx-menu" id="btn"></i>
            </div>    
        @endauth
        @guest
            <div class="logo-details">
                <img src="images/himanitro/icon-hima.png" class="icon" />
                <div class="logo_name">Himanitro</div>
                <i class="bx bx-menu" id="btn"></i>
            </div>
        @endguest

        <li>
            <i class="bx bx-search"></i>
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search..." />
            <span class="tooltip">Search</span>
        </li>
    </div>
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
            <a href="#" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Sign Out</a>
            <form id="logout-form" action="{{route('logout')}}" method="post" style="display: none">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
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
        @guest
            <li class="profile">
                <div class="profile-details">
                    <img src="images/himanitro/departemen/profjur/profjur.png" alt="profileImg" />
                    <div class="name_job">
                        <div class="name">Profjur</div>
                        <div class="job">Admin website</div>
                    </div>
                </div>
                <a href="{{ route('login') }}"><i class="bx bx-log-out" id="log_out"></i></a>    
            </li>
        @endguest

        @auth
            <li class="profile">
                <div class="profile-details">
                    <img src="https://ui-avatars.com/api/?name={{Str::limit(Auth::user()->name, 12)  }}" alt="" style="border-radius: 50%">
                    <div class="name_job">
                        <div class="name">{{ Auth::user()->username }}</div>
                        <div class="job">Hi, {{Str::limit(Auth::user()->name, 12)  }}</div>
                        <div class="btn btn-danger">
                            <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                            </a>
                        </div>
                    </div>
                </div>
                <a href="#"><i class='bx bx-log-out' id="log_out" ></i></a>
            </li>
            <li>
                {{-- <div class="dropup">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://ui-avatars.com/api/?name={{Str::limit(Auth::user()->name, 12)  }}" alt="" style="border-radius: 50%">
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div> --}}

            </li>
            
        @endauth

    </ul>
</div>
