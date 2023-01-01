<div class="border-right" id="sidebar-wrapper">
  <div class="sidebar-heading text-center">
    <img src="/images/admin/icon-admin.png" alt="" class="my-1" width="140" />
  </div>
  <div class="list-group list-group-flush">
    <a href="{{ route('admin.dashboard') }}" class="list-group-item list-group-item-action {{ request()->is('admin') ? 'active' : '' }}">
        Dashboard</a>
    <a href="{{ route('admin.mata-kuliah.index') }}"  class="list-group-item list-group-item-action {{ request()->is('admin/mata-kuliah*') ? 'active' : '' }}" class="list-group-item list-group-item-action ">
        Mata Kuliah</a>
    {{-- <a href="{{ route('admin.semester.index') }}"  class="list-group-item list-group-item-action {{ request()->is('admin/dosen*') ? 'active' : '' }}" class="list-group-item list-group-item-action ">
        Semester</a> --}}
    <a href="{{ route('admin.dosen.index') }}"  class="list-group-item list-group-item-action {{ request()->is('admin/dosen*') ? 'active' : '' }}" class="list-group-item list-group-item-action ">
            Dosen</a>
    <a href="{{ route('admin.course.index') }}"  class="list-group-item list-group-item-action {{ request()->is('admin/course*') ? 'active' : '' }}" class="list-group-item list-group-item-action ">
        Course</a>
    <a href="#"  class="list-group-item list-group-item-action {{ request()->is('admin/product-gallery*') ? 'active' : '' }}" class="list-group-item list-group-item-action ">
       Galleries</a>
    <a href="#"
        class="list-group-item list-group-item-action {{ request()->is('admin/category*') ? 'active' : '' }}">
        Categories</a>
    <a href="{{ route('admin.setting') }}" class="list-group-item list-group-item-action {{ request()->is('admin/setting*') ? 'active' : '' }}">
        Setting</a>
    <a href="{{ route('admin.user.index') }}"  class="list-group-item list-group-item-action {{ request()->is('admin/user*') ? 'active' : '' }}">
        Users</a>
    <a href="/dashboard.html" class="list-group-item list-group-item-action">
        Sign Out</a>
  </div>
</div>