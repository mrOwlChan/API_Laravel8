<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // Users
        User::create([
            'name'      => 'Teguh Wijoseno',
            'email'     => 'mr.wijoseno@gmail.com',
            'password'  => Hash::make('12345')
        ]);

        // Product
        Product::create([
            'name'          => 'Indomie Rebus Ayam Bawang',
            'price'         => 1500,
            'description'   => 'Produk indomie berupa mie instant rebus dengan perasa Ayam Bawang',
            'enable_status' => true,
            'quantity'      => 5
        ]);
    }
}
