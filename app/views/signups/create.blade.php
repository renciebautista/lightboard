@extends('layouts.master')

@section('content')
	<div class="page-header" id="banner">
				<div class="row">
					<div class="col-lg-12">
						<h1>Sign Up</h1>
					</div>
				</div>
			</div>

	<!-- Forms
			================================================== -->
			<div class="bs-docs-section">

				<div class="row">
					<div class="col-lg-4">
							{{ Form::open(array('route' => 'sign-up','class' => 'bs-component')) }}
								<div class="form-group">
									{{ Form::label('full_name', 'Your full name', array('class' => 'control-label')) }}
									{{ Form::text('full_name','',array('class' => 'form-control', 'placeholder' => 'Juan Dela Cruz')) }}
								</div>

								<div class="form-group">
									{{ Form::label('company', 'Company or Organization', array('class' => 'control-label')) }}
									{{ Form::text('company','',array('class' => 'form-control', 'placeholder' => 'JDC, Co.')) }}
								</div>

								<div class="form-group">
									{{ Form::submit('Sign Up') }}
								</div>
								
							{{ Form::close() }}

					</div>
				</div>
			</div>
@stop