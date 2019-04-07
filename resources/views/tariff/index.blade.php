@extends('layouts.admin-app')
@section('title','- TARIFF DATA')
@section('content')
<section class="content">
	<div class="row">
        <div class="col-xs-12">
          	<div class="box">
            	<div class="box-header">
              		<h3 class="box-title">Tariff Data Table</h3>
              		<a href="{{route('admin.pdf.tariff')}}" class="btn btn-success pull-right">PDF</a>
            	</div>
            	<div class="box-body table-responsive no-padding">
	              	<table class="table table-hover">
		                <tbody>
		                	<tr>
			                  	<th>ID</th>
			                  	<th>Tariff Codes</th>
			                  	<th>Power</th>
			                  	<th>Tariff / kWh</th>
			                  	<th>Action</th>
			                </tr>
			                @foreach($tariff as $key)
			                <tr>
			                	<td>{{$key->id}}</td>
			                	<td>{{$key->tariff_codes}}</td>
			                	<td>{{$key->power}} VA</td>
			                	<td>Rp. {{$key->tariff_per_kwh}} / kWh</td>
			                	<td><a href="{{url('admin/edit/tariff/'.$key->id)}}"><button class="btn btn-warning"><i class="fa fa-edit"></i></button></a>
    							<a href="{{url('/admin/delete/'.$key->id)}}" onclick="return confirm('Are you sure want to delete this tariff?')"><button class="btn btn-danger"><i class="fa fa-trash-o"></i></button></a></td>
			                </tr>
			            	@endforeach
			            </tbody>
			        </table>
            	</div>
            	<div class="box-footer clearfix">
            		<ul class="no-margin pull-right">
            			<a href="{{route('admin.add.tariff')}}" type="button" class="btn btn-block btn-primary">Add Tariff</a>
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