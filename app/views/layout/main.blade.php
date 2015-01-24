<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Skwat | The web based squat log that doesn't do anything else!</title>

        <!-- Bootstrap -->
        <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{{URL::asset('css/login.css')}}" rel="stylesheet">
        <link href="{{URL::asset('css/main.css')}}" rel="stylesheet">

        <!-- Google Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Bitter:700' rel='stylesheet' type='text/css'>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        @include('layout.navbar')
        <div class='container'>
            @if(Session::has('danger'))
            <div class='alert alert-danger'>
                <p>{{Session::get('danger')}}</p>
            </div>
            @endif
            @if(Session::has('warning'))
            <div class='alert alert-warning'>
                <p>{{Session::get('warning')}}</p>
            </div>
            @endif
            @if(Session::has('success'))
            <div class='alert alert-success'>
                <p>{{Session::get('success')}}</p>
            </div>
            @endif

            @yield('content')            
        </div>

        <!-- 
        <div class="container">
            <form action="main/login_validation" class="form-signin" method="post">
                <h3 class="form-signin-heading">Please login</h3>

                <label for="email" class="sr-only">Email address</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Email address" required autofocus>

                <label for="password" class="sr-only">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>

                <div class="checkbox">
                    <label for="remember">
                        <input type="checkbox" name="remember" id="remember"> Remember me
                    </label>
                </div>

                <input class="btn btn-lg btn-danger btn-block" type="submit" value="Login">
            </form>
        </div>
        -->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
        
        <!-- Custom JavaScript -->
        <script src="{{URL::asset('js/dynamicform.js')}}"></script>
        <script src="{{URL::asset('js/minusplus.js')}}"></script>
    </body>
</html>