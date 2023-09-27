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
                        <h5> New Gallery </h5>
                    </div>

                    <div class="card-body ">
                        <form method="POST" action="{{route('admin.gallery.store')}}" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3 form-group">
                                <select class="form-select form-select-lg col-md-2" aria-label=".form-select-lg example" name="type">
                                    <option selected>Open this select menu</option>
                                    <!-- <option value="1">Kitchen Remodelling</option>
                                    <option value="2">Floor Installation</option>
                                    <option value="3">Build Permits</option>
                                    <option value="4">Basement Renovations & Development</option> -->
                                    @foreach ($titles as $title)
                                    <option value="{{$title->id}}">{{$title->title}}</option>
                                    @endforeach
                                    
                                </select>
                            </div>


                            <div class="row mb-3 form-group">
                                <label for="image" class="col-md-2 col-form-label text-md-end"><span>*
                                    </span>{{ __('Image') }}</label>

                                <div class="col-md-10">
                                    <input type="file"
                                        class="form-control" name="images[]"
                                        value="" required multiple>

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
                                    <a href="{{ route('admin.gallery.index') }}" class="btn btn-dark">
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
