<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Wallet;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'firstname' => 'Emmanuel',
            'lastname' => 'Kolawole',
            'middlename' => 'Oluwasegun',
            'username' => 'Emmy',
            'email' => 'emmyconceptng@gmail.com',
            'address' => '30, Tunde Agbojulogun Street',
            'phone' => '08138938432',
            'city' => 'Ado Odo',
            'country' => 'Nigeria',
            'postal_code' => '112334',
            'password' => Hash::make('EmmyConcept_55555'),
        ]);

        Wallet::create([
            'wallet_address' => uniqid('Tradaxs'),
            'amount' => '500',
            'user_id' => '1',
        ]);

    }
}
