@layout('layouts.guest')

@section('content')

    <div class="registration-container">
        
        <div class="container-fluid">
            
            <div class="row-fluid">
            
                <div class="span4 offset4">

                    <div class="well">

                        <legend>Register</legend>

                        <form method="POST" action="{{ URL::to_route('register') }}" accept-charset="UTF-8" autocomplete="off">
                            @if($errors->has())
                                <div class="alert alert-error">
                                    {{ $errors->first('username', '<p>:message</p>') }}
                                    {{ $errors->first('password', '<p>:message</p>') }}
                                    {{ $errors->first('password_conf', '<p>:message</p>') }}
                                </div>
                            @endif

                            <div class="row-fluid">
                                {{ Form::text('username', Input::old('username'), array('class' => 'span12', 'placeholder' => 'Username')) }}
                            </div>

                            <div class="row-fluid">
                                {{ Form::text('email', Input::old('email'), array('class' => 'span12', 'placeholder' => 'Email')) }}
                            </div>

                            <div class="row-fluid">
                                {{ Form::password('password', array('class' => 'span12', 'placeholder' => 'Password')) }}
                            </div>

                            <div class="row-fluid">
                                {{ Form::password('password_confirmation', array('class' => 'span12', 'placeholder' => 'Confirm Password')) }}
                            </div>
                            <input class="btn-primary btn" type="submit" value="Create new account"/>
                            <a href="{{ URL::to_route('login') }}" class="btn btn-link">Go to login page</a>
                        </form>   

                    </div>

                </div>
            
            </div>
        
        </div>

    </div><!-- /.registration-container -->

@endsection
