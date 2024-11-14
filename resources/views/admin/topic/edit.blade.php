<x-admin-layout>
  
  <x-slot name="title">
    {{ __('Edit Topic') }}
  </x-slot>
  
  <x-slot name="header">
    <h1 class="h3 mb-3"><strong>{{ __('Topics') }}</strong> {{ __('Management') }}</h1>
  </x-slot>
  
  <div class="row">
    <div class="col-12 d-flex justify-content-center">
      <div class="card col-10 col-lg-6">
        <form action="{{ route('topics.update', $topic->id) }}" method="post">
          @csrf
          @method('PUT')
          <div class="card-header">
            <h5 class="card-title mb-0">{{ __('Edit Topic') }}</h5>
          </div>
          <div class="card-body py-0">
            <div class="row g-3">
              <div class="col-12">
                <input type="text" name="title" class="form-control" id="title" placeholder="{{ __('Topic Title') }}" value="{{ old('title', $topic->title) }}" required />
              </div>
              <div class="col-12">
                <textarea name="description" class="form-control" id="description" cols="30" rows="10" placeholder="{{ __('Type details here ...') }}">{{ old('description', $topic->description) }}</textarea>
              </div>
              <div class="col-12">
                <input type="text" name="slug" class="form-control" id="slug" placeholder="{{ __('Topic Slug') }}" value="{{ old('slug', $topic->slug) }}" readonly />
              </div>
              <div class="col-12">
                <select name="status" class="form-control" id="status">
                  <option value="">{{ __('-- Choose Status --') }}</option>
                  <option value="1" {{ old('status', $topic->status) == '1' ? 'selected' : '' }}>{{ __('Enable') }}</option>
                  <option value="0" {{ old('status', $topic->status) == '0' ? 'selected' : '' }}>{{ __('Disable') }}</option>
                </select>
              </div>
              <div class="col-12">
                <label for="popular" class="form-label">{{ __('Popular') }}</label>
                <input type="checkbox" name="popular" id="popular" value="1" {{ old('popular', $topic->popular) == '1' ? 'checked' : '' }} />
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
                  <i class="align-middle me-1" data-feather="save"></i>
                  <span class="ps-1">{{ __('Update Topic') }}</span>
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
<x-slot name="script">
    <script>
      function confirmDelete(topicId) {
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.isConfirmed) {
            document.getElementById('delete-form-' + topicId).submit();
          }
        });
      }

      // Display appropriate flash message if available
      @if(session('success'))
        Swal.fire({
          title: '{{ session('success') == "Topic updated successfully." ? "Updated" : "Deleted" }}',
          text: '{{ session('success') }}',
          icon: 'success',
          confirmButtonText: 'OK'
        });
      @endif

      @if(session('error'))
        Swal.fire({
          title: 'Error',
          text: '{{ session('error') }}',
          icon: 'error',
          confirmButtonText: 'OK'
        });
      @endif
    </script>
</x-slot>
