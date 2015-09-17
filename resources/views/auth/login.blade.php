@extends('app')

@section('content')

<div class="container">
	<div class="row">
	<br>
	<br>
		<div class="col s12 offset-l4 l4 offset-m3 m6">
	
			@include('partials.errors')
	
			<form method="POST" action="/auth/login" class="card">
				{!! csrf_field() !!}
				<div class="card-content black-text">
					<h5 class="black-text center-align"><i class="large material-icons">person</i></h5>
					<div class="row">
				      <div class="input-field col s12">
				        <input type="email" name="email" value="{{ old('email') }}" id="email" class="validate">
				        <label for="email">Email</label>
				      </div>
				    </div>
				    <div class="row">
				      <div class="input-field col s12">
				        <input type="password" name="password" id="password" class="validate">
				        <label for="password">Password</label>
				      </div>
				    </div>
				    <div class="row">
				    	<div class="input-field col s6" style="margin-top:0; padding-left:0;">			    	
					      <input type="checkbox" name="remember" id="remember"/>
					      <label for="remember">Remember me</label>				    
					    </div>
					    <div class="input-field col s6 right-align">			    	
					    	<a href="#">Forgot password?</a>   
					    </div>
				    </div>
				</div>
				<div class="card-action right-align">
					<button class="waves-effect red waves-light btn">Sign in</button>
				</div>
			</form>
		</div>
	</div>
</div>

	
@stop