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
                        <h5> New Blog </h5>
                    </div>

                    <div class="card-body ">
                        <form method="POST" action="{{route('admin.blogs.update')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$data->id}}">
                            <div class="row mb-3 form-group">
                                <label for="title" class="col-md-2 col-form-label text-md-end"><span>*
                                    </span>{{ __('Title') }}</label>

                                <div class="col-md-10">
                                    <input id="title" type="text"
                                        class="form-control @error('title') is-invalid @enderror" name="title"
                                        value="{{ old('title') ?? ($data->title ?? '') }}"  autocomplete="title"
                                        autofocus>

                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 form-group">
                                <label for="description" class="col-md-2 col-form-label text-md-end"><span>*
                                    </span>{{ __('Description') }}</label>

                                <div class="col-md-10">
                                    <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror"
                                        name="description"  autocomplete="description" autofocus>{{ old('description') ?? ($data->description ?? '') }}</textarea>

                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3 form-group">
                                <label for="keywords" class="col-md-2 col-form-label text-md-end"><span>*
                                    </span>{{ __('Keywords') }}</label>

                                <div class="col-md-10">
                                    <input id="keywords" type="text"
                                        class="form-control @error('keywords') is-invalid @enderror" name="keywords"
                                         autocomplete="keywords" class="form-control p-4"
                                        data-role="tagsinput" />

                                </div>
                            </div>


                            <div class="row mb-3 form-group">
                                <label for="author" class="col-md-2 col-form-label text-md-end"><span>*
                                    </span>{{ __('Author') }}</label>

                                <div class="col-md-10">
                                    <input id="author" type="text"
                                        class="form-control @error('author') is-invalid @enderror" name="author"
                                        value="{{ old('author') ?? ($data->author ?? '') }}"
                                        autocomplete="author" autofocus>

                                    @error('author')
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
                                    <input id="image" type="file"
                                        class="form-control @error('image') is-invalid @enderror" name="image"
                                        value="{{ old('image') ?? ($data->image ?? '') }}"  autocomplete="image"
                                        autofocus>

                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3 form-group">
                                <label for="category" class="col-md-2 col-form-label text-md-end"><span>*
                                    </span>{{ __('Category') }}</label>

                                <div class="col-md-10">

                                    <select id="category" name="category_selected" class="form-select form-select"
                                        aria-label=".form-select-sm">
                                        <option selected disabled>--Select Category--</option>
                                        @foreach ($blog_categories as $b_cate)
                                            <option value="{{ $b_cate->id }}"> {{ $b_cate->category }}</option>
                                        @endforeach
                                    </select>

                                    @error('category_selected')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 form-group">
                                <label for="summernote" class="col-md-2 col-form-label text-md-end"><span>*
                                    </span>{{ __('Editor') }}</label>

                                <div class="col-md-10">
                                    <textarea id="summernote" type="text" class="form-control @error('keywords') is-invalid @enderror" name="body"
                                         autocomplete="body" autofocus>{{ old('body') ?? ($data->body ?? '') }}</textarea>

                                    @error('body')
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
                                    <a href="{{ route('admin.blogs.index') }}" class="btn btn-dark">
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
