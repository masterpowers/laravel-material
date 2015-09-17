@if($errors->has())
<div class="card-panel red">
	<span class="white-text">          	
	Houston we have a problem here!
		<ul>
			@foreach($errors->all() as $message)
			<li>{{ $message }}</li>
			@endforeach
		</ul>			
	</span>
</div>
@endif