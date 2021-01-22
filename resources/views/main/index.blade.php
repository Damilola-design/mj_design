<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MJ Devign</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="./asset/main.css">
  <!-- <style>
        body{
            background: url(images/banner.png);
            background-size: cover;
            background-position: bottom;
            height: 100vh;
            background-repeat: no-repeat;
            font-family: 'Open Sans', sans-serif;
        }
        main{
            width: 95%;
            margin: 0 auto;
        }

        .logo{
            display: flex;
            align-items: center;
            justify-content: flex-start;
            padding: 3px;
        }
        .logo span{
            letter-spacing: 1px;
        }

        .packages{
            display: flex;
            margin-top: 40px;
        }
        .package a{
            color: #000000;
            text-decoration: none;
            padding: 10px 35px;
            background-color: #FFFFFF;
            border-radius: 10px;
            font-weight: 600;
            position: relative;
        }

        .package a::after{
            position: absolute;
            content: '';
            width: 0%;
            height: 3px;
            background: linear-gradient(to right, #1A2B77, #8C186B);
            left: 50%;
            transform: translateX(-50%);
            bottom: 5px;
            border-radius: 5px;
        }

        .package a:hover::after{
            width: 80%;
            transition: all .3s ease;
        }

        .two, .three{
            margin: 0 15px;
        }

        nav .logo{
            display: flex;
            align-items: center;
        }

        nav .logo img{
            width: 55px;
            height: 55px;
            margin-right: 10px;
        }

        nav .logo-info p:nth-child(1){
            font-family: "Open Sans", sans-serif;
            font-size: 20px;
            font-weight: 700;
            margin-top: 0;
            margin-bottom: 0;
            color: #FFFFFF;
        }

        nav .logo-info p:nth-child(2){
            font-family: "Open Sans", sans-serif;
            font-size: 16px;
            margin-top: 0;
            margin-bottom: 0;
            color: #FFFFFF;
        }

        @media screen and (max-width: 620px){
            .two{
                margin: 0;
            }

            .packages{
                flex-direction: column;
            }

            .package a{
                padding: 0;
            }

            .package{
                width: 200px;
                padding: 10px;
                margin: 10px 0;
                text-align: center;
                background-color: #FFFFFF;
                border-radius: 10px;
            }

            .package a::after{
                bottom: -5px;
            }

            .package:hover a::after{
                width: calc(100% + 20px);
                transition: all .3s ease;
            }
        }
    </style> -->
</head>
<body>

    <main>
        <nav>
            <div class="logo">
                <img src="./asset/images/diamond.webp" alt="MJ">
                <div class="logo-info">
                    <p>MJ DEVIGN</p>
                    <p>Design & Development Agency</p>
                </div>
            </div>
        </nav>

        <div class="packages">
            <div class="package one">
            @if(Auth::user())
                <a href="{{ route('web.form') }}" target="_blank">Web Form</a>
                @else
                  <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal" class="button next_action">Web Form</a>
              @endif
            </div>
            <div class="package two">
                @if(Auth::user())
                <a href="{{ route('landing.form') }}" target="_blank">Landing Form</a>
                @else
                  <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal" class="button next_action">Web Form</a>
              @endif
            </div>
            <div class="package three">
                @if(Auth::user())
                <a href="{{ route('dropshiping.form') }}" target="_blank">Dropshipping Form</a>
                @else
                  <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal" class="button next_action">Web Form</a>
              @endif
            </div>
            <div class="package four">
                @if(Auth::user())
                <a href="{{ route('client.portal') }}" target="_blank">Clients' Portal</a>
                @else
                  <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal" class="button next_action">Web Form</a>
              @endif
            </div>
        </div>
    </main>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Login</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                                        @csrf

                                        <div class="form-group row">
                                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email" class="mb-3 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-6 offset-md-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                    <label class="form-check-label" for="remember">
                                                        {{ __('Remember Me') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-0 form-group row">
                                            <div class="col-md-8 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Login') }}
                                                </button>

                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</html>
