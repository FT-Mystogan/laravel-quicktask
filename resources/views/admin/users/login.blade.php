<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/stylelogin.css') }}" media="screen" />
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <section id="content">
            <form action="login" method="post" id="form-1">
                <h1>{{ __('Admin Login') }}</h1>
                @include('admin.inc.alert')
                <div>
                    <input type="text" placeholder="Email" required="" name="email" id="email" />
                    <span class="form-message"></span>
                </div>
                <div>
                    <input type="password" placeholder="Password" required="" name="password" id="password" />
                    <span class="form-message"></span>
                </div>
                @csrf
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="saveLogin" name="saveLogin">
                    <label class="form-check-label" for="saveLogin">{{ __('Remerber me') }}</label>
                </div>
                <div>
                    <button style="font-size: 16px;"> <i class="fa fa-send"></i>{{ __('Login') }}</button>
                </div>
                <div><a href="" style="font-size: 16px;">{{ __('Forgot password?') }}</a></div>
            </form>
        </section>
    </div>
</body>

</html>
