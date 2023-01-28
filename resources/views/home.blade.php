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
            <div class="card panel-default">
                <div class="card-header text-black-50">Информация:</div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Вы вошли на сайт!
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
