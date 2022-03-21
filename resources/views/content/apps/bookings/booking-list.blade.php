@extends('layouts/contentLayoutMaster')

@section('title', 'User List')

@section('vendor-style')
  {{-- Page Css files --}}
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/dataTables.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/buttons.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/rowGroup.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/wizard/bs-stepper.min.css')) }}">

@endsection

@section('page-style')
  {{-- Page Css files --}}
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/pickers/form-flat-pickr.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-wizard.css')) }}">
@endsection

@section('content')
<!-- users list start -->
<section class="app-user-list">
  <div class="row">
    <div class="col-lg-3 col-sm-6">
      <div class="card">
        <div class="card-body d-flex align-items-center justify-content-between">
          <div>
            <h3 class="fw-bolder mb-75">59</h3>
            <span>Reservados</span>
          </div>
          <div class="avatar bg-light-primary p-50">
            <span class="avatar-content">
              <i data-feather="user" class="font-medium-4"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6">
      <div class="card">
        <div class="card-body d-flex align-items-center justify-content-between">
          <div>
            <h3 class="fw-bolder mb-75">7</h3>
            <span>Pendentes</span>
          </div>
          <div class="avatar bg-light-danger p-50">
            <span class="avatar-content">
              <i data-feather="user-plus" class="font-medium-4"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6">
      <div class="card">
        <div class="card-body d-flex align-items-center justify-content-between">
          <div>
            <h3 class="fw-bolder mb-75">60</h3>
            <span>Concluidas</span>
          </div>
          <div class="avatar bg-light-success p-50">
            <span class="avatar-content">
              <i data-feather="user-check" class="font-medium-4"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6">
      <div class="card">
        <div class="card-body d-flex align-items-center justify-content-between">
          <div>
            <h3 class="fw-bolder mb-75">237</h3>
            <span>Canceladas</span>
          </div>
          <div class="avatar bg-light-warning p-50">
            <span class="avatar-content">
              <i class="fa-solid fa-user"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- list and filter start -->
  <div class="card">
    <div class="card-body border-bottom">
      <h4 class="card-title">Pesquisar e filtrar</h4>
      <div class="row">
        <div class="col-md-4 matricula_"></div>
        <div class="col-md-4 data_"></div>
        <div class="col-md-4 status_"></div>
      </div>
    </div>
    <div class="card-datatable table-responsive pt-0">
      <table class="user-list-table table">
        <thead class="table-light">
          <tr>
            <th></th>
            <th>Cliente</th>
            <th>Viatura</th>
            <th>Valor</th>
            <th>Data</th>
            <th>Estado</th>
            <th>Acção</th>
          </tr>
        </thead>
      </table>
    </div>
    <!-- Modal to add new user starts-->
    {{-- <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in">
      <div class="modal-dialog">
        <form class="add-new-user modal-content pt-0">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
          <div class="modal-header mb-1">
            <h5 class="modal-title" id="exampleModalLabel">Nova Reserva</h5>
          </div>
          <div class="modal-body flex-grow-1">
            <div class="mb-1">
              <label class="form-label" for="basic-icon-default-fullname">Nome do Cliente</label>
              <input
                type="text"
                class="form-control dt-full-name"
                id="basic-icon-default-fullname"
                placeholder="Nome Completo"
                name="user-fullname"
              />
            </div>
            <div class="mb-1">
              <label class="form-label" for="basic-icon-default-email">Email</label>
              <input
                type="text"
                id="basic-icon-default-email"
                class="form-control dt-email"
                placeholder="nome@dominio.co.mz"
                name="user-email"
              />
            </div>

            <div class="mb-1">
              <label class="form-label" for="basic-icon-default-contact">Contacto</label>
              <input
                type="text"
                id="basic-icon-default-contact"
                class="form-control dt-contact"
                placeholder="+258 (84) 0000000"
                name="user-contact"
              />
            </div>

            <div class="mb-1">
              <label class="form-label" for="basic-icon-default-company">Empresa</label>
              <input
                type="text"
                id="basic-icon-default-company"
                class="form-control dt-contact"
                placeholder="Empresa"
                name="user-company"
              />
            </div>

            <div class="mb-1">
              <label class="form-label" for="country">Destino</label>
              <select id="country" class="select2 form-select">
                <option value="1">Maputo</option>
                <option value="2">Beira</option>
                <option value="3">Inhambane</option>
              </select>
            </div>

            <div class="mb-1">
              <label class="form-label" for="fp-range">Data</label>
              <input
                type="text"
                id="fp-range"
                class="form-control flatpickr-range"
                placeholder="AAAA-MM-DD to AAAA-MM-DD"
              />
            </div>

            <div class="mb-1">
              <label class="form-label" for="basic-icon-default-uname">Descrição</label>
              <input
                type="text"
                id="basic-icon-default-uname"
                class="form-control dt-uname"
                placeholder="Descrição da reserva"
                name="user-name"
              />
            </div>
            <div class="mb-1">
              <label class="form-label" for="country">Nº Adultos</label>
              <select id="country" class="select2 form-select">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="1">4</option>
                <option value="2">5</option>
                <option value="3">6</option>
                <option value="1">7</option>
                <option value="2">8</option>
                <option value="3">9</option>
                <option value="1">10</option>
              </select>
            </div>
            <div class="mb-1">
              <label class="form-label" for="country">Nº Crianças</label>
              <select id="country" class="select2 form-select">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="1">4</option>
                <option value="2">5</option>
                <option value="3">6</option>
                <option value="1">7</option>
                <option value="2">8</option>
                <option value="3">9</option>
                <option value="1">10</option>
              </select>
            </div>
            
            <div class="mb-1">
              <label class="form-label" for="country">Viatura</label>
              <select id="country" class="select2 form-select">
                <option value="1">Honda Accord AAU 3443</option>
                <option value="2">Toyota Coaster AAr 873</option>
                <option value="3">Toyota Hiace AAY 322</option>
              </select>
            </div>
            <div class="mb-1">
              <label class="form-label" for="basic-icon-default-company">Distancia</label>
              <input
                type="text"
                id="basic-icon-default-company"
                class="form-control dt-contact"
                placeholder="00 km"
                name="user-company"
              />
            </div>
            <button type="submit" class="btn btn-primary me-1 data-submit">Criar</button>
            <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>
          </div>
        </form>
      </div>
    </div> --}}
    <!-- Modal to add new user Ends-->

    <!-- Modal -->
    <div class="modal fade text-start" id="modals-slide-in" tabindex="-1" aria-labelledby="myModalLabel17" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel17">Nova Reserva</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="bs-stepper vertical wizard-modern modern-vertical-wizard-example">
            <div class="bs-stepper-header">
              <div
                class="step"
                data-target="#account-details-vertical-modern"
                role="tab"
                id="account-details-vertical-modern-trigger"
              >
                <button type="button" class="step-trigger">
                  <span class="bs-stepper-box">
                    <i data-feather="user" class="font-medium-3"></i>
                  </span>
                  <span class="bs-stepper-label">
                    <span class="bs-stepper-title">Cliente</span>
                    <span class="bs-stepper-subtitle">Detalhes do cliente</span>
                  </span>
                </button>
              </div>
              <div
                class="step"
                data-target="#personal-info-vertical-modern"
                role="tab"
                id="personal-info-vertical-modern-trigger"
              >
                <button type="button" class="step-trigger">
                  <span class="bs-stepper-box">
                    <i data-feather="truck" class="font-medium-3"></i>
                  </span>
                  <span class="bs-stepper-label">
                    <span class="bs-stepper-title">Viatura</span>
                    <span class="bs-stepper-subtitle">Detalhes da viatura</span>
                  </span>
                </button>
              </div>
              <div
                class="step"
                data-target="#address-step-vertical-modern"
                role="tab"
                id="address-step-vertical-modern-trigger"
              >
                <button type="button" class="step-trigger">
                  <span class="bs-stepper-box">
                    <i data-feather="map-pin" class="font-medium-3"></i>
                  </span>
                  <span class="bs-stepper-label">
                    <span class="bs-stepper-title">Destino</span>
                    <span class="bs-stepper-subtitle">Detalhes do destino</span>
                  </span>
                </button>
              </div>
              <div
                class="step"
                data-target="#social-links-vertical-modern"
                role="tab"
                id="social-links-vertical-modern-trigger"
              >
                <button type="button" class="step-trigger">
                  <span class="bs-stepper-box">
                    <i data-feather="link" class="font-medium-3"></i>
                  </span>
                  <span class="bs-stepper-label">
                    <span class="bs-stepper-title">Outros</span>
                  </span>
                </button>
              </div>
            </div>
            <div class="bs-stepper-content">
              <div
                id="account-details-vertical-modern"
                class="content"
                role="tabpanel"
                aria-labelledby="account-details-vertical-modern-trigger"
              >
                <div class="content-header">
                  <h5 class="mb-0">Cliente</h5>
                  <small class="text-muted">Preencha os detalhes do cliente.</small>
                </div>
                <div class="row">
                  <div class="mb-1 col-md-6">
                    <label class="form-label" for="vertical-modern-username">Nome</label>
                    <input type="text" id="vertical-modern-username" class="form-control" placeholder="johndoe" />
                  </div>
                  <div class="mb-1 col-md-6">
                    <label class="form-label" for="vertical-modern-email">E-Mail</label>
                    <input
                      type="email"
                      id="vertical-modern-email"
                      class="form-control"
                      placeholder="john.doe@email.com"
                      aria-label="john.doe"
                    />
                  </div>
                </div>
                <div class="row">
                  <div class="mb-1 col-md-6">
                    <label class="form-label" for="vertical-modern-username">Contacto</label>
                    <input type="text" id="vertical-modern-username" class="form-control" placeholder="johndoe" />
                  </div>
                  <div class="mb-1 col-md-6">
                    <label class="form-label" for="vertical-modern-username">Endereço</label>
                    <input type="text" id="vertical-modern-username" class="form-control" placeholder="johndoe" />
                  </div>
                  
                </div>
                <div class="d-flex justify-content-between">
                  <button class="btn btn-outline-secondary btn-prev" disabled>
                    <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                    <span class="align-middle d-sm-inline-block d-none">Anterior</span>
                  </button>
                  <button class="btn btn-primary btn-next">
                    <span class="align-middle d-sm-inline-block d-none">Proximo</span>
                    <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                  </button>
                </div>
              </div>
              <div
                id="personal-info-vertical-modern"
                class="content"
                role="tabpanel"
                aria-labelledby="personal-info-vertical-modern-trigger"
              >
                <div class="content-header">
                  <h5 class="mb-0">Personal Info</h5>
                  <small>Enter Your Personal Info.</small>
                </div>
                <div class="row">
                  <div class="mb-1 col-md-6">
                    <label class="form-label" for="vertical-modern-first-name">First Name</label>
                    <input type="text" id="vertical-modern-first-name" class="form-control" placeholder="John" />
                  </div>
                  <div class="mb-1 col-md-6">
                    <label class="form-label" for="vertical-modern-last-name">Last Name</label>
                    <input type="text" id="vertical-modern-last-name" class="form-control" placeholder="Doe" />
                  </div>
                </div>
                <div class="row">
                  <div class="mb-1 col-md-6">
                    <label class="form-label" for="vertical-modern-country">Country</label>
                    <select class="select2 w-100" id="vertical-modern-country">
                      <option label=" "></option>
                      <option>UK</option>
                      <option>USA</option>
                      <option>Spain</option>
                      <option>France</option>
                      <option>Italy</option>
                      <option>Australia</option>
                    </select>
                  </div>
                  <div class="mb-1 col-md-6">
                    <label class="form-label" for="vertical-modern-language">Language</label>
                    <select class="select2 w-100" id="vertical-modern-language" multiple>
                      <option>English</option>
                      <option>French</option>
                      <option>Spanish</option>
                    </select>
                  </div>
                </div>
                <div class="d-flex justify-content-between">
                  <button class="btn btn-primary btn-prev">
                    <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                  </button>
                  <button class="btn btn-primary btn-next">
                    <span class="align-middle d-sm-inline-block d-none">Next</span>
                    <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                  </button>
                </div>
              </div>
              <div
                id="address-step-vertical-modern"
                class="content"
                role="tabpanel"
                aria-labelledby="address-step-vertical-modern-trigger"
              >
                <div class="content-header">
                  <h5 class="mb-0">Address</h5>
                  <small>Enter Your Address.</small>
                </div>
                <div class="row">
                  <div class="mb-1 col-md-6">
                    <label class="form-label" for="vertical-modern-address">Address</label>
                    <input
                      type="text"
                      id="vertical-modern-address"
                      class="form-control"
                      placeholder="98  Borough bridge Road, Birmingham"
                    />
                  </div>
                  <div class="mb-1 col-md-6">
                    <label class="form-label" for="vertical-modern-landmark">Landmark</label>
                    <input type="text" id="vertical-modern-landmark" class="form-control" placeholder="Borough bridge" />
                  </div>
                </div>
                <div class="row">
                  <div class="mb-1 col-md-6">
                    <label class="form-label" for="pincode4">Pincode</label>
                    <input type="text" id="pincode4" class="form-control" placeholder="658921" />
                  </div>
                  <div class="mb-1 col-md-6">
                    <label class="form-label" for="city4">City</label>
                    <input type="text" id="city4" class="form-control" placeholder="Birmingham" />
                  </div>
                </div>
                <div class="d-flex justify-content-between">
                  <button class="btn btn-primary btn-prev">
                    <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                  </button>
                  <button class="btn btn-primary btn-next">
                    <span class="align-middle d-sm-inline-block d-none">Next</span>
                    <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                  </button>
                </div>
              </div>
              <div
                id="social-links-vertical-modern"
                class="content"
                role="tabpanel"
                aria-labelledby="social-links-vertical-modern-trigger"
              >
                <div class="content-header">
                  <h5 class="mb-0">Social Links</h5>
                  <small>Enter Your Social Links.</small>
                </div>
                <div class="row">
                  <div class="mb-1 col-md-6">
                    <label class="form-label" for="vertical-modern-twitter">Twitter</label>
                    <input
                      type="text"
                      id="vertical-modern-twitter"
                      class="form-control"
                      placeholder="https://twitter.com/abc"
                    />
                  </div>
                  <div class="mb-1 col-md-6">
                    <label class="form-label" for="vertical-modern-facebook">Facebook</label>
                    <input
                      type="text"
                      id="vertical-modern-facebook"
                      class="form-control"
                      placeholder="https://facebook.com/abc"
                    />
                  </div>
                </div>
                <div class="row">
                  <div class="mb-1 col-md-6">
                    <label class="form-label" for="vertical-modern-google">Google+</label>
                    <input
                      type="text"
                      id="vertical-modern-google"
                      class="form-control"
                      placeholder="https://plus.google.com/abc"
                    />
                  </div>
                  <div class="mb-1 col-md-6">
                    <label class="form-label" for="vertical-modern-linkedin">Linkedin</label>
                    <input
                      type="text"
                      id="vertical-modern-linkedin"
                      class="form-control"
                      placeholder="https://linkedin.com/abc"
                    />
                  </div>
                </div>
                <div class="d-flex justify-content-between">
                  <button class="btn btn-primary btn-prev">
                    <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                  </button>
                  <button data-bs-dismiss="modal" type="button" class="btn btn-success btn-submit">Submit</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

   </div>


  </div>
  <!-- list and filter end -->
</section>
<!-- users list ends -->
@endsection

@section('vendor-script')
  {{-- Vendor js files --}}
  <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
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
  <script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/cleave/cleave.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/cleave/addons/cleave-phone.us.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.date.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.time.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/pickadate/legacy.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/wizard/bs-stepper.min.js')) }}"></script>

@endsection

@section('page-script')
  {{-- Page js files --}}
  <script src="{{ asset(mix('js/scripts/forms/pickers/form-pickers.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/forms/form-wizard.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/pages/app-booking-list.js')) }}"></script>
@endsection

