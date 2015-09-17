@extends('app')

@section('content')
<div class="container">
	<div class="row">
	<br>
		<div class="col s12 offset-l4 l4 offset-m3 m6">
			
			@include('partials.errors')
		
			<form method="POST" action="/auth/register" class="card">
				{!! csrf_field() !!}
				<div class="card-content black-text">
					<h5 class="black-text center-align"><i class="large material-icons">person_add</i></h5>
					<div class="row">
				      <div class="input-field col s12">
				        <input type="text" name="name" value="{{ old('name') }}" id="name" class="validate">
				        <label for="name">Name</label>
				      </div>
				    </div>
				    <div class="row">
				      <div class="input-field col s12">
				        <input type="email" name="email" value="{{ old('email') }}" id="email" class="validate">
				        <label for="email">Email</label>
				      </div>
				    </div>
				    <div class="row">
				      <div class="input-field col s12">
				        <input name="password" type="password" id="password" class="validate">
				        <label for="password">Password</label>
				      </div>
				    </div>
				    <div class="row">
				      <div class="input-field col s12">
				        <input name="password_confirmation" type="password" id="password_confirmation" class="validate">
				        <label for="password_confirmation">Password Confirmation</label>
				      </div>
				    </div>
				    
				</div>
				<div class="card-action right-align">
					<button class="waves-effect red waves-light btn">Sign up</button>
				</div>
			</form>
		</div>
	</div>
</div>


	
@stop