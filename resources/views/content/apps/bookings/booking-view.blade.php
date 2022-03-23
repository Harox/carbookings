@extends('layouts/contentLayoutMaster')

@section('title', 'User View - Account')

@section('vendor-style')
  {{-- Page Css files --}}
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/animate/animate.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/sweetalert2.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/dataTables.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/buttons.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/rowGroup.bootstrap5.min.css')) }}">
@endsection

@section('page-style')
  {{-- Page Css files --}}
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/extensions/ext-component-sweet-alerts.css')) }}">
@endsection

@section('content')
<section class="app-user-view-account">
  <div class="row">
    <!-- User Sidebar -->
    <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
      <!-- User Card -->
      <div class="card">
        <div class="card-body">
          <div class="user-avatar-section">
            <div class="d-flex align-items-center flex-column">
              <img
                class="img-fluid rounded mt-3 mb-2"
                src="{{asset('images/portrait/small/man.png')}}"
                height="110"
                width="110"
                alt="User avatar"
              />
              <div class="user-info text-center">
                <h4>Feliciano Cossa</h4>
              </div>
            </div>
          </div>
          <div class="info-container">
            <ul class="list-unstyled">
              <li class="mb-75">
                <span class="fw-bolder me-25">Contacto:</span>
                <span>840297715</span>
              </li>
              <li class="mb-75">
                <span class="fw-bolder me-25">Email:</span>
                <span>feliciano@gmail.com</span>
              </li>
              <li class="mb-75">
                <span class="fw-bolder me-25">Estado:</span>
                <span class="badge bg-light-success">Activo</span>
              </li>
              <li class="mb-75">
                <span class="fw-bolder me-25">Endereço:</span>
                <span>Maputo, Alto Maé</span>
              </li>
            </ul>
            <div class="d-flex justify-content-center pt-2">
              <a href="javascript:;" class="btn btn-primary me-1" data-bs-target="#editUser" data-bs-toggle="modal">
                Editar
              </a>
              <a href="javascript:;" class="btn btn-outline-danger suspend-user">Suspender</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /User Card -->
      <!-- Plan Card -->
      {{-- <div class="card border-primary">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-start">
            <span class="badge bg-light-primary">Standard</span>
            <div class="d-flex justify-content-center">
              <sup class="h5 pricing-currency text-primary mt-1 mb-0">$</sup>
              <span class="fw-bolder display-5 mb-0 text-primary">99</span>
              <sub class="pricing-duration font-small-4 ms-25 mt-auto mb-2">/month</sub>
            </div>
          </div>
          <ul class="ps-1 mb-2">
            <li class="mb-50">10 Users</li>
            <li class="mb-50">Up to 10 GB storage</li>
            <li>Basic Support</li>
          </ul>
          <div class="d-flex justify-content-between align-items-center fw-bolder mb-50">
            <span>Days</span>
            <span>4 of 30 Days</span>
          </div>
          <div class="progress mb-50" style="height: 8px">
            <div
              class="progress-bar"
              role="progressbar"
              style="width: 80%"
              aria-valuenow="65"
              aria-valuemax="100"
              aria-valuemin="80"
            ></div>
          </div>
          <span>4 days remaining</span>
          <div class="d-grid w-100 mt-2">
            <button class="btn btn-primary" data-bs-target="#upgradePlanModal" data-bs-toggle="modal">
              Upgrade Plan
            </button>
          </div>
        </div>
      </div> --}}
      <!-- /Plan Card -->
    </div>
    <!--/ User Sidebar -->

    <!-- User Content -->
    <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
      <!-- User Pills -->

      <!--/ User Pills -->

      <!-- Project table -->
      {{-- <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-md-3">
              <div class="user-avatar-section">
              <div class="d-flex flex-column">
                  <img class="img-fluid rounded" src="{{asset('images/avatars/sport-car.png')}}" height="64" width="64" alt="car avatar"/>
              </div>
            </div>
          </div>

            <div class="col-md-3">
              <div class="d-flex flex-row align-items-center">
                <div class="my-auto">
                  <h6 class="fw-bolder mb-0">VIATURA</h6>
                  <p class="card-text font-small-3 mb-0">Toyota Hiace</p>
                  <p class="card-text font-small-3 mb-0">AAY 33 MC</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="d-flex flex-row">
                <div class="my-auto">
                  <h6 class="fw-bolder mb-0">Combustivel</h6>
                  <p class="card-text font-small-3 mb-0">60L</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="d-flex flex-row">
                <div class="my-auto">
                  <h6 class="fw-bolder mb-0">Kilometragem</h6>
                  <p class="card-text font-small-3 mb-0">43455 Km</p>
                </div>
              </div>
            </div>
            <hr>
           
          </div>


          
        </div>
      </div> --}}

      
        <div class="card card-statistics">
          <div class="card-header">
            <h4 class="card-title">Viatura</h4>
            <div class="d-flex align-items-center">
              <p class="card-text me-25 mb-0">Concluida</p>
            </div>
          </div>
          <div class="card-body statistics-body">
            <div class="row">
              <div class="col-md-4 col-sm-6 col-12 mb-2 mb-md-0">
                <div class="d-flex flex-row">
                  <div class="avatar bg-light-primary me-2">
                    <div class="avatar-content">
                      <img class="img-fluid rounded" src="{{asset('images/avatars/sport-car.png')}}" alt="car avatar"/>
                    </div>
                  </div>

                  <div class="my-auto">
                    <h6 class="fw-bolder mb-0">Toyota Hiace</h6>
                    <p class="card-text font-small-3 mb-0">AAY 76MC</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-12 mb-2 mb-md-0">
                <div class="d-flex flex-row">
                  <div class="avatar bg-light-info me-2">
                    <div class="avatar-content">
                      <i data-feather="user" class="avatar-icon"></i>
                    </div>
                  </div>
                  <div class="my-auto">
                    <h6 class="fw-bolder mb-0">Combustivel</h6>
                    <p class="card-text font-small-3 mb-0">56L</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-12 mb-2 mb-sm-0">
                <div class="d-flex flex-row">
                  <div class="avatar bg-light-danger me-2">
                    <div class="avatar-content">
                      <i data-feather="box" class="avatar-icon"></i>
                    </div>
                  </div>
                  <div class="my-auto">
                    <h6 class="fw-bolder mb-0">Lotação</h6>
                    <p class="card-text font-small-3 mb-0">15 Lugares</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
     
      <!-- /Project table -->

       <!-- Transaction card -->
    <div class="card card-transaction">
      <div class="card-header">
        <h4 class="card-title">Viagem</h4>
        <i data-feather="more-vertical" class="font-medium-3 cursor-pointer"></i>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <div class="transaction-item">
              <div class="d-flex flex-row">
                <div class="avatar bg-light-primary rounded">
                  <div class="avatar-content">
                    <i data-feather="pocket" class="avatar-icon font-medium-3"></i>
                  </div>
                </div>
                <div class="transaction-info">
                  <h6 class="transaction-title">Partida</h6>
                  <small>22/03/2022</small>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="transaction-item">
              <div class="d-flex flex-row">
                <div class="avatar bg-light-success rounded">
                  <div class="avatar-content">
                    <i data-feather="check" class="avatar-icon font-medium-3"></i>
                  </div>
                </div>
                <div class="transaction-info">
                  <h6 class="transaction-title">Volta</h6>
                  <small>23/03/2022</small>
                </div>
              </div>
            </div>
          </div>
        </div>

        
        
        {{-- <div class="transaction-item">
          <div class="d-flex flex-row">
            <div class="avatar bg-light-danger rounded">
              <div class="avatar-content">
                <i data-feather="dollar-sign" class="avatar-icon font-medium-3"></i>
              </div>
            </div>
            <div class="transaction-info">
              <h6 class="transaction-title">Paypal</h6>
              <small>Add Money</small>
            </div>
          </div>
          <div class="fw-bolder text-success">+ $590</div>
        </div>
        <div class="transaction-item">
          <div class="d-flex flex-row">
            <div class="avatar bg-light-warning rounded">
              <div class="avatar-content">
                <i data-feather="credit-card" class="avatar-icon font-medium-3"></i>
              </div>
            </div>
            <div class="transaction-info">
              <h6 class="transaction-title">Mastercard</h6>
              <small>Ordered Food</small>
            </div>
          </div>
          <div class="fw-bolder text-danger">- $23</div>
        </div>
        <div class="transaction-item">
          <div class="d-flex flex-row">
            <div class="avatar bg-light-info rounded">
              <div class="avatar-content">
                <i data-feather="trending-up" class="avatar-icon font-medium-3"></i>
              </div>
            </div>
            <div class="transaction-info">
              <h6 class="transaction-title">Transfer</h6>
              <small>Refund</small>
            </div>
          </div>
          <div class="fw-bolder text-success">+ $98</div>
        </div> --}}
      </div>
    </div>
  <!--/ Transaction card -->

    </div>
    <!--/ User Content -->
  </div>
</section>

@include('content/_partials/_modals/modal-edit-user')
@include('content/_partials/_modals/modal-upgrade-plan')
@endsection

@section('vendor-script')
  {{-- Vendor js files --}}
  <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/cleave/cleave.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/cleave/addons/cleave-phone.us.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
  {{-- data table --}}
  <script src="{{ asset(mix('vendors/js/extensions/moment.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/jquery.dataTables.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.bootstrap5.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/responsive.bootstrap5.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.buttons.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/jszip.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/pdfmake.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/vfs_fonts.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.html5.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.print.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.rowGroup.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/extensions/sweetalert2.all.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/extensions/polyfill.min.js')) }}"></script>
@endsection

@section('page-script')
  {{-- Page js files --}}
  <script src="{{ asset(mix('js/scripts/pages/modal-edit-user.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/pages/app-user-view-account.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/pages/app-user-view.js')) }}"></script>
@endsection
