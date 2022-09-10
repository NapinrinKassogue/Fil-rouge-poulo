<!DOCTYPE html>
<html lang="en">
<head>
    <title>ACCUEILAppITILIYA</title>
    <link rel="stylesheet" href="{{ asset('csss/style.css')}}">
</head>
<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo"><span>App</span>Iteliya<br><img src="{{asset ('img/logo.jpg')}}" alt="Semrush logo 1" width="60" height="60">

                </h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                </ul>
            </div>

        </div> 
        <div>
            <!-- <img src="{{ asset('/img/heure.jpg')}}" alt=""> -->
        </div>
        <div class="content">

            <h1>“Tout salaire mérite travail.”<br><span></span> <br></h1>
            <p class="par"> 
                  <br> 
                <br> </p>

                <!-- <button class="cn"><a href="#"></a></button> -->

                <form method="POST" action="{{ route('login') }}">
                @csrf
                 <div class="form">
                    <h2>Connectez-vous ici</h2>
                    <label for="email" class="adess">{{ __('Email Address') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                              @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"><br><br>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                               <div><label class="remember" for="remember">
                                        {{ __('Remember Me') }}</label>
                    <input class="carre" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    </div> 
                                    <button type="submit" class="login">
                                    {{ __('Login') }}
                                </button>
                                @if (Route::has('password.request'))
                                    <a class="" href="{{ route('password.request') }}"><br><br>
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif

                 </div>
                </form>
                    </div>
                </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>