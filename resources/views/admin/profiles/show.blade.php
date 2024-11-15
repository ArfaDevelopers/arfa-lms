<x-admin-layout>

  <x-slot name="title">
    {{ __('Edit Profile') }}
  </x-slot>

  <x-slot name="header">
      <h1 class="h3 mb-3">{{ __('Profile Details') }}</h1>
  </x-slot>

  <section class="row">
    <div class="col-md-4 col-xl-3">
      <div class="card mb-3">
        <div class="card-header">
          <h5 class="card-title mb-0">
            @if (Auth::guard('admin')->check())
              {{ Auth::guard('admin')->user()->firstname . ' ' . Auth::guard('admin')->user()->lastname }}
            @elseif (Auth::check()) 
              {{ Auth::user()->firstname . ' ' . Auth::user()->lastname }}
            @else
              Guest
            @endif
          </h5>
        </div>
        <div class="card-body text-center">
          <img src="{{ asset('img/avatars/avatar-4.jpg') }}" alt="Christina Mason" class="img-fluid rounded-circle mb-2" width="128" height="128" />
          <h5 class="card-title mb-0">
            @if (Auth::guard('admin')->check())
              {{ Auth::guard('admin')->user()->firstname . ' ' . Auth::guard('admin')->user()->lastname }}
            @elseif (Auth::check()) 
              {{ Auth::user()->firstname . ' ' . Auth::user()->lastname }}
            @else
              Guest
            @endif
          </h5>
          <div class="text-muted mb-2">{{ Auth::user()->role->title }}</div>
          <div>
            <a class="btn btn-primary btn-sm" href="{{ route('edit.profile', Auth::guard('admin')->check() ? Auth::guard('admin')->user()->firstname . ' ' . Auth::guard('admin')->user()->lastname : (Auth::check() ? Auth::user()->firstname . ' ' . Auth::user()->lastname : 'Guest')) }}">
              <span data-feather="message-square"></span>
              <span class="ps-1">{{ __('Modify') }}</span>
            </a>
            
          </div>
        </div>
        <hr class="my-0" />
        <div class="card-body">
          <h5 class="h6 card-title">Skills</h5>
          <a href="#" class="badge bg-primary me-1 my-1">HTML</a>
          <a href="#" class="badge bg-primary me-1 my-1">JavaScript</a>
          <a href="#" class="badge bg-primary me-1 my-1">Sass</a>
          <a href="#" class="badge bg-primary me-1 my-1">Angular</a>
          <a href="#" class="badge bg-primary me-1 my-1">Vue</a>
          <a href="#" class="badge bg-primary me-1 my-1">React</a>
          <a href="#" class="badge bg-primary me-1 my-1">Redux</a>
          <a href="#" class="badge bg-primary me-1 my-1">UI</a>
          <a href="#" class="badge bg-primary me-1 my-1">UX</a>
        </div>
        <hr class="my-0" />
        <div class="card-body">
          <h5 class="h6 card-title">About</h5>
          <ul class="list-unstyled mb-0">
            <li class="mb-1"><span data-feather="home" class="feather-sm me-1"></span> Lives in <a href="#">San Francisco, SA</a></li>
            <li class="mb-1"><span data-feather="briefcase" class="feather-sm me-1"></span> Works at <a href="#">GitHub</a></li>
            <li class="mb-1"><span data-feather="map-pin" class="feather-sm me-1"></span> From <a href="#">Boston</a></li>
          </ul>
        </div>
        <hr class="my-0" />
        
      </div>
    </div>

    <div class="col-md-8 col-xl-9">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title mb-0">Activities</h5>
        </div>
        <div class="card-body h-100">
          <!-- Static Dummy Activities -->
          <div class="d-flex align-items-start">
            <img src="img/avatars/avatar-5.jpg" width="36" height="36" class="rounded-circle me-2" alt="Vanessa Tucker">
            <div class="flex-grow-1">
              <small class="float-end text-navy">5m ago</small>
              <strong>Vanessa Tucker</strong> started following <strong>Christina Mason</strong><br />
              <small class="text-muted">Today 7:51 pm</small><br />
            </div>
          </div>

          <hr />
          <div class="d-flex align-items-start">
            <img src="img/avatars/avatar.jpg" width="36" height="36" class="rounded-circle me-2" alt="Charles Hall">
            <div class="flex-grow-1">
              <small class="float-end text-navy">30m ago</small>
              <strong>Charles Hall</strong> posted something on <strong>Christina Mason</strong>'s timeline<br />
              <small class="text-muted">Today 7:21 pm</small>

              <div class="border text-sm text-muted p-2 mt-1">
                Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.
              </div>

              <a href="#" class="btn btn-sm btn-danger mt-1"><i class="feather-sm" data-feather="heart"></i> Like</a>
            </div>
          </div>

          <hr />
          <div class="d-flex align-items-start">
            <img src="img/avatars/avatar-4.jpg" width="36" height="36" class="rounded-circle me-2" alt="Christina Mason">
            <div class="flex-grow-1">
              <small class="float-end text-navy">1h ago</small>
              <strong>Christina Mason</strong> posted a new blog<br />
              <small class="text-muted">Today 6:35 pm</small>
            </div>
          </div>

          <hr />
          <div class="d-flex align-items-start">
            <img src="img/avatars/avatar-2.jpg" width="36" height="36" class="rounded-circle me-2" alt="William Harris">
            <div class="flex-grow-1">
              <small class="float-end text-navy">3h ago</small>
              <strong>William Harris</strong> posted two photos on <strong>Christina Mason</strong>'s timeline<br />
              <small class="text-muted">Today 5:12 pm</small>

              <div class="row g-0 mt-1">
                <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                  <img src="img/photos/unsplash-1.jpg" class="img-fluid pe-2" alt="Unsplash">
                </div>
                <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                  <img src="img/photos/unsplash-2.jpg" class="img-fluid pe-2" alt="Unsplash">
                </div>
              </div>

              <a href="#" class="btn btn-sm btn-danger mt-1"><i class="feather-sm" data-feather="heart"></i> Like</a>
            </div>
          </div>

          <hr />
          <div class="d-flex align-items-start">
            <img src="img/avatars/avatar-2.jpg" width="36" height="36" class="rounded-circle me-2" alt="William Harris">
            <div class="flex-grow-1">
              <small class="float-end text-navy">1d ago</small>
              <strong>William Harris</strong> started following <strong>Christina Mason</strong><br />
              <small class="text-muted">Yesterday 3:35 pm</small><br />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <x-slot name="script">
    @include('partials.admin.flash')
  </x-slot>

</x-admin-layout>
