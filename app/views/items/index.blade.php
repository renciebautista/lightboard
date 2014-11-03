@extends('layouts.master')

@section('content')

<div class="page-header" id="banner">
				<div class="row">
					<div class="col-lg-12">
						<h1>Item Lists</h1>
					</div>
				</div>
			</div>

 <!-- Tables
      ================================================== -->
      <div class="bs-docs-section">

        <div class="row">
          <div class="col-lg-12">

            <div class="bs-component">
              <table class="table table-striped table-hover ">
                <thead>
                  <tr>
                    <th>Item Code</th>
                    <th>Barcode</th>
                    <th>Description</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($items as $item)
                  <tr>
                    <td>{{ $item->item_code }}</td>
                    <td>{{ $item->barcode }}</td>
                    <td>{{ $item->description }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table> 
            </div><!-- /example -->
          </div>
        </div>
      </div>

@stop