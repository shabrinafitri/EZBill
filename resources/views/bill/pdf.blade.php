<!DOCTYPE html>
<html>
<head>
	<title>BILLING DATA</title>
</head>
<body>

<h3>EZBill Billing Data</h3>
<table>
<table>
	<thead>
	<tr>
	  	<th class="center line">Customer ID</th>
      	<th class="center line">Month</th>
      	<th class="center line">Year</th>
      	<th class="center line">Amount Meter</th>
      	<th class="center line">Billing Charges</th>
	</tr>
	</thead>
	<tbody>
<br>
<tbody>
	@foreach($stud as $billing)
	<tr>
		<td class="center line" >{{ $billing->id_customer }}</td>
		<td class="center line" >{{ $billing->month }}</td>
		<td class="center line" >{{ $billing->year }}</td>
		<td class="center line" >{{ $billing->amount_meter }}</td>
		<td class="center line" >{{ $billing->billing_charges }}</td>
		
	</tr>
	@endforeach
</tbody>
</table>
</body>
</html>	