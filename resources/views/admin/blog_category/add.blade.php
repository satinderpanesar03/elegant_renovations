@include('admin.layouts.app')
<div class="main-layout">
    <!-- Sidebar  -->
    @include('admin.layouts.sidebar')
    <!-- Header Page Footer  -->
    <div class="header-page-footer">
        <!-- Header  -->
        @include('admin.layouts.header')
        <!-- Section  -->
        <section class="profile-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-10 col-md-9 col-lg-7 col-xl-6 col-xl-5">
                        <div class='common-card'>
                            <div class='mb-4'>
                                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                                    aria-label="breadcrumb">
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Add Blog Category</li>
                                    </ol>
                                </nav>
                            </div>
                            <!--  Title  -->
                            <div class="mb-3">
                                <h4 class='m-0'>Add Blog Category</h4>
                            </div>
                            <!--  Form Card  -->
                            <div class='card-form-wrapper'>
                                <form name="edit_profile" class="change-password-form" method="post"
                                    action="{{route('admin.blog.category.store')}}">
                                    @csrf
                                    <!-- Old Password -->
                                    <div class="mb-3">
                                        <label for=blog-category">Blog Category</label>
                                        <div class="input-group mb-4">
                                            <input type="text" name="category" class="form-control"
                                                placeholder="Enter the Category" aria-label=blog-category"
                                                aria-describedby=blog-category" />
                                        </div>
                                    </div>
                                    <!-- Button -->
                                    <button type="submit" class="btn btn-primary">
                                        Add Category
                                    </button>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- footer  -->
        @include('admin.layouts.footer')
    </div>
</div>

@include('admin.layouts.script')
