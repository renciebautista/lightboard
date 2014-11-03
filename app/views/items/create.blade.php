@extends('layouts.master')

@section('content')
<div class="page-header" id="banner">
	<div class="row">
		<div class="col-lg-12">
			<h1>New Item</h1>
		</div>
	</div>
</div>

<!-- Forms
================================================== -->
<div class="bs-docs-section">
	<div class="row">
		<div class="col-lg-4">
		{{ Form::open(array('route' => 'items.store','class' => 'bs-component')) }}
			<div class="form-group">
				{{ Form::label('item_code', 'Item Code', array('class' => 'control-label')) }}
				{{ Form::text('item_code','',array('class' => 'form-control', 'placeholder' => '12345678')) }}
			</div>

			<div class="form-group">
				{{ Form::label('barcode', 'Barcode', array('class' => 'control-label')) }}
				{{ Form::text('barcode','',array('class' => 'form-control', 'placeholder' => '12345678')) }}
			</div>

			<div class="form-group">
				{{ Form::label('description', 'Description ', array('class' => 'control-label')) }}
				{{ Form::text('description','',array('class' => 'form-control', 'placeholder' => 'T-Shirt')) }}
			</div>

			<div class="form-group">
				{{ Form::submit('Submit') }}
			</div>
			
		{{ Form::close() }}
		</div>
	</div>
</div>
@stop