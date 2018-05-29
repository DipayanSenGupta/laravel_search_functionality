<?php

use Illuminate\Database\Seeder;

class seeder_to_add_developers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

   factory(App\developer::class,100)->create();

   $languages = factory(App\language::class,10)->create();

   App\developer::All()->each(function ($developer) use ($languages){
      $developer->languages()->saveMany($languages);
       });

         $programming_languages = factory(App\programmming_language::class,10)->create();

   App\developer::All()->each(function ($developer) use ($programming_languages){
      $developer->programming_languages()->saveMany($programming_languages);
       });
  //       // Populate developers
		// factory(App\developer::class, 100)->create();

		// // Populate programming language
		// factory(App\language::class, 10)->create();
		// factory(App\programming_language::class, 10)->create();

		// $languages = App\language::all();
		// $programminng_languages = App\programming_language::all();
		// Populate the pivot table

		// Get all the languages attaching up to 3 random programmming_language to each developer
// 		App\developer::all()->each(function ($developer) use ($programming_languages) { 
//     	$developer->programming_languages()->attach(
//         $programming_languages->random(rand(1, 3))->pluck('id')->toArray()
//     ); 
// });
		// Get all the languages attaching up to 3 random language to each developer
// 		App\developer::all()->each(function ($developer) use ($languages) { 
//     	$developer->languages()->attach(
//         $languages->random(rand(1, 3))->pluck('id')->toArray()
//     ); 
// });
    }
}
