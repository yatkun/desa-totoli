<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">



    <link rel="stylesheet" href="{{ asset ('lte/plugins/fontawesome-free/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset ('lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('lte/dist/css/adminlte.min.css') }}">

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="/login"><b>Website Resmi</b></a></br>
            <a href="/login"><b>Kelurahan Totoli</b></a>
        </div>

       
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="input-group mb-3">
                        <input value="{{ old('username') }}" type="text" name="username" class="form-control" placeholder="Username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    @if($errors->any())
                    <div>
                   
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li class="text-danger text-sm">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    <div class="row">
                        <div class="col-8">
                            
                        </div>

                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>

                    </div>
                </form>
              
            </div>

        </div>
    </div>


    <script src="{{ asset('lte/plugins/jquery/jquery.min.js') }}"></script>

    <script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset ('lte/dist/js/adminlte.min.js?v=3.2.0') }}"></script>

</body>

</html>