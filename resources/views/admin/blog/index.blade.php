@include('admin.layouts.app')
<div class="main-layout">
  <!-- Sidebar  -->
  @include('admin.layouts.sidebar')
  <!-- Header Page Footer  -->
  <div class="header-page-footer">
    <!-- Header  -->
    @include('admin.layouts.header')
    <div class="container-fluid">
        <!-- All Client Table Start -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex">
                        <h5 class="card-title">All Blogs</h5>
                        <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary ms-auto">Add Blogs</a>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <div class="dt-ext table-responsive">
                                <table class="display table" id="basic-2" style="width: 100%;max-width: 100%;">
                                    <thead>
                                        <tr>
                                            <th class="all">#</th>
                                            <th class="all">Title</th>
                                            <th class="all">Status</th>
                                            <th class="all">Created</th>
                                            <th class="all">Options</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($blogs as $item)
                                            <tr id="Item-{{ $item->id }}">
                                                <td>{{ $Sr++ }}</td>
                                                <td>{{ $item->title }}</td>
                                                <td>{{ $item->status }}</td>
                                                <td>{{ date('d-m-Y', strtotime($item->created_at)) ?? '' }}</td>
                                                <td>
                                                    <a href="{{ url('blog/' . $item->slug) }}" class="text-warning p-1"
                                                        data-toggle="tooltip" title="Edit">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                    <a href="{{ route('admin.blogs.edit', $item->id) }}"
                                                        class="btn btn-warning p-1" data-toggle="tooltip" title="Edit">
                                                       Edit
                                                    </a>

                                                    <a id="Delete-{{ $item->id }}" class="btn btn-danger pointer p-1"
                                                        data-toggle="tooltip" title="Delete">
                                                        Delete
                                                    </a>
                                                    <script>
                                                        $('#Delete-{{ $item->id }}').click(function() {
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
                                                                        type: 'DELETE',
                                                                        url: '{{ url('admin/blogs/' . $item->id) }}',
                                                                        data: '_token = {{ @csrf_token() }}',
                                                                        success: function(data) {
                                                                            $("#Item-{{ $item->id }}").hide();
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer  -->
    @include('admin.layouts.footer')
  </div>
</div>

@include('admin.layouts.script')
