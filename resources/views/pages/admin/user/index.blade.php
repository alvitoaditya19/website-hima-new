@extends('layouts.admin')

@section('title')
    Courses Dashboard
@endsection

@section('style_css')
    <link rel="stylesheet" href="{{ asset('/styles/css/admin/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('/styles/css/admin/course.css') }}" />
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script> 
@endsection

@section('content')
  <!-- Page Content -->
  <div id="page-content-wrapper">
      <nav class="navbar navbar-store navbar-expand-lg navbar-light fixed-top" data-aos="fade-down">
          <button class="btn btn-secondary d-md-none mr-auto mr-2" id="menu-toggle">
              &laquo; Menu
          </button>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto d-none d-lg-flex">
                  <li class="nav-item dropdown">
                      <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">
                          <img src="/images/icon-user.png" alt="" class="rounded-circle mr-2 profile-picture" />
                          Hi, {{ Auth::user()->name }}
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="/index.html">Back to Store</a>
                          <a class="dropdown-item" href="/dashboard-account.html">Settings</a>
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
                          Hi, {{ Auth::user()->name }}
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

      <div class="section-content section-dashboard-home" data-aos="fade-up">
          <div class="container-fluid">
              <div class="dashboard-heading">
                  <h2 class="dashboard-title">USER</h2>
                  <p class="dashboard-subtitle">
                      Look what you have made today!
                  </p>
                  <a href="" class="btn btn1 mb-4">
                      Tambah User
                  </a>
              </div>
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Avatar</th>
                                <th>Admin</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                  </div>
                </div>
              </div>
          </div>
      </div>
  </div>
@endsection

@push('addon-script')

    <script>
        var datatable = $('#crudTable').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: {
                url: '{!! url()->current() !!}',
            },
            columns: [
                {
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'username',
                    name: 'username'
                },
                {
                    data: 'email',
                    name: 'email'
                },
                {
                    data: 'avatar' ?? 'No Data',
                    name: 'avatar' ?? 'No Data'
                },
                {
                    data: 'is_admin',
                    name: 'is_admin'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searcable: false,
                    width: '15%',
                },
            ]
        })
    </script>

    <script>
        $(function() { 
                $('.toggle-class').change(function() { 
                var status = $(this).prop('checked') == true ? 1 : 0;  
                var id = $(this).data('id');  
                $.ajax({ 
                    type: "GET", 
                    dataType: "json", 
                    url: '/status/update', 
                    data: {'is_admin': is_admin, 'id': id}, 
                    success: function(data){ 
                    console.log(data.success) 
                } 
            }); 
        }) 
        }); 
    </script>

@endpush
