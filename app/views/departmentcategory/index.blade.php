@extends('layouts.master')

@section('content')

<div class="page-header" id="banner">
	<div class="row">
		<div class="col-lg-12">
			<h1>'{{ $department->department_desc}}' Category Lists</h1>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div>
			<a href="{{ URL::route('department-category.create', $department->id) }}" class="btn btn-primary"><i class="fa fa-plus"></i> Category</a>
			<a href="{{ URL::route('department.index') }}" class="btn btn-default">Back</a>
		</div>
		
	</div>
	<div class="col-lg-12">
		<div class="bs-component">
			<table class="table table-striped table-hover ">
				<thead>
					<tr>
						<th>Category</th>
					</tr>
				</thead>
				<tbody>
					@foreach($categories as $category)
					<tr>
						<td>{{ $category->category }}</td>
					</tr>
					@endforeach
				</tbody>
			</table> 
		</div>
	</div>
</div>

@stop