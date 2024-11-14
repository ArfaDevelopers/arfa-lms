<x-master-layout>
  <x-slot name="title">
    {{ __('Register as Student') }}
  </x-slot>

  <x-slot name="hero">
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
      <div class="container py-5">
        <div class="row justify-content-center">
          <div class="col-lg-10 text-center">
            <h1 class="display-3 text-white animated slideInDown">{{ __('Register as Student') }}</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a class="text-white" href="{{ route('site.home') }}">{{ __('Home') }}</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="{{ route('site.sitemap') }}">{{ __('Pages') }}</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">{{ __('Register as Student') }}</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- Header End -->
  </x-slot>

  <!-- Registration Form Start -->
  <div class="container-xxl py-5">
    <div class="container py-5">
      <div class="row g-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
          <h6 class="section-title bg-white text-start text-primary pe-3">{{ __('Register for Courses') }}</h6>
          <h1 class="mb-4">{{ __('Become a Student Today') }}</h1>
          
          <!-- Student Registration Form -->
          <form method="POST" action="{{ route('register.student') }}">
            @csrf

            <!-- First Name Field -->
            <div class="row mb-3">
            <div class="col-md-6">
              <label for="firstname" class="form-label">{{ __('First Name') }}</label>
              <input type="text" class="form-control" id="firstname" name="firstname" required placeholder="Enter your first name">
            </div>
            <div class="col-md-6">
              <label for="lastname" class="form-label">{{ __('Last Name') }}</label>
              <input type="text" class="form-control" id="lastname" name="lastname" required placeholder="Enter your last name">
            </div>
          </div>
            <!-- Username Field -->
            <div class="mb-3">
              <label for="username" class="form-label">{{ __('Username') }}</label>
              <input type="text" class="form-control" id="username" name="username" required placeholder="Choose a username">
            </div>

            <!-- Email Field -->
            <div class="mb-3">
              <label for="email" class="form-label">{{ __('Email Address') }}</label>
              <input type="email" class="form-control" id="email" name="email" required placeholder="Enter your email">
            </div>

            <!-- Phone Field -->
            <div class="mb-3">
              <label for="phone" class="form-label">{{ __('Phone Number') }}</label>
              <input type="text" class="form-control" id="phone" name="phone" required placeholder="Enter your phone number">
            </div>

            <!-- Password Field -->
            <div class="mb-3">
              <label for="password" class="form-label">{{ __('Password') }}</label>
              <input type="password" class="form-control" id="password" name="password" required placeholder="Enter your password">
            </div>

            <!-- Confirm Password Field -->
            <div class="mb-3">
              <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
              <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required placeholder="Confirm your password">
            </div>

            <!-- Course Selection Field -->
            <div class="mb-3">
              <label for="course" class="form-label">{{ __('Select Course') }}</label>
              <select class="form-select" id="course" name="course_id" required>
                <option value="">{{ __('Select a course') }}</option>
                @foreach ($courses as $course)
                  <option value="{{ $course->id }}">{{ $course->title }} ({{ $course->course_code }})</option>
                @endforeach
              </select>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary py-3 px-5">{{ __('Register') }}</button>
          </form>
        </div>
        
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s" style="min-height: 400px;">
          <div class="position-relative h-100">
            <img class="img-fluid position-absolute w-100 h-100" src="{{ asset('img/about.jpg') }}" alt="" style="object-fit: cover;" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Registration Form End -->
</x-master-layout>
