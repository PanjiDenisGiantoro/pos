@extends('layouts.app', ['title' => __('Info Produk')])

@section('content')
    @include('users.partials.header', [
        'title' => __('Info Produk') . ' ',
        'description' => __(''),
        'class' => 'col-lg-7'
    ])   

    <div class="container-fluid mt--7">
        <div class="row">
            
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="col-12 mb-0">{{ __('Information Produk') }}</h3>
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
                                        <div class="form-group{{ $errors->has('kode') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-kode">{{ __('kode') }}</label>
                                            <input type="text" name="kode" id="input-name" class="form-control form-control-alternative{{ $errors->has('kode') ? ' is-invalid' : '' }}" placeholder="{{ __('kode') }}" value="{{ old('kode', 'A001') }}" required autofocus>
        
                                            @if ($errors->has('kode'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('kode') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group{{ $errors->has('satuan') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-satuan">{{ __('satuan Produk') }}</label>
                                            <input type="text" name="satuan" id="input-email" class="form-control form-control-alternative{{ $errors->has('satuan') ? ' is-invalid' : '' }}" placeholder="{{ __('satuan Produk') }}" value="{{ old('satuan','PCS') }}" required>
        
                                            @if ($errors->has('satuan'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('satuan') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group{{ $errors->has('jenis') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-jenis">{{ __('jenis Produk') }}</label>
                                            <input type="text" name="jenis" id="input-email" class="form-control form-control-alternative{{ $errors->has('jenis') ? ' is-invalid' : '' }}" placeholder="{{ __('jenis Produk') }}" value="{{ old('jenis', 'MKN') }}" required>
        
                                            @if ($errors->has('jenis'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('jenis') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group{{ $errors->has('rak') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-rak">{{ __('rak ') }}</label>
                                            <input type="text" name="rak" id="input-email" class="form-control form-control-alternative{{ $errors->has('rak') ? ' is-invalid' : '' }}" placeholder="{{ __('rak ') }}" value="{{ old('rak', 'RAK-01') }}" required>
        
                                            @if ($errors->has('rak'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('rak') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group{{ $errors->has('stok') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-stok">{{ __('Minimal Stok ') }}</label>
                                            <input type="text" name="stok" id="input-email" class="form-control form-control-alternative{{ $errors->has('stok') ? ' is-invalid' : '' }}" placeholder="{{ __('Minimal Stok ') }}" value="{{ old('stok', '99') }}" required>
        
                                            @if ($errors->has('stok'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('stok') }}</strong>
                                                </span>
                                            @endif
                                        </div>
        

                                </div>
                                <div class="col">
                                 
                                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-name">{{ __('Name Produk') }}</label>
                                            <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name Produk') }}" value="{{ old('name', 'Kabel') }}" required autofocus>
        
                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('name') }}</strong>
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
                                        <div class="form-group{{ $errors->has('hargaSupplier') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-email">{{ __('harga Supplier ') }}</label>
                                            <input type="text" name="hargaSupplier" id="input-email" class="form-control form-control-alternative{{ $errors->has('hargaSupplier') ? ' is-invalid' : '' }}" placeholder="{{ __('hargaSupplier') }}" value="{{ old('hargaSupplier', 'Rp. 999.999') }}" required>
        
                                            @if ($errors->has('hargaSupplier'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('hargaSupplier') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group{{ $errors->has('merk') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-email">{{ __('merk ') }}</label>
                                            <input type="text" name="merk" id="input-email" class="form-control form-control-alternative{{ $errors->has('merk') ? ' is-invalid' : '' }}" placeholder="{{ __('merk') }}" value="{{ old('merk', 'Merk Alat') }}" required>
        
                                            @if ($errors->has('merk'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('merk') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group{{ $errors->has('keterangan') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-email">{{ __('keterangan ') }}</label>
                                            <input type="text" name="keterangan" id="input-email" class="form-control form-control-alternative{{ $errors->has('keterangan') ? ' is-invalid' : '' }}" placeholder="{{ __('keterangan') }}" value="{{ old('keterangan', 'akjdaljdakjdsak') }}" required>
        
                                            @if ($errors->has('keterangan'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('keterangan') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                             
                                <div class="col">
                                        <div class="form-group">
                                            <center><img src="{{ asset('argon') }}/img/theme/profile-cover.jpg" alt="" style="width: 200px; height: 200px;"></center>
                                        </div>
        
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-success mt-4">{{ __('Perbarui data') }}</button>
                                        </div>
                                   
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