@extends('layouts.app', ['title' => __('Info Produk')])

@section('content')
    @include('users.partials.header', [
        'title' => __('data pendukung') . ' ',
        'description' => __(''),
        'class' => 'col-lg-7'
    ])  
    
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-6 mb-5 mb-xl-0">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                          

                            <h3 class="col-12 mb-0">{{ __('satuan') }}</h3>
                            <div class="col">
                                
                                <div class="form-group{{ $errors->has('satuan') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-satuan">{{ __('satuan Produk') }}</label>
                                    <input type="text" name="satuan" id="input-email" class="form-control form-control-alternative{{ $errors->has('satuan') ? ' is-invalid' : '' }}" placeholder="{{ __('satuan Produk') }}" value="{{ old('satuan','PCS') }}" required>

                                    @if ($errors->has('satuan'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('satuan') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('harga') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-email">{{ __('Harga Jual') }}</label>
                                    <input type="text" name="harga" id="input-email" class="form-control form-control-alternative{{ $errors->has('harga') ? ' is-invalid' : '' }}" placeholder="{{ __('harga') }}" value="{{ old('harga', 'Rp. 999.999') }}" required>

                                    @if ($errors->has('harga'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('harga') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="table-responsive">
                                <table class="table align-items-center table-flush">
                                  <thead class="thead-light">
                                    <tr>
                                      <th scope="col" class="sort" data-sort="name">Project</th>
                                      <th scope="col" class="sort" data-sort="budget">Budget</th>
                                      <th scope="col" class="sort" data-sort="status">Status</th>
                                      <th scope="col">Users</th>
                                      <th scope="col" class="sort" data-sort="completion">Completion</th>
                                      <th scope="col"></th>
                                    </tr>
                                  </thead>
                                  <tbody class="list">
                                    <tr>
                                      <th scope="row">
                                        <div class="media align-items-center">
                                          <a href="#" class="avatar rounded-circle mr-3">
                                            <img alt="Image placeholder" src="../assets/img/theme/bootstrap.jpg">
                                          </a>
                                          <div class="media-body">
                                            <span class="name mb-0 text-sm">Argon Design System</span>
                                          </div>
                                        </div>
                                      </th>
                                      <td class="budget">
                                        $2500 USD
                                      </td>
                                      <td>
                                        <span class="badge badge-dot mr-4">
                                          <i class="bg-warning"></i>
                                          <span class="status">pending</span>
                                        </span>
                                      </td>
                                      <td>
                                        <div class="avatar-group">
                                          <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                                            <img alt="Image placeholder" src="../assets/img/theme/team-1.jpg">
                                          </a>
                                          <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                                            <img alt="Image placeholder" src="../assets/img/theme/team-2.jpg">
                                          </a>
                                          <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                                            <img alt="Image placeholder" src="../assets/img/theme/team-3.jpg">
                                          </a>
                                          <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                                            <img alt="Image placeholder" src="../assets/img/theme/team-4.jpg">
                                          </a>
                                        </div>
                                      </td>
                                      <td>
                                        <div class="d-flex align-items-center">
                                          <span class="completion mr-2">60%</span>
                                          <div>
                                            <div class="progress">
                                              <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                            </div>
                                          </div>
                                        </div>
                                      </td>
                                      <td class="text-right">
                                        <div class="dropdown">
                                          <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                          </a>
                                          <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                          </div>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <th scope="row">
                                        <div class="media align-items-center">
                                          <a href="#" class="avatar rounded-circle mr-3">
                                            <img alt="Image placeholder" src="../assets/img/theme/angular.jpg">
                                          </a>
                                          <div class="media-body">
                                            <span class="name mb-0 text-sm">Angular Now UI Kit PRO</span>
                                          </div>
                                        </div>
                                      </th>
                                      <td class="budget">
                                        $1800 USD
                                      </td>
                                      <td>
                                        <span class="badge badge-dot mr-4">
                                          <i class="bg-success"></i>
                                          <span class="status">completed</span>
                                        </span>
                                      </td>
                                      <td>
                                        <div class="avatar-group">
                                          <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                                            <img alt="Image placeholder" src="../assets/img/theme/team-1.jpg">
                                          </a>
                                          <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                                            <img alt="Image placeholder" src="../assets/img/theme/team-2.jpg">
                                          </a>
                                          <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                                            <img alt="Image placeholder" src="../assets/img/theme/team-3.jpg">
                                          </a>
                                          <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                                            <img alt="Image placeholder" src="../assets/img/theme/team-4.jpg">
                                          </a>
                                        </div>
                                      </td>
                                      <td>
                                        <div class="d-flex align-items-center">
                                          <span class="completion mr-2">100%</span>
                                          <div>
                                            <div class="progress">
                                              <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                            </div>
                                          </div>
                                        </div>
                                      </td>
                                      <td class="text-right">
                                        <div class="dropdown">
                                          <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                          </a>
                                          <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                          </div>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <th scope="row">
                                        <div class="media align-items-center">
                                          <a href="#" class="avatar rounded-circle mr-3">
                                            <img alt="Image placeholder" src="../assets/img/theme/sketch.jpg">
                                          </a>
                                          <div class="media-body">
                                            <span class="name mb-0 text-sm">Black Dashboard</span>
                                          </div>
                                        </div>
                                      </th>
                                      <td class="budget">
                                        $3150 USD
                                      </td>
                                      <td>
                                        <span class="badge badge-dot mr-4">
                                          <i class="bg-danger"></i>
                                          <span class="status">delayed</span>
                                        </span>
                                      </td>
                                      <td>
                                        <div class="avatar-group">
                                          <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                                            <img alt="Image placeholder" src="../assets/img/theme/team-1.jpg">
                                          </a>
                                          <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                                            <img alt="Image placeholder" src="../assets/img/theme/team-2.jpg">
                                          </a>
                                          <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                                            <img alt="Image placeholder" src="../assets/img/theme/team-3.jpg">
                                          </a>
                                          <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                                            <img alt="Image placeholder" src="../assets/img/theme/team-4.jpg">
                                          </a>
                                        </div>
                                      </td>
                                      <td>
                                        <div class="d-flex align-items-center">
                                          <span class="completion mr-2">72%</span>
                                          <div>
                                            <div class="progress">
                                              <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%;"></div>
                                            </div>
                                          </div>
                                        </div>
                                      </td>
                                      <td class="text-right">
                                        <div class="dropdown">
                                          <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                          </a>
                                          <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                          </div>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <th scope="row">
                                        <div class="media align-items-center">
                                          <a href="#" class="avatar rounded-circle mr-3">
                                            <img alt="Image placeholder" src="../assets/img/theme/react.jpg">
                                          </a>
                                          <div class="media-body">
                                            <span class="name mb-0 text-sm">React Material Dashboard</span>
                                          </div>
                                        </div>
                                      </th>
                                      <td class="budget">
                                        $4400 USD
                                      </td>
                                      <td>
                                        <span class="badge badge-dot mr-4">
                                          <i class="bg-info"></i>
                                          <span class="status">on schedule</span>
                                        </span>
                                      </td>
                                      <td>
                                        <div class="avatar-group">
                                          <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                                            <img alt="Image placeholder" src="../assets/img/theme/team-1.jpg">
                                          </a>
                                          <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                                            <img alt="Image placeholder" src="../assets/img/theme/team-2.jpg">
                                          </a>
                                          <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                                            <img alt="Image placeholder" src="../assets/img/theme/team-3.jpg">
                                          </a>
                                          <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                                            <img alt="Image placeholder" src="../assets/img/theme/team-4.jpg">
                                          </a>
                                        </div>
                                      </td>
                                      <td>
                                        <div class="d-flex align-items-center">
                                          <span class="completion mr-2">90%</span>
                                          <div>
                                            <div class="progress">
                                              <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                                            </div>
                                          </div>
                                        </div>
                                      </td>
                                      <td class="text-right">
                                        <div class="dropdown">
                                          <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                          </a>
                                          <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                          </div>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <th scope="row">
                                        <div class="media align-items-center">
                                          <a href="#" class="avatar rounded-circle mr-3">
                                            <img alt="Image placeholder" src="../assets/img/theme/vue.jpg">
                                          </a>
                                          <div class="media-body">
                                            <span class="name mb-0 text-sm">Vue Paper UI Kit PRO</span>
                                          </div>
                                        </div>
                                      </th>
                                      <td class="budget">
                                        $2200 USD
                                      </td>
                                      <td>
                                        <span class="badge badge-dot mr-4">
                                          <i class="bg-success"></i>
                                          <span class="status">completed</span>
                                        </span>
                                      </td>
                                      <td>
                                        <div class="avatar-group">
                                          <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                                            <img alt="Image placeholder" src="../assets/img/theme/team-1.jpg">
                                          </a>
                                          <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                                            <img alt="Image placeholder" src="../assets/img/theme/team-2.jpg">
                                          </a>
                                          <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                                            <img alt="Image placeholder" src="../assets/img/theme/team-3.jpg">
                                          </a>
                                          <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                                            <img alt="Image placeholder" src="../assets/img/theme/team-4.jpg">
                                          </a>
                                        </div>
                                      </td>
                                      <td>
                                        <div class="d-flex align-items-center">
                                          <span class="completion mr-2">100%</span>
                                          <div>
                                            <div class="progress">
                                              <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                            </div>
                                          </div>
                                        </div>
                                      </td>
                                      <td class="text-right">
                                        <div class="dropdown">
                                          <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                          </a>
                                          <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                          </div>
                                        </div>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>

                        </div>
                            </div>
                            
                        </div>
                  
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title text-uppercase text-muted mb-0">Jumlah Kasbon Pelanggan</h5>
                                    <span class="h3 font-weight-bold mb-0">350,897</span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                    <i class="fas fa-chart-bar"></i>
                                </div>
                            </div>
                            
                            
                        </div>
                        <br/>
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title text-uppercase text-muted mb-0">Jumlah Kasbon Lunas</h5>
                                    <span class="h3 font-weight-bold mb-0">350,897</span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                    <i class="fas fa-chart-bar"></i>
                                </div>
                                
                            </div>
                            
                            
                        </div>
                        <center><button type="button" class="btn btn-success btn-sm">Lihat</button></center>
                         
                        
                       
                    </div>
                    
                  
                </div>
            </div>
            
        </div>
    

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush