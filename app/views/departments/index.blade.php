@extends('layouts.master')

@section('content')

<div class="page-header" id="banner">
	<div class="row">
		<div class="col-lg-12">
			<h1>Department Lists</h1>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="pull-right">
			<a href="{{ URL::route('department.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Department</a>
		</div>
		
	</div>
	<div class="col-lg-12">
		<div class="bs-component">
			<table class="table table-striped table-hover ">
				<thead>
					<tr>
						<th>Department</th>
						<th>Manage Category</th>
					</tr>
				</thead>
				<tbody>
					@foreach($departments as $department)
					<tr>
						<td>{{ $department->department_desc }}</td>
						<td>{{ HTML::linkRoute('category.index', 'Manage', $department->id) }}</td>
					</tr>
					@endforeach
				</tbody>
			</table> 
		</div>
	</div>
</div>

@stop