@include('admin.layouts.app')
<div class="main-layout">
  <!-- Sidebar  -->
  @include('admin.layouts.sidebar')
  <!-- Header Page Footer  -->
  <div class="header-page-footer">
    <!-- Header  -->
    @include('admin.layouts.header')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5> New Testimonial </h5>
                    </div>

                    <div class="card-body ">
                        <form method="POST" action="{{route('admin.testimonial.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3 form-group">
                                <label for="name" class="col-md-2 col-form-label text-md-end"><span>*
                                    </span>{{ __('Name') }}</label>

                                <div class="col-md-10">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') ?? ($data->name ?? '') }}" required autocomplete="name"
                                        autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 form-group">
                                <label for="text" class="col-md-2 col-form-label text-md-end"><span>*
                                    </span>{{ __('Text') }}</label>

                                <div class="col-md-10">
                                    <textarea id="text" type="text" class="form-control @error('text') is-invalid @enderror"
                                        name="text" required autocomplete="text" autofocus>{{ old('text') ?? ($data->text ?? '') }}</textarea>

                                    @error('text')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i data-feather="save"> </i>
                                        Save
                                    </button>
                                    <a href="{{ route('admin.testimonial.index') }}" class="btn btn-dark">
                                        <i data-feather="corner-down-right"> </i>
                                        Return Back
                                    </a>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.layouts.footer')
  </div>
</div>

@include('admin.layouts.script')
