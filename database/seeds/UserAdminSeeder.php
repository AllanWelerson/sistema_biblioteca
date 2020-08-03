<?php

use App\Entities\Address;
use App\User;
use Illuminate\Database\Seeder;

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'name' => 'admin',
            'email' => 'admin@email.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        ];
        $user = User::create($data);
        $user->assignRole('super admin');

        $address = [
            'user_id'       =>  $user->id,
            'cep'           =>  '0000000',
            'description'   =>  '--',
            'number'        =>  '--',
            'complement'    =>  '--',
            'city'          =>  '--',
            'neighborhood'  =>  '--',
            'state'         =>  '--',
        ];

        Address::create($address);
    }
}
