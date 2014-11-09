@extends('layouts.master')

@section('content')

<div class="bs-docs-section">

	<div class="row">
		<div class="col-lg-12">
			<div>
				<a href="{{ URL::route('branch.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Branch</a>
			</div>
			
		</div>

		<div class="col-lg-12">

			<div class="bs-component">
				<table class="table table-striped table-hover ">
					<thead>
						<tr>
							<th>Branch Name</th>
							<th>Address</th>
						</tr>
					</thead>
					<tbody>
						@foreach($branches as $branch)
						<tr>
							<td>{{ $branch->branch_name }}</td>
							<td>{{ $branch->address }}</td>
						</tr>
						@endforeach
					</tbody>
				</table> 
			</div><!-- /example -->
		</div>
	</div>
</div>

@stop