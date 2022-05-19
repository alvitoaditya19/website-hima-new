@extends('layouts.admin')

@section('title')
   Tambah Course
@endsection

@section('style_css')
  <link rel="stylesheet" href="{{ asset('/styles/css/main.css') }}" />
@endsection
@section('content')
  <!-- Page Content -->
  <div id="page-content-wrapper">
    <nav
      class="navbar navbar-store navbar-expand-lg navbar-light fixed-top"
      data-aos="fade-down"
    >
      <button
        class="btn btn-secondary d-md-none mr-auto mr-2"
        id="menu-toggle"
      >
        &laquo; Menu
      </button>

      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto d-none d-lg-flex">
          <li class="nav-item dropdown">
            <a
              class="nav-link"
              href="#"
              id="navbarDropdown"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <img
                src="/images/icon-user.png"
                alt=""
                class="rounded-circle mr-2 profile-picture"
              />
              Hi, {{ Auth::user()->name  }}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/index.html"
                >Back to Store</a
              >
              <a class="dropdown-item" href="/dashboard-account.html"
                >Settings</a
              >
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/">Logout</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link d-inline-block mt-2" href="#">
              <img src="/images/icon-cart-empty.svg" alt="" />
            </a>
          </li>
        </ul>
        <!-- Mobile Menu -->
        <ul class="navbar-nav d-block d-lg-none mt-3">
          <li class="nav-item">
            <a class="nav-link" href="#">
              Hi, {{ Auth::user()->name  }}
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-inline-block" href="#">
              Cart
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <div
      class="section-content section-dashboard-home"
      data-aos="fade-up"
    >
      <div class="container-fluid">
        <div class="dashboard-heading">
          <h2 class="dashboard-title">Store Settings</h2>
          <p class="dashboard-subtitle">
            Make store that profitable
          </p>
        </div>
        <div class="dashboard-content">
          <div class="row">
            <div class="col-12">
              <form action="{{ route('admin.course.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="name_course">Nama Course</label>
                          <input
                            type="text"
                            class="form-control"
                            id="name_course"
                            aria-describedby="emailHelp"
                            name="name_course"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="name_dosen">Nama Dosen</label>
                          <input
                            type="text"
                            class="form-control"
                            id="name_dosen"
                            aria-describedby="emailHelp"
                            name="name_dosen"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="link">Link Video</label>
                            <input
                            type="text"
                            class="form-control"
                            id="link"
                            aria-describedby="emailHelp"
                            name="link"
                          />
                          </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="jumlah_video">Jumlah Video</label>
                            <input
                            type="text"
                            class="form-control"
                            id="jumlah_video"
                            aria-describedby="emailHelp"
                            name="jumlah_video"
                          />
                          </div>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label>Foto Thumbnail</label>
                              <img src="" id="perview">
                              <input 
                                type="file" 
                                class="form-control" 
                                name="photos"
                                id="photos" 
                                placeholder="Masukkan Gambar"
                                required 
                              />
                          </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col text-right">
                        <button
                          type="submit"
                          class="btn btn-success px-5"
                        >
                          Save Now
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('addon-script')
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor');
    </script>
    <script>
      function readURL(input){
            if(input.files && input.files[0]){
                  const reader = new FileReader();
                  reader.onload = function(e){
                        $('#perview').attr('src', e.target.result);
                        $('#perview').attr('width', '40%');
                        $('#perview').attr('height', '70%');

                  }

                  reader.readAsDataURL(input.files[0])
            }
      }

      $('#photos').change(function(){
            readURL(this)
      })
    </script>
@endpush
