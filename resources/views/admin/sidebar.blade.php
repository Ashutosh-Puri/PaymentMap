<div class="p-3 bg-light h-100  w-100 m-0" >
    <a href="/" class=" text-center   link-primary text-decoration-none">
      <span class="fs-2 fw-bold"># ADMIN</span>
    </a>
    <hr>
    <div class=" link-dark ">
        <a href="{{ route('admin.admin.dashboard') }}" class="text-start nav-link link-dark btn @stack('dashboard')"><i class="fas fa-tachometer-alt mx-3"></i>Dashboard</a>
        <a href="{{ route('admin.admin.index') }}" class="text-start nav-link link-dark btn  @stack('users')" ><i class="fa fa-user mx-3"></i>Users</a>
        {{-- <a href="{{ route('admin.icon.index') }}" class="text-start nav-link link-dark btn @stack('icons')"><i class="fas fa-asterisk mx-3"></i>Icons</a> --}}
        <a href="{{ route('admin.astore.index') }}" class="text-start nav-link link-dark btn @stack('stores')"><i class="fa fa-store mx-3"></i>Stores</a>
        <a href="{{ route('admin.country.index') }}" class="text-start nav-link link-dark btn @stack('countries')"><i class="fa fa-flag mx-3"></i>Countries</a>
        <a href="{{ route('admin.state.index') }}" class="text-start nav-link link-dark btn @stack('states')"><i class="fa fa-circle mx-3"></i>States</a>
        <a href="{{ route('admin.city.index') }}" class="text-start nav-link link-dark btn @stack('cities')"><i class="fas fa-square mx-3"></i>Cities</a>
        <a href="{{ route('admin.village.index') }}" class="text-start nav-link link-dark btn @stack('villages')"><i class="fas fa-play mx-3"></i>Villages</a>
        <a href="{{ route('admin.footer.index') }}" class="text-start nav-link link-dark btn @stack('footer')"><i class="far fa-credit-card mx-3"></i>Footer</a>
    </div>
</div>

