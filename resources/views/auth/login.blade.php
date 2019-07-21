<!DOCTYPE html>

<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Icons-->
    <link rel="icon" type="image/ico" href="{{ asset('admin/img/favicon.ico') }}" sizes="any" />
    <link href="https://coreui.io/demo/vendors/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="https://coreui.io/demo/vendors/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="https://coreui.io/demo/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://coreui.io/demo/vendors/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
    <link href="https://coreui.io/demo/vendors/pace-progress/css/pace.min.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
  </head>
  <body class="app flex-row align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-5">
          <div class="card-group">
            <div class="card p-4">
              <div class="card-body">
                <h1>Login</h1>
                <p class="text-muted">Sign In to your account</p>
                <form method="POST" action="{{ route('login') }}">
                        @csrf

                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="icon-envelope"></i>
                        </span>
                      </div>
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="input-group mb-4">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="icon-lock"></i>
                        </span>
                      </div>
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">

                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                    
                     <div class="row">
                        <div class="col-6">
                          <button type="submit" class="btn btn-success px-4">
                              {{ __('Login') }}
                          </button>
                        </div>
                        <div class="col-6 text-right">
                          @if (Route::has('password.request'))
                              <a class="btn btn-link px-0" href="{{ route('password.request') }}">
                                  {{ __('Forgot Your Password?') }}
                              </a>
                          @endif
                        </div>
                        <div class="col-12 text-right">
                          @if (Route::has('register'))
                               <a class="nav-link px-0" href="{{ route('register') }}">
                                  {{ __('Dont have account?') }}
                               </a>
                          @endif
                        </div>
                      </div>                  
                </form>

                <div class="card-footer p-4">
                  <div class="row">
                    <div class="col-12">
                      <a class="btn btn-block btn-twitter" href="{{ url('/auth/twitter') }}">
                        <i class="icon-social-twitter"></i>&nbsp;&nbsp;<span>Sign In with Twitter</span>
                      </a>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="https://coreui.io/demo/vendors/jquery/js/jquery.min.js"></script>
    <script src="https://coreui.io/demo/vendors/popper.js/js/popper.min.js"></script>
    <script src="https://coreui.io/demo/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://coreui.io/demo/vendors/pace-progress/js/pace.min.js"></script>
    <script src="https://coreui.io/demo/vendors/perfect-scrollbar/js/perfect-scrollbar.min.js"></script>
    <script src="https://coreui.io/demo/vendors/@coreui/coreui-pro/js/coreui.min.js"></script>
  </body>
</html>
