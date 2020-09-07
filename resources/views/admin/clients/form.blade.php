<div class="row">
    <div class="col-5">
        <div class="card">
            <div class="card-header">
                {{'Nuevo cliente'}}
              </div>
            <div class="card-body">
                <div class="form-group row">
                    <label for="name" class="col-form-label col-form-label-sm"> {{'Nombre'}} </label>
                    <div class="form-col">
                        <input type="text" name="name" id="name" class="form-control form-control-sm @error('name') is-invalid @enderror" value=" {{old('name')}} ">
                    </div>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <label for="last_name" class="col-form-label col-form-label-sm"> {{'Apellido'}} </label>
                    <div class="form-col">
                        <input type="text" name="last_name" id="last_name" class="form-control form-control-sm" value="{{old('last_name')}}">
                    </div>

                </div>

                <div class="form-group row">
                    <label for="password" class="col-form-label col-form-label-sm"> {{'Contraseña'}} </label>
                    <div class="form-col">
                        <input type="password" name="password" id="password" class="form-control form-control-sm @error('name') is-invalid @enderror">
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="photo" class="col-form-label col-form-label-sm"> {{'Foto'}} </label>
                    <div class="form-col">
                        <input type="file" name="photo" id="photo" class="form-control form-control-sm" value="{{old('photo')}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-form-label col-form-label-sm"> {{'Email'}} </label>
                    <div class="form-col">

                        <input type="email" name="email" id="email" class="form-control form-control-sm @error('name') is-invalid @enderror" value="{{old('email')}}">
                    </div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="local_phone" class="col-form-label col-form-label-sm"> {{'Telefono'}} </label>
                    <div class="form-col">
                        <input type="number" name="local_phone" id="local_phone" class="form-control form-control-sm" value="{{old('local_phone')}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="mobile_phone" class="col-form-label col-form-label-sm"> {{'Celular'}} </label>
                    <div class="form-col">
                        <input type="number" name="mobile_phone" id="mobile_phone" class="form-control form-control-sm @error('name') is-invalid @enderror" value="{{old('mobile_phone')}}">
                    </div>
                    @error('mobile_phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="birth_date" class="col-form-label col-form-label-sm"> {{'Fecha de nacimiento'}} </label>
                    <div class="form-col">
                        <input type="date" name="birth_date" id="birth_date" class="form-control form-control-sm @error('name') is-invalid @enderror" value="{{old('birth_date')}}">
                    </div>
                    @error('birth_date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="row">
                    <div class="col">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <a href=' {{ url('clients') }} ' class="btn btn-danger">Regresar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
