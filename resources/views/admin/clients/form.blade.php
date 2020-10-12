<div class="row">
    <div class="col-auto">
        <div class="card">
            <div class="card-header">
                {{'Nuevo cliente'}}
              </div>
            <div class="card-body">
                <div class="form-group row">
                    <div class="custom-fields">
                        <label for="name" class="col-form-label col-form-label-sm mr-2"> {{'Nombre'}} </label>
                        <div class="form-col">
                            <input type="text" name="name" id="name" class="form-control form-control-sm @error('name') is-invalid @enderror" value=" {{ isset($method) ? $client->name : old('name') }} ">
                        </div>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="custom-fields">
                        <label for="last_name" class="col-form-label col-form-label-sm mr-2 ml-2"> {{'Apellido'}} </label>
                        <div class="form-col">
                            <input type="text" name="last_name" id="last_name" class="form-control form-control-sm" value="{{ isset($method) ? $client->last_name : old('last_name')}}">
                        </div>
                    </div>


                </div>

                <div class="form-group row">
                    <div class="custom-fields">
                        <label for="email" class="col-form-label col-form-label-sm mr-2"> {{'Email'}} </label>
                        <div class="form-col">

                            <input type="email" name="email" id="email" class="form-control form-control-sm @error('email') is-invalid @enderror" value="{{ isset($method) ? $client->email : old('email')}}">
                        </div>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="custom-fields">
                        <label for="birth_date" class="col-form-label col-form-label-sm mr-2 ml-2"> {{'Fecha de nacimiento'}} </label>
                        <div class="form-col">
                            <input type="date" name="birth_date" id="birth_date" class="form-control form-control-sm @error('birth_date') is-invalid @enderror" value="{{ isset($method) ? $client->birth_date : old('birth_date')}}">
                        </div>
                        @error('birth_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                </div>

                <div class="form-group row">

                    <div class="custom-fields">
                        <label for="local_phone" class="col-form-label col-form-label-sm mr-2"> {{'Telefono'}} </label>
                        <div class="form-col">
                            <input type="number" name="local_phone" id="local_phone" class="form-control form-control-sm @error('local_phone') is-invalid @enderror" value="{{ isset($method) ? $client->local_phone : old('local_phone')}}">
                        </div>
                        @error('local_phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="custom-fields">
                        <label for="mobile_phone" class="col-form-label col-form-label-sm mr-2 ml-2"> {{'Celular'}} </label>
                        <div class="form-col">
                            <input type="number" name="mobile_phone" id="mobile_phone" class="form-control form-control-sm @error('mobile_phone') is-invalid @enderror" value="{{ isset($method) ? $client->mobile_phone : old('mobile_phone')}}">
                        </div>
                        @error('mobile_phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                </div>

                <div class="row card-footer-buttons">
                    <div class="col">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <a href=' {{ url('admin/clients') }} ' class="btn btn-danger">Regresar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
