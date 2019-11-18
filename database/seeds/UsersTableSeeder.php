<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    use DisableForeignKeys;
    /**
     * Run the database seed.
     */
    public function run()
    {
        $this->disableForeignKeys();
        // Add the master administrator, user id of 1
        User::create([
            'first_name' => 'Super',
            'last_name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => 'secret',
            'confirmation_code' => md5(uniqid(mt_rand(), true)),
            'confirmed' => true,
        ]);
        $this->enableForeignKeys();
    }
}
