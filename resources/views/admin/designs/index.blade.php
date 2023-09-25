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
                                            <th class="all">Tttle</th>
                                            <th class="all">Url</th>
                                            <th class="all">Meta Title</th>
                                            <th class="all">Meta Description</th>
                                            <th class="all">Created At</th>
                                            <th class="all">Options</th>
                                        </tr>
                                    </thead>
                                    <tbody>

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
