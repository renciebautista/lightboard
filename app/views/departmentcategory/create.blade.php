@extends('layouts.master')

@section('content')
<div class="bs-docs-section">
	<div class="row">
		<div class="col-lg-4">
		{{ Form::open(array('route' => array('department-category.store',$department->id),'class' => 'bs-component')) }}
		{{ Form::hidden('department_id', $department->id) }}
			<div class="form-group">
				{{ Form::label('category', 'Department Category', array('class' => 'control-label')) }}
				{{ Form::text('category','',array('class' => 'form-control', 'placeholder' => 'Department Category')) }}
			</div>

			<div class="form-group">
				{{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}
				{{ HTML::linkRoute('department-category.index', 'Back', $department->id, array('class' => 'btn btn-default')) }}
			</div>
		{{ Form::close() }}
		</div>
	</div>
</div>
@stop