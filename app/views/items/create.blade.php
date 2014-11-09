@extends('layouts.master')

@section('content')
<!-- Forms
================================================== -->
<div class="bs-docs-section">
	<div class="row">
		<div class="col-lg-4">
		{{ Form::open(array('route' => 'item.store','class' => 'bs-component')) }}
			<div class="form-group">
				{{ Form::label('item_code', 'Item Code', array('class' => 'control-label')) }}
				{{ Form::text('item_code','',array('class' => 'form-control', 'placeholder' => 'Item Code')) }}
			</div>

			<div class="form-group">
				{{ Form::label('barcode', 'Barcode', array('class' => 'control-label')) }}
				{{ Form::text('barcode','',array('class' => 'form-control', 'placeholder' => 'Barcode')) }}
			</div>

			<div class="form-group">
				{{ Form::label('description', 'Description ', array('class' => 'control-label')) }}
				{{ Form::text('description','',array('class' => 'form-control', 'placeholder' => 'Description')) }}
			</div>

			<div class="form-group">
				{{ Form::label('department_id', 'Department ', array('class' => 'control-label')) }}
				{{ Form::select('department_id', $departments, null, array('class' => 'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('category_id', 'Category ', array('class' => 'control-label')) }}
				<select class="form-control" data-placeholder="SELECT CATEGORY" id="category_id" name="category_id" class="orm-control" >
				</select>
			</div>

			<div class="form-group">
				{{ Form::label('price', 'Price ', array('class' => 'control-label')) }}
				{{ Form::text('price','',array('class' => 'form-control', 'placeholder' => 'Price')) }}
			</div>

			

			<div class="form-group">
				{{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}
				{{ HTML::linkRoute('item.index', 'Back',array(), array('class' => 'btn btn-default')) }}
			</div>
			
		{{ Form::close() }}
		</div>
	</div>
</div>
@stop

@section('pagescript')
	$('select#department_id').select_chain({
		child: "select#category_id",
		child_value: "category",
		default_value: "SELECT CATEGORY",
		ajax_url :	"/ajax/department"
	});
@show