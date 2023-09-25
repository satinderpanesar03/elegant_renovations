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
                        <h5> New Design </h5>
                    </div>

                    <div class="card-body ">
                        <form method="POST" action="{{route('admin.design.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3 form-group">
                                <label for="title" class="col-md-2 col-form-label text-md-end"><span>*
                                    </span>{{ __('Title') }}</label>

                                <div class="col-md-10">
                                    <input id="title" type="text"
                                        class="form-control @error('title') is-invalid @enderror" name="title"
                                        value="{{ old('title') ?? ($data->title ?? '') }}" required autocomplete="title"
                                        autofocus>

                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 form-group">
                                <label for="Url" class="col-md-2 col-form-label text-md-end"><span>*
                                    </span>{{ __('Url') }}</label>

                                <div class="col-md-10">
                                    <input id="Url" type="text"
                                        class="form-control @error('Url') is-invalid @enderror" name="url"
                                        value="{{ old('Url') ?? ($data->Url ?? '') }}" required autocomplete="Url"
                                        autofocus>

                                    @error('Url')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 form-group">
                                <label for="meta_title" class="col-md-2 col-form-label text-md-end"><span>*
                                    </span>{{ __('Meta Title') }}</label>

                                <div class="col-md-10">
                                    <input id="meta_title" type="text"
                                        class="form-control @error('meta_title') is-invalid @enderror" name="meta_title"
                                        value="{{ old('meta_title') ?? ($data->meta_title ?? '') }}" required autocomplete="meta_title"
                                        autofocus>

                                    @error('meta_title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 form-group">
                                <label for="meta_description" class="col-md-2 col-form-label text-md-end"><span>*
                                    </span>{{ __('Meta Description') }}</label>

                                <div class="col-md-10">
                                    <input id="meta_description" type="text"
                                        class="form-control @error('meta_description') is-invalid @enderror" name="meta_description"
                                        value="{{ old('meta_description') ?? ($data->meta_description ?? '') }}" required autocomplete="meta_description"
                                        autofocus>

                                    @error('meta_description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 form-group">
                                <label for="mata_keyword" class="col-md-2 col-form-label text-md-end"><span>*
                                    </span>{{ __('Meta Keyword') }}</label>

                                <div class="col-md-10">
                                    <input id="mata_keyword" type="text"
                                        class="form-control @error('mata_keyword') is-invalid @enderror" name="mata_keyword"
                                        value="{{ old('mata_keyword') ?? ($data->mata_keyword ?? '') }}" required autocomplete="mata_keyword"
                                        autofocus>

                                    @error('mata_keyword')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 form-group">
                                <label for="meta_schema" class="col-md-2 col-form-label text-md-end"><span>*
                                    </span>{{ __('Meta Schema') }}</label>

                                <div class="col-md-10">
                                    <input id="meta_schema" type="text"
                                        class="form-control @error('meta_schema') is-invalid @enderror" name="meta_schema"
                                        value="{{ old('meta_schema') ?? ($data->meta_schema ?? '') }}" required autocomplete="meta_schema"
                                        autofocus>

                                    @error('meta_schema')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 form-group">
                                <label for="image" class="col-md-2 col-form-label text-md-end"><span>*
                                    </span>{{ __('Image') }}</label>

                                <div class="col-md-10">
                                    <input type="file"
                                        class="form-control" name="images"
                                        value="" required>

                                    @error('image')
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
