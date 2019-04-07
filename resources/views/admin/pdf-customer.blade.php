<!DOCTYPE html>
<html>
<head>
	<title>CUSTOMER DATA</title>
</head>
<body>

<h3>EZBill Customer Data</h3>
<table>
<table>
	<thead>
	<tr>
	  	<th class="center line">Customer ID</th>
      	<th class="center line">Customer Name</th>
      	<th class="center line">Meter Number</th>
      	<th class="center line">Address</th>
      	<th class="center line">Tariff Codes</th>
	</tr>
	</thead>
	<tbody>
<br>
<tbody>
	@foreach($stud as $customer)
		<tr>
			<td class="center line" >{{ $customer->id_customer }}</td>
			<td class="center line" >{{ $customer->name }}</td>
			<td class="center line" >{{ $customer->no_meter }}</td>
			<td class="center line" >{{ $customer->address }}</td>
			<td class="center line" >{{ $customer->tariff_codes }}</td>
		</tr>
	@endforeach
</tbody>
</table>
</body>
</html>
