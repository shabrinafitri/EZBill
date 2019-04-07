@extends('layouts.admin-app')
@section('title','- UTILIZATION DATA')
@section('content')
<section class="content">
	<div class="row">
        <div class="col-xs-12">
          	<div class="box">
            	<div class="box-header">
              		<h3 class="box-title">Utilization Data Table</h3>
              		<a href="{{route('admin.pdf.utilization')}}" class="btn btn-success pull-right">PDF</a>
            	</div>
            	<div class="box-body table-responsive no-padding">
	              	<table class="table table-hover">
		                <tbody>
		                	<tr>
		                		<th>Customer ID</th>
			                  	<th>Customer Name</th>
			                  	<th>Month</th>
			                  	<th>Year</th>
			                  	<th>Initial Meter</th>
			                  	<th>Final Meter</th>
			                  	<th>Action </th>
			                </tr>
			                @foreach($table as $key)
			                <tr>
			                	<td>{{$key->id_customer}}</td>
			                	<td>{{$key->name}}</td>
			                	<td>{{$key->month}}</td>
			                	<td>{{$key->year}}</td>
			                	<td>{{$key->initial_meter}}</td>
			                	<td>{{$key->final_meter}}</td>
			                	<td><!-- <a href="{{ route('admin.edit.utilization', $key->id) }}"><button class="btn btn-warning"><i class="fa fa-edit"></i></button></a> -->
    							<a href="{{ route('admin.delete.utilization', $key->id) }}" onclick="return confirm('are u sure to delete ?')"><button class="btn btn-danger"><i class="fa fa-trash-o"></i></button></a></td>
			                </tr>
			                @endforeach
			            </tbody>
			        </table>
            	</div>
            	<div class="box-footer clearfix">
            		<ul class="no-margin pull-right">
            			<a href="{{route('admin.add.utilization')}}" type="button" class="btn btn-block btn-primary">Add Utilization</a>
            		</ul>
	              	<ul class="pagination pagination-sm no-margin pull-left">
		            	<li><a href="#">«</a></li>
		                <li><a href="#">1</a></li>
		                <li><a href="#">2</a></li>
		                <li><a href="#">3</a></li>
		                <li><a href="#">»</a></li>
		            </ul>
	            </div>
            </div>
        </div>
    </div>
</section>
@endsection