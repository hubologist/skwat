<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" id="logo" href="{{URL::route('home')}}">Skwat</a>
            <ul class="nav navbar-nav">
                @if(Auth::check())
                <li>
                    <a href="">Hello, user!</a>
                </li>
                @endif
            </ul>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                @if(Auth::check())
                <li>
                    <a href="index.php?page=newentry">New Entry</a>
                </li>
                <li>
                    <a href="{{URL::route('profile', $user->name)}}">Profile</a>
                </li>
                <li>
                    <a href="index.php?page=settings">Settings</a>
                </li>
                <li>
                    <a href="{{URL::route('account-change-password')}}">Change Password</a>
                </li>                
                <li>
                    <a href="{{URL::route('account-logout')}}">Logout</a>
                </li>                
                @else
                <li>
                    <a href="{{URL::route('account-login')}}">Login</a>
                </li>
                <li>
                    <a href="{{URL::route('account-create')}}">Register</a>
                </li>                
                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>