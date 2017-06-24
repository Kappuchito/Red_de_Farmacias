@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Registrar usuario nuevo</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="/registrar">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Nombre</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name"
                                           value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('rut') ? ' has-error' : '' }}">
                                <label for="rut" class="col-md-4 control-label">Rut</label>

                                <div class="col-md-6">
                                    <input id="rut" type="text" class="form-control" name="rut" value="{{ old('rut') }}"
                                           required>

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
                                <label for="password-confirm" class="col-md-4 control-label">Confirmar
                                    Contraseña</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required>
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('tipodeperfil') ? ' has-error' : '' }}">
                                <label for="tipodeperfil" class="col-md-4 control-label">Tipo de perfil</label>

                                <div class="col-md-6">
                                    <select name="tipodeperfil" class="form-control" required
                                            value="{{ old('tipodeperfil') }}">
                                        <option value="">Seleccione tipo de perfil</option>
                                        <option value="1">Químico farmacéutico</option>
                                        <option value="2">Técnico en salud</option>
                                        <option value="3">Matrona</option>
                                        <option value="4">Dentista</option>
                                        <option value="5">Médico</option>
                                        <option value="6">Administrador</option>
                                    </select>
                                    @if ($errors->has('tipodeperfil'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('tipodeperfil') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('habilitado') ? ' has-error' : '' }}">
                                <label for="habilitado" class="col-md-4 control-label">Habilitar usuario</label>
                                <div class="col-md-6">
                                    <input name="habilitado" value="0" type="hidden">
                                    <input id="habilitado" type="checkbox" class="form-control-static"
                                           name="habilitado" style="border-left:400px;"
                                           value="{{ old('habilitado') }}">
                                    @if ($errors->has('habilitado'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('habilitado') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary" style="width:90px;">
                                        Registrar
                                    </button>
                                    <button type="reset" class="btn btn-primary"
                                            style="width:90px; margin-left:159px;">
                                        Limpiar
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
