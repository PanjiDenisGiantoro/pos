@extends('layouts.app', ['title' => __('Info Produk')])

@section('content')
    @include('users.partials.header', [
        'title' => __('tambah Produk') . ' ',
        'description' => __(''),
        'class' => 'col-lg-7'
    ])   

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-8 mb-5 mb-xl-0">
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
                        </div>
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
                        </div>
                            
                            </div>
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
                                </div>
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
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Example select</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                          <option>1</option>
                                          <option>2</option>
                                          <option>3</option>
                                          <option>4</option>
                                          <option>5</option>
                                        </select>
                                      </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Example select</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                          <option>1</option>
                                          <option>2</option>
                                          <option>3</option>
                                          <option>4</option>
                                          <option>5</option>
                                        </select>
                                      </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Example select</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                          <option>1</option>
                                          <option>2</option>
                                          <option>3</option>
                                          <option>4</option>
                                          <option>5</option>
                                        </select>
                                      </div>
                                </div>
                                <div class="col">

                                    
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Example select</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadioInline1">masih dijual</label>
                                      </div>
                                      <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadioInline2">sudah tidak terjual</label>
                                     
                                </div>
                                </div>
                            </div>
                              <div class="form-group">
                                <label for="exampleFormControlTextarea1">Example textarea</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                              
                            </div>
                            <center><button class="btn btn-success">tambah</button></center>
                        
                          
                            
                        </div>
                  
                </div>
            </div>
            <div class="col-xl-4 mb-5 mb-xl-0">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                          

                            <div class="col">
                              <div class="form-group">
                                <center><img src="{{ asset('argon') }}/img/theme/profile-cover.jpg" alt="" style="width: 200px; height: 200px;"></center>
                            </div>
                            <form>
                              <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="customFileLang" lang="en">
                                  <label class="custom-file-label" for="customFileLang">Select file</label>
                              </div>
                          </form>
                               
                              </div>
                              

                        </div>
                        <div class="form-group{{ $errors->has('barcode') ? ' has-danger' : '' }}">
                          <label class="form-control-label" for="input-barcode">{{ __('barcode ') }}</label>
                          <input type="text" name="barcode" id="input-email" class="form-control form-control-alternative{{ $errors->has('barcode') ? ' is-invalid' : '' }}" placeholder="{{ __('barcode ') }}" value="{{ old('barcode','') }}" required>

                          @if ($errors->has('barcode'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('barcode') }}</strong>
                              </span>
                          @endif
                      </div>
                      <div class="form-group{{ $errors->has('stok') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-stok">{{ __('minimal stok ') }}</label>
                        <input type="text" name="stok" id="input-email" class="form-control form-control-alternative{{ $errors->has('stok') ? ' is-invalid' : '' }}" placeholder="{{ __('stok ') }}" value="{{ old('stok','') }}" required>

                        @if ($errors->has('stok'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('stok') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('harga') ? ' has-danger' : '' }}">
                      <label class="form-control-label" for="input-harga">{{ __('harga jual') }}</label>
                      <input type="text" name="harga" id="input-email" class="form-control form-control-alternative{{ $errors->has('harga') ? ' is-invalid' : '' }}" placeholder="{{ __('harga ') }}" value="{{ old('harga','') }}" required>

                      @if ($errors->has('harga'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('harga') }}</strong>
                          </span>
                      @endif
                  </div>
                  <div class="form-group{{ $errors->has('supplier') ? ' has-danger' : '' }}">
                    <label class="form-control-label" for="input-supplier">{{ __('supplier ') }}</label>
                    <input type="text" name="supplier" id="input-email" class="form-control form-control-alternative{{ $errors->has('supplier') ? ' is-invalid' : '' }}" placeholder="{{ __('supplier ') }}" value="{{ old('supplier','') }}" required>

                    @if ($errors->has('supplier'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('supplier') }}</strong>
                        </span>
                    @endif
                </div>
                            </div>
                            
                        </div>
                  
                </div>
            </div>
        </div>
        
        @include('layouts.footers.auth')
    </div>
@endsection