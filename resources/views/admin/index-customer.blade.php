@extends('layouts.admin-app')
@section('title','- CUSTOMER DATA')
@section('content')
	<section class="content">
		<div class="row">
	        <div class="col-xs-12">
	          	<div class="box">
	            	<div class="box-header">
	              		<h3 class="box-title">Customer Data Table</h3>
	              		<a class="btn btn-success pull-right" href="{{route('admin.pdf.customer')}}">PDF</a>
	            	</div>
	            	<div class="box-body table-responsive no-padding">
		              	<table class="table table-hover">
			                <tbody>
			                	<tr>
				                  	<th>Name</th>
				                  	<th>Meter Number</th>
				                  	<th>Address</th>
				                  	<th>Tariff Codes</th>
				                  	<th>Action</th>
				                </tr>
				                @foreach($customer as $key)
				                <tr>
				                	<td>{{$key->name}}</td>
				                	<td>{{$key->no_meter}}</td>
				                	<td>{{$key->address}}</td>
				                	<td>{{$key->tariff_codes}}</td>
				                	<td><a href="{{ route('admin.edit.customer', $key->id_customer) }}"><button class="btn btn-warning"><i class="fa fa-edit"></i></button></a>
				                	<a href="{{ route('admin.delete.customer', $key->id) }}" onclick="return confirm('Are you sure want to delete this customer?')"><button class="btn btn-danger"><i class="fa fa-trash-o"></i></button></a></td>
				                </tr>
			                	@endforeach
				            </tbody>
				        </table>
	            	</div>
	            	<div class="box-footer clearfix">
	            		<ul class="no-margin pull-right">
	            			<a href="{{route('admin.add.customer')}}" type="button" class="btn btn-block btn-primary">Add Customer</a>
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