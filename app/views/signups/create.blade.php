@extends('layouts.public')

@section('content')
<!-- Forms
================================================== -->
<div class="bs-docs-section">

	<div class="row">
		<div class="col-lg-8">
		</div>
		<div class="col-lg-4">
			<div class="page-header" id="banner">
				<div class="row">
					<div class="col-lg-12">
						<h1>Sign Up</h1>
					</div>
				</div>
			</div>

			@if($errors->has())
			   @foreach ($errors->all() as $error)
			      <div>{{ $error }}</div>
			  @endforeach
			@endif

		{{ Form::open(array('route' => 'sign-up','class' => 'bs-component')) }}
			<div class="form-group">
				{{ Form::label('full_name', 'Your full name', array('class' => 'control-label')) }}
				{{ Form::text('full_name','',array('class' => 'form-control', 'placeholder' => 'Juan Dela Cruz')) }}
			</div>

			<div class="form-group">
				{{ Form::label('company', 'Company or Organization', array('class' => 'control-label')) }}
				{{ Form::text('company','',array('class' => 'form-control', 'placeholder' => 'PNY, Co.')) }}
			</div>

			<div class="form-group">
				{{ Form::label('domain', 'Domain Name', array('class' => 'control-label')) }}
				{{ Form::text('domain','',array('class' => 'form-control', 'placeholder' => 'pnyco')) }}
			</div>


			<div class="form-group">
				{{ Form::label('email', 'Email', array('class' => 'control-label')) }}
				{{ Form::text('email','',array('class' => 'form-control', 'placeholder' => 'juan@pny.com')) }}
			</div>

			<div class="form-group">
				{{ Form::label('password', 'Password', array('class' => 'control-label')) }}
				{{ Form::password('password',array('class' => 'form-control', 'placeholder' => 'Easy to remember, hard to guess')) }}
			</div>

			<div class="form-group">
				{{ Form::submit('Sign Up', array('class' => 'btn btn-primary')) }}
			</div>
			
		{{ Form::close() }}

		</div>
	</div>
</div>
@stop