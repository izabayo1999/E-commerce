<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
           [ 'name'=>'phone',
            'price'=>'200',
            'category'=>'Iphone',
            'description'=>'iphone 11pro  4GB RAM',
            'gallery'=>'https://images.unsplash.com/photo-1575695342320-d2d2d2f9b73f?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8c21hcnQlMjBwaG9uZXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&w=1000&q=80'
        ],
        [
            'name'=>'Headphone',
            'price'=>'200',
            'category'=>'appo',
            'description'=>'bland new oppo headphone',
            'gallery'=>'https://media.wired.com/photos/5f52a44bb555bc55dbcdf5a8/master/pass/Gear-Wireless-Bluetooth-1226031847.jpg'
        ],

           

                [
                    'name'=>'Sony Television',
                    'price'=>'200',
                    'category'=>'Televsion',
                    'description'=>'Smart tv with 32plus and much more features',
                    'gallery'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTiAEmdzCbm5m7FEtsqmJVcrldvBb8jMDQ6Aw&usqp=CAU'
                ],
                    [
                        'name'=>'PC',
                        'price'=>'200',
                        'category'=>'Computer',
                        'description'=>'with 360GB RAM',
                        'gallery'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSRbR8xoKrX3kvBXbZk581uN-C2XBkNrPesOQ&usqp=CAU' ]
                    ]
        );
    }
}
