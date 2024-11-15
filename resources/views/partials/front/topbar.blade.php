<nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow p-0 py-1">
  <a href="{{
      \Illuminate\Support\Facades\Route::has('super.dashboard') && Auth::user()->role->slug === 'super-admin' ? route('super.dashboard') :
      (\Illuminate\Support\Facades\Route::has('admin.dashboard') && Auth::user()->role->slug === 'administrator' ? route('admin.dashboard') :
      (\Illuminate\Support\Facades\Route::has('instructor.dashboard') && Auth::user()->role->slug === 'instructor' ? route('instructor.dashboard') :
      (\Illuminate\Support\Facades\Route::has('student.dashboard') && Auth::user()->role->slug === 'student' ? route('student.dashboard') :
      route('site.home'))))
  }}" class="navbar-brand ps-4 px-lg-5">
      <h6 class="m-0 text-primary">
          <i class="fas fa-tachometer-alt"></i>
          <span class="ms-1">{{ __('Dashboard') }}</span>
      </h6>
  </a>
  
  <div class="d-flex pe-4 px-lg-5 ms-auto">
      <a href="javascript:void(0)" class="nav-link me-2">
          <h6 class="m-0 text-primary">{{ Auth::user()->firstname . ' ' . Auth::user()->lastname }}</h6>
      </a>
      
      <form method="POST" action="{{ route('logout') }}">
          @csrf
          <a class="btn btn-light btn-sm py-1" href="javascript:void(0)" onclick="event.preventDefault(); this.closest('form').submit();">
              <i class="fas fa-power-off"></i>
              <span class="ms-1">{{ __('Log Out') }}</span>
          </a>
      </form>
  </div>
</nav>
