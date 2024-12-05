<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
</head>
<style>
    body{ background-color: #f0f0f0; color: #0f9fdc;  margin-top: 30px; }
    .bold-text{ font-weight: bold;  }
    .x{ width: 100%;  background-color: #0f9fdc; border: 1px solid  #0f9fdc;  border-radius: 5px 5px !important; }
    .x:hover{ width: 100%; background-color: #67c7ef; border: 1px solid  #4abbeb; border-radius: 5px 5px !important;  }
    .redis{  border-radius: 50px 50px !important; }
    .x2{ border-radius: 10px 10px !important; }
</style>
<body>
    <h1 class=" bold-text text-center"> SIGN IN </h1>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card x2">
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email"> Email </label>
                                <input id="email" type="email" class="x form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password"> Password </label>
                                <input id="password" type="password" class="x form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button class="btn btn-primary btn-block"> Login </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
