@include('admin.layouts.app')
<div class="main-layout">
  <!-- Sidebar  -->
  @include('admin.layouts.sidebar')
  <!-- Header Page Footer  -->
  <div class="header-page-footer">
    <!-- Header  -->
    @include('admin.layouts.header')
    <!-- Section  -->
    <section class="contact-page">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class='common-card'>
              <div class='mb-4'>
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                     aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="/">Management</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blog Category</li>
                  </ol>
                </nav>
              </div>
              <!--  Title  -->
              <div class='mb-4 d-flex justify-content-between align-items-center'>
                <div>
                  <h4 class='m-0 lh-normal'>Blog Category</h4>
                </div>
                <div>
                  <a href="{{route('admin.blog.category.create')}}" class="btn btn-primary">
                     <span>Add Category</span>
                  </a>
                </div>
              </div>
              <!--  Search Field  -->
              <div class="input-group mb-3">
                <span class="input-group-text" id="Email">
                  <i class='bx bx-search text-black'></i>
                </span>
                <input type="search" class="form-control ps-0" placeholder="Search" aria-label="Search"
                       aria-describedby="Search">
              </div>
              <!--  Table  -->
              <div class="table-wrapper table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                        <th class="all">#</th>
                        <th class="all">Category</th>
                        <th class="all">Created</th>
                        <th class="all">Options</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tbody>
                        @foreach ($blog_category as $item)
                            <tr id="Item-{{$item->id}}">
                                <td>{{$Sr++}}</td>
                                <td>{{$item->category }}</td>
                                <td>{{ date('d-m-Y',strtotime($item->created_at)) ?? ''}}</td>
                                <td>
                                    <a href="{{route('admin.blog.category.edit', $item->id)}}" class="text-warning p-1" data-toggle="tooltip" title="Edit">
                                        {{-- <i data-feather="edit"></i> --}}
                                        Edit
                                    </a>

                                    <a id="Delete-{{$item->id}}" class="text-danger pointer p-1" data-toggle="tooltip" title="Delete">
                                        {{-- <i data-feather="trash-2"></i> --}}
                                        Delete
                                    </a>
                                    <script>
                                        $('#Delete-{{$item->id}}').click(function(){
                                            console.log("hello");
                                            Swal.fire({
                                                title: 'Are you sure?',
                                                text: "You won't be able to revert this!",
                                                icon: 'question',
                                                showCancelButton: true,
                                                confirmButtonColor: '#3085d6',
                                                cancelButtonColor: '#d33',
                                                confirmButtonText: 'Yes, delete it!'
                                            }).then((result) => {
                                                if (result.isConfirmed) {
                                                    $.ajaxSetup({
                                                        headers: {
                                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                                        }
                                                    });

                                                    $.ajax({
                                                        type:'DELETE',
                                                        url:'{{url('admin/blog-categories/'.$item->id)}}',
                                                        data:'_token = {{ @csrf_token() }}',
                                                        success:function(data) {
                                                            $("#Item-{{$item->id}}").hide();
                                                        }
                                                    });

                                                }
                                            });
                                        });
                                    </script>
                                </td>
                            </tr>
                        @endforeach
                  </tbody>
                </table>
              </div>
                <div class="m-4 d-flex justify-content-center ">

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
<script>
    @if (session()->has('success'))
    Toastify({
        text: "{{ session('success') }}",
        duration: 3000,
        className: "info",
        destination: "#",
        newWindow: true,
        close: true,
        gravity: "top", // `top` or `bottom`
        position: "center", // `left`, `center` or `right`
        stopOnFocus: true, // Prevents dismissing of toast on hover
        style: {
            background: "linear-gradient(to right, #00b09b, #96c93d)",
        },
        onClick: function(){} // Callback after click
    }).showToast();

    @endif

    @if (session()->has('error'))
    Toastify({
        text: "{{ session('error') }}",
        duration: 3000,
        className: "info",
        destination: "#",
        newWindow: true,
        close: true,
        gravity: "top", // `top` or `bottom`
        position: "center", // `left`, `center` or `right`
        stopOnFocus: true, // Prevents dismissing of toast on hover
        style: {
            background: "red",
            color:"white",
        },
        onClick: function(){} // Callback after click
    }).showToast();

    @endif
</script>

@include('admin.layouts.script')
