<?php

use Illuminate\Database\Seeder;

use Faker\Factory;

class UsersTableSeeder extends Seeder
{
  public function run()
  {
   DB::statement('SET FOREIGN_KEY_CHECKS=0');
   DB::table('users')->truncate();
   $faker=Factory::create();
   DB::table('users')->insert([
     ['name'=>'mohamed lahlah'
     ,'email'=>'mohamed.lahalh@test.com'
     ,'password'=>bcrypt('secrt')
     ,'slug'=>'mohamed-lahlah'
     ,'bio'=>$faker->text(rand(100,150))
   ],
   ['name'=>'ahmad lahlah'
   ,'email'=>'mohamed.lsdh@test.com'
   ,'password'=>bcrypt('secrt')
   ,'slug'=>'ahmad-lahlah'
   ,'bio'=>$faker->text(rand(100,150))
 ],
 ['name'=>'king lahlah'
 ,'email'=>'mohamsdlh@test.com'
 ,'password'=>bcrypt('secrt')
 ,'slug'=>'king-lahlah'
 ,'bio'=>$faker->text(rand(100,150))
],

]);
 }
}
