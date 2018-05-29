<?php

use Illuminate\Database\Seeder;

class seeder_1 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
      {
           $programming_languages = factory(App\programming_language::class,10)->create();

   App\developer::All()->each(function ($developer) use ($programming_languages){
      $developer->programming_languages()->saveMany($programming_languages);
       });
    }
}
