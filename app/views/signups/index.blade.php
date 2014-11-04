@extends('layouts.public')

@section('content')
<div class="main row">
	<div class="col-md-7">
		<h2 class="featurette-heading">Lightboard.
		<span class="text-muted">It'll blow your mind.</span>
		</h2>
		<p class="lead">Lightboard makes it easy for company or organization to track it's consignment sales and stocks on a real time basis, providing fast reponse and decision making.</p>
	</div>
	<div class="col-md-5">
		{{ HTML::image('assets/images/banner.jpg','500x500', array('class' => 'featurette-image img-responsive',  'data-holder-rendered' => 'true' , 'data-src' => 'holder.js/500x500/auto')) }}
	</div>
</div>
@stop