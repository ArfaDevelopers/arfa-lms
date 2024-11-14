<x-admin-layout>
  
  <x-slot name="title">
    {{ __('Add New Topic') }}
  </x-slot>
  
  <x-slot name="header">
    <h1 class="h3 mb-3"><strong>{{ __('Topics') }}</strong> {{ __('Management') }}</h1>
  </x-slot>
  
  <div class="row">
    <div class="col-12 d-flex justify-content-center">
      <div class="card col-10 col-lg-6">
        <form action="{{ route('topics.store') }}" method="post">
          @csrf
          <div class="card-header">
            <h5 class="card-title mb-0">{{ __('Create New Topic') }}</h5>
          </div>
          <div class="card-body py-0">
            <div class="row g-3">
              <div class="col-12">
                <input type="text" name="title" class="form-control" id="title" placeholder="{{ __('Topic Title') }}" value="{{ old('title') }}" required />
              </div>
              <div class="col-12">
                <textarea name="description" class="form-control" id="description" cols="30" rows="10" placeholder="{{ __('Type details here ...') }}">{{ old('description') }}</textarea>
              </div>
              <div class="col-12">
                <input type="text" name="slug" class="form-control" id="slug" placeholder="{{ __('Topic Slug') }}" value="{{ old('slug') }}" readonly />
              </div>
              <div class="col-12">
                <select name="status" class="form-control" id="status">
                  <option value="">{{ __('-- Choose Status --') }}</option>
                  <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>{{ __('Enable') }}</option>
                  <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>{{ __('Disable') }}</option>
                </select>
              </div>
              <div class="col-12">
                <label for="popular" class="form-label">{{ __('Popular') }}</label>
                <input type="checkbox" name="popular" id="popular" value="1" {{ old('popular') == '1' ? 'checked' : '' }} />
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="row">
              <div class="col-6 d-grid">
                <a href="{{ route('topics.index') }}" class="btn btn-outline-secondary" >
                  <i class="align-middle me-1" data-feather="arrow-left"></i>
                  <span class="ps-1">{{ __('Discard') }}</span>
                </a>
              </div>
              <div class="col-6 d-grid">
                <button type="submit" class="btn btn-outline-primary" >
                  <i class="align-middle me-1" data-feather="plus"></i>
                  <span class="ps-1">{{ __('Create New') }}</span>
                </button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <x-slot name="script">
    @include('partials.admin.flash')
  </x-slot>
  
</x-admin-layout>
