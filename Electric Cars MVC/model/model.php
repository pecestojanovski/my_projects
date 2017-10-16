<?php
include 'car.php';

class Model
{
	public function getCarDetails()
	{
		return array(
			"Tesla"=> new Car('Tesla', 'Model X', '2015', 'The Tesla Model X is a full-sized, all-electric, luxury, crossover SUV made by Tesla, Inc. that uses falcon wing doors for access to the second and third row seats. The prototype was unveiled at Tesla’s design studios in Hawthorne on February 9, 2012. The Model X has an official EPA rated 237–295 mi (381–475 km) range and the combined fuel economy equivalent and energy consumption for the AWD P90D was rated at 89 mpg-e (23 kWh/100 km or 39 kWh/100 mi).', '<img src=img/tesla.jpg width=270 height=140>'),

			"Rimac"=> new Car('Rimac', 'Concept One', '2017', 'The Rimac Concept One (sometimes stylized as Concept_One) is a two-seat high-performance electric car designed and manufactured in Croatia by Rimac Automobili. With a total output of 800 kW (1,073 hp), an acceleration of 0–97 km/h (0–60 mph) in 2.8 seconds, and a price on request, Concept One has been described as the worlds first electric supercar.', '<img src=img/rimac.jpg width=270 height=200>'),

			"Ford"=> new Car('Ford', 'Focus Electric', '2013', 'The Ford Focus Electric is a 5-door hatchback electric car produced by Ford. The Focus Electric is Fords second full production, all-electric vehicle (the first being the Ford Ranger EV), and production began in December 2011.', '<img src=img/ford.jpg width=270 height=180>'),

			"Mitsubishi"=> new Car('Mitsubishi', 'i-MiEV', '2016', 'The Mitsubishi i-MiEV (MiEV is an acronym for Mitsubishi innovative Electric Vehicle) is a five-door hatchback electric car produced by Mitsubishi Motors, and is the electric version of the Mitsubishi i. Rebadged variants of the i-MiEV are also sold in Europe by PSA Peugeot Citroën (PSA) as the Peugeot iOn and Citroën C-Zero. The i-MiEV is the worlds first modern highway-capable mass production electric car.', '<img src=img/miev.jpg width=270 height=180>'),

			"BMW"=> new Car('BMW', 'i3', '2013', 'The BMW i3 is a five-door urban electric car developed by the German car manufacturer BMW. The i3 is part of BMWs Project i and was launched as a new brand, BMW i. The i3 is BMWs first zero emissions mass-produced vehicle due to its electric powertrain.', '<img src=img/bmw.jpg width=270 height=160>'),
			"Honda"=> new Car('Honda', 'Fit EV', '2010', 'The Honda Fit EV concept electric car has its global debut in the 2010 Los Angeles Auto Show. The concept uses a motor derived from the FCX Clarity hydrogen fuel cell vehicle that, in sport mode, gives the driving feel of a car with a 2-liter gasoline/petrol engine. The vehicle is paired with an exclusive interactive key fob that enable the driver to view the batterys state of charge, initiate charging, and activate the vehicles climate control all without a cell-phone or an Internet connection.', '<img src=img/honda.jpg width=270 height=185>'),
			"Kia"=> new Car('Kia', 'Soul EV', '2014', 'Soul EV is an all-electric subcompact crossover SUV manufactured by Kia Motors. The US Environmental Protection Agency (EPA) official range for the 2015 Kia Soul EV is 93 miles. Production of the Soul EV began in South Korea in April 2014. Pricing in the South Korean market starts at 42 million won ( ~US$39,400) before a 50% government subsidy. Kia set a global sales target of 5,000 units for 2014. Deliveries began in South Korea in May 2014, with 38 units delivered', '<img src=img/kia.jpg width=270 height=160>'),
			"Hyundai"=> new Car('Hyundai', 'Ioniq ', '2016', 'The all-electric model features a 28 kWh lithium-ion polymer battery (LiPo) that delivers an EPA-rated all-electric range of 124 mi (200 km). Hyundai expected the Ioniq to deliver a range of 110 mi (180 km). At the 2016 LA Auto Show, Hyundai announced that they are planning to extend the electric range of the Ioniq EV to more than 200 mi (320 km) by 2018. The Ioniq Electric has a 88 kW (120 PS) electric motor with 295 Nm of torque, and can be charged up to 80% in 33 minutes at 50 kW or in 24 minutes at 100 kW with a DC fast charging station.', '<img src=img/hyundai.jpg width=270 height=180>'),
			"Chevrolet"=> new Car('Chevrolet', 'Spark EV ', '2013', 'In October 2011, General Motors announced the production of the Chevrolet Spark EV, an all-electric version of the third generation Chevrolet Spark, with availability limited to select markets. The production version was unveiled at the November 2012 Los Angeles Auto Show. The electric car was first powered by a 21.3 kWh Lithium iron phosphate battery pack supplied by A123 Systems. In a white-paper, A123 described the difference of its nano-phosphate technology with respect to other Lithium iron phosphate cells.', '<img src=img/spark.jpg width=270 height=180>'),
			"Mercedes-Benz"=> new Car('Mercedes-Benz', 'B-Class Electric Drive', '2015', 'Initial concept versions of the B-Class Electric Drive were developed under the Mercedes-Benz BlueZERO project using batteries from Li-tec, but eventually used a drivetrain from Tesla. The Electric Drive was previewed at the 2012 Paris Motor Show, the 2013 New York International Auto Show, and the 2013 IAA International Motor Show 2013. The concept has an electric motor rated 136 PS (100 kW; 134 hp) and 310 N·m (229 lb·ft), 36 kWh lithium-ion battery from Tesla Motors. The vehicle has a driving range of 200 km (124 mi) with a top speed of 150 km/h (93 mph). The battery can be charged at any standard domestic 230 V power outlet or 400 V rapid charging terminal', '<img src=img/mercedes.jpg width=270 height=180>'),
			"Renault"=> new Car('Renault ', 'Zoe', '2012', 'Renault Zoe is a five-door supermini electric car produced by the French manufacturer Renault. Earlier Zoes have a 22 kWh lithium-ion battery pack that delivers a range between 210 km (130 mi) and 240 km (150 mi) under the NEDC cycle. In September 2016, Renault announced the introduction of an optional 41 kWh lithium-ion battery, increasing the range to 400 km (250 mi) under the NEDC cycle.', '<img src=img/renault.jpg width=270 height=180>')
		);
	}

	public function getCar($name)
	{
		$allcars=$this->getCarDetails();
		return $allcars[$name];
	}
}
?>