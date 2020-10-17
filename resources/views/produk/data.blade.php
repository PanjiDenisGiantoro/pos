@extends('layouts.app', ['title' => __('Info Produk')])

@section('content')
    @include('users.partials.header', [
        'title' => __('data Produk') . ' ',
        'description' => __(''),
        'class' => 'col-lg-7'
    ])   

    <div class="container-fluid mt--7">
        <div class="row">
            
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="col-12 mb-0">{{ __('Information Produk | harga per jumlah') }}</h3>
                        </div>
                    </div>
                    <div class="card-body ">
                        <form method="post" action="{{ route('profile.update') }}" autocomplete="off">
                            @csrf
                            @method('put')

         
                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            
                            <div class="row">
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

                                </div>
                                <div class="col">
                               
                                        
                                        <div class="form-group{{ $errors->has('jumlah') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-email">{{ __('jumlah beli ') }}</label>
                                            <input type="text" name="jumlah" id="input-email" class="form-control form-control-alternative{{ $errors->has('jumlah') ? ' is-invalid' : '' }}" placeholder="{{ __('jumlah beli') }}" value="{{ old('jumlah', 'Rp. 999.999') }}" required>
        
                                            @if ($errors->has('jumlah'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('jumlah') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group{{ $errors->has('hargabeli') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-email">{{ __('harga beli ') }}</label>
                                            <input type="text" name="hargabeli" id="input-email" class="form-control form-control-alternative{{ $errors->has('hargabeli') ? ' is-invalid' : '' }}" placeholder="{{ __('hargabeli ') }}" value="{{ old('hargabeli', 'Rp. 999.999') }}" required>
        
                                            @if ($errors->has('hargabeli'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('hargabeli') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                              </div>
                             
                                <div class="col">
                                      
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-success mt-4">{{ __('Perbarui data') }}</button>
                                        </div>
                                   
                                </div>
                                
                               </div>
                               <div class="card">
                                <!-- Card header -->
                                <!-- Light table -->
                                <div class="table-responsive">
                               <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                  <tr>
                                    <th scope="col" class="sort" data-sort="name">jumlah beli</th>
                                    <th scope="col" class="sort" data-sort="budget">harga beli</th>
                                   
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
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
        
        @include('layouts.footers.auth')
    </div>
@endsection