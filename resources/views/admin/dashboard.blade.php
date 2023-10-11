@include('admin.layouts.app')

<div class="main-layout">
  <!-- Sidebar  -->
  @include('admin.layouts.sidebar')
  <!-- Header Page Footer  -->
  <div class="header-page-footer">
    <!-- Header  -->
    @include('admin.layouts.header')
    <!-- Section  -->
    <section class="dashboard-page">
      <div class="container-fluid">
        <!-- Widgets  -->
        <div class="row gy-4 mb-4">
          <!-- 1 -->
          <div class="col-12 col-xs-6 col-sm-6 col-md-6 col-lg-4 col-xl-3 col-xxl-2 custom-widgets-cards">
            <div class="dashboard-widgets h-100 text-center p-4">
              <div
                   class='dashboard-widget-card-icon rounded-circle mx-auto d-flex align-items-center justify-content-center mb-3'>
                <img src="{{asset('icons/users.svg')}}" alt="">
              </div>
              <div class='dashboard-widget-card-content'>
                <h4 class='m-0 mb-1 text-success fw-bolder'>{{$contactUsCount}}</h4>
                <p class="m-0 text-success">Queries</p>
              </div>
            </div>
          </div>
          <!-- 2 -->

        </div>

        <div class="table-wrapper table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">Sr.no.</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Phone No.</th>
                  <th scope="col">Message</th>
                  <th scope="col">Status</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
              @forelse($records as $item)
                <tr>
                  <td scope="row">{{$Sr++}}</td>
                  <td>
                    <div class='profile-image d-inline-flex gap-2 align-items-center'>
                      <span>{{$item->name}}</span>
                    </div>
                  </td>
                  <td>{{$item->email}}</td>
                  <td>{{$item->phone}}</td>
                  <td class="text-truncate">{{$item->message}}.</td>
                  <td>{{$item->status}}</td>
                  <td>
                    <button class="action-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class='bx bx-dots-vertical-rounded fs-5'></i>
                    </button>
                    <ul class="dropdown-menu py-3">
                      <li class="position-relative">
                        <ul class="reset-btn pb-2 w-100 d-inline-block cascaded-dropdown position-relative">
                          <span class="px-3" onclick="subDropDown()" id="cascadedDropdown">Change Status <i
                               class='bx bx-chevron-right fs-5 align-middle'></i></span>
                          <ul class="sub-dropdown-menu list-unstyled mb-0">
                            <li>
                              <button class="reset-btn pb-2 w-100 d-inline-block dropdown-item">Resolved</button>
                            </li>
                            <li> <button class="reset-btn pb-2 w-100 d-inline-block">Pending</button>
                            </li>
                          </ul>
                        </ul>

                      </li>
                      <li><a href="{{route('admin.contactus_delete',$item->id)}}" class="reset-btn px-3 w-100 d-inline-block text-start">Delete</a>
                      </li>
                    </ul>
                  </td>
                </tr>


              @empty
                    <tr> <td colspan="5"> <span class="text-danger"> No Records</span> </td></tr>
              @endforelse
              </tbody>
            </table>
          </div>

      </div>
    </section>
    <!-- footer  -->
    @include('admin.layouts.footer')
  </div>
</div>

@include('admin.layouts.script')
