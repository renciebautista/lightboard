@extends('layouts.master')

@section('content')
<div class="bs-docs-section">
	<div class="row">
		<div class="col-lg-4">
		{{ Form::open(array('route' => 'branch.store','class' => 'bs-component')) }}
			<div class="form-group">
				{{ Form::label('branch_name', 'Branch Name', array('class' => 'control-label')) }}
				{{ Form::text('branch_name','',array('class' => 'form-control', 'placeholder' => 'Branch Name')) }}
			</div>

			<div class="form-group">
				{{ Form::label('address', 'Address', array('class' => 'control-label')) }}
				{{ Form::textarea('address','',array('class' => 'form-control', 'placeholder' => 'Address')) }}
			</div>

			<div class="form-group">
				{{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}
				{{ HTML::linkRoute('branch.index', 'Back', array(), array('class' => 'btn btn-default')) }}
			</div>
		{{ Form::close() }}
		</div>
	</div>
</div>
@stop