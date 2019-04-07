<!DOCTYPE html>
<html>
<head>
	<title>PAYMENT DATA</title>
</head>
<body>

<h3>EZBill Payment Data</h3>
<table>
<table>
	<thead>
	<tr>
	  	<th class="center line">Payment ID</th>
      	<th class="center line">Customer ID</th>
      	<th class="center line">Date of Payment</th>
	</tr>
	</thead>
	<tbody>
<br>
<tbody>
	@foreach($stud as $payment)
	<tr>
		<td class="center line" >{{ $payment->id_payment }}</td>
		<td class="center line" >{{ $payment->id_customer }}</td>
		<td class="center line" >{{ $payment->date }}</td>
	</tr>
	@endforeach
</tbody>
</table>
</body>
</html>
