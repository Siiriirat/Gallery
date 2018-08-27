<?php

use Illuminate\Database\Seeder;

class PhotoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('photos')->insert([
          [
          'photo_name' => 'Vantage N430(1)',
          'category_id' => '1',
          'subcategory_id' => '1',
          'status' => 'show',
          'photo' => '1.jpg',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],
          [
          'photo_name' => 'Vantage N430(2)',
          'category_id' => '1',
          'subcategory_id' => '1',
          'status' => 'show',
          'photo' => '2.jpg',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],
          [
          'photo_name' => 'Vantage N430(3)',
          'category_id' => '1',
          'subcategory_id' => '1',
          'status' => 'show',
          'photo' => '3.jpg',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],
          [
          'photo_name' => 'Vantage N430(4)',
          'category_id' => '1',
          'subcategory_id' => '1',
          'status' => 'show',
          'photo' => '4.jpg',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],
          [
          'photo_name' => 'Vantage N430(5)',
          'category_id' => '1',
          'subcategory_id' => '1',
          'status' => 'show',
          'photo' => '1.jpg',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],
          [
          'photo_name' => 'Vantage N430(6)',
          'category_id' => '1',
          'subcategory_id' => '1',
          'status' => 'show',
          'photo' => '2.jpg',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],
          [
          'photo_name' => 'Vantage N430(7)',
          'category_id' => '1',
          'subcategory_id' => '1',
          'status' => 'show',
          'photo' => '3.jpg',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],
          [
          'photo_name' => 'Vantage N430(8)',
          'category_id' => '1',
          'subcategory_id' => '1',
          'status' => 'show',
          'photo' => '4.jpg',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],[
          'photo_name' => 'Vantage N430(9)',
          'category_id' => '1',
          'subcategory_id' => '1',
          'status' => 'show',
          'photo' => '1.jpg',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],
          [
          'photo_name' => 'Vantage N430(10)',
          'category_id' => '1',
          'subcategory_id' => '1',
          'status' => 'show',
          'photo' => '2.jpg',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],
          [
          'photo_name' => 'Vantage N430(11)',
          'category_id' => '1',
          'subcategory_id' => '1',
          'status' => 'show',
          'photo' => '3.jpg',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],
          [
          'photo_name' => 'Vantage N430(12)',
          'category_id' => '1',
          'subcategory_id' => '1',
          'status' => 'hide',
          'photo' => '4.jpg',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],
          [
          'photo_name' => 'Roadster(1)',
          'category_id' => '1',
          'subcategory_id' => '2',
          'status' => 'show',
          'photo' => '5.jpg',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],
          [
          'photo_name' => 'Roadster(2)',
          'category_id' => '1',
          'subcategory_id' => '2',
          'status' => 'show',
          'photo' => '6.jpg',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],
          [
          'photo_name' => 'Cabriolet(1)',
          'category_id' => '2',
          'subcategory_id' => '3',
          'status' => 'show',
          'photo' => '7.jpg',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],
          [
          'photo_name' => 'Cabriolet(2)',
          'category_id' => '2',
          'subcategory_id' => '3',
          'status' => 'show',
          'photo' => '8.jpg',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ],

      ]);
    }
}
