@extends('layout')
<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="{{url('/')}}" method="POST">
                            {{csrf_field()}}   
                            <h3 class="text-center text-info">Login</h3>
                            @if ($desicion)
                            <div class="alert alert-danger">
                            <li>email or password do not match</li>
                            @endif
                            @if ($errors->has('username') || $errors->has('password'))
                            <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                            @endif
                           
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control" value='{{old("username")}}'>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control" >
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="/register" class="text-info">Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
