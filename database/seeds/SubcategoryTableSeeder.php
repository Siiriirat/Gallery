<?php

use Illuminate\Database\Seeder;

class SubcategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('subcategories')->insert([
          [
          'subcategory_name' => '2015 Aston Martin Vantage N430',
          'category_id' => '1',
          'subcategory_photo'=> '1.jpg',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],
          [
          'subcategory_name' => '2015 Aston Martin V8 Vantage S Roadster',
          'category_id' => '1',
          'subcategory_photo'=> '2.jpg',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],
          [
          'subcategory_name' => '2015 Audi RS 5 Cabriolet',
          'category_id' => '2',
          'subcategory_photo'=> '3.jpg',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],
          [
          'subcategory_name' => '2015 Audi TTS Roadster',
          'category_id' => '2',
          'subcategory_photo'=> '4.jpg',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],
          [
          'subcategory_name' => 'Bentley Flying Spur',
          'category_id' => '3',
          'subcategory_photo'=> '5.jpg',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],
          [
          'subcategory_name' => 'Bentley Grand Convertible',
          'category_id' => '3',
          'subcategory_photo'=> '6.jpg',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],
          [
          'subcategory_name' => '2015 BMW 2 Series Active Tourer',
          'category_id' => '4',
          'subcategory_photo'=> '7.jpg',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],
          [
          'subcategory_name' => '2015 BMW 2 Series Gran Tourer',
          'category_id' => '4',
          'subcategory_photo'=> '8.jpg',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],
          [
          'subcategory_name' => '2015 Chevrolet Camaro',
          'category_id' => '5',
          'subcategory_photo'=> '9.jpg',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],
          [
          'subcategory_name' => '2015 Chevrolet Corvette',
          'category_id' => '5',
          'subcategory_photo'=> '10.jpg',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],
          [
          'subcategory_name' => '2015 Honda Civic',
          'category_id' => '6',
          'subcategory_photo'=> '11.jpg',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],
          [
          'subcategory_name' => '2015 Honda CR-V',
          'category_id' => '6',
          'subcategory_photo'=> '12.jpg',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],
          [
          'subcategory_name' => '2015 Jaguar F-Type Convertible',
          'category_id' => '7',
          'subcategory_photo'=> '13.jpg',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],
          [
          'subcategory_name' => '2015 Jaguar XK Convertible',
          'category_id' => '7',
          'subcategory_photo'=> '14.jpg',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],
          [
          'subcategory_name' => '2015 Mercedes-Benz SLS AMG',
          'category_id' => '8',
          'subcategory_photo'=> '15.jpg',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],
          [
          'subcategory_name' => '2015 Mercedes-Benz AMG GT S',
          'category_id' => '8',
          'subcategory_photo'=> '16.jpg',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],
          [
          'subcategory_name' => '2009 Mercedes-Benz SLR McLaren',
          'category_id' => '8',
          'subcategory_photo'=> '17.jpg',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],
      ]);
    }
}
