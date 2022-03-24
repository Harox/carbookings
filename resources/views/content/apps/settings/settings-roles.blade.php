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
                  <div class="form-modal-ex">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#inlineForm">
                      Novo Cargo
                    </button>
                    <!-- Modal -->
                    <div
                      class="modal fade text-start"
                      id="inlineForm"
                      tabindex="-1"
                      aria-labelledby="myModalLabel33"
                      aria-hidden="true"
                    >
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel33">Novo cargo</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <form action="{{url('admin/settings-store-roles')}}" method="post">
                            @csrf
                            <div class="modal-body">
                              <label>Cargo: </label>
                              <div class="mb-1">
                                <input id="name" name="name" type="text" placeholder="Cargo" class="form-control" />
                              </div>
      
                              <label>Permissões: </label>
                              <div class="mb-1">
                                @foreach ($permission as $value)
                                <div class="form-check form-check-success">
                                  <input type="checkbox" name="permission[]" class="form-check-input" value={{$value->id}} />
                                  <label class="form-check-label" for={{$value->id}}>{{ $value->name }}</label>
                                </div>
                                @endforeach
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Criar</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
              </div>
              <div class="card-body">
                <div class="nav-vertical">
                  <ul class="nav nav-tabs nav-left flex-column" role="tablist">

                    @foreach ($roles as $key => $role)
                    <li class="nav-item">
                      <a
                        class="nav-link"
                        id={{$role->id}}
                        data-bs-toggle="tab"
                        aria-controls="tabVerticalLeft{{$role->id}}"
                        href="#tabVerticalLeft{{$role->id}}"
                        role="tab"
                        aria-selected="false"
                        >{{ $role->name }}</a
                      >
                    </li>
                    @endforeach

                  </ul>
                  <div class="tab-content">
                    @foreach ($roles as $key => $role)
                        <div class="tab-pane @if($role->id == '1') active @endif"  id="tabVerticalLeft{{$role->id}}" role="tabpanel" aria-labelledby="baseVerticalLeft{{$role->id}}">
                          <section id="vuexy-checkbox-color">
                            <div class="row">
                              <div class="col-12">
                                <div class="card">
                                  <div class="card-header">
                                    <h4 class="card-title">{{$role->name}}</h4>
                                  </div>
                                  <div class="card-body">
                                    <div class="demo-inline-spacing">
                                      @if(!empty($rolePermissions))
                                        @foreach($rolePermissions as $v)
                                          <div class="form-check form-check-success">
                                            <input type="checkbox" class="form-check-input" id="colorCheck3" checked />
                                            <label class="form-check-label" for="colorCheck3">{{ $v->name }}</label>
                                          </div>
                                        @endforeach
                                      @endif
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </section>
                        </div>
                      @endforeach
                    
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



