<!DOCTYPE html>
<html>
<head>
	<title>TARIFF DATA</title>
</head>
<body>

<h3>EZBill Tariff Data</h3>
<table>
<table>
	<thead>
	<tr>
	  	<th class="center line">Customer ID</th>
      	<th class="center line">Month</th>
      	<th class="center line">Year</th>
      	<th class="center line">Initial Meter</th>
      	<th class="center line">Final Meter</th>
	</tr>
	</thead>
	<tbody>
<br>
<tbody>
	@foreach($stud as $utilization)
	<tr>
		<td class="center line" >{{ $utilization->id_customer }}</td>
		<td class="center line" >{{ $utilization->month }}</td>
		<td class="center line" >{{ $utilization->year }}</td>
		<td class="center line" >{{ $utilization->initial_meter }}</td>
		<td class="center line" >{{ $utilization->final_meter }}</td>
	</tr>
	@endforeach
</tbody>
</table>
</body>
</html>	