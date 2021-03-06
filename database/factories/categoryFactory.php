<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


$factory->define(Category::class, function (Faker $faker) {
    $name = $faker->randomElement(['computer','electron','power']);
    $year= $faker->randomElement([1,2,3,4,5]);
     
    $section = $faker->randomElement([1,2]); 
   // dd(App\Category::where('name',$name ));
     $cat =Category::where('name',$name )->first();
   while( $cat->year ?? 7 ==$year && $cat->name == $name && $cat->section ==$section ) {
    $year= $faker->randomElement([1,2,3,4,5]);
    }
    $catId =Str::substr($name, 0, 2) . $year;
    return [
        'catId'=> $catId , 
        'name'=> $name ,
         
        'year'=> $year
        ,
        'section'=> $section,

    ];
});

