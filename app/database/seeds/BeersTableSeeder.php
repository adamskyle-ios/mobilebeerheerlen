<?php

class BeersTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('beers')->truncate();

		$beers = array(
			["naam" =>  "Pilsener", "brouwerij" => "Grolsch", "beschrijving" => "Komt nog!"]

		);

		// Uncomment the below to run the seeder
		DB::table('beers')->insert($beers);
	}

}
