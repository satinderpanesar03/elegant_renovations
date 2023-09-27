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
                        <h5 class="card-title">All Testimonials</h5>
                        <a href="{{ route('admin.testimonial.create') }}" class="btn btn-primary ms-auto">Add Testimonials</a>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <div class="dt-ext table-responsive">
                                <table class="display table" id="basic-2" style="width: 100%;max-width: 100%;">
                                    <thead>
                                        <tr>
                                            <th class="all">#</th>
                                            <th class="all">Name</th>
                                            <th class="all">Text</th>
                                            <th class="all">Created At</th>
                                            <th class="all">Options</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($testimonials as $item)
                                        <tr id="Item-{{ $item->id }}">
                                            <td>{{ $Sr++ }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->text }}</td>
                                            <td>{{ date('d-m-Y', strtotime($item->created_at)) ?? '' }}</td>
                                            <td>
                                                <a href="{{ route('admin.testimonial.show', $item->id) }}"
                                                    class="btn btn-warning p-1" data-toggle="tooltip" title="Edit">
                                                   Edit
                                                </a>

                                                <a  href="{{ route('admin.testimonial.delete', $item->id) }}" class="btn btn-danger pointer p-1"
                                                    data-toggle="tooltip" title="Delete">
                                                    Delete
                                                </a>

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
