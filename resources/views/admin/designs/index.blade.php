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
                        <h5 class="card-title">Design</h5>
                        <a href="{{ route('admin.design.create') }}" class="btn btn-primary ms-auto">Add Designs</a>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <div class="dt-ext table-responsive">
                                <table class="display table" id="basic-2" style="width: 100%;max-width: 100%;">
                                    <thead>
                                        <tr>
                                            <th class="all">#</th>
                                            <th class="all">Title</th>
                                            <th class="all">Url</th>
                                            <th class="all">Meta Title</th>
                                            <th class="all">Meta Description</th>
                                            <th class="all">Created At</th>
                                            <th class="all">Options</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($designs as $item)
                                            <tr id="Item-{{ $item->id }}">
                                                <td>{{ $Sr++ }}</td>
                                                <td>{{ $item->title }}</td>
                                                <td>{{ $item->url }}</td>
                                                <td>{{ $item->meta_title }}</td>
                                                <td>{{ $item->meta_description }}</td>
                                                <td>{{ date('d-m-Y', strtotime($item->created_at)) ?? '' }}</td>
                                                <td>
                                                    <a href="{{ route('admin.design.show', $item->id) }}"
                                                        class="btn btn-warning p-1" data-toggle="tooltip" title="View">
                                                    View
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
