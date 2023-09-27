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
                        <h5 class="card-title">Gallery -  @if ( $item->type == 1)
                                                    Kitchen Remodelling
                                                  @elseif ($item->type == 2)
                                                    Floor Installation
                                                  @elseif ($item->type == 3)
                                                    Build Permits
                                                  @elseif ($item->type == 4)
                                                    Basement Renovations & Development
                                                  @endif </h5>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <div class="dt-ext table-responsive">
                                <table class="display table" id="basic-2" style="width: 100%;max-width: 100%;">
                                    <thead>
                                        <tr>
                                            <th class="all">#</th>
                                            <th class="all">Image</th>
                                            <th class="all">Options</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($gallery as $item)
                                        <tr id="Item-{{ $item->id }}">
                                            <td>{{ $Sr++ }}</td>
                                            <td>
                                                <img src="{{ asset('storage/'.$item->image)}}" alt=""> 
                                            </td>
                                            <td>
                                                <a  href="{{ route('admin.gallery.delete', $item->id) }}" class="btn btn-danger pointer p-1"
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
