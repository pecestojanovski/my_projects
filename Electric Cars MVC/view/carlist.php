<div class="row col-md-7 col-md-offset-2 custyle">
<table class="table table-striped custab" style="text-align: center;">
	<tr>
		<th style="text-align: center; background-color: #a9bad6; color: white">Car Manufacturer</th>
		<th style="text-align: center; background-color: #a9bad6; color: white">Car Model</th>
		<th style="text-align: center; background-color: #a9bad6; color: white">Year Produced</th>
	</tr>
	<?php
	foreach ($cars as $car) 
	{
	?>
	<tr>
		<td style="font-family: Trebuchet MS"><?php echo $car->name; ?></td>
		<td style="font-family: Trebuchet MS"><a href="home.php?car=<?php echo $car->name; ?>"><?php echo $car->model; ?></a></td>
		<td style="font-family: Trebuchet MS"><?php echo $car->year; ?></td>
	</tr>
	<?php
	}
	?>
</table>
</div>