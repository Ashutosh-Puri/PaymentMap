<div class="p-3 bg-light  w-100 m-0" >
    <a href="/" class=" text-center   link-primary text-decoration-none">
      <span class="fs-2 fw-bold"># USER</span>
    </a>
    <hr>
    <div class=" link-dark ">
        <a href="{{ route('user.dashboard') }}" class="text-start nav-link link-dark btn @stack('dashboard')"><i class="fas fa-tachometer-alt mx-3"></i>Dashboard</a>
        <a href="{{ route('user.store.index') }}" class="text-start nav-link link-dark btn  @stack('stores')" ><i class="fa fa-store mx-3"></i>Stores</a>
    </div>
  </div>

