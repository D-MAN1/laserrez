<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'LazerRez') }}</title>

    <!-- Styles -->
    <link href="{{asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('/css/app.css') }} " rel="stylesheet" type="text/css"> -->
</head>
<body class="alert-primary">
    @include('layouts.menu')

@section('content')
<div class="container vh-100">
    <div class="row h-75 align-items-center">
        <div class="col-md-6 m-auto">
            <div class="card p-lg-2">
                <div class="card-header text-black-50">Заполните данные</div>

                <div class="card-body text-black-50 font-monospace">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label fw-bold">E-Mail</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label fw-bold">Пароль</label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control" name="password" required placeholder="Минимум 6 символов">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Запомнить меня на этом устройстве
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Отправить
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Забыли пароль?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@yield('content')
@include('layouts.footer')
    <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.6.0.min.j') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>