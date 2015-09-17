@extends('app-null')

@section('content')

<style>
	.valign-wrapper {
		height:100vh;
	}
</style>
<div class="section no-pad-bot valign-wrapper" id="index-banner">
    <div class="container valign">
        <h1 class="intro center red-text">{{Config::get('template.product')}}</h1>
        <div class="row center">
            <h5 class="header col s12 light">{{Config::get('template.tagline')}}</h5>
        </div>
        <div class="row center">
        <br>
            <a href="/dashboard" id="download-button" class="btn-large waves-effect waves-light red">Get Started</a>
        </div>

    </div>
</div>




@stop