@extends('layouts.master')

@section('content')

<div class="page-header" id="banner">
				<div class="row">
					<div class="col-lg-12">
						<h1>Departmetn Lists</h1>
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
                    <th>Department</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($departments as $department)
                  <tr>
                    <td>{{ $department->department_desc }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table> 
            </div><!-- /example -->
          </div>
        </div>
      </div>

@stop