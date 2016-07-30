<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Customer Retrieval</title>
</head>
<body>
	<h2>Customers</h2>
	<!-- Use the below syntax when your page is not suffixed with blade:

	<?php //foreach($customers as $customer): ?>
	<p><?=  $customer//->Name; ?></p>
	<?php //endforeach; ?>-->

	<!-- Use the below syntax when your page is suffixed with blade: -->
	@foreach($customers as $customer)
	<p>{{ $customer->Name }}</p>
	@endforeach
</body>
</html>
	
