@extends('layouts.admin-app')
@section('title','- PAYMENT DATA')
@section('content')
<section class="content">
	<div class="row">
        <div class="col-xs-12">
          	<div class="box">
            	<div class="box-header">
              		<h3 class="box-title">Payment Data Table</h3>
              		<a href="{{route('admin.pdf.payment')}}" class="btn btn-success pull-right">PDF</a>
            	</div>
            	<div class="box-body table-responsive no-padding">
	              	<table class="table table-hover">
		                <tbody>
		                	<tr>
		                		<th>Payment ID</th>
		                		<th>Customer ID</th>
			                  	<th>Month</th>
			                  	<th>Year</th>
			                  	<th>Billing Charges</th>
			                  	<th>Date of Payment</th>
			                  	<th>Status</th>
			                </tr>
			                @foreach($table as $key)
			                <tr>
			                	<td>{{$key->id_payment}}</td>
			                	<td>{{$key->id_customer}}</td>
			                	<td>{{$key->month}}</td>
			                	<td>{{$key->year}}</td>
			                	<td>Rp. {{$key->billing_charges}}</td>
			                	<td>{{$key->date}}</td>
			                	<td>@if($key->status==1)<label style="color: red;">NOT YET PAID</label> @else <label style="color: green;">PAID</label> @endif</td>
			                </tr>
			                @endforeach
			            </tbody>
			        </table>
            	</div>
            	<div class="box-footer clearfix">
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