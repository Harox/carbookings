@extends('layouts/contentLayoutMaster')

@section('title', 'Security')

@section('vendor-style')
  {{-- vendor css files --}}
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/dataTables.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
@endsection

@section('content')
<div class="row">
  <div class="col-12">
    <ul class="nav nav-pills mb-2">
      <!-- Account -->
      <li class="nav-item">
        <a class="nav-link" href="{{asset('page/account-settings-account')}}">
          <i data-feather="user" class="font-medium-3 me-50"></i>
          <span class="fw-bold">Account</span>
        </a>
      </li>
      <!-- security -->
      <li class="nav-item">
        <a class="nav-link" href="{{asset('page/account-settings-security')}}">
          <i data-feather="lock" class="font-medium-3 me-50"></i>
          <span class="fw-bold">Security</span>
        </a>
      </li>
      <!-- billing and plans -->
      <li class="nav-item">
        <a class="nav-link" href="{{asset('page/account-settings-billing')}}">
          <i data-feather="bookmark" class="font-medium-3 me-50"></i>
          <span class="fw-bold">Billings &amp; Plans</span>
        </a>
      </li>
      <!-- notification -->
      <li class="nav-item">
        <a class="nav-link" href="{{asset('page/account-settings-notifications')}}">
          <i data-feather="bell" class="font-medium-3 me-50"></i>
          <span class="fw-bold">Notifications</span>
        </a>
      </li>
      <!-- connection -->
      <li class="nav-item">
        <a class="nav-link active" href="{{asset('page/account-settings-connections')}}">
          <i data-feather="link" class="font-medium-3 me-50"></i>
          <span class="fw-bold">Cargos Permissões</span>
        </a>
      </li>
    </ul>

    <!-- connection -->

    <div class="row">
      <!-- Responsive Datatable -->
      <section id="vertical-tabs">
        <div class="row match-height">
          <!-- Vertical Left Tabs start -->
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div class="row md-3">
                  <h4 class="card-title">Cargos</h4>
                </div>
                <div class="row md-3">
                  <h4 class="card-title">Permissões</h4>
                </div>
                <div class="row md-3">
                </div>
                
              </div>
              <div class="card-body">
                <div class="nav-vertical">
                  <ul class="nav nav-tabs nav-left flex-column" role="tablist">
                    <li class="nav-item">
                      <a
                        class="nav-link active"
                        id="baseVerticalLeft-tab1"
                        data-bs-toggle="tab"
                        aria-controls="tabVerticalLeft1"
                        href="#tabVerticalLeft1"
                        role="tab"
                        aria-selected="true"
                        >Recursos Humanos</a
                      >
                    </li>
                    <li class="nav-item">
                      <a
                        class="nav-link"
                        id="baseVerticalLeft-tab2"
                        data-bs-toggle="tab"
                        aria-controls="tabVerticalLeft2"
                        href="#tabVerticalLeft2"
                        role="tab"
                        aria-selected="false"
                        >Tecnologias de informação</a
                      >
                    </li>
                    <li class="nav-item">
                      <a
                        class="nav-link"
                        id="baseVerticalLeft-tab3"
                        data-bs-toggle="tab"
                        aria-controls="tabVerticalLeft3"
                        href="#tabVerticalLeft3"
                        role="tab"
                        aria-selected="false"
                        >Comercial
                      </a>
                    </li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane active" id="tabVerticalLeft1" role="tabpanel" aria-labelledby="baseVerticalLeft-tab1">
                      <section id="vuexy-checkbox-color">
                        <div class="row">
                          <div class="col-12">
                            <div class="card">
                              <div class="card-header">
                                <h4 class="card-title">Requisições</h4>
                              </div>
                              <div class="card-body">
                                <div class="demo-inline-spacing">
                                  <div class="form-check form-check-success">
                                    <input type="checkbox" class="form-check-input" id="colorCheck3" checked />
                                    <label class="form-check-label" for="colorCheck3">Criar</label>
                                  </div>
                                  <div class="form-check form-check-warning">
                                    <input type="checkbox" class="form-check-input" id="colorCheck4" checked />
                                    <label class="form-check-label" for="colorCheck4">Visualizar</label>
                                  </div>
                                  <div class="form-check form-check-info">
                                    <input type="checkbox" class="form-check-input" id="colorCheck6" checked />
                                    <label class="form-check-label" for="colorCheck6">Editar</label>
                                  </div>
                                  <div class="form-check form-check-danger">
                                    <input type="checkbox" class="form-check-input" id="colorCheck5" checked />
                                    <label class="form-check-label" for="colorCheck5">Apagar</label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </section>
                    </div>
                    <div class="tab-pane" id="tabVerticalLeft2" role="tabpanel" aria-labelledby="baseVerticalLeft-tab2">
                      <section id="vuexy-checkbox-color">
                        <div class="row">
                          <div class="col-12">
                            <div class="card">
                              <div class="card-header">
                                <h4 class="card-title">Abastecimentos</h4>
                              </div>
                              <div class="card-body">
                                <div class="demo-inline-spacing">
                                  <div class="form-check form-check-success">
                                    <input type="checkbox" class="form-check-input" id="colorCheck3" checked />
                                    <label class="form-check-label" for="colorCheck3">Criar</label>
                                  </div>
                                  <div class="form-check form-check-warning">
                                    <input type="checkbox" class="form-check-input" id="colorCheck4" checked />
                                    <label class="form-check-label" for="colorCheck4">Visualizar</label>
                                  </div>
                                  <div class="form-check form-check-info">
                                    <input type="checkbox" class="form-check-input" id="colorCheck6" checked />
                                    <label class="form-check-label" for="colorCheck6">Editar</label>
                                  </div>
                                  <div class="form-check form-check-danger">
                                    <input type="checkbox" class="form-check-input" id="colorCheck5" checked />
                                    <label class="form-check-label" for="colorCheck5">Apagar</label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </section>
                    </div>
                    <div class="tab-pane" id="tabVerticalLeft3" role="tabpanel" aria-labelledby="baseVerticalLeft-tab3">
                      <section id="vuexy-checkbox-color">
                        <div class="row">
                          <div class="col-12">
                            <div class="card">
                              <div class="card-header">
                                <h4 class="card-title">Viaturas</h4>
                              </div>
                              <div class="card-body">
                                <div class="demo-inline-spacing">
                                  <div class="form-check form-check-success">
                                    <input type="checkbox" class="form-check-input" id="colorCheck3" checked />
                                    <label class="form-check-label" for="colorCheck3">Criar</label>
                                  </div>
                                  <div class="form-check form-check-warning">
                                    <input type="checkbox" class="form-check-input" id="colorCheck4" checked />
                                    <label class="form-check-label" for="colorCheck4">Visualizar</label>
                                  </div>
                                  <div class="form-check form-check-info">
                                    <input type="checkbox" class="form-check-input" id="colorCheck6" checked />
                                    <label class="form-check-label" for="colorCheck6">Editar</label>
                                  </div>
                                  <div class="form-check form-check-danger">
                                    <input type="checkbox" class="form-check-input" id="colorCheck5" checked />
                                    <label class="form-check-label" for="colorCheck5">Apagar</label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </section>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Vertical Left Tabs ends -->
        </div>
      </section>
<!--/ Responsive Datatable -->


    </div>

    <!--/ connection -->
  </div>
</div>
@endsection

@section('vendor-script')
{{-- vendor files --}}
  <script src="{{ asset(mix('vendors/js/tables/datatable/jquery.dataTables.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.bootstrap5.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/responsive.bootstrap5.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
@endsection

@section('page-script')
  {{-- Page js files --}}
  <script src="{{ asset(mix('js/scripts/tables/table-datatables-advanced.js')) }}"></script>
@endsection

