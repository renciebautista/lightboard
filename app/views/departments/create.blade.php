@extends('layouts.master')

@section('content')
<div class="page-header" id="banner">
	<div class="row">
		<div class="col-lg-12">
			<h1>New Item Department</h1>
		</div>
	</div>
</div>

<div class="bs-docs-section">
	<div class="row">
		<div class="col-lg-4">
		{{ Form::open(array('route' => 'department.store','class' => 'bs-component')) }}
			<div class="form-group">
				{{ Form::label('department_desc', 'Item Department', array('class' => 'control-label')) }}
				{{ Form::text('department_desc','',array('class' => 'form-control', 'placeholder' => 'Garments')) }}
			</div>

			<div class="form-group">
				{{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}
				{{ HTML::linkRoute('department.index', 'Back', array(), array('class' => 'btn btn-default')) }}
			</div>
		{{ Form::close() }}
		</div>
	</div>
</div>
@stop