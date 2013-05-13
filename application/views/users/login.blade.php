@layout('layouts.guest')

@section('content')

    <div class="login-container">
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span4 offset4">
                  <div class="well">
                    <legend>Login</legend>
                    <form method="POST" action="{{ URL::to_route('login') }}" accept-charset="UTF-8" autocomplete="off">
                        <!-- <div class="alert alert-error">
                            Incorrect Username or Password!
                        </div> -->
                        
                        <div class="row-fluid">
                            <input class="span12" placeholder="Username" type="text" name="username">
                        </div>
                        <div class="row-fluid">
                            <input class="span12" placeholder="Password" type="password" name="password">
                        </div>
                        <label class="checkbox remember">
                            <input type="checkbox" name="remember" value="1"> Remember Me
                        </label>
                        <input class="btn-primary btn" type="submit" value="Login"/>
                        <a href="{{ URL::to('register') }}" class="btn btn-link">Register</a>
                    </form>    
                  </div>
                </div>
            </div>
        </div>
    </div>

@endsection