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
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],
          [
          'subcategory_name' => '2015 Aston Martin V8 Vantage S Roadster',
          'category_id' => '1',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],
          [
          'subcategory_name' => '2015 Audi RS 5 Cabriolet',
          'category_id' => '2',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],
          [
          'subcategory_name' => '2015 Audi TTS Roadster',
          'category_id' => '2',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],
          [
          'subcategory_name' => 'Bentley Flying Spur',
          'category_id' => '3',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],
          [
          'subcategory_name' => 'Bentley Grand Convertible',
          'category_id' => '3',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],
          [
          'subcategory_name' => '2015 BMW 2 Series Active Tourer',
          'category_id' => '4',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],
          [
          'subcategory_name' => '2015 BMW 2 Series Gran Tourer',
          'category_id' => '4',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],
          [
          'subcategory_name' => '2015 Chevrolet Camaro',
          'category_id' => '5',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],
          [
          'subcategory_name' => '2015 Chevrolet Corvette',
          'category_id' => '5',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],
          [
          'subcategory_name' => '2015 Honda Civic',
          'category_id' => '6',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],
          [
          'subcategory_name' => '2015 Honda CR-V',
          'category_id' => '6',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],
          [
          'subcategory_name' => '2015 Jaguar F-Type Convertible',
          'category_id' => '7',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],
          [
          'subcategory_name' => '2015 Jaguar XK Convertible',
          'category_id' => '7',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],
          [
          'subcategory_name' => '2015 Mercedes-Benz SLS AMG',
          'category_id' => '8',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],
          [
          'subcategory_name' => '2015 Mercedes-Benz AMG GT S',
          'category_id' => '8',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],
          [
          'subcategory_name' => '2009 Mercedes-Benz SLR McLaren',
          'category_id' => '8',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],
      ]);
    }
}
