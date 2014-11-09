@extends('layouts.master')

@section('content')

<div class="bs-docs-section">

	<div class="row">
		<div class="col-lg-12">
			<div>
				<a href="{{ URL::route('item.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Item</a>
			</div>
			
		</div>

		<div class="col-lg-12">

			<div class="bs-component">
				<table class="table table-striped table-hover ">
					<thead>
						<tr>
							<th>Item Code</th>
							<th>Barcode</th>
							<th>Description</th>
							<th>Department</th>
							<th>Category</th>
							<th>Price</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($items as $item)
						<tr>
							<td>{{ $item->item_code }}</td>
							<td>{{ $item->barcode }}</td>
							<td>{{ $item->description }}</td>
							<td>{{ $item->department_desc }}</td>
							<td>{{ $item->category }}</td>
							<td>{{ $item->price }}</td>
							<td></td>
						</tr>
						@endforeach
					</tbody>
				</table> 
			</div><!-- /example -->
		</div>
	</div>
</div>

@stop