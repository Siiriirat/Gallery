<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('categories')->insert([
          [
          'category_name' => 'AstonMartin',
          'category_photo'=> '1.jpg',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],
          [
          'category_name' => 'Audi',
          'category_photo'=> '2.jpg',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],
          [
          'category_name' => 'Bentley',
          'category_photo'=> '3.jpg',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],
          [
          'category_name' => 'BMW',
          'category_photo'=> '4.jpg',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],
          [
          'category_name' => 'Chevrolet',
          'category_photo'=> '5.jpg',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],
          [
          'category_name' => 'Honda',
          'category_photo'=> '6.jpg',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],
          [
          'category_name' => 'Jaguar',
          'category_photo'=> '7.jpg',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],
          [
          'category_name' => 'Mercedes-Benz',
          'category_photo'=> '8.jpg',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],
      ]);
  }
}
