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
	  	<th class="center line">Tariff ID</th>
      	<th class="center line">Tariff Codes</th>
      	<th class="center line">Power</th>
      	<th class="center line">Tariff / kWh</th>
	</tr>
	</thead>
	<tbody>
<br>
<tbody>
	@foreach($stud as $tariff)
	<tr>
		<td class="center line" >{{ $tariff->id }}</td>
		<td class="center line" >{{ $tariff->tariff_codes }}</td>
		<td class="center line" >{{ $tariff->power }}</td>
		<td class="center line" >{{ $tariff->tariff_per_kwh }}</td>
	</tr>
	@endforeach
</tbody>
</table>
</body>
</html>
