@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading text-center" style="border-left:90px;">Iniciar sesión</div>
                    <div class="panel-body">
                        <form class="form-horizontal " role="form" method="POST" action="/login">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('rut') ? ' has-error' : '' }}">
                                <label for="rut" class="col-md-4 control-label">Rut</label>
                                <div class="col-md-6">
                                    <input id="rut" type="text" class="form-control" name="rut"
                                           value="{{ old('rut') }}"
                                           required autofocus>
                                    @if ($errors->has('rut'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('rut') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Contraseña</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary" style="width:90px; height:40px; display: table; margin: 0 auto;">
                                        Ingresar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection