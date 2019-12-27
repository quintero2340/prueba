@extends('layout')
<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>
<div class="container">
        <div class="row centered-form center">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Please sign up for Ecommerce <small>It's free!</small></h3>
			 			</div>
			 			<div class="panel-body">
                         <form id="register-form" class="form" action="{{url('/register')}}" method="POST">
                         {{csrf_field()}}  
                            @if ($errors->has('first_name') || $errors->has('last_name') || $errors->has('email') || $errors->has('password') || $errors->has('last_name') || $errors->has('password_confirmation'))
                            <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                            @endif
							@if ($desicion)
							<div class="alert alert-danger">
                            <li>duplicate email</li>
							@endif
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name" value='{{old("first_name")}}'>
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name" value='{{old("last_name")}}'>
			    					</div>
			    				</div>
			    			</div>

			    			<div class="form-group">
			    				<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
			    			</div>

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
			    					</div>
			    				</div>
			    			</div>
			    			
			    			<input type="submit" value="Register" class="btn btn-info btn-block">
			    		</form>
                        <div id="register-link" class="text-right">
                                <a href="/" class="text-info">Return</a>
                            </div>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>
    </body>