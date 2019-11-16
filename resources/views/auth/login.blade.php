<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ATI">
    <meta name="keyword" content="Personality Personel Admin System">

    <title>Personality - Personel Yönetim ve Görevlendirme Paneli</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap-reset.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{asset('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />

    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet" />

</head>

<body class="login-body">
    <div class="container">
        <form class="form-signin" method="POST" action="{{ route('login') }}">
            @csrf
            <h2 class="form-signin-heading">GİRİŞ YAPIN</h2>
            <div class="login-wrap">
                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="E-mail Adresiniz  ">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Parolanız">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="checkbox" for="remember">
                    {{ __('Remember Me') }}
                </label>
                <button class="btn btn-lg btn-login btn-block" type="submit">{{ __('Login') }}</button>
                <p>Parolanızı unuttuysanız lütfen IT departmanı ile iletişime geçiniz.</p>
            </div>
        </form>
    </div>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
